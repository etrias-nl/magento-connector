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

use Etrias\MagentoConnector\Services\CreditMemoService;
use Etrias\MagentoConnector\Services\GeneralService;
use Etrias\MagentoConnector\Services\OrderService;
use Etrias\MagentoConnector\SoapTypes\ApiEntity;
use Etrias\MagentoConnector\SoapTypes\ExistsFaltureEntity;
use Etrias\MagentoConnector\SoapTypes\MagentoInfoEntity;
use Etrias\MagentoConnector\SoapTypes\SalesOrderCreditmemoData;
use Etrias\MagentoConnector\SoapTypes\SalesOrderCreditmemoEntity;
use Etrias\MagentoConnector\SoapTypes\SalesOrderEntity;
use Etrias\MagentoConnector\SoapTypes\SalesOrderListEntity;
use Etrias\MagentoConnector\SoapTypes\StoreEntity;

/**
 * @coversNothing
 */
class CreditMemoServiceTest extends AbstractServiceTest
{
    use RandomizeTrait;

    /**
     * @var CreditMemoService
     */
    protected $service;

    public function setUp()
    {
        parent::setUp();
        $this->service = new CreditMemoService($this->adapter, $this->authenticationService);
        $this->creditMemoService = $this->service;
        $this->orderService = new OrderService($this->adapter, $this->authenticationService);
    }

    public function testListCreditMemos()
    {
        $creditMemos = $this->service->getCreditMemos();
        $creditMemo = reset($creditMemos);

        $this->assertInstanceOf(SalesOrderCreditmemoEntity::class, $creditMemo);
    }

    public function testAddComment()
    {
        $creditMemo = $this->getRandomCreditMemo();

        $result = $this->service->addComment($creditMemo->getIncrementId(), 'testcomment'. rand(0,9999));
        $this->assertTrue($result);
    }

    public function testGetCreditMemoInfo()
    {
        $creditMemo = $this->getRandomCreditMemo();
        $result = $this->service->getCreditMemoInfo($creditMemo->getIncrementId());

        $this->assertInstanceOf(SalesOrderCreditmemoEntity::class, $result);
    }


    public function testCreateAndCancelCreditMemo()
    {
        $order = $this->getRandomOrder();
        $creditMemoIncrementId = $this->service->createCreditmemo(
            $order->getIncrementId(),
            new SalesOrderCreditmemoData()
            );

        $this->assertTrue(is_numeric($creditMemoIncrementId));

        $this->assertTrue($this->service->cancelCreditMemo($creditMemoIncrementId));
    }

}
