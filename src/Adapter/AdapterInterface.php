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
use Etrias\MagentoConnector\SoapTypes\CatalogProductEntity;
use Etrias\MagentoConnector\SoapTypes\CatalogProductImageEntity;
use Etrias\MagentoConnector\SoapTypes\CatalogProductRequestAttributes;
use Etrias\MagentoConnector\SoapTypes\CatalogProductReturnEntity;
use Etrias\MagentoConnector\SoapTypes\MagentoInfoEntity;
use Etrias\MagentoConnector\SoapTypes\SalesOrderCreditmemoData;
use Etrias\MagentoConnector\SoapTypes\SalesOrderCreditmemoEntity;
use Etrias\MagentoConnector\SoapTypes\SalesOrderEntity;
use Etrias\MagentoConnector\SoapTypes\SalesOrderInvoiceEntity;
use Etrias\MagentoConnector\SoapTypes\ShoppingCartCustomerAddressEntity;
use Etrias\MagentoConnector\SoapTypes\ShoppingCartCustomerEntity;
use Etrias\MagentoConnector\SoapTypes\ShoppingCartInfoEntity;
use Etrias\MagentoConnector\SoapTypes\ShoppingCartLicenseEntity;
use Etrias\MagentoConnector\SoapTypes\ShoppingCartPaymentMethodEntity;
use Etrias\MagentoConnector\SoapTypes\ShoppingCartProductEntity;
use Etrias\MagentoConnector\SoapTypes\ShoppingCartShippingMethodEntity;
use Etrias\MagentoConnector\SoapTypes\ShoppingCartTotalsEntity;
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

    /**
     * @param string $sessionId
     * @param string $creditMemoIncrementId
     * @param string|null $comment
     * @param int|null $notifyCustomer
     * @param int|null $includeComment
     * @return bool
     */
    public function addCommentToCreditMemo(
        string $sessionId,
        string $creditMemoIncrementId,
        string $comment = null,
        int $notifyCustomer = null,
        int $includeComment = null
    ): bool;

    /**
     * @param string $sessionId
     * @param string $orderIncrementId
     * @param SalesOrderCreditmemoData|null $data
     * @param string|null $comment
     * @param int $notifyCustomer
     * @param int $includeComment
     * @param string $refundToStoreCreditAmount
     * @return string
     */
    public function createCreditMemo(
        string $sessionId,
        string $orderIncrementId,
        SalesOrderCreditmemoData $data = null,
        string $comment = null,
        int $notifyCustomer,
        int $includeComment,
        string $refundToStoreCreditAmount
    ): string;

    /**
     * @param string $sessionId
     * @param string $creditMemoIncrementId
     * @return bool
     */
    public function cancelCreditMemo(
        string $sessionId,
        string $creditMemoIncrementId
    ): bool;

    /**
     * @param string $sessionId
     * @param string $creditMemoIncrementId
     * @return SalesOrderCreditmemoEntity
     */
    public function getCreditMemoInfo(
        string $sessionId,
        string $creditMemoIncrementId
    ): SalesOrderCreditmemoEntity;

    /**
     * @param string $sessionId
     * @param array $filters
     * @return SalesOrderCreditmemoEntity[]
     */
    public function listCreditMemos(
        string $sessionId,
        array $filters = []
    ): array;

    /**
     * @param string $sessionId
     * @param string $invoiceIncrementId
     * @param string $comment
     * @param int $sendEmail
     * @param int $includeComment
     * @return bool
     */
    public function addCommentToOrderInvoice(
        string $sessionId,
        string $invoiceIncrementId,
        string $comment,
        int $sendEmail,
        int $includeComment
    ): bool;

    /**
     * @param string $sessionId
     * @param string $orderIncrementId
     * @param array|null $itemsQty
     * @param string|null $comment
     * @param string|null $sendEmail
     * @param string|null $includeComment
     * @return string
     */
    public function createOrderInvoice(
        string $sessionId,
        string $orderIncrementId,
        array $itemsQty = null,
        string $comment = null,
        string $sendEmail = null,
        string $includeComment = null
    ): string;

    /**
     * @param string $sessionId
     * @param array $filters
     * @return SalesOrderInvoiceEntity[]
     */
    public function listInvoices(
        string $sessionId,
        array $filters = []
    ): array;

    /**
     * @param string $sessionId
     * @param string $invoiceIncrementId
     * @return SalesOrderInvoiceEntity
     */
    public function getInvoiceInfo(
        string $sessionId,
        string $invoiceIncrementId
    ): SalesOrderInvoiceEntity;

    /**
     * @param string $sessionId
     * @param string $invoiceIncrementId
     * @return bool
     */
    public function cancelInvoice(
        string $sessionId,
        string $invoiceIncrementId
    ): bool;

    /**
     * @param string $sessionId
     * @param string $invoiceIncrementId
     * @return bool
     */
    public function captureInvoice(
        string $sessionId,
        string $invoiceIncrementId
    ): bool;

    /**
     * @param string $sessionId
     * @param string|null $storeId
     * @return int Cart(quote) id
     */
    public function createShoppingCart(
        string $sessionId,
        string $storeId = null
    ): int;

    /**
     * @param string $sessionId
     * @param int $quoteId
     * @param string|null $storeId
     * @return ShoppingCartInfoEntity
     */
    public function getShoppingCartInfo(
        string $sessionId,
        int $quoteId,
        string $storeId = null
    ): ShoppingCartInfoEntity;

    /**
     * @param string $sessionId
     * @param int $quoteId
     * @param string|null $storeId
     * @return ShoppingCartLicenseEntity[]
     */
    public function getShoppingCartLicences(
        string $sessionId,
        int $quoteId,
        string $storeId = null
    ): array;

    /**
     * @param string $sessionId
     * @param int $quoteId
     * @param string|null $storeId
     * @param array|null $licenses
     * @return int Order id
     */
    public function createOrderFromCart(
        string $sessionId,
        int $quoteId,
        string $storeId = null,
        array $licenses = null
    ): int;

    /**
     * @param string $sessionId
     * @param int $quoteId
     * @param string|null $storeId
     * @return ShoppingCartTotalsEntity[]
     */
    public function getCartTotals(
        string $sessionId,
        int $quoteId,
        string $storeId = null
    ): array;

    /**
     * @param string $sessionId
     * @param int $quoteId
     * @param string $couponCode
     * @param string|null $storeId
     * @return bool
     */
    public function addCouponToCart(
        string $sessionId,
        int $quoteId,
        string $couponCode,
        string $storeId = null
    ): bool;

    /**
     * @param string $sessionId
     * @param int $quoteId
     * @param string|null $storeId
     * @return bool
     */
    public function removeCouponFromCart(
        string $sessionId,
        int $quoteId,
        string $storeId = null
    ): bool;

    /**
     * @param string $sessionId
     * @param int $quoteId
     * @param ShoppingCartCustomerAddressEntity[] $data
     * @param string|null $storeId
     * @return bool
     */
    public function setCustomerAddresses(
        string $sessionId,
        int $quoteId,
        array $data,
        string $storeId = null
    ): bool;

    /**
     * @param string $sessionId
     * @param int $quoteId
     * @param ShoppingCartCustomerEntity $data
     * @param string|null $storeId
     * @return bool
     */
    public function setCustomerInfo(
        string $sessionId,
        int $quoteId,
        ShoppingCartCustomerEntity $data,
        string $storeId = null
    ): bool;

    /**
     * @param string $sessionId
     * @param int $quoteId
     * @param string|null $storeId
     * @return ShoppingCartPaymentMethodEntity[]
     */
    public function getPaymentMethods(
        string $sessionId,
        int $quoteId,
        string $storeId = null
    ): array;

    /**
     * @param string $sessionId
     * @param int $quoteId
     * @param ShoppingCartPaymentMethodEntity $method
     * @param string|null $storeId
     * @return bool
     */
    public function setPaymentMethod(
        string $sessionId,
        int $quoteId,
        ShoppingCartPaymentMethodEntity $method,
        string $storeId = null
    ): bool;

    /**
     * @param string $sessionId
     * @param int $quoteId
     * @param ShoppingCartProductEntity[] $products
     * @param string|null $storeId
     * @return bool
     */
    public function addProductsToCart(
        string $sessionId,
        int $quoteId,
        array $products,
        string $storeId = null
    ): bool;

    /**
     * @param string $sessionId
     * @param int $quoteId
     * @param string|null $storeId
     * @return CatalogProductEntity[]
     */
    public function getProductsInCart(
        string $sessionId,
        int $quoteId,
        string $storeId = null
    ): array;

    /**
     * @param string $sessionId
     * @param int $quoteId
     * @param ShoppingCartProductEntity[] $products
     * @param string|null $storeId
     * @return bool
     */
    public function moveCartProductsToCustomerQuote(
        string $sessionId,
        int $quoteId,
        array $products,
        string $storeId = null
    ): bool;

    /**
     * @param string $sessionId
     * @param int $quoteId
     * @param ShoppingCartProductEntity[] $products
     * @param string|null $storeId
     * @return bool
     */
    public function removeProductsFromCart(
        string $sessionId,
        int $quoteId,
        array $products,
        string $storeId = null
    ): bool;

    /**
     * @param string $sessionId
     * @param int $quoteId
     * @param ShoppingCartProductEntity[] $products
     * @param string|null $storeId
     * @return bool
     */
    public function updateProductsInCart(
        string $sessionId,
        int $quoteId,
        array $products,
        string $storeId = null
    ): bool;

    /**
     * @param string $sessionId
     * @param int $quoteId
     * @param string|null $storeId
     * @return ShoppingCartShippingMethodEntity[]
     */
    public function getShippingMethods(
        string $sessionId,
        int $quoteId,
        string $storeId = null
    ): array;

    /**
     * @param string $sessionId
     * @param int $quoteId
     * @param string $shippingMethodCode
     * @param string|null $storeId
     * @return bool
     */
    public function setShippingMethod(
        string $sessionId,
        int $quoteId,
        string $shippingMethodCode,
        string $storeId = null
    ): bool;
}
