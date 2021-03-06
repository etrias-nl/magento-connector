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
use Etrias\MagentoConnector\Client\MagentoClientInterface;
use Etrias\MagentoConnector\ExceptionMap;
use Etrias\MagentoConnector\Exceptions\MagentoSoapException;
use Etrias\MagentoConnector\SoapTypes\AssociativeEntity;
use Etrias\MagentoConnector\SoapTypes\CatalogAssignedProduct;
use Etrias\MagentoConnector\SoapTypes\CatalogAttributeEntity;
use Etrias\MagentoConnector\SoapTypes\CatalogCategoryEntityCreate;
use Etrias\MagentoConnector\SoapTypes\CatalogCategoryInfo;
use Etrias\MagentoConnector\SoapTypes\CatalogCategoryTree;
use Etrias\MagentoConnector\SoapTypes\CatalogInventoryStockItemUpdateEntity;
use Etrias\MagentoConnector\SoapTypes\CatalogProductAttributeEntity;
use Etrias\MagentoConnector\SoapTypes\CatalogProductAttributeEntityToCreate;
use Etrias\MagentoConnector\SoapTypes\CatalogProductAttributeMediaCreateEntity;
use Etrias\MagentoConnector\SoapTypes\CatalogProductAttributeOptionEntityToAdd;
use Etrias\MagentoConnector\SoapTypes\CatalogProductAttributeSetEntity;
use Etrias\MagentoConnector\SoapTypes\CatalogProductCreateEntity;
use Etrias\MagentoConnector\SoapTypes\CatalogProductCustomOptionInfoEntity;
use Etrias\MagentoConnector\SoapTypes\CatalogProductCustomOptionToAdd;
use Etrias\MagentoConnector\SoapTypes\CatalogProductCustomOptionToUpdate;
use Etrias\MagentoConnector\SoapTypes\CatalogProductEntity;
use Etrias\MagentoConnector\SoapTypes\CatalogProductImageEntity;
use Etrias\MagentoConnector\SoapTypes\CatalogProductRequestAttributes;
use Etrias\MagentoConnector\SoapTypes\CatalogProductReturnEntity;
use Etrias\MagentoConnector\SoapTypes\ComplexFilter;
use Etrias\MagentoConnector\SoapTypes\CustomerAddressEntityCreate;
use Etrias\MagentoConnector\SoapTypes\CustomerAddressEntityItem;
use Etrias\MagentoConnector\SoapTypes\CustomerCustomerEntity;
use Etrias\MagentoConnector\SoapTypes\CustomerCustomerEntityToCreate;
use Etrias\MagentoConnector\SoapTypes\CustomerGroupEntity;
use Etrias\MagentoConnector\SoapTypes\Filters;
use Etrias\MagentoConnector\SoapTypes\MagentoInfoEntity;
use Etrias\MagentoConnector\SoapTypes\SalesOrderCreditmemoData;
use Etrias\MagentoConnector\SoapTypes\SalesOrderCreditmemoEntity;
use Etrias\MagentoConnector\SoapTypes\SalesOrderEntity;
use Etrias\MagentoConnector\SoapTypes\SalesOrderInvoiceEntity;
use Etrias\MagentoConnector\SoapTypes\ShoppingCartCustomerAddressEntity;
use Etrias\MagentoConnector\SoapTypes\ShoppingCartCustomerEntity;
use Etrias\MagentoConnector\SoapTypes\ShoppingCartInfoEntity;
use Etrias\MagentoConnector\SoapTypes\ShoppingCartPaymentMethodEntity;
use Etrias\MagentoConnector\SoapTypes\ShoppingCartProductEntity;
use Etrias\MagentoConnector\SoapTypes\ShoppingCartShippingMethodEntity;
use Phpro\SoapClient\Exception\SoapException;
use Phpro\SoapClient\Type\MixedResult;
use Phpro\SoapClient\Type\MultiArgumentRequest;
use Phpro\SoapClient\Type\RequestInterface;
use Phpro\SoapClient\Type\ResultInterface;
use SoapFault;

class SoapV2Adapter implements AdapterInterface
{
    /** @var MagentoClientInterface */
    protected $client;

    /** @var ExceptionMap */
    protected $exceptionMap;

    public function __construct(MagentoClientInterface $client, ExceptionMap $exceptionMap)
    {
        $this->client = $client;
        $this->exceptionMap = $exceptionMap;
    }

    /**
     * @param $functionName
     * @param RequestInterface $request
     *
     * @throws MagentoSoapException
     *
     * @return mixed
     */
    public function processRequest(string $functionName, RequestInterface $request)
    {
        try {
            $response = $this->client->call($functionName, $request);
        } catch (SoapException $exception) {
            $previous = $exception->getPrevious();
            if ($previous instanceof SoapFault) {
                $module = $this->exceptionMap->getModuleByMethodName($functionName);
                $exceptionName = $this->exceptionMap->getExceptionClassName($previous->faultcode, $module);

                /** @var MagentoSoapException $throwable */
                $throwable = new $exceptionName($previous->faultstring, (int)$previous->faultcode + 0, $exception);
                $throwable->setRequest($request);

                throw $throwable;
            }
            throw $exception;
        }

        return $this->processResponse($request, $response);
    }

