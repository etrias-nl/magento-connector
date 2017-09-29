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

use Etrias\MagentoConnector\Services\InvoiceService;
use Etrias\MagentoConnector\Services\OrderService;
use Etrias\MagentoConnector\SoapTypes\OrderItemIdQty;
use Etrias\MagentoConnector\SoapTypes\SalesOrderInvoiceEntity;

/**
 * @coversNothing
 */
class InvoiceServiceTest extends AbstractServiceTest
{
    use RandomizeTrait;

    /**
     * @var InvoiceService
     */
    protected $service;

    public function setUp()
    {
        parent::setUp();
        $this->service = new InvoiceService($this->adapter, $this->authenticationService);
        $this->invoiceService = $this->service;
        $this->orderService = new OrderService($this->adapter, $this->authenticationService);
    }

    public function testListInvoices()
    {
        $invoices = $this->service->getInvoices();
        $invoice = reset($invoices);

        $this->assertInstanceOf(SalesOrderInvoiceEntity::class, $invoice);
    }

    public function testAddComment()
    {
        $invoice = $this->getRandomInvoice();

        $result = $this->service->addComment($invoice->getIncrementId(), 'testcomment'.random_int(0, 9999));
        $this->assertTrue($result);
    }

    public function testGetInvoiceInfo()
    {
        $invoice = $this->getRandomInvoice();
        $result = $this->service->getInvoiceInfo($invoice->getIncrementId());

        $this->assertInstanceOf(SalesOrderInvoiceEntity::class, $result);
    }

    public function testCreateAndCancelInvoice()
    {
        $order = $this->getRandomOrder();
        $orderInfo = $this->orderService->getOrderInfo($order->getIncrementId());
        $qtys = [];

        foreach ($orderInfo->getItems() as $orderItem) {
            $qtys[] = new OrderItemIdQty($orderItem->getItemId(), $orderItem->getQtyOrdered());
        }
        $invoiceIncrementId = $this->service->createInvoice(
            $order->getIncrementId(),
            $qtys
            );

        $this->assertInternalType('numeric', $invoiceIncrementId);

        $this->assertTrue($this->service->cancelInvoice($invoiceIncrementId));
    }

    public function testCreateAndCaptureInvoice()
    {
        $order = $this->getRandomOrder();
        $orderInfo = $this->orderService->getOrderInfo($order->getIncrementId());
        $qtys = [];

        foreach ($orderInfo->getItems() as $orderItem) {
            $qtys[] = new OrderItemIdQty($orderItem->getItemId(), $orderItem->getQtyOrdered());
        }
        $invoiceIncrementId = $this->service->createInvoice(
            $order->getIncrementId(),
            $qtys
        );

        $this->assertInternalType('numeric', $invoiceIncrementId);

        $this->assertTrue($this->service->captureInvoice($invoiceIncrementId));
    }
}
