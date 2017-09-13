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

use Etrias\MagentoConnector\Client\MagentoClientInterface;
use Etrias\MagentoConnector\ExceptionMap;
use Etrias\MagentoConnector\Exceptions\MagentoSoapException;
use Etrias\MagentoConnector\SoapTypes\CatalogAssignedProduct;
use Etrias\MagentoConnector\SoapTypes\CatalogCategoryEntityCreate;
use Etrias\MagentoConnector\SoapTypes\CatalogCategoryTree;
use Etrias\MagentoConnector\SoapTypes\CatalogCategoryInfo;
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
    public function processRequest($functionName, RequestInterface $request)
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
    public function processResponse(RequestInterface $request, ResultInterface $response)
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

    public function resourceFaults(string $sessionId, string $resourceName): array
    {
        $request = new MultiArgumentRequest([$sessionId, $resourceName]);

        return $this->processRequest(__FUNCTION__, $request);
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
     * @param int $categoryId
     * @return CatalogAssignedProduct[]
     */
    public function getAssignedProducts(string $sessionId, int $categoryId): array
    {
        $request = new MultiArgumentRequest([$sessionId, $categoryId]);

        return $this->processRequest('catalogCategoryAssignedProducts', $request);
    }

    public function assignProduct(string $sessionId, int $categoryId, int $product, int $position = null, string $identifierType = 'id'): bool
    {
        $request = new MultiArgumentRequest([$sessionId, $categoryId, $product, $position, $identifierType]);

        return $this->processRequest('catalogCategoryAssignProduct', $request);
    }

    public function createCategory(string $sessionId, int $parentId, CatalogCategoryEntityCreate $categoryData, string $storeView = null): int
    {
        $request = new MultiArgumentRequest([$sessionId, $parentId, $categoryData, $storeView]);

        return $this->processRequest('catalogCategoryCreate', $request);
    }

    public function updateCategory(string $sessionId, int $categoryId, CatalogCategoryEntityCreate $categoryData, string $storeView = null): bool
    {
        $request = new MultiArgumentRequest([$sessionId, $categoryId, $categoryData, $storeView]);

        return $this->processRequest('catalogCategoryUpdate', $request);
    }

    public function deleteCategory(string $sessionId, int $categoryId): bool
    {
        $request = new MultiArgumentRequest([$sessionId, $categoryId]);

        return $this->processRequest('catalogCategoryDelete', $request);
    }

    public function getCategory(string $sessionId, int $categoryId, string $storeView = null, array $attributes = null): CatalogCategoryInfo
    {
        $request = new MultiArgumentRequest([$sessionId, $categoryId, $storeView, $attributes]);

        return $this->processRequest('catalogCategoryInfo', $request);
    }

    public function getCategoriesByParent(string $sessionId, int $parentId = null, int $websiteId = null, int $storeView = null): array
    {
        $request = new MultiArgumentRequest([$sessionId, $websiteId, $storeView, $parentId]);

        return $this->processRequest('catalogCategoryLevel', $request);
    }

    public function moveCategory(string $sessionId, int $categoryId, int $parentId, int $afterId = null): bool
    {
        $request = new MultiArgumentRequest([$sessionId, $categoryId, $parentId, $afterId]);

        return $this->processRequest('catalogCategoryMove', $request);
    }

    public function removeProductFromCategory(string $sessionId, int $categoryId, int $productId, string $identifierType = 'id'): bool
    {
        $request = new MultiArgumentRequest([$sessionId, $categoryId, $productId, $identifierType]);

        return $this->processRequest('catalogCategoryRemoveProduct', $request);
    }

    public function updateProductPosition(string $sessionId, int $categoryId, int $productId, int $position, string $identifierType = 'id'): bool
    {
        $request = new MultiArgumentRequest([$sessionId, $categoryId, $productId, $position, $identifierType]);

        return $this->processRequest('catalogCategoryUpdateProduct', $request);
    }

    public function getCategoryAttributes(string $sessionId): array
    {
        $request = new MultiArgumentRequest([$sessionId]);

        return $this->processRequest('catalogCategoryAttributeList', $request);
    }
}