    /**
     * @param RequestInterface $request
     * @param ResultInterface  $response
     *
     * @return mixed
     */
    public function processResponse(/* @scrutinizer ignore-unused */ RequestInterface $request, ResultInterface $response)
    {
        /* @var MixedResult $response */
        return $response->getResult();
    }

    public function startSession(): string
    {
        $request = new MultiArgumentRequest([]);

        return $this->processRequest(__FUNCTION__, $request);
    }

    public function endSession(string $sessionId): bool
    {
        $request = new MultiArgumentRequest([$sessionId]);

        return (bool) $this->processRequest(__FUNCTION__, $request);
    }

    public function login(string $username, string $password): string
    {
        $request = new MultiArgumentRequest([$username, $password]);

        /* @var MixedResult $response */

        return $this->processRequest(__FUNCTION__, $request);
    }

    public function resources(string $sessionId): array
    {
        $request = new MultiArgumentRequest([$sessionId]);

        return $this->processRequest(__FUNCTION__, $request);
    }

    public function globalFaults(string $sessionId): array
    {
        $request = new MultiArgumentRequest([$sessionId]);

        return $this->processRequest(__FUNCTION__, $request);
    }

    public function getStoreList(string $sessionId): array
    {
        $request = new MultiArgumentRequest([$sessionId]);

        return $this->processRequest('storeList', $request);
    }

    public function getMagentoInfo(string $sessionId): MagentoInfoEntity
    {
        $request = new MultiArgumentRequest([$sessionId]);

        return $this->processRequest('magentoInfo', $request);
    }

    public function resourceFaults(string $sessionId, string $resourceName): array
    {
        $request = new MultiArgumentRequest([$sessionId, $resourceName]);

        return $this->processRequest('resourceFaults', $request);
    }

    public function getCurrentStoreView(string $sessionId): int
    {
        $request = new MultiArgumentRequest([$sessionId]);

        return $this->processRequest('catalogCategoryCurrentStore', $request);
    }

    public function setCurrentStoreView(string $sessionId, int $storeView): int
    {
        $request = new MultiArgumentRequest([$sessionId, $storeView]);

        return $this->processRequest('catalogCategoryCurrentStore', $request);
    }

    public function getCategoryTree(string $sessionId, int $parentId = null, int $storeView = null): CatalogCategoryTree
    {
        $request = new MultiArgumentRequest([$sessionId, $parentId, $storeView]);

        return $this->processRequest('catalogCategoryTree', $request);
    }

    /**
     * @param string $sessionId
     * @param int    $categoryId
     *
     * @return CatalogAssignedProduct[]
     */
    public function getAssignedProducts(string $sessionId, int $categoryId): array
    {
        $request = new MultiArgumentRequest([$sessionId, $categoryId]);

        return $this->processRequest('catalogCategoryAssignedProducts', $request);
    }

    public function assignProduct(
        string $sessionId,
        int $categoryId,
        int $product,
        int $position = null,
        string $identifierType = 'id'
    ): bool {
        $request = new MultiArgumentRequest([$sessionId, $categoryId, $product, $position, $identifierType]);

        return $this->processRequest('catalogCategoryAssignProduct', $request);
    }

    public function createCategory(
        string $sessionId,
        int $parentId,
        CatalogCategoryEntityCreate $categoryData,
        string $storeView = null
    ): int {
        $request = new MultiArgumentRequest([$sessionId, $parentId, $categoryData, $storeView]);

        return $this->processRequest('catalogCategoryCreate', $request);
    }

    public function updateCategory(
        string $sessionId,
        int $categoryId,
        CatalogCategoryEntityCreate $categoryData,
        string $storeView = null
    ): bool {
        $request = new MultiArgumentRequest([$sessionId, $categoryId, $categoryData, $storeView]);

        return $this->processRequest('catalogCategoryUpdate', $request);
    }

    public function deleteCategory(string $sessionId, int $categoryId): bool
    {
        $request = new MultiArgumentRequest([$sessionId, $categoryId]);

        return $this->processRequest('catalogCategoryDelete', $request);
    }

    public function getCategory(
        string $sessionId,
        int $categoryId,
        string $storeView = null,
        array $attributes = null
    ): CatalogCategoryInfo {
        $request = new MultiArgumentRequest([$sessionId, $categoryId, $storeView, $attributes]);

        return $this->processRequest('catalogCategoryInfo', $request);
    }

    public function getCategoriesByParent(
        string $sessionId,
        int $parentId = null,
        int $websiteId = null,
        int $storeView = null
    ): array {
        $request = new MultiArgumentRequest([$sessionId, $websiteId, $storeView, $parentId]);

        return $this->processRequest('catalogCategoryLevel', $request);
    }

    public function moveCategory(string $sessionId, int $categoryId, int $parentId, int $afterId = null): bool
    {
        $request = new MultiArgumentRequest([$sessionId, $categoryId, $parentId, $afterId]);

        return $this->processRequest('catalogCategoryMove', $request);
    }

