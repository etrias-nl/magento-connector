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

use DateTime;
use Etrias\MagentoConnector\Services\GeneralService;
use Etrias\MagentoConnector\Services\ProductService;
use Etrias\MagentoConnector\SoapTypes\CatalogAttributeEntity;
use Etrias\MagentoConnector\SoapTypes\CatalogProductAttributeSetEntity;
use Etrias\MagentoConnector\SoapTypes\CatalogProductCreateEntity;
use Etrias\MagentoConnector\SoapTypes\CatalogProductReturnEntity;

/**
 * @coversNothing
 */
class ProductServiceTest extends AbstractServiceTest
{
    use RandomizeTrait;
    /**
     * @var ProductService
     */
    protected $service;

    public function setUp()
    {
        parent::setUp();
        $this->service = new ProductService($this->adapter, $this->authenticationService);
        $this->productService = $this->service;
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

    public function testGetProducts()
    {
        $attributeSets = $this->service->getAttributeSetList();
        $attributeSet = reset($attributeSets);

        $productType = 'simple';
        $sku = '1003';
        $storeView = $this->getRandomStoreView()->getStoreId();
        $productData = new CatalogProductCreateEntity();

        $entityId = $this->service->createProduct($productType, $attributeSet->getSetId(), $sku, $productData, $storeView);

        $this->assertInternalType('numeric', $entityId);

        $products = $this->service->getProducts([
            [
                'sku' => ['eq' => '1003'],
            ],
        ]);

        $this->assertTrue($this->service->deleteProductById($entityId));
    }

    public function testCreateProduct()
    {
        $attributeSets = $this->service->getAttributeSetList();
        $attributeSet = reset($attributeSets);

        $productType = 'simple';
        $sku = '1003';
        $storeView = $this->getRandomStoreView()->getStoreId();
        $productData = new CatalogProductCreateEntity();

        $entityId = $this->service->createProduct($productType, $attributeSet->getSetId(), $sku, $productData, $storeView);

        $this->assertInternalType('numeric', $entityId);

        $this->assertTrue($this->service->deleteProductById($entityId));
    }

    public function testUpdateProductById()
    {
        $attributeSets = $this->service->getAttributeSetList();
        $attributeSet = reset($attributeSets);

        $productType = 'simple';
        $sku = '1003';
        $storeView = $this->getRandomStoreView()->getStoreId();
        $productData = new CatalogProductCreateEntity();

        $entityId = $this->service->createProduct($productType, $attributeSet->getSetId(), $sku, $productData, $storeView);

        $this->assertTrue($this->service->updateProductById($entityId, $productData->setName($productData->getName().'-updated'), $storeView));

        $this->service->deleteProductById($entityId);
    }

    public function testUpdateProductBySku()
    {
        $attributeSets = $this->service->getAttributeSetList();
        $attributeSet = reset($attributeSets);

        $productType = 'simple';
        $sku = '1003';
        $storeView = $this->getRandomStoreView()->getStoreId();
        $productData = new CatalogProductCreateEntity();

        $entityId = $this->service->createProduct($productType, $attributeSet->getSetId(), $sku, $productData, $storeView);

        $this->assertTrue($this->service->updateProductBySku($sku, $productData->setName($productData->getName().'-updated'), $storeView));

        $this->service->deleteProductById($entityId);
    }

    public function testDeleteProductById()
    {
        $attributeSets = $this->service->getAttributeSetList();
        $attributeSet = reset($attributeSets);

        $productType = 'simple';
        $sku = '1003';
        $storeView = $this->getRandomStoreView()->getStoreId();
        $productData = new CatalogProductCreateEntity();

        $entityId = $this->service->createProduct($productType, $attributeSet->getSetId(), $sku, $productData, $storeView);

        $this->assertInternalType('numeric', $entityId);

        $this->assertTrue($this->service->deleteProductById($entityId));
    }

    public function testDeleteProductBySku()
    {
        $attributeSets = $this->service->getAttributeSetList();
        $attributeSet = reset($attributeSets);

        $productType = 'simple';
        $sku = '1003';
        $storeView = $this->getRandomStoreView()->getStoreId();
        $productData = new CatalogProductCreateEntity();

        $entityId = $this->service->createProduct($productType, $attributeSet->getSetId(), $sku, $productData, $storeView);

        $this->assertInternalType('numeric', $entityId);

        $this->assertTrue($this->service->deleteProductBySku($sku));
    }

    public function testSetAndGetSpecialPriceById()
    {
        $productType = 'simple';
        $sku = '1003';

        $storeView = $this->getRandomStoreView()->getStoreId();

        $attributeSets = $this->service->getAttributeSetList();
        $attributeSet = reset($attributeSets);

        $productData = new CatalogProductCreateEntity();

        $entityId = $this->service->createProduct($productType, $attributeSet->getSetId(), $sku, $productData, $storeView);

        $specialPrice = random_int(0, 9999) / 100;
        $specialPriceFrom = $this->getRandomDate(new DateTime('now'), new DateTime('+ 1 week'));
        $specialPriceTo = $this->getRandomDate($specialPriceFrom, new DateTime('+ 1 week'));

        $setSpecialPriceResult = $this->service->setSpecialPriceById($entityId, $specialPrice, $specialPriceFrom, $specialPriceTo, $storeView);

        $this->assertTrue($setSpecialPriceResult);

        $productEntity = $this->service->getSpecialPriceById($entityId, $storeView);

        $this->assertInstanceOf(CatalogProductReturnEntity::class, $productEntity);

        $this->service->deleteProductBySku($sku);
    }

    public function testSetAndGetSpecialPriceBySku()
    {
        $productType = 'simple';
        $sku = '1003';

        $storeView = $this->getRandomStoreView()->getStoreId();

        $attributeSets = $this->service->getAttributeSetList();
        $attributeSet = reset($attributeSets);

        $productData = new CatalogProductCreateEntity();

        $this->service->createProduct($productType, $attributeSet->getSetId(), $sku, $productData, $storeView);

        $specialPrice = random_int(0, 9999) / 100;
        $specialPriceFrom = $this->getRandomDate(new DateTime('now'), new DateTime('+ 1 week'));
        $specialPriceTo = $this->getRandomDate($specialPriceFrom, new DateTime('+ 1 week'));

        $setSpecialPriceResult = $this->service->setSpecialPriceBySku($sku, $specialPrice, $specialPriceFrom, $specialPriceTo, $storeView);

        $this->assertTrue($setSpecialPriceResult);

        $productEntity = $this->service->getSpecialPriceBySku($sku, $storeView);

        $this->assertInstanceOf(CatalogProductReturnEntity::class, $productEntity);

        $this->service->deleteProductBySku($sku);
    }

    public function testGetProductInfo()
    {
        $productType = 'simple';
        $sku = '1003';

        $storeView = 0;

        $attributeSets = $this->service->getAttributeSetList();
        $attributeSet = reset($attributeSets);

        $productData = new CatalogProductCreateEntity();

        $entityId = $this->service->createProduct($productType, $attributeSet->getSetId(), $sku, $productData, $storeView);

        $product = $this->service->getProductInfoById($entityId);

        $this->assertInstanceOf(CatalogProductReturnEntity::class, $product);

        $this->service->deleteProductById($entityId);
    }

    public function testGetListOfAdditionalAttributes()
    {
        $attributeSets = $this->service->getAttributeSetList();
        $attributeSet = $attributeSets[array_rand($attributeSets, 1)];

        $attributes = $this->service->getListOfAdditionalAttributes('simple', $attributeSet->getSetId());
        $attribute = reset($attributes);

        $this->assertInstanceOf(CatalogAttributeEntity::class, $attribute);
    }
}
