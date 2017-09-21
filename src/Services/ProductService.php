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

use DateTime;
use Etrias\MagentoConnector\Adapter\AdapterInterface as MagentoAdapterInterface;
use Etrias\MagentoConnector\SoapTypes\CatalogAttributeEntity;
use Etrias\MagentoConnector\SoapTypes\CatalogProductAttributeSetEntity;
use Etrias\MagentoConnector\SoapTypes\CatalogProductCreateEntity;
use Etrias\MagentoConnector\SoapTypes\CatalogProductReturnEntity;

class ProductService
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

    public function getProducts(array $filters = null, int $storeView = null)
    {
        return $this->adapter->getProducts($this->authenticationService->login(), $filters, $storeView);
    }

    /**
     * @return CatalogProductAttributeSetEntity[]
     */
    public function getAttributeSetList()
    {
        return $this->adapter->getAttributeSetList($this->authenticationService->login());
    }

    public function createProduct(string $productType, int $attributeSet, string $sku, CatalogProductCreateEntity $productData, int $storeView = null): int
    {
        return $this->adapter->createProduct($this->authenticationService->login(), $productType, $attributeSet, $sku, $productData, $storeView);
    }

    public function updateProductById(int $productId, CatalogProductCreateEntity $productData, int $storeView = null): bool
    {
        return $this->adapter->updateProduct($this->authenticationService->login(), (string) $productId, $productData, $storeView);
    }

    public function updateProductBySku(string $sku, CatalogProductCreateEntity $productData, int $storeView = null): bool
    {
        return $this->adapter->updateProduct($this->authenticationService->login(), $sku, $productData, $storeView, 'sku');
    }

    public function deleteProductById(int $productId)
    {
        return $this->adapter->deleteProduct($this->authenticationService->login(), (string) $productId);
    }

    public function deleteProductBySku(string $sku)
    {
        return $this->adapter->deleteProduct($this->authenticationService->login(), $sku, 'sku');
    }

    public function getSpecialPriceById(int $productId, int $storeView)
    {
        return $this->adapter->getSpecialPrice($this->authenticationService->login(), (string) $productId, $storeView);
    }

    public function getSpecialPriceBySku(string $sku, int $storeView)
    {
        return $this->adapter->getSpecialPrice($this->authenticationService->login(), $sku, $storeView, 'sku');
    }

    public function setSpecialPriceById(
        int $productId,
        float $specialPrice,
        DateTime $fromDate,
        DateTime $toDate,
        int $storeView)
    {
        return $this->adapter->setSpecialPrice(
            $this->authenticationService->login(),
            (string) $productId,
            $specialPrice,
            $fromDate,
            $toDate,
            $storeView);
    }

    public function setSpecialPriceBySku(
        string $sku,
        float $specialPrice,
        DateTime $fromDate,
        DateTime $toDate,
        int $storeView)
    {
        return $this->adapter->setSpecialPrice(
            $this->authenticationService->login(),
            $sku,
            $specialPrice,
            $fromDate,
            $toDate,
            $storeView,
            'sku');
    }

    public function getProductInfoById(int $productId, array $attributes = null, string $storeView = null): CatalogProductReturnEntity
    {
        return $this->adapter->getProductInfo($this->authenticationService->login(), (string) $productId, $attributes, $storeView);
    }

    public function getProductInfoBySku(string $sku, array $attributes = null, string $storeView = null): CatalogProductReturnEntity
    {
        return $this->adapter->getProductInfo($this->authenticationService->login(), $sku, $attributes, $storeView);
    }

    /**
     * @param string $productType
     * @param int    $attributeSetId
     *
     * @return CatalogAttributeEntity[]
     */
    public function getListOfAdditionalAttributes(string $productType, int $attributeSetId): array
    {
        return $this->adapter->getListOfAdditionalAttributes($this->authenticationService->login(), $productType, $attributeSetId);
    }
}