    public function removeProductFromCategory(
        string $sessionId,
        int $categoryId,
        int $productId,
        string $identifierType = 'id'
    ): bool {
        $request = new MultiArgumentRequest([$sessionId, $categoryId, $productId, $identifierType]);

        return $this->processRequest('catalogCategoryRemoveProduct', $request);
    }

    public function updateProductPosition(
        string $sessionId,
        int $categoryId,
        int $productId,
        int $position,
        string $identifierType = 'id'
    ): bool {
        $request = new MultiArgumentRequest([$sessionId, $categoryId, $productId, $position, $identifierType]);

        return $this->processRequest('catalogCategoryUpdateProduct', $request);
    }

    public function getCategoryAttributes(string $sessionId): array
    {
        $request = new MultiArgumentRequest([$sessionId]);

        return $this->processRequest('catalogCategoryAttributeList', $request);
    }

    public function getCategoryAttributeOptions(string $sessionId, int $attributeId): array
    {
        $request = new MultiArgumentRequest([$sessionId, $attributeId]);

        return $this->processRequest('catalogCategoryAttributeOptions', $request);
    }

    public function getProducts(string $sessionId, array $filters = null, int $storeView = null): array
    {
        $filters = new Filters(
            null,
            [new ComplexFilter(' sku', new AssociativeEntity('eq', '1003'))]
        );
        $storeView = 0;
        $request = new MultiArgumentRequest([$sessionId, $filters, $storeView]);

        return $this->processRequest('catalogProductList', $request);
    }

    public function createProduct(
        string $sessionId,
        string $productType,
        int $attributeSet,
        string $sku,
        CatalogProductCreateEntity $productData,
        int $storeView = null
    ): int {
        $request = new MultiArgumentRequest([$sessionId, $productType, $attributeSet, $sku, $productData, $storeView]);

        return $this->processRequest('catalogProductCreate', $request);
    }

    public function updateProduct(
        string $sessionId,
        string $productId,
        CatalogProductCreateEntity $productData,
        int $storeView = null,
        string $identifierType = 'id'
    ): bool {
        $request = new MultiArgumentRequest([$sessionId, $productId, $productData, $storeView, $identifierType]);

        return $this->processRequest('catalogProductUpdate', $request);
    }

    public function deleteProduct(string $sessionId, string $productId, string $identifierType = 'id'): bool
    {
        $request = new MultiArgumentRequest([$sessionId, $productId, $identifierType]);

        return (bool) $this->processRequest('catalogProductDelete', $request);
    }

    public function getSpecialPrice(
        string $sessionId,
        string $productId,
        int $storeView,
        string $identifierType = 'id'
    ): CatalogProductReturnEntity {
        $request = new MultiArgumentRequest([$sessionId, $productId, $storeView, $identifierType]);

        return $this->processRequest('catalogProductGetSpecialPrice', $request);
    }

    public function setSpecialPrice(
        string $sessionId,
        string $productId,
        float $specialPrice,
        DateTime $fromDate,
        DateTime $toDate,
        int $storeView,
        string $identifierType = 'id'
    ): bool {
        $request = new MultiArgumentRequest(
            [
                $sessionId,
                $productId,
                $specialPrice,
                $fromDate->format('Y-m-d H:i:s'),
                $toDate->format('Y-m-d H:i:s'),
                $storeView,
                $identifierType,
            ]
        );

        return (bool) $this->processRequest('catalogProductSetSpecialPrice', $request);
    }

    /**
     * @param string $sessionId
     *
     * @return CatalogProductAttributeSetEntity[]
     */
    public function getAttributeSetList(string $sessionId): array
    {
        $request = new MultiArgumentRequest([$sessionId]);

        return $this->processRequest('catalogProductAttributeSetList', $request);
    }

    /**
     * @param string                               $sessionId
     * @param string                               $productId
     * @param CatalogProductRequestAttributes|null $attributes
     * @param string|null                          $storeView
     * @param string                               $identifierType
     *
     * @return CatalogProductReturnEntity
     */
    public function getProductInfo(
        string $sessionId,
        string $productId,
        CatalogProductRequestAttributes $attributes = null,
        string $storeView = null,
        string $identifierType = ' id'
    ): CatalogProductReturnEntity {
        $request = new MultiArgumentRequest([$sessionId, $productId, $storeView, $attributes, $identifierType]);

        return $this->processRequest('catalogProductInfo', $request);
    }

    public function getListOfAdditionalAttributes(string $sessionId, string $productType, int $attributeSetId): array
    {
        $request = new MultiArgumentRequest([$sessionId, $productType, $attributeSetId]);

        return $this->processRequest('catalogProductListOfAdditionalAttributes', $request);
    }

    /**
     * @param string $sessionId
     * @param int    $attributeSetId
     *
     * @return CatalogAttributeEntity[]
     */
    public function getAttributeList(string $sessionId, int $attributeSetId): array
    {
        $request = new MultiArgumentRequest([$sessionId, $attributeSetId]);

        return $this->processRequest('catalogProductAttributeList', $request);
    }

    public function getAttributeInfo(string $sessionId, string $attributeId): CatalogProductAttributeEntity
    {
        $request = new MultiArgumentRequest([$sessionId, $attributeId]);

        return $this->processRequest('catalogProductAttributeInfo', $request);
    }

