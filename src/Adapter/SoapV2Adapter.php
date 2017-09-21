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
use Etrias\MagentoConnector\SoapTypes\CatalogProductImageEntity;
use Etrias\MagentoConnector\SoapTypes\CatalogProductReturnEntity;
use Etrias\MagentoConnector\SoapTypes\ComplexFilter;
use Etrias\MagentoConnector\SoapTypes\Filters;
use Etrias\MagentoConnector\SoapTypes\MagentoInfoEntity;
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
                $throwable = new $exceptionName($previous->faultstring, $previous->faultcode + 0, $exception);
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

        return $this->processRequest(__FUNCTION__, $request);
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
     * @param string      $sessionId
     * @param string      $productId
     * @param array|null  $attributes
     * @param string|null $storeView
     * @param string      $identifierType
     *
     * @return CatalogProductReturnEntity
     */
    public function getProductInfo(
        string $sessionId,
        string $productId,
        array $attributes = null,
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
     * @param string $sessionId
     * @param string $product
     * @param CatalogInventoryStockItemUpdateEntity $data
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
}
