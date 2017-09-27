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
use Etrias\MagentoConnector\SoapTypes\MagentoInfoEntity;
use Etrias\MagentoConnector\SoapTypes\OrderItemIdQty;
use Etrias\MagentoConnector\SoapTypes\SalesOrderCreditmemoData;
use Etrias\MagentoConnector\SoapTypes\SalesOrderCreditmemoEntity;
use Etrias\MagentoConnector\SoapTypes\SalesOrderEntity;
use Etrias\MagentoConnector\SoapTypes\SalesOrderInvoiceEntity;
use Etrias\MagentoConnector\SoapTypes\ShoppingCartInfoEntity;
use Etrias\MagentoConnector\SoapTypes\ShoppingCartLicenseEntity;
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
     * @return int
     */
    public function createCart(
        string $storeId = null
    ): int
    {
        return $this->adapter->createShoppingCart(
            $this->authenticationService->login(),
            $storeId
        );
    }

    /**
     * @param int $quoteId
     * @param string|null $storeId
     * @return ShoppingCartInfoEntity
     */
    public function getCartInfo(
        int $quoteId,
        string $storeId = null
    ): ShoppingCartInfoEntity
    {
        return $this->adapter->getShoppingCartInfo($this->authenticationService->login(), $quoteId, $storeId);
    }

    /**
     * @param int $quoteId
     * @param string|null $storeId
     * @return ShoppingCartLicenseEntity[]
     */
    public function getCartLicences(int $quoteId, string $storeId = null): array
    {
        return $this->adapter->getShoppingCartLicences($this->authenticationService->login(), $quoteId, $storeId);
    }

    /**
     * @param int $quoteId
     * @param string|null $storeId
     * @param array|null $licences
     * @return int
     */
    public function createOrderFromCart(int $quoteId, string $storeId = null, array $licences = null): int
    {
        return $this->adapter->createOrderFromCart($this->authenticationService->login(), $quoteId, $storeId, $licences);
    }

    /**
     * @param int $quoteId
     * @param string|null $storeId
     * @return ShoppingCartTotalsEntity[]
     */
    public function getCartTotals(int $quoteId, string $storeId = null): array
    {
        return $this->adapter->getCartTotals($this->authenticationService->login(), $quoteId, $storeId);
    }
}