    public function getProductAttributeOptions(string $sessionId, int $attributeId, int $storeView = null): array
    {
        $request = new MultiArgumentRequest([$sessionId, $attributeId, $storeView]);

        return $this->processRequest('catalogProductAttributeOptions', $request);
    }

    public function addAttributeOption(
        string $sessionId,
        int $attributeId,
        CatalogProductAttributeOptionEntityToAdd $data
    ): bool {
        $request = new MultiArgumentRequest([$sessionId, $attributeId, $data]);

        return $this->processRequest('catalogProductAttributeAddOption', $request);
    }

    public function removeAttributeOption(string $sessionId, string $attribute, string $optionId): bool
    {
        $request = new MultiArgumentRequest([$sessionId, $attribute, $optionId]);

        return $this->processRequest('catalogProductAttributeRemoveOption', $request);
    }

    public function createAttribute(string $sessionId, CatalogProductAttributeEntityToCreate $data): int
    {
        $request = new MultiArgumentRequest([$sessionId, $data]);

        return $this->processRequest('catalogProductAttributeCreate', $request);
    }

    public function updateAttribute(
        string $sessionId,
        int $attributeId,
        CatalogProductAttributeEntityToCreate $data
    ): bool {
        $request = new MultiArgumentRequest([$sessionId, $attributeId, $data]);

        return $this->processRequest('catalogProductAttributeUpdate', $request);
    }

    public function removeAttribute(string $sessionId, string $attributeId): bool
    {
        $request = new MultiArgumentRequest([$sessionId, $attributeId]);

        return $this->processRequest('catalogProductAttributeRemove', $request);
    }

    public function getAttributeTypes(string $sessionId): array
    {
        $request = new MultiArgumentRequest([$sessionId]);

        return $this->processRequest('catalogProductAttributeTypes', $request);
    }

    public function getProductMediaTypes(string $sessionId, int $attributeSetId): array
    {
        $request = new MultiArgumentRequest([$sessionId, $attributeSetId]);

        return $this->processRequest('catalogProductAttributeMediaTypes', $request);
    }

    public function getProductImages(
        string $sessionId,
        string $productId,
        string $identifierType,
        int $storeView = null
    ): array {
        $request = new MultiArgumentRequest([$sessionId, $productId, $storeView, $identifierType]);

        return $this->processRequest('catalogProductAttributeMediaList', $request);
    }

    public function createProductImage(
        string $sessionId,
        string $productId,
        CatalogProductAttributeMediaCreateEntity $data,
        int $storeView = null,
        string $identifierType = 'id'
    ): string {
        $request = new MultiArgumentRequest([$sessionId, $productId, $data, $storeView, $identifierType]);

        return $this->processRequest('catalogProductAttributeMediaCreate', $request);
    }

    public function updateProductImage(
        string $sessionId,
        string $productId,
        string $fileName,
        CatalogProductAttributeMediaCreateEntity $data,
        int $storeView = null,
        string $identifierType = 'id'
    ): bool {
        $request = new MultiArgumentRequest([$sessionId, $productId, $fileName, $data, $storeView, $identifierType]);

        return (bool) $this->processRequest('catalogProductAttributeMediaUpdate', $request);
    }

    public function getMediaInfo(
        string $sessionId,
        string $productId,
        string $fileName,
        int $storeView = null,
        string $identifierType = null
    ): CatalogProductImageEntity {
        $request = new MultiArgumentRequest([$sessionId, $productId, $fileName, $storeView, $identifierType]);

        return $this->processRequest('catalogProductAttributeMediaInfo', $request);
    }

    public function removeProductImage(
        string $sessionId,
        string $productId,
        string $fileName,
        string $identifierType = 'id'
    ): bool {
        $request = new MultiArgumentRequest([$sessionId, $productId, $fileName, $identifierType]);

        return (bool) $this->processRequest('catalogProductAttributeMediaRemove', $request);
    }

    public function createAttributeSet(
        string $sessionId,
        string $attributeSetName,
        string $skeletonSetId
    ): int {
        $request = new MultiArgumentRequest([$sessionId, $attributeSetName, $skeletonSetId]);

        return $this->processRequest('catalogProductAttributeSetCreate', $request);
    }

    public function removeAttributeSet(
        string $sessionId,
        string $attributeSetId,
        bool $forceProductsRemove
    ): bool {
        $request = new MultiArgumentRequest([$sessionId, $attributeSetId, $forceProductsRemove]);

        return $this->processRequest('catalogProductAttributeSetRemove', $request);
    }

    public function addAttributeToSet(
        string $sessionId,
        string $attributeId,
        string $attributeSetId,
        string $attributeGroupId = null,
        int $sortOrder = null
    ): bool {
        $request = new MultiArgumentRequest([$sessionId, $attributeId, $attributeSetId, $attributeGroupId, $sortOrder]);

        return (bool) $this->processRequest('catalogProductAttributeSetAttributeAdd', $request);
    }

    public function removeAttributeFromSet(
        string $sessionId,
        string $attributeId,
        string $attributeSetId
    ): bool {
        $request = new MultiArgumentRequest([$sessionId, $attributeId, $attributeSetId]);

        return (bool) $this->processRequest('catalogProductAttributeSetAttributeRemove', $request);
    }

