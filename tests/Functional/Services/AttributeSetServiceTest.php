<?php

declare(strict_types=1);

/*
 * This file is part of PHP CS Fixer.
 *
 * (c) Fabien Potencier <fabien@symfony.com>
 *     Dariusz Rumiński <dariusz.ruminski@gmail.com>
 *
 * This source file is subject to the MIT license that is bundled
 * with this source code in the file LICENSE.
 */

namespace Tests\Etrias\MagentoConnector\Functional\Services;

use Etrias\MagentoConnector\Services\AttributeSetService;
use Etrias\MagentoConnector\Services\GeneralService;
use Etrias\MagentoConnector\Services\ProductAttributeService;
use Etrias\MagentoConnector\Services\ProductService;
use Etrias\MagentoConnector\SoapTypes\Attribute;
use Etrias\MagentoConnector\SoapTypes\CatalogProductAttributeEntityToCreate;
use Etrias\MagentoConnector\SoapTypes\CatalogProductAttributeFrontendLabelEntity;
use Etrias\MagentoConnector\SoapTypes\CatalogProductAttributeSetEntity;

/**
 * @coversNothing
 */
class AttributeSetServiceTest extends AbstractServiceTest
{
    use RandomizeTrait;
    /**
     * @var AttributeSetService
     */
    protected $service;

    public function setUp()
    {
        parent::setUp();
        $this->service = new AttributeSetService($this->adapter, $this->authenticationService);
        $this->productService = new ProductService($this->adapter, $this->authenticationService);
        $this->productAttributeService = new ProductAttributeService($this->adapter, $this->authenticationService);
        $this->generalService = new GeneralService($this->adapter, $this->authenticationService);
    }

    public function testGetCurrentStoreView()
    {
        $storeview = $this->service->getCurrentStoreView();
        $this->assertSame(0, $storeview);
    }

    public function testSetCurrentStoreView()
    {
        $storeView = $this->getRandomStoreView()->getStoreId();
        $selectedStoreView = $this->service->setCurrentStoreView($storeView);
        $this->assertSame($storeView, $selectedStoreView);
    }

    public function testGetAttributeSetList()
    {
        $attributeSets = $this->service->getAttributeSetList();
        $attributeSet = reset($attributeSets);

        $this->assertInstanceOf(CatalogProductAttributeSetEntity::class, $attributeSet);
    }

    public function testCreateAndRemoveAttributeSet()
    {
        $attributeSets = $this->service->getAttributeSetList();
        $attributeSet = reset($attributeSets);

        $attributeSetId = $this->service->createAttributeSet('test-attribute-set', $attributeSet->getSetId());

        $this->assertInternalType('numeric', $attributeSetId);

        $this->assertTrue(
            $this->service->removeAttributeSet($attributeSetId)
        );
    }

    public function testAddAttributeToSet()
    {
        $attributeId = $this->productAttributeService->createAttribute(
            new CatalogProductAttributeEntityToCreate(
                'attribute_code',
                Attribute::FRONTEND_TYPE_SELECT,
                [new CatalogProductAttributeFrontendLabelEntity(0, 'frontend-label')]
            )
        );

        $attributeSet = $this->getRandomAttributeSet();

        $this->assertTrue(
            $this->service->addAttributeToSet($attributeId, $attributeSet->getSetId())
        );

        $this->service->removeAttributeFromSet($attributeId, $attributeSet->getSetId());
        $this->productAttributeService->removeAttributeById($attributeId);
    }

    public function testRemoveAttributeFromSet()
    {
        $attributeId = $this->productAttributeService->createAttribute(
            new CatalogProductAttributeEntityToCreate(
                'attribute_code',
                Attribute::FRONTEND_TYPE_SELECT,
                [new CatalogProductAttributeFrontendLabelEntity(0, 'frontend-label')]
            )
        );

        $attributeSet = $this->getRandomAttributeSet();

        $this->service->addAttributeToSet($attributeId, $attributeSet->getSetId());

        $this->assertTrue(
            $this->service->removeAttributeFromSet($attributeId, $attributeSet->getSetId())
        );

        $this->productAttributeService->removeAttributeById($attributeId);
    }

    public function testCreateAndRemoveAttributeGroup()
    {
        $attributeSet = $this->getRandomAttributeSet();

        $groupId = $this->service->addAttributeGroup($attributeSet->getSetId(), 'new-attribute-group');
        $this->assertInternalType('numeric', $groupId);

        $this->assertTrue(
            $this->service->removeAttributeGroup($groupId)
        );
    }

    public function testRenameGroupName()
    {
        $attributeSet = $this->getRandomAttributeSet();
        $groupId = $this->service->addAttributeGroup($attributeSet->getSetId(), 'new-attribute-group');

        $this->assertTrue(
            $this->service->renameAttributeGroup($groupId, 'new-group-name')
        );
        $this->service->removeAttributeGroup($groupId);
    }
}
