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

namespace Etrias\MagentoConnector\Adapter;

use DateTime;
use Etrias\MagentoConnector\SoapTypes\ApiEntity;
use Etrias\MagentoConnector\SoapTypes\CatalogAssignedProduct;
use Etrias\MagentoConnector\SoapTypes\CatalogAttributeEntity;
use Etrias\MagentoConnector\SoapTypes\CatalogAttributeOptionEntity;
use Etrias\MagentoConnector\SoapTypes\CatalogCategoryEntityCreate;
use Etrias\MagentoConnector\SoapTypes\CatalogCategoryEntityNoChildren;
use Etrias\MagentoConnector\SoapTypes\CatalogCategoryInfo;
use Etrias\MagentoConnector\SoapTypes\CatalogCategoryTree;
use Etrias\MagentoConnector\SoapTypes\CatalogProductAttributeEntity;
use Etrias\MagentoConnector\SoapTypes\CatalogProductAttributeEntityToCreate;
use Etrias\MagentoConnector\SoapTypes\CatalogProductAttributeOptionEntityToAdd;
use Etrias\MagentoConnector\SoapTypes\CatalogProductAttributeSetEntity;
use Etrias\MagentoConnector\SoapTypes\CatalogProductCreateEntity;
use Etrias\MagentoConnector\SoapTypes\CatalogProductReturnEntity;
use Etrias\MagentoConnector\SoapTypes\MagentoInfoEntity;
use Etrias\MagentoConnector\SoapTypes\StoreEntity;

interface AdapterInterface
{
    /**
     * @param string $username
     * @param string $password
     *
     * @return string SessionID
     */
    public function login(string $username, string $password): string;

    /**
     * @return string SessionId
     */
    public function startSession(): string;

    /**
     * @param string $sessionId
     *
     * @return bool
     */
    public function endSession(string $sessionId): bool;

    /**
     * @param string $sessionId
     *
     * @return ApiEntity[]
     */
    public function resources(string $sessionId): array;

    public function globalFaults(string $sessionId): array;

    /**
     * @param string $sessionId
     * @return storeEntity[]
     */
    public function getStoreList(string $sessionId): array;

    public function getMagentoInfo(string $sessionId): MagentoInfoEntity;

    public function resourceFaults(string $sessionId, string $resourceName): array;

    public function getCurrentStoreView(string $sessionId): int;

    public function setCurrentStoreView(string $sessionId, int $storeView): int;

    public function getCategoryTree(string $sessionId, int $parentId = null, int $storeView = null): CatalogCategoryTree;

    /**
     * @param string $sessionId
     * @param int $categoryId
     * @return CatalogAssignedProduct[]
     */
    public function getAssignedProducts(string $sessionId, int $categoryId): array;

    public function assignProduct(string $sessionId, int $categoryId, int $product, int $position = null, string $identifierType = 'id'): bool;

    public function createCategory(string $sessionId, int $parentId, CatalogCategoryEntityCreate $categoryData, string $storeView = null): int;

    public function updateCategory(string $sessionId, int $categoryId, CatalogCategoryEntityCreate $categoryData, string $storeView = null): bool;

    public function deleteCategory(string $sessionId, int $categoryId): bool;

    public function getCategory(string $sessionId, int $categoryId, string $storeView = null, array $attributes = null): CatalogCategoryInfo;

    /**
     * @param string $sessionId
     * @param int|null $parentId
     * @param int|null $websiteId
     * @param int|null $storeView
     * @return CatalogCategoryEntityNoChildren[]
     */
    public function getCategoriesByParent(string $sessionId, int $parentId = null, int $websiteId = null, int $storeView = null): array;

    public function moveCategory(string $sessionId, int $categoryId, int $parentId, int $afterId = null): bool;

    public function removeProductFromCategory(string $sessionId, int $categoryId, int $productId, string $identifierType = 'id'): bool;

    public function updateProductPosition(string $sessionId, int $categoryId, int $productId, int $position, string $identifierType = 'id'): bool;

    /**
     * @param string $sessionId
     * @return CatalogAttributeEntity[]
     */
    public function getCategoryAttributes(string $sessionId): array;

    public function getCategoryAttributeOptions(string $sessionId, int $attributeId): array;

    /**
     * @param string $sessionId
     * @param array $filters
     * @param int|null $storeView
     * @return array
     */
    public function getProducts(string $sessionId, array $filters, int $storeView = null): array;

    public function createProduct(string $sessionId, string $productType, int $attributeSet, string $sku, CatalogProductCreateEntity $productData, int $storeView): int;

    public function updateProduct(string $sessionId, string $productId, CatalogProductCreateEntity $productData, int $storeView, string $identifierType = 'id'): bool;

    public function deleteProduct(string $sessionId, string $productId, string $identifierType = 'id'): bool;

    /**
     * @param string $sessionId
     * @param string $productId
     * @param int $storeView
     * @param string $identifierType
     * @return CatalogProductReturnEntity
     */
    public function getSpecialPrice(string $sessionId, string $productId, int $storeView, string $identifierType = 'id'): CatalogProductReturnEntity;

    /**
     * @param string $sessionId
     * @param string $productId
     * @param float $specialPrice
     * @param DateTime $fromDate
     * @param DateTime $toDate
     * @param int $storeView
     * @param string $identifierType
     * @return bool
     */
    public function setSpecialPrice(
        string $sessionId,
        string $productId,
        float $specialPrice,
        DateTime $fromDate,
        DateTime $toDate,
        int $storeView,
        string $identifierType = 'id'
    ): bool;

    /**
     * @param string $sessionId
     * @return CatalogProductAttributeSetEntity[]
     */
    public function getAttributeSetList(string $sessionId): array;

    public function getProductInfo(string $sessionId, string $productId, array $attributes = null, string $storeView = null, string $identifierType = ' id'): CatalogProductReturnEntity;

    /**
     * @param string $sessionId
     * @param string $productType
     * @param int $attributeSetId
     * @return CatalogAttributeEntity[]
     */
    public function getListOfAdditionalAttributes(string $sessionId, string $productType, int $attributeSetId): array;

    /**
     * @param string $sessionId
     * @param int $attributeSetId
     * @return CatalogAttributeEntity[]
     */
    public function getAttributeList(string $sessionId, int $attributeSetId): array;

    public function getAttributeInfo(string $sessionId, string $attributeId): CatalogProductAttributeEntity;

    /**
     * @param string $sessionId
     * @param int $attributeId
     * @param int|null $storeView
     * @return CatalogAttributeOptionEntity[]
     */
    public function getProductAttributeOptions(string $sessionId, int $attributeId, int $storeView = null): array;

    /**
     * @param string $sessionId
     * @param int $attributeId
     * @param CatalogProductAttributeOptionEntityToAdd $data
     * @return bool
     */
    public function addAttributeOption(string $sessionId, int $attributeId, CatalogProductAttributeOptionEntityToAdd $data): bool;

    public function removeAttributeOption(string $sessionId, string $attribute, string $optionId): bool;

    public function createAttribute(string $sessionId, CatalogProductAttributeEntityToCreate $data): int;

    public function removeAttribute(string $sessionId, string $attributeId): bool;

    /**
     * @param string $sessionId
     * @return CatalogAttributeOptionEntity[]
     */
    public function getAttributeTypes(string $sessionId): array;
}