    public function addAttributeGroup(
        string $sessionId,
        string $attributeSetId,
        string $groupName
    ): int {
        $request = new MultiArgumentRequest([$sessionId, $attributeSetId, $groupName]);

        return $this->processRequest('catalogProductAttributeSetGroupAdd', $request);
    }

    public function removeAttributeGroup(
        string $sessionId,
        string $attributeGroupId
    ): bool {
        $request = new MultiArgumentRequest([$sessionId, $attributeGroupId]);

        return (bool) $this->processRequest('catalogProductAttributeSetGroupRemove', $request);
    }

    public function renameAttributeGroup(
        string $sessionId,
        string $attributeGroupId,
        string $attributeGroupName
    ): bool {
        $request = new MultiArgumentRequest([$sessionId, $attributeGroupId, $attributeGroupName]);

        return (bool) $this->processRequest('catalogProductAttributeSetGroupRename', $request);
    }

    public function getProductOptionTypes(
        string $sessionId
    ): array {
        $request = new MultiArgumentRequest([$sessionId]);

        return $this->processRequest('catalogProductCustomOptionTypes', $request);
    }

    public function getProductOptions(
        string $sessionId,
        string $productId,
        string $storeView = null
    ): array {
        $request = new MultiArgumentRequest([$sessionId, $productId, $storeView]);

        return $this->processRequest('catalogProductCustomOptionList', $request);
    }

    public function addProductOption(
        string $sessionId,
        string $productId,
        CatalogProductCustomOptionToAdd $data,
        string $storeView = null
    ): bool {
        $request = new MultiArgumentRequest([$sessionId, $productId, $data, $storeView]);

        return $this->processRequest('catalogProductCustomOptionAdd', $request);
    }

    public function updateProductOption(
        string $sessionId,
        string $optionId,
        CatalogProductCustomOptionToUpdate $data,
        string $storeView = null
    ): bool {
        $request = new MultiArgumentRequest([$sessionId, $optionId, $data, $storeView]);

        return $this->processRequest('catalogProductCustomOptionUpdate', $request);
    }

    public function removeProductOption(
        string $sessionId,
        string $optionId
    ): bool {
        $request = new MultiArgumentRequest([$sessionId, $optionId]);

        return $this->processRequest('catalogProductCustomOptionRemove', $request);
    }

    public function getProductOptionInfo(
        string $sessionId,
        string $optionId,
        string $storeView = null
    ): CatalogProductCustomOptionInfoEntity {
        $request = new MultiArgumentRequest([$sessionId, $optionId, $storeView]);

        return $this->processRequest('catalogProductCustomOptionInfo', $request);
    }

    public function getCatalogInventoryStockItems(
        string $sessionId,
        array $productIds
    ): array {
        $request = new MultiArgumentRequest([$sessionId, $productIds]);

        return $this->processRequest('catalogInventoryStockItemList', $request);
    }

    /**
     * @param string                                $sessionId
     * @param string                                $product
     * @param CatalogInventoryStockItemUpdateEntity $data
     *
     * @return mixed
     */
    public function updateCatalogInventoryStockData(
        string $sessionId,
        string $product,
        CatalogInventoryStockItemUpdateEntity $data
    ): bool {
        $request = new MultiArgumentRequest([$sessionId, $product, $data]);

        return (bool) $this->processRequest('catalogInventoryStockItemUpdate', $request);
    }

    public function addCommentToOrder(
        string $sessionId,
        string $orderIncrementId,
        string $status,
        string $comment = null,
        string $notify = null
    ): bool {
        $request = new MultiArgumentRequest([$sessionId, $orderIncrementId, $status, $comment, $notify]);

        return (bool) $this->processRequest('salesOrderAddComment', $request);
    }

    public function listOrders(
        string $sessionId,
        array $filters = []
    ): array {
        $request = new MultiArgumentRequest([$sessionId, $filters]);

        return $this->processRequest('salesOrderList', $request);
    }

    public function getOrderInfo(
        string $sessionId,
        string $orderIncrementId
    ): SalesOrderEntity {
        $request = new MultiArgumentRequest([$sessionId, $orderIncrementId]);

        return $this->processRequest('salesOrderInfo', $request);
    }

    public function holdOrder(
        string $sessionId,
        string $orderIncrementId
    ): bool {
        $request = new MultiArgumentRequest([$sessionId, $orderIncrementId]);

        return (bool) $this->processRequest('salesOrderHold', $request);
    }

    public function unHoldOrder(
        string $sessionId,
        string $orderIncrementId
    ): bool {
        $request = new MultiArgumentRequest([$sessionId, $orderIncrementId]);

        return (bool) $this->processRequest('salesOrderUnhold', $request);
    }

    public function cancelOrder(
        string $sessionId,
        string $orderIncrementId
    ): bool {
        $request = new MultiArgumentRequest([$sessionId, $orderIncrementId]);

        return (bool) $this->processRequest('salesOrderCancel', $request);
    }

