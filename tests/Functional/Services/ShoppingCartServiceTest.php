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

namespace Tests\Etrias\MagentoConnector\Functional\Services;

use Etrias\MagentoConnector\Services\GeneralService;
use Etrias\MagentoConnector\Services\OrderService;
use Etrias\MagentoConnector\Services\ShoppingCartService;
use Etrias\MagentoConnector\SoapTypes\ApiEntity;
use Etrias\MagentoConnector\SoapTypes\ExistsFaltureEntity;
use Etrias\MagentoConnector\SoapTypes\MagentoInfoEntity;
use Etrias\MagentoConnector\SoapTypes\SalesOrderEntity;
use Etrias\MagentoConnector\SoapTypes\SalesOrderListEntity;
use Etrias\MagentoConnector\SoapTypes\ShoppingCartInfoEntity;
use Etrias\MagentoConnector\SoapTypes\ShoppingCartLicenseEntity;
use Etrias\MagentoConnector\SoapTypes\ShoppingCartTotalsEntity;
use Etrias\MagentoConnector\SoapTypes\StoreEntity;

/**
 * @coversNothing
 */
class ShoppingCartServiceTest extends AbstractServiceTest
{
    use RandomizeTrait;

    /**
     * @var ShoppingCartService
     */
    protected $service;

    public function setUp()
    {
        parent::setUp();
        $this->service = new ShoppingCartService($this->adapter, $this->authenticationService);
    }

    public function testCreateCart()
    {
        $shoppingCartId = $this->service->createCart();

        $this->assertTrue(is_numeric($shoppingCartId));
    }

    public function testGetCartInfo()
    {
        $shoppingCartId = $this->service->createCart();
        $shoppingCartInfo = $this->service->getCartInfo($shoppingCartId);

        $this->assertInstanceOf(ShoppingCartInfoEntity::class, $shoppingCartInfo);
    }

    public function testGetCartLicence()
    {
        $shoppingCartId = $this->service->createCart();
        $shoppingCartLicences = $this->service->getCartLicences($shoppingCartId);

        $this->assertTrue(is_array($shoppingCartLicences));
    }

    public function testGetCartTotals()
    {
        $shoppingCartId = $this->service->createCart();
        $totals = $this->service->getCartTotals($shoppingCartId);

        $this->assertTrue(is_array($totals));
        $this->assertInstanceOf(ShoppingCartTotalsEntity::class, reset($totals));
    }



}
