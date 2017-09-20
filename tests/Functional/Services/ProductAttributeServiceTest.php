<?php

declare(strict_types = 1);

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

use Etrias\MagentoConnector\Services\GeneralService;
use Etrias\MagentoConnector\Services\ProductAttributeService;
use Etrias\MagentoConnector\Services\ProductService;
use Etrias\MagentoConnector\SoapTypes\Attribute;
use Etrias\MagentoConnector\SoapTypes\CatalogAttributeEntity;
use Etrias\MagentoConnector\SoapTypes\CatalogAttributeOptionEntity;
use Etrias\MagentoConnector\SoapTypes\CatalogProductAttributeEntity;
use Etrias\MagentoConnector\SoapTypes\CatalogProductAttributeEntityToCreate;
use Etrias\MagentoConnector\SoapTypes\CatalogProductAttributeFrontendLabelEntity;
use Etrias\MagentoConnector\SoapTypes\CatalogProductAttributeOptionEntityToAdd;
use Etrias\MagentoConnector\SoapTypes\CatalogProductAttributeOptionLabelEntity;

/**
 * @coversNothing
 */
class ProductAttributeServiceTest extends AbstractServiceTest
{
    use RandomizeTrait;

    /**
     * @var ProductAttributeService
     */
    protected $service;

    public function setUp()
    {
        parent::setUp();
        $this->service = new ProductAttributeService($this->adapter, $this->authenticationService);
        $this->productAttributeService = $this->service;
        $this->productService = new ProductService($this->adapter, $this->authenticationService);
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

    public function testGetAttributeList()
    {
        $attributeSet = $this->getRandomAttributeSet();

        $attributes = $this->service->getAttributeList($attributeSet->getSetId());
        $this->assertInstanceOf(CatalogAttributeEntity::class, reset($attributes));
    }

    public function testGetAttributeInfoById()
    {
        $attribute = $this->getRandomAttribute();

        $attributeInfo = $this->service->getAttributeInfoById($attribute->getAttributeId());

        $this->assertInstanceOf(CatalogProductAttributeEntity::class, $attributeInfo);
    }

    public function testGetAttributeOptions()
    {
        $attribute = $this->getRandomAttribute('select');

        $attributeOptions = $this->service->getAttributeOptions($attribute->getAttributeId());

        $this->assertInstanceOf(CatalogAttributeOptionEntity::class, reset($attributeOptions));
    }

    public function testAddAttributeOption()
    {
        $attribute = $this->getRandomAttribute('select');

        $this->assertTrue(
            $this->service->addAttributeOption($attribute->getAttributeId(),
           new CatalogProductAttributeOptionEntityToAdd([
               new CatalogProductAttributeOptionLabelEntity([0], 'labelValue'),
           ],
           0)
        )
        );
    }

    public function testRemoveAttributeOption()
    {
//        $attribute = $this->getRandomAttribute('select');
//
//        $this->service->addAttributeOption($attribute->getAttributeId(),
//            new CatalogProductAttributeOptionEntityToAdd([
//                new CatalogProductAttributeOptionLabelEntity([0], 'labelValue')
//            ],
//            0)
//        );
//
//        $attributeOptions = $this->service->getAttributeOptions($attribute->getAttributeId(), 0);
//        /** @var catalogAttributeOptionEntity $attributeOption */
//        $attributeOption = reset($attributeOptions);
//
//        $this->service->removeAttributeOption($attribute->getAttributeId(), $attributeOption->g);
    }

    public function testCreateAttribute()
    {
        $attributeId = $this->service->createAttribute(
            new CatalogProductAttributeEntityToCreate(
                'attribute_code',
                Attribute::FRONTEND_TYPE_SELECT,
                [new CatalogProductAttributeFrontendLabelEntity(0, 'frontend-label')]
            )
        );

        $this->assertInternalType('numeric', $attributeId);

        $this->service->removeAttributeById($attributeId);
    }

    public function testUpdateAttribute()
    {
        $attributeId = $this->service->createAttribute(
            new CatalogProductAttributeEntityToCreate(
                'attribute_code',
                Attribute::FRONTEND_TYPE_SELECT,
                [new CatalogProductAttributeFrontendLabelEntity(0, 'frontend-label')]
            )
        );

        $this->assertTrue($this->service->updateAttribute($attributeId, new CatalogProductAttributeEntityToCreate(
            'attribute_code_updated',
            Attribute::FRONTEND_TYPE_SELECT,
            [new CatalogProductAttributeFrontendLabelEntity(0, 'frontend-label-updated')]
        ))
        );

        $this->service->removeAttributeById($attributeId);
    }

    public function testRemoveAttribute()
    {
        $attributeId = $this->service->createAttribute(
            new CatalogProductAttributeEntityToCreate(
                'attribute_code',
                Attribute::FRONTEND_TYPE_SELECT,
                [new CatalogProductAttributeFrontendLabelEntity(0, 'frontend-label')]
            )
        );

        $this->assertTrue($this->service->removeAttributeById($attributeId));
    }

    public function testGetAttributeTypes()
    {
        $attributeTypes = $this->service->getAttributeTypes();
        $this->assertInstanceOf(CatalogAttributeOptionEntity::class, reset($attributeTypes));
    }
}