    public function addCommentToCreditMemo(
        string $sessionId,
        string $creditMemoIncrementId,
        string $comment = null,
        int $notifyCustomer = null,
        int $includeComment = null
    ): bool {
        $request = new MultiArgumentRequest([$sessionId, $creditMemoIncrementId, $comment, $notifyCustomer, $includeComment]);

        return (bool) $this->processRequest('salesOrderCreditmemoAddComment', $request);
    }

    public function cancelCreditMemo(
        string $sessionId,
        string $creditMemoIncrementId
    ): bool {
        $request = new MultiArgumentRequest([$sessionId, $creditMemoIncrementId]);

        return (bool) $this->processRequest('salesOrderCreditmemoCancel', $request);
    }

    public function createCreditMemo(
        string $sessionId,
        string $orderIncrementId,
        SalesOrderCreditmemoData $data = null,
        string $comment = null,
        int $notifyCustomer,
        int $includeComment,
        string $refundToStoreCreditAmount
    ): string {
        $request = new MultiArgumentRequest([
            $sessionId,
            $orderIncrementId,
            $data,
            $comment,
            $notifyCustomer,
            $includeComment,
            $refundToStoreCreditAmount,
        ]);

        return $this->processRequest('salesOrderCreditmemoCreate', $request);
    }

    public function getCreditMemoInfo(
        string $sessionId,
        string $creditMemoIncrementId
    ): SalesOrderCreditmemoEntity {
        $request = new MultiArgumentRequest([$sessionId, $creditMemoIncrementId]);

        return $this->processRequest('salesOrderCreditmemoInfo', $request);
    }

    public function listCreditMemos(
        string $sessionId,
        array $filters = []
    ): array {
        $request = new MultiArgumentRequest([$sessionId, $filters]);

        return $this->processRequest('salesOrderCreditmemoList', $request);
    }

    public function addCommentToOrderInvoice(
        string $sessionId,
        string $invoiceIncrementId,
        string $comment,
        int $sendEmail,
        int $includeComment
    ): bool {
        $request = new MultiArgumentRequest([$sessionId, $invoiceIncrementId, $comment, $sendEmail, $includeComment]);

        return (bool) $this->processRequest('salesOrderInvoiceAddComment', $request);
    }

    public function cancelInvoice(
        string $sessionId,
        string $invoiceIncrementId
    ): bool {
        $request = new MultiArgumentRequest([$sessionId, $invoiceIncrementId]);

        return (bool) $this->processRequest('salesOrderInvoiceCancel', $request);
    }

    public function captureInvoice(
        string $sessionId,
        string $invoiceIncrementId
    ): bool {
        $request = new MultiArgumentRequest([$sessionId, $invoiceIncrementId]);

        return (bool) $this->processRequest('salesOrderInvoiceCapture', $request);
    }

    public function createOrderInvoice(
        string $sessionId,
        string $orderIncrementId,
        array $itemsQty = null,
        string $comment = null,
        string $sendEmail = null,
        string $includeComment = null
    ): string {
        $request = new MultiArgumentRequest([$sessionId, $orderIncrementId, $itemsQty, $comment, $sendEmail, $includeComment]);

        return $this->processRequest('salesOrderInvoiceCreate', $request);
    }

    public function getInvoiceInfo(
        string $sessionId,
        string $invoiceIncrementId
    ): SalesOrderInvoiceEntity {
        $request = new MultiArgumentRequest([$sessionId, $invoiceIncrementId]);

        return $this->processRequest('salesOrderInvoiceInfo', $request);
    }

    public function listInvoices(
        string $sessionId,
        array $filters = []
    ): array {
        $request = new MultiArgumentRequest([$sessionId, $filters]);

        return $this->processRequest('salesOrderInvoiceList', $request);
    }

    public function createShoppingCart(
        string $sessionId,
        string $storeId = null
    ): int {
        $request = new MultiArgumentRequest([$sessionId, $storeId]);

        return (int) $this->processRequest('shoppingCartCreate', $request);
    }

    public function getShoppingCartInfo(
        string $sessionId,
        int $quoteId,
        string $storeId = null
    ): ShoppingCartInfoEntity {
        $request = new MultiArgumentRequest([$sessionId, $quoteId, $storeId]);

        return $this->processRequest('shoppingCartInfo', $request);
    }

    public function getShoppingCartLicences(
        string $sessionId,
        int $quoteId,
        string $storeId = null
    ): array {
        $request = new MultiArgumentRequest([$sessionId, $quoteId, $storeId]);

        return $this->processRequest('shoppingCartLicense', $request);
    }

    public function createOrderFromCart(
        string $sessionId,
        int $quoteId,
        string $storeId = null,
        array $licenses = null
    ): int {
        $request = new MultiArgumentRequest([$sessionId, $quoteId, $storeId, $licenses]);

        return $this->processRequest('shoppingCartOrder', $request);
    }

    public function getCartTotals(
        string $sessionId,
        int $quoteId,
        string $storeId = null
    ): array {
        $request = new MultiArgumentRequest([$sessionId, $quoteId, $storeId]);

        return $this->processRequest('shoppingCartTotals', $request);
    }

