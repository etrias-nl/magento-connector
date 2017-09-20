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

namespace Etrias\MagentoConnector\Services;

use Etrias\MagentoConnector\Adapter\AdapterInterface as MagentoAdapterInterface;
use Etrias\MagentoConnector\Exceptions\ProductNotAssignedException;
use Etrias\MagentoConnector\SoapTypes\CatalogAttributeEntity;
use Etrias\MagentoConnector\SoapTypes\CatalogAttributeOptionEntity;
use Etrias\MagentoConnector\SoapTypes\CatalogCategoryEntityCreate;
use Etrias\MagentoConnector\SoapTypes\CatalogCategoryTree;

class CatalogService
{
    /** @var MagentoAdapterInterface */
    protected $adapter;

    /** @var AuthenticationService */
    protected $authenticationService;

    /**
     * AuthenticationService constructor.
     *
     * @param MagentoAdapterInterface $adapter
     * @param AuthenticationService   $authenticationService
     */
    public function __construct(
        MagentoAdapterInterface $adapter,
        AuthenticationService $authenticationService
    ) {
        $this->adapter = $adapter;
        $this->authenticationService = $authenticationService;
    }

    public function getCurrentStoreView()
    {
        return $this->adapter->getCurrentStoreView($this->authenticationService->login());
    }

    public function setCurrentStoreView(int $storeView): int
    {
        return $this->adapter->setCurrentStoreView($this->authenticationService->login(), $storeView);
    }

    public function getCategoryTree(int $parentId = null, int $storeView = null): CatalogCategoryTree
    {
        return $this->adapter->getCategoryTree($this->authenticationService->login(), $parentId, $storeView);
    }

    public function getAssignedProducts(int $categoryId): array
    {
        return $this->adapter->getAssignedProducts($this->authenticationService->login(), $categoryId);
    }

    /**
     * @param int      $categoryId
     * @param int      $productId
     * @param int|null $position
     *
     * @throws ProductNotAssignedException
     *
     * @return bool
     */
    public function assignProduct(int $categoryId, int $productId, int $position = null): bool
    {
        return $this->adapter->assignProduct($this->authenticationService->login(), $categoryId, $productId, $position);
    }

    public function createCategory(int $parentId, CatalogCategoryEntityCreate $categoryData, string $storeView = null): int
    {
        return $this->adapter->createCategory($this->authenticationService->login(), $parentId, $categoryData, $storeView);
    }

    public function updateCategory(int $categoryId, CatalogCategoryEntityCreate $categoryData, string $storeView = null): bool
    {
        return $this->adapter->updateCategory($this->authenticationService->login(), $categoryId, $categoryData, $storeView);
    }

    public function deleteCategory(int $categoryId)
    {
        return $this->adapter->deleteCategory($this->authenticationService->login(), $categoryId);
    }

    public function getCategory(int $categoryId, string $storeView = null, array $attributes = null)
    {
        return $this->adapter->getCategory($this->authenticationService->login(), $categoryId, $storeView, $attributes);
    }

    public function getCategoriesByParent(int $parentId = null, int $websiteId = null, int $storeView = null)
    {
        return $this->adapter->getCategoriesByParent($this->authenticationService->login(), $parentId, $websiteId, $storeView);
    }

    public function moveCategory(int $categoryId, int $parentId, int $afterId = null): bool
    {
        return $this->adapter->moveCategory($this->authenticationService->login(), $categoryId, $parentId, $afterId);
    }

    public function removeProductFromCategory(int $categoryId, int $productId): bool
    {
        return $this->adapter->removeProductFromCategory($this->authenticationService->login(), $categoryId, $productId);
    }

    public function updateProductPosition(int $categoryId, int $productId, int $position): bool
    {
        return $this->adapter->updateProductPosition($this->authenticationService->login(), $categoryId, $productId, $position);
    }

    /**
     * @return CatalogAttributeEntity[]
     */
    public function getCategoryAttributes(): array
    {
        return $this->adapter->getCategoryAttributes($this->authenticationService->login());
    }

    /**
     * @param int $attributeId
     *
     * @return CatalogAttributeOptionEntity[]
     */
    public function getAttributeOptions(int $attributeId): array
    {
        return $this->adapter->getCategoryAttributeOptions($this->authenticationService->login(), $attributeId);
    }
}
