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
use Etrias\MagentoConnector\Services\ProductOptionService;
use Etrias\MagentoConnector\Services\ProductService;
use Etrias\MagentoConnector\SoapTypes\CatalogProductCustomOptionAdditionalFieldsEntity;
use Etrias\MagentoConnector\SoapTypes\CatalogProductCustomOptionInfoEntity;
use Etrias\MagentoConnector\SoapTypes\CatalogProductCustomOptionListEntity;
use Etrias\MagentoConnector\SoapTypes\CatalogProductCustomOptionToAdd;
use Etrias\MagentoConnector\SoapTypes\CatalogProductCustomOptionToUpdate;
use Etrias\MagentoConnector\SoapTypes\CatalogProductCustomOptionTypesEntity;

/**
 * @coversNothing
 */
class ProductOptionServiceTest extends AbstractServiceTest
{
    use RandomizeTrait;
    /**
     * @var ProductOptionService
     */
    protected $service;

    public function setUp()
    {
        parent::setUp();
        $this->service = new ProductOptionService($this->adapter, $this->authenticationService);
        $this->productService = new ProductService($this->adapter, $this->authenticationService);
        $this->productAttributeService = new ProductAttributeService($this->adapter, $this->authenticationService);
        $this->generalService = new GeneralService($this->adapter, $this->authenticationService);
    }

    public function testGetOptionTypes()
    {
        $optionTypes = $this->service->getOptionTypes();
        $this->assertInstanceOf(CatalogProductCustomOptionTypesEntity::class, reset($optionTypes));
    }

    public function testAddAndGetAndRemoveOptions()
    {
        $productId = $this->createProduct();

        $additionalField = new CatalogProductCustomOptionAdditionalFieldsEntity(
            'test',
            '10.00',
            'fixed',
            'custom_sku',
            '0'
        );
        $type = 'field';

        $this->assertTrue(
            $this->service->addProductOption($productId,
                new CatalogProductCustomOptionToAdd(
                    'custom text filed option title',
                    $type,
                    0,
                    [
                        $additionalField,
                    ]
                )
            )
        );

        $options = $this->service->getOptions($productId);
        /**
         * @var CatalogProductCustomOptionListEntity
         */
        $option = reset($options);

        $this->assertInstanceOf(CatalogProductCustomOptionListEntity::class, $option);

        $this->assertSame($additionalField->getTitle(), $option->getTitle());
        $this->assertSame($additionalField->getSortOrder(), $option->getSortOrder());
        $this->assertSame($type, $option->getType());

        $this->assertTrue(
            $this->service->removeProductOption($option->getOptionId())
        );

        $this->deleteProduct($productId);
    }

    public function testGetInfoAndUpdate()
    {
        $productId = $this->createProduct();

        $additionalField = new CatalogProductCustomOptionAdditionalFieldsEntity(
            'test',
            '10.00',
            'fixed',
            'custom_sku',
            '0'
        );
        $type = 'field';

        $this->service->addProductOption($productId,
            new CatalogProductCustomOptionToAdd(
                'custom text filed option title',
                $type,
                0,
                [
                    $additionalField,
                ]
            )
        );

        $options = $this->service->getOptions($productId);
        /**
         * @var CatalogProductCustomOptionListEntity
         */
        $option = reset($options);

        $productOption = $this->service->getInfo($option->getOptionId());

        $this->assertInstanceOf(CatalogProductCustomOptionInfoEntity::class, $productOption);

        $this->assertTrue(
            $this->service->updateProductOption($option->getOptionId(),
                new CatalogProductCustomOptionToUpdate(
                    'title-updated',
                    $type,
                    '0',
                    [
                        $additionalField,
                    ]
                )
            )
        );

        $this->deleteProduct($productId);
    }
}
