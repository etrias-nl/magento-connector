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
use Etrias\MagentoConnector\SoapTypes\CatalogProductEntity;
use Etrias\MagentoConnector\SoapTypes\ShoppingCartCustomerAddressEntity;
use Etrias\MagentoConnector\SoapTypes\ShoppingCartCustomerEntity;
use Etrias\MagentoConnector\SoapTypes\ShoppingCartInfoEntity;
use Etrias\MagentoConnector\SoapTypes\ShoppingCartLicenseEntity;
use Etrias\MagentoConnector\SoapTypes\ShoppingCartPaymentMethodEntity;
use Etrias\MagentoConnector\SoapTypes\ShoppingCartProductEntity;
use Etrias\MagentoConnector\SoapTypes\ShoppingCartShippingMethodEntity;
use Etrias\MagentoConnector\SoapTypes\ShoppingCartTotalsEntity;

class ShoppingCartService
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

    /**
     * @param string|null $storeId
     *
     * @return int
     */
    public function createCart(
        string $storeId = null
    ): int {
        return $this->adapter->createShoppingCart(
            $this->authenticationService->login(),
            $storeId
        );
    }

    /**
     * @param int         $quoteId
     * @param string|null $storeId
     *
     * @return ShoppingCartInfoEntity
     */
    public function getCartInfo(
        int $quoteId,
        string $storeId = null
    ): ShoppingCartInfoEntity {
        return $this->adapter->getShoppingCartInfo($this->authenticationService->login(), $quoteId, $storeId);
    }

    /**
     * @param int         $quoteId
     * @param string|null $storeId
     *
     * @return ShoppingCartLicenseEntity[]
     */
    public function getCartLicences(int $quoteId, string $storeId = null): array
    {
        return $this->adapter->getShoppingCartLicences($this->authenticationService->login(), $quoteId, $storeId);
    }

    /**
     * @param int         $quoteId
     * @param string|null $storeId
     * @param array|null  $licences
     *
     * @return int
     */
    public function createOrderFromCart(int $quoteId, string $storeId = null, array $licences = null): int
    {
        return $this->adapter->createOrderFromCart($this->authenticationService->login(), $quoteId, $storeId, $licences);
    }

    /**
     * @param int         $quoteId
     * @param string|null $storeId
     *
     * @return ShoppingCartTotalsEntity[]
     */
    public function getCartTotals(int $quoteId, string $storeId = null): array
    {
        return $this->adapter->getCartTotals($this->authenticationService->login(), $quoteId, $storeId);
    }

    /**
     * @param int         $quoteId
     * @param string      $couponCode
     * @param string|null $storeId
     *
     * @return bool
     */
    public function addCouponToCart(
        int $quoteId,
        string $couponCode,
        string $storeId = null
    ): bool {
        return $this->adapter->addCouponToCart($this->authenticationService->login(), $quoteId, $couponCode, $storeId);
    }

    /**
     * @param int         $quoteId
     * @param string|null $storeId
     *
     * @return bool
     */
    public function removeCouponFromCart(
        int $quoteId,
        string $storeId = null
    ): bool {
        return $this->adapter->removeCouponFromCart($this->authenticationService->login(), $quoteId, $storeId);
    }

    /**
     * @param int                                 $quoteId
     * @param ShoppingCartCustomerAddressEntity[] $data
     * @param string|null                         $storeId
     *
     * @return bool
     */
    public function setCustomerAddresses(
        int $quoteId,
        array $data,
        string $storeId = null
    ): bool {
        return $this->adapter->setCustomerAddresses($this->authenticationService->login(), $quoteId, $data, $storeId);
    }

    /**
     * @param int                        $quoteId
     * @param ShoppingCartCustomerEntity $data
     * @param string|null                $storeId
     *
     * @return bool
     */
    public function setCustomerInfo(
        int $quoteId,
        ShoppingCartCustomerEntity $data,
        string $storeId = null
    ): bool {
        return $this->adapter->setCustomerInfo($this->authenticationService->login(), $quoteId, $data, $storeId);
    }

    /**
     * @param int         $quoteId
     * @param string|null $storeId
     *
     * @return ShoppingCartPaymentMethodEntity[]
     */
    public function getAvailablePaymentMethods(
        int $quoteId,
        string $storeId = null
    ): array {
        return $this->adapter->getPaymentMethods($this->authenticationService->login(), $quoteId, $storeId);
    }

    /**
     * @param int                             $quoteId
     * @param ShoppingCartPaymentMethodEntity $method
     * @param string|null                     $storeId
     *
     * @return bool
     */
    public function setPaymentMethod(
        int $quoteId,
        ShoppingCartPaymentMethodEntity $method,
        string $storeId = null
    ): bool {
        return $this->adapter->setPaymentMethod($this->authenticationService->login(), $quoteId, $method, $storeId);
    }

    /**
     * @param int                         $quoteId
     * @param ShoppingCartProductEntity[] $products
     * @param string|null                 $storeId
     *
     * @return bool
     */
    public function addProductsToCart(
        int $quoteId,
        array $products,
        string $storeId = null
    ): bool {
        return $this->adapter->addProductsToCart($this->authenticationService->login(), $quoteId, $products, $storeId);
    }

    public function addProductToCart(
        int $quoteId,
        ShoppingCartProductEntity $product,
        string $storeId = null
    ): bool {
        return $this->addProductsToCart($quoteId, [$product], $storeId);
    }

    /**
     * @param int         $quoteId
     * @param string|null $storeId
     *
     * @return CatalogProductEntity[]
     */
    public function getProductsInCart(
        int $quoteId,
        string $storeId = null
    ): array {
        return $this->adapter->getProductsInCart($this->authenticationService->login(), $quoteId, $storeId);
    }

    /**
     * @param int                         $quoteId
     * @param ShoppingCartProductEntity[] $products
     * @param string|null                 $storeId
     *
     * @return bool
     */
    public function moveCartProductsToCustomerQuote(
        int $quoteId,
        array $products,
        string $storeId = null
    ) {
        return $this->adapter->moveCartProductsToCustomerQuote(
            $this->authenticationService->login(),
            $quoteId,
            $products,
            $storeId
        );
    }

    /**
     * @param int                         $quoteId
     * @param ShoppingCartProductEntity[] $products
     * @param string|null                 $storeId
     *
     * @return bool
     */
    public function removeProductsFromCart(
        int $quoteId,
        array $products,
        string $storeId = null
    ): bool {
        return $this->adapter->removeProductsFromCart($this->authenticationService->login(), $quoteId, $products, $storeId);
    }

    /**
     * @param int                       $quoteId
     * @param ShoppingCartProductEntity $product
     * @param string|null               $storeId
     *
     * @return bool
     */
    public function removeProductFromCart(
        int $quoteId,
        ShoppingCartProductEntity $product,
        string $storeId = null
    ): bool {
        return $this->removeProductsFromCart($quoteId, [$product], $storeId);
    }

    /**
     * @param int                         $quoteId
     * @param ShoppingCartProductEntity[] $products
     * @param string|null                 $storeId
     *
     * @return bool
     */
    public function updateProductsInCart(
        int $quoteId,
        array $products,
        string $storeId = null
    ): bool {
        return $this->adapter->updateProductsInCart($this->authenticationService->login(), $quoteId, $products, $storeId);
    }

    /**
     * @param int                       $quoteId
     * @param ShoppingCartProductEntity $product
     * @param string|null               $storeId
     *
     * @return bool
     */
    public function updateProductInCart(
        int $quoteId,
        ShoppingCartProductEntity $product,
        string $storeId = null
    ): bool {
        return $this->updateProductsInCart($quoteId, [$product], $storeId);
    }

    /**
     * @param int         $quoteId
     * @param string|null $storeId
     *
     * @return ShoppingCartShippingMethodEntity[]
     */
    public function getAvailableShippingMethods(
        int $quoteId,
        string $storeId = null
    ) {
        return $this->adapter->getShippingMethods($this->authenticationService->login(), $quoteId, $storeId);
    }

    /**
     * @param int         $quoteId
     * @param string      $shippingMethodCode
     * @param string|null $storeId
     *
     * @return bool
     */
    public function setShippingMethod(
        int $quoteId,
        string $shippingMethodCode,
        string $storeId = null
    ): bool {
        return $this->adapter->setShippingMethod($this->authenticationService->login(), $quoteId, $shippingMethodCode, $storeId);
    }
}