    /**
     * @param string      $sessionId
     * @param int         $quoteId
     * @param string      $couponCode
     * @param string|null $storeId
     *
     * @return bool
     */
    public function addCouponToCart(
        string $sessionId,
        int $quoteId,
        string $couponCode,
        string $storeId = null
    ): bool {
        $request = new MultiArgumentRequest([$sessionId, $quoteId, $couponCode, $storeId]);

        return (bool) $this->processRequest('shoppingCartCouponAdd', $request);
    }

    /**
     * @param string      $sessionId
     * @param int         $quoteId
     * @param string|null $storeId
     *
     * @return bool
     */
    public function removeCouponFromCart(
        string $sessionId,
        int $quoteId,
        string $storeId = null
    ): bool {
        $request = new MultiArgumentRequest([$sessionId, $quoteId, $storeId]);

        return (bool) $this->processRequest('shoppingCartCouponRemove', $request);
    }

    /**
     * @param string                              $sessionId
     * @param int                                 $quoteId
     * @param ShoppingCartCustomerAddressEntity[] $data
     * @param string|null                         $storeId
     *
     * @return bool
     */
    public function setCustomerAddresses(
        string $sessionId,
        int $quoteId,
        array $data,
        string $storeId = null
    ): bool {
        $request = new MultiArgumentRequest([$sessionId, $quoteId, $data, $storeId]);

        return (bool) $this->processRequest('shoppingCartCustomerAddresses', $request);
    }

    /**
     * @param string                     $sessionId
     * @param int                        $quoteId
     * @param ShoppingCartCustomerEntity $data
     * @param string|null                $storeId
     *
     * @return bool
     */
    public function setCustomerInfo(
        string $sessionId,
        int $quoteId,
        ShoppingCartCustomerEntity $data,
        string $storeId = null
    ): bool {
        $request = new MultiArgumentRequest([$sessionId, $quoteId, $data, $storeId]);

        return (bool) $this->processRequest('shoppingCartCustomerAddresses', $request);
    }

    /**
     * @param string      $sessionId
     * @param int         $quoteId
     * @param string|null $storeId
     *
     * @return ShoppingCartPaymentMethodEntity[]
     */
    public function getPaymentMethods(
        string $sessionId,
        int $quoteId,
        string $storeId = null
    ): array {
        $request = new MultiArgumentRequest([$sessionId, $quoteId, $storeId]);

        return $this->processRequest('shoppingCartPaymentList', $request);
    }

    /**
     * @param string                          $sessionId
     * @param int                             $quoteId
     * @param ShoppingCartPaymentMethodEntity $method
     * @param string|null                     $storeId
     *
     * @return bool
     */
    public function setPaymentMethod(
        string $sessionId,
        int $quoteId,
        ShoppingCartPaymentMethodEntity $method,
        string $storeId = null
    ): bool {
        $request = new MultiArgumentRequest([$sessionId, $quoteId, $method, $storeId]);

        return (bool) $this->processRequest('shoppingCartPaymentMethod', $request);
    }

    /**
     * @param string                      $sessionId
     * @param int                         $quoteId
     * @param ShoppingCartProductEntity[] $products
     * @param string|null                 $storeId
     *
     * @return bool
     */
    public function addProductsToCart(
        string $sessionId,
        int $quoteId,
        array $products,
        string $storeId = null
    ): bool {
        $request = new MultiArgumentRequest([$sessionId, $quoteId, $products, $storeId]);

        return (bool) $this->processRequest('shoppingCartProductAdd', $request);
    }

    /**
     * @param string      $sessionId
     * @param int         $quoteId
     * @param string|null $storeId
     *
     * @return CatalogProductEntity[]
     */
    public function getProductsInCart(
        string $sessionId,
        int $quoteId,
        string $storeId = null
    ): array {
        $request = new MultiArgumentRequest([$sessionId, $quoteId, $storeId]);

        return $this->processRequest('shoppingCartProductList', $request);
    }

    /**
     * @param string                      $sessionId
     * @param int                         $quoteId
     * @param ShoppingCartProductEntity[] $products
     * @param string|null                 $storeId
     *
     * @return bool
     */
    public function moveCartProductsToCustomerQuote(
        string $sessionId,
        int $quoteId,
        array $products,
        string $storeId = null
    ): bool {
        $request = new MultiArgumentRequest([$sessionId, $quoteId, $products, $storeId]);

        return (bool) $this->processRequest('shoppingCartProductMoveToCustomerQuote', $request);
    }

    /**
     * @param string                      $sessionId
     * @param int                         $quoteId
     * @param ShoppingCartProductEntity[] $products
     * @param string|null                 $storeId
     *
     * @return bool
     */
    public function removeProductsFromCart(
        string $sessionId,
        int $quoteId,
        array $products,
        string $storeId = null
    ): bool {
        $request = new MultiArgumentRequest([$sessionId, $quoteId, $products, $storeId]);

        return (bool) $this->processRequest('shoppingCartProductRemove', $request);
    }

    /**
     * @param string                      $sessionId
     * @param int                         $quoteId
     * @param ShoppingCartProductEntity[] $products
     * @param string|null                 $storeId
     *
     * @return bool
     */
    public function updateProductsInCart(
        string $sessionId,
        int $quoteId,
        array $products,
        string $storeId = null
    ): bool {
        $request = new MultiArgumentRequest([$sessionId, $quoteId, $products, $storeId]);

        return (bool) $this->processRequest('shoppingCartProductUpdate', $request);
    }

