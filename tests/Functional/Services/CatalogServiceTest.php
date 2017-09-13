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

use Etrias\MagentoConnector\Exceptions\StoreViewNotFoundException;
use Etrias\MagentoConnector\Services\CatalogService;
use Etrias\MagentoConnector\SoapTypes\CatalogAssignedProduct;
use Etrias\MagentoConnector\SoapTypes\CatalogAttributeEntity;
use Etrias\MagentoConnector\SoapTypes\CatalogCategoryEntityCreate;
use Etrias\MagentoConnector\SoapTypes\CatalogCategoryEntityNoChildren;
use Etrias\MagentoConnector\SoapTypes\CatalogCategoryInfo;
use Etrias\MagentoConnector\SoapTypes\CatalogCategoryTree;


class CatalogServiceTest extends AbstractServiceTest
{
    /**
     * @var CatalogService
     */
    protected $service;

    public function setUp()
    {
        parent::setUp();
        $this->service = new CatalogService($this->adapter, $this->authenticationService);
    }

    public function testGetCurrentStoreView()
    {
        $storeview = $this->service->getCurrentStoreView();
        $this->assertEquals(0, $storeview);
    }

    public function testSetCurrentStoreView()
    {
        $storeView = 0;
        $selectedStoreView = $this->service->setCurrentStoreView($storeView);
        $this->assertEquals($storeView, $selectedStoreView);
    }

    public function testSetInvalidStoreView()
    {
        $this->expectException(StoreViewNotFoundException::class);
        $storeView = 99999;
        $this->service->setCurrentStoreView($storeView);
    }

    public function testGetCategoryTree()
    {
        $categoryTree = $this->service->getCategoryTree();
        $this->assertInstanceOf(CatalogCategoryTree::class, $categoryTree);
    }

    public function testGetAssignedProducts()
    {
        $categoryTree = $this->service->getCategoryTree();
        $category = $categoryTree->getChildren()[array_rand($categoryTree->getChildren(), 1)];

        $products = $this->service->getAssignedProducts($category->getCategoryId());
        $this->assertInstanceOf(CatalogAssignedProduct::class, reset($products));
    }

    public function testAssignProduct()
    {
        $categoryTree = $this->service->getCategoryTree();
        $category = $categoryTree->getChildren()[array_rand($categoryTree->getChildren(), 1)];

        $this->assertTrue ($this->service->assignProduct($category->getCategoryId(), 80025));
    }


    public function testCreateAndDeleteCategory()
    {
        $categoryData = new CatalogCategoryEntityCreate(
            'test',
            false,
            true
        );

        $categoryId = $this->service->createCategory(1505, $categoryData);
        $this->assertTrue(is_numeric($categoryId));

        $deleted = $this->service->deleteCategory($categoryId);
        $this->assertTrue($deleted);
    }

    public function testUpdateCategory()
    {
        $categoryData = new CatalogCategoryEntityCreate(
            'test',
            false,
            true
        );

        $categoryUpdated = $this->service->updateCategory(1505, $categoryData);
        $this->assertTrue($categoryUpdated);
    }

    public function testGetCategory()
    {
        $categoryInfo = $this->service->getCategory(1);
        $this->assertInstanceOf(CatalogCategoryInfo::class, $categoryInfo);
    }

    public function testGetCategoriesByParent()
    {
        $categories = $this->service->getCategoriesByParent(1505);
        $this->assertInstanceOf(CatalogCategoryEntityNoChildren::class, reset($products));
    }

    public function testMoveCategory()
    {
        $result = $this->service->moveCategory(8421, 1506);
        $this->assertTrue($result);
    }

    public function testRemoveProductFromCategory()
    {
        $categoryTree = $this->service->getCategoryTree();
        $category = $categoryTree->getChildren()[array_rand($categoryTree->getChildren(), 1)];

        $this->assertTrue ($this->service->assignProduct($category->getCategoryId(), 80025));

        $this->assertTrue($this->service->removeProductFromCategory($category->getCategoryId(), 80025));
    }

    public function testUpdateProductPosition()
    {
        $categoryTree = $this->service->getCategoryTree();
        $category = $categoryTree->getChildren()[array_rand($categoryTree->getChildren(), 1)];

        $this->assertTrue($this->service->assignProduct($category->getCategoryId(), 80025));
        $this->assertTrue($this->service->updateProductPosition($category->getCategoryId(), 80025, 3));

        $this->service->removeProductFromCategory($category->getCategoryId(), 80025);
    }

    public function testGetCategoryAttributes()
    {
        $attributes = $this->service->getCategoryAttributes();

        $this->assertInstanceOf(CatalogAttributeEntity::class, reset($attributes));
    }

}
