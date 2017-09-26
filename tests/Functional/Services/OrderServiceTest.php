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
use Etrias\MagentoConnector\SoapTypes\ApiEntity;
use Etrias\MagentoConnector\SoapTypes\ExistsFaltureEntity;
use Etrias\MagentoConnector\SoapTypes\MagentoInfoEntity;
use Etrias\MagentoConnector\SoapTypes\SalesOrderEntity;
use Etrias\MagentoConnector\SoapTypes\SalesOrderListEntity;
use Etrias\MagentoConnector\SoapTypes\StoreEntity;

/**
 * @coversNothing
 */
class OrderServiceTest extends AbstractServiceTest
{
    use RandomizeTrait;

    /**
     * @var OrderService
     */
    protected $service;

    public function setUp()
    {
        parent::setUp();
        $this->service = new OrderService($this->adapter, $this->authenticationService);
        $this->orderService = $this->service;
    }

    public function testListOrders()
    {
        $orders = $this->service->getOrders();
        $order = reset($orders);

        $this->assertInstanceOf(SalesOrderListEntity::class, $order);
    }

    public function testAddComment()
    {
        $order = $this->getRandomOrder();

        $result = $this->service->addComment($order->getIncrementId(), $order->getStatus(), 'testcomment'. rand(0,9999));
        $this->assertTrue($result);
    }

    public function testGetOrderInfo()
    {
        $order = $this->getRandomOrder();
        $result = $this->service->getOrderInfo($order->getIncrementId());

        $this->assertInstanceOf(SalesOrderEntity::class, $result);
    }

    public function testHoldAndUnHoldOrder()
    {
        $order = $this->getRandomOrder();
        $this->assertTrue($this->service->holdOrder($order->getIncrementId()));
        $this->assertTrue($this->service->unHoldOrder($order->getIncrementId()));
    }

    public function testCancelOrder()
    {
        $order = $this->getRandomOrder();
        $this->assertTrue($this->service->cancelOrder($order->getIncrementId()));
    }
}