    /**
     * @param string      $sessionId
     * @param int         $quoteId
     * @param string|null $storeId
     *
     * @return ShoppingCartShippingMethodEntity[]
     */
    public function getShippingMethods(
        string $sessionId,
        int $quoteId,
        string $storeId = null
    ): array {
        $request = new MultiArgumentRequest([$sessionId, $quoteId, $storeId]);

        return $this->processRequest('shoppingCartShippingList', $request);
    }

    /**
     * @param string      $sessionId
     * @param int         $quoteId
     * @param string      $shippingMethodCode
     * @param string|null $storeId
     *
     * @return bool
     */
    public function setShippingMethod(
        string $sessionId,
        int $quoteId,
        string $shippingMethodCode,
        string $storeId = null
    ): bool {
        $request = new MultiArgumentRequest([$sessionId, $quoteId, $shippingMethodCode, $storeId]);

        return (bool) $this->processRequest('shoppingCartShippingMethod', $request);
    }

    /**
     * @param string $sessionId
     * @return CustomerGroupEntity[]
     */
    public function getCustomerGroups(
        string $sessionId
    ): array {
        $request = new MultiArgumentRequest([$sessionId]);

        return $this->processRequest('customerGroupList', $request);
    }

    /**
     * @param string $sessionId
     * @param CustomerCustomerEntityToCreate $data
     * @return int
     */
    public function createCustomer(
        string $sessionId,
        CustomerCustomerEntityToCreate $data
    ): int {
        $request = new MultiArgumentRequest([$sessionId, $data]);

        return (int) $this->processRequest('customerCustomerCreate', $request);
    }

    /**
     * @param string $sessionId
     * @param int $customerId
     * @return bool
     */
    public function deleteCustomer(
        string $sessionId,
        int $customerId
    ): bool {
        $request = new MultiArgumentRequest([$sessionId, $customerId]);

        return (bool) $this->processRequest('customerCustomerDelete', $request);
    }

    /**
     * @param string $sessionId
     * @param int $customerId
     * @return CustomerCustomerEntity
     */
    public function getCustomerInfo(
        string $sessionId,
        int $customerId
    ): CustomerCustomerEntity {
        $request = new MultiArgumentRequest([$sessionId, $customerId]);

        return $this->processRequest('customerCustomerInfo', $request);

    }

    /**
     * @param string $sessionId
     * @param array|null $filters
     * @return CustomerCustomerEntity[]
     */
    public function getCustomers(
        string $sessionId,
        array $filters = null
    ): array {
        $request = new MultiArgumentRequest([$sessionId, $filters]);

        return $this->processRequest('customerCustomerList', $request);
    }

    /**
     * @param string $sessionId
     * @param int $customerId
     * @param CustomerCustomerEntityToCreate $data
     * @return bool
     */
    public function updateCustomer(
        string $sessionId,
        int $customerId,
        CustomerCustomerEntityToCreate $data
    ): bool {
        $request = new MultiArgumentRequest([$sessionId, $customerId, $data]);

        return (bool) $this->processRequest('customerCustomerUpdate', $request);
    }

    /**
     * @param string $sessionId
     * @param int $customerId
     * @param CustomerAddressEntityCreate $data
     * @return int
     */
    public function createCustomerAddress(
        string $sessionId,
        int $customerId,
        CustomerAddressEntityCreate $data
    ): int {
        $request = new MultiArgumentRequest([$sessionId, $customerId, $data]);

        return (int) $this->processRequest('customerAddressCreate', $request);
    }

    /**
     * @param string $sessionId
     * @param int $addressId
     * @return bool
     */
    public function deleteCustomerAddress(
        string $sessionId,
        int $addressId
    ): bool {
        $request = new MultiArgumentRequest([$sessionId, $addressId]);

        return (bool) $this->processRequest('customerAddressDelete', $request);
    }

    /**
     * @param string $sessionId
     * @param int $addressId
     * @return CustomerAddressEntityItem
     */
    public function getCustomerAddressInfo(
        string $sessionId,
        int $addressId
    ): CustomerAddressEntityItem {
        $request = new MultiArgumentRequest([$sessionId, $addressId]);

        return $this->processRequest('customerAddressDelete', $request);
    }

    /**
     * @param string $sessionId
     * @param int $customerId
     * @return CustomerAddressEntityItem[]
     */
    public function getCustomerAddresses(
        string $sessionId,
        int $customerId
    ): array {
        $request = new MultiArgumentRequest([$sessionId, $customerId]);

        return $this->processRequest('customerAddressList', $request);
    }

    /**
     * @param string $sessionId
     * @param int $addressId
     * @param CustomerAddressEntityCreate $data
     * @return bool
     */
    public function updateCustomerAddress(
        string $sessionId,
        int $addressId,
        CustomerAddressEntityCreate $data
    ): bool {
        $request = new MultiArgumentRequest([$sessionId, $addressId, $data]);

        return $this->processRequest('customerAddressUpdate', $request);
    }

}
