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
use Etrias\MagentoConnector\SoapTypes\CatalogInventoryStockItemEntity;
use Etrias\MagentoConnector\SoapTypes\CatalogInventoryStockItemUpdateEntity;
use Etrias\MagentoConnector\SoapTypes\CatalogProductAttributeEntity;
use Etrias\MagentoConnector\SoapTypes\CatalogProductAttributeEntityToCreate;
use Etrias\MagentoConnector\SoapTypes\CatalogProductAttributeMediaCreateEntity;
use Etrias\MagentoConnector\SoapTypes\CatalogProductAttributeMediaTypeEntity;
use Etrias\MagentoConnector\SoapTypes\CatalogProductAttributeOptionEntityToAdd;
use Etrias\MagentoConnector\SoapTypes\CatalogProductAttributeSetEntity;
use Etrias\MagentoConnector\SoapTypes\CatalogProductCreateEntity;
use Etrias\MagentoConnector\SoapTypes\CatalogProductCustomOptionInfoEntity;
use Etrias\MagentoConnector\SoapTypes\CatalogProductCustomOptionListEntity;
use Etrias\MagentoConnector\SoapTypes\CatalogProductCustomOptionToAdd;
use Etrias\MagentoConnector\SoapTypes\CatalogProductCustomOptionToUpdate;
use Etrias\MagentoConnector\SoapTypes\CatalogProductCustomOptionTypesEntity;
use Etrias\MagentoConnector\SoapTypes\CatalogProductImageEntity;
use Etrias\MagentoConnector\SoapTypes\CatalogProductRequestAttributes;
use Etrias\MagentoConnector\SoapTypes\CatalogProductReturnEntity;
use Etrias\MagentoConnector\SoapTypes\MagentoInfoEntity;
use Etrias\MagentoConnector\SoapTypes\SalesOrderEntity;
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
     *
     * @return storeEntity[]
     */
    public function getStoreList(string $sessionId): array;

    public function getMagentoInfo(string $sessionId): MagentoInfoEntity;

    public function resourceFaults(string $sessionId, string $resourceName): array;

    public function getCurrentStoreView(string $sessionId): int;

    public function setCurrentStoreView(string $sessionId, int $storeView): int;

    public function getCategoryTree(
        string $sessionId,
        int $parentId = null,
        int $storeView = null
    ): CatalogCategoryTree;

    /**
     * @param string $sessionId
     * @param int    $categoryId
     *
     * @return CatalogAssignedProduct[]
     */
    public function getAssignedProducts(string $sessionId, int $categoryId): array;

    public function assignProduct(
        string $sessionId,
        int $categoryId,
        int $product,
        int $position = null,
        string $identifierType = 'id'
    ): bool;

    public function createCategory(
        string $sessionId,
        int $parentId,
        CatalogCategoryEntityCreate $categoryData,
        string $storeView = null
    ): int;

    public function updateCategory(
        string $sessionId,
        int $categoryId,
        CatalogCategoryEntityCreate $categoryData,
        string $storeView = null
    ): bool;

    public function deleteCategory(string $sessionId, int $categoryId): bool;

    public function getCategory(
        string $sessionId,
        int $categoryId,
        string $storeView = null,
        array $attributes = null
    ): CatalogCategoryInfo;

    /**
     * @param string   $sessionId
     * @param int|null $parentId
     * @param int|null $websiteId
     * @param int|null $storeView
     *
     * @return CatalogCategoryEntityNoChildren[]
     */
    public function getCategoriesByParent(
        string $sessionId,
        int $parentId = null,
        int $websiteId = null,
        int $storeView = null
    ): array;

    public function moveCategory(string $sessionId, int $categoryId, int $parentId, int $afterId = null): bool;

    public function removeProductFromCategory(
        string $sessionId,
        int $categoryId,
        int $productId,
        string $identifierType = 'id'
    ): bool;

    public function updateProductPosition(
        string $sessionId,
        int $categoryId,
        int $productId,
        int $position,
        string $identifierType = 'id'
    ): bool;

    /**
     * @param string $sessionId
     *
     * @return CatalogAttributeEntity[]
     */
    public function getCategoryAttributes(string $sessionId): array;

    public function getCategoryAttributeOptions(string $sessionId, int $attributeId): array;

    /**
     * @param string   $sessionId
     * @param array    $filters
     * @param int|null $storeView
     *
     * @return array
     */
    public function getProducts(string $sessionId, array $filters, int $storeView = null): array;

    public function createProduct(
        string $sessionId,
        string $productType,
        int $attributeSet,
        string $sku,
        CatalogProductCreateEntity $productData,
        int $storeView = null
    ): int;

    public function updateProduct(
        string $sessionId,
        string $productId,
        CatalogProductCreateEntity $productData,
        int $storeView = null,
        string $identifierType = 'id'
    ): bool;

    public function deleteProduct(string $sessionId, string $productId, string $identifierType = 'id'): bool;

    /**
     * @param string $sessionId
     * @param string $productId
     * @param int    $storeView
     * @param string $identifierType
     *
     * @return CatalogProductReturnEntity
     */
    public function getSpecialPrice(
        string $sessionId,
        string $productId,
        int $storeView,
        string $identifierType = 'id'
    ): CatalogProductReturnEntity;

    /**
     * @param string   $sessionId
     * @param string   $productId
     * @param float    $specialPrice
     * @param DateTime $fromDate
     * @param DateTime $toDate
     * @param int      $storeView
     * @param string   $identifierType
     *
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
     *
     * @return CatalogProductAttributeSetEntity[]
     */
    public function getAttributeSetList(string $sessionId): array;

    public function getProductInfo(
        string $sessionId,
        string $productId,
        CatalogProductRequestAttributes $attributes = null,
        string $storeView = null,
        string $identifierType = ' id'
    ): CatalogProductReturnEntity;

    /**
     * @param string $sessionId
     * @param string $productType
     * @param int    $attributeSetId
     *
     * @return CatalogAttributeEntity[]
     */
    public function getListOfAdditionalAttributes(string $sessionId, string $productType, int $attributeSetId): array;

    /**
     * @param string $sessionId
     * @param int    $attributeSetId
     *
     * @return CatalogAttributeEntity[]
     */
    public function getAttributeList(string $sessionId, int $attributeSetId): array;

    public function getAttributeInfo(string $sessionId, string $attributeId): CatalogProductAttributeEntity;

    /**
     * @param string   $sessionId
     * @param int      $attributeId
     * @param int|null $storeView
     *
     * @return CatalogAttributeOptionEntity[]
     */
    public function getProductAttributeOptions(string $sessionId, int $attributeId, int $storeView = null): array;

    /**
     * @param string                                   $sessionId
     * @param int                                      $attributeId
     * @param CatalogProductAttributeOptionEntityToAdd $data
     *
     * @return bool
     */
    public function addAttributeOption(
        string $sessionId,
        int $attributeId,
        CatalogProductAttributeOptionEntityToAdd $data
    ): bool;

    public function removeAttributeOption(string $sessionId, string $attribute, string $optionId): bool;

    public function createAttribute(string $sessionId, CatalogProductAttributeEntityToCreate $data): int;

    public function updateAttribute(
        string $sessionId,
        int $attributeId,
        CatalogProductAttributeEntityToCreate $data
    ): bool;

    public function removeAttribute(string $sessionId, string $attributeId): bool;

    /**
     * @param string $sessionId
     *
     * @return CatalogAttributeOptionEntity[]
     */
    public function getAttributeTypes(string $sessionId): array;

    /**
     * @param string $sessionId
     * @param int    $attributeSetId
     *
     * @return CatalogProductAttributeMediaTypeEntity[]
     */
    public function getProductMediaTypes(string $sessionId, int $attributeSetId): array;

    /**
     * @param string $sessionId
     * @param string $productId
     * @param int    $storeView
     * @param string $identifierType
     *
     * @return CatalogProductImageEntity[]
     */
    public function getProductImages(
        string $sessionId,
        string $productId,
        string $identifierType,
        int $storeView = null
    ): array;

    /**
     * @param string                                   $sessionId
     * @param string                                   $productId
     * @param CatalogProductAttributeMediaCreateEntity $data
     * @param string                                   $identifierType
     * @param int|null                                 $storeView
     *
     * @return string
     */
    public function createProductImage(
        string $sessionId,
        string $productId,
        CatalogProductAttributeMediaCreateEntity $data,
        int $storeView = null,
        string $identifierType = 'id'
    ): string;

    public function updateProductImage(
        string $sessionId,
        string $productId,
        string $fileName,
        CatalogProductAttributeMediaCreateEntity $data,
        int $storeView = null,
        string $identifierType = 'id'
    ): bool;

    public function getMediaInfo(
        string $sessionId,
        string $productId,
        string $fileName,
        int $storeView = null,
        string $identifierType = 'id'
    ): CatalogProductImageEntity;

    public function removeProductImage(
        string $sessionId,
        string $productId,
        string $fileName,
        string $identifierType = 'id'
    ): bool;

    public function createAttributeSet(
        string $sessionId,
        string $attributeSetName,
        string $skeletonSetId
    ): int;

    public function removeAttributeSet(
        string $sessionId,
        string $attributeSetId,
        bool $forceProductsRemove
    ): bool;

    public function addAttributeToSet(
        string $sessionId,
        string $attributeId,
        string $attributeSetId,
        string $attributeGroupId = null,
        int $sortOrder = null
    ): bool;

    public function removeAttributeFromSet(
        string $sessionId,
        string $attributeId,
        string $attributeSetId
    ): bool;

    public function addAttributeGroup(
        string $sessionId,
        string $attributeSetId,
        string $groupName
    ): int;

    public function removeAttributeGroup(
        string $sessionId,
        string $attributeGroupId
    ): bool;

    public function renameAttributeGroup(
        string $sessionId,
        string $attributeGroupId,
        string $attributeGroupName
    ): bool;

    /**
     * @param string $sessionId
     *
     * @return CatalogProductCustomOptionTypesEntity[]
     */
    public function getProductOptionTypes(
        string $sessionId
    ): array;

    /**
     * @param string      $sessionId
     * @param string      $productId
     * @param string|null $storeView
     *
     * @return CatalogProductCustomOptionListEntity[]
     */
    public function getProductOptions(
        string $sessionId,
        string $productId,
        string $storeView = null
    ): array;

    /**
     * @param string                          $sessionId
     * @param string                          $productId
     * @param CatalogProductCustomOptionToAdd $data
     * @param string|null                     $storeView
     *
     * @return bool
     */
    public function addProductOption(
        string $sessionId,
        string $productId,
        CatalogProductCustomOptionToAdd $data,
        string $storeView = null
    ): bool;

    public function updateProductOption(
        string $sessionId,
        string $optionId,
        CatalogProductCustomOptionToUpdate $data,
        string $storeView = null
    ): bool;

    public function removeProductOption(
        string $sessionId,
        string $optionId
    ): bool;

    public function getProductOptionInfo(
        string $sessionId,
        string $optionId,
        string $storeView = null
    ): CatalogProductCustomOptionInfoEntity;

    /**
     * @param string $sessionId
     * @param array $productIds
     * @return CatalogInventoryStockItemEntity[]
     */
    public function getCatalogInventoryStockItems(
        string $sessionId,
        array $productIds
    ): array;

    /**
     * @param string $sessionId
     * @param string $product
     * @param CatalogInventoryStockItemUpdateEntity $data
     * @return mixed
     */
    public function updateCatalogInventoryStockData(
        string $sessionId,
        string $product,
        CatalogInventoryStockItemUpdateEntity $data
    ): bool;

    /**
     * @param string $sessionId
     * @param string $orderIncrementId
     * @param string $status
     * @param string|null $comment
     * @param string|null $notify
     * @return bool
     */
    public function addCommentToOrder(
        string $sessionId,
        string $orderIncrementId,
        string $status,
        string $comment = null,
        string $notify = null
    ): bool;

    /**
     * @param string $sessionId
     * @param array $filters
     * @return array
     */
    public function listOrders(
        string $sessionId,
        array $filters = []
    ): array;

    /**
     * @param string $sessionId
     * @param string $orderIncrementId
     * @return SalesOrderEntity
     */
    public function getOrderInfo(
        string $sessionId,
        string $orderIncrementId
    ): SalesOrderEntity;

    /**
     * @param string $sessionId
     * @param string $orderIncrementId
     * @return bool
     */
    public function holdOrder(
        string $sessionId,
        string $orderIncrementId
    ): bool;

    /**
     * @param string $sessionId
     * @param string $orderIncrementId
     * @return bool
     */
    public function unHoldOrder(
        string $sessionId,
        string $orderIncrementId
    ): bool;

    /**
     * @param string $sessionId
     * @param string $orderIncrementId
     * @return bool
     */
    public function cancelOrder(
        string $sessionId,
        string $orderIncrementId
    ): bool;
}
