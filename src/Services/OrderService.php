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
use Etrias\MagentoConnector\SoapTypes\SalesOrderEntity;

class OrderService
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
     * @param string      $orderIncrementId
     * @param string      $status
     * @param string|null $comment
     * @param string|null $notify
     *
     * @return bool
     */
    public function addComment(
        string $orderIncrementId,
        string $status,
        string $comment = null,
        string $notify = null
    ): bool {
        return $this->adapter->addCommentToOrder(
            $this->authenticationService->login(),
            $orderIncrementId,
            $status,
            $comment,
            $notify
        );
    }

    public function getOrders(array $filters = []): array
    {
        return $this->adapter->listOrders($this->authenticationService->login(), $filters);
    }

    public function getOrderInfo(string $orderIncrementId): SalesOrderEntity
    {
        return $this->adapter->getOrderInfo($this->authenticationService->login(), $orderIncrementId);
    }

    public function holdOrder(string $orderIncrementId): bool
    {
        return $this->adapter->holdOrder($this->authenticationService->login(), $orderIncrementId);
    }

    public function unHoldOrder(string $orderIncrementId): bool
    {
        return $this->adapter->unHoldOrder($this->authenticationService->login(), $orderIncrementId);
    }

    public function cancelOrder(string $orderIncrementId): bool
    {
        return $this->adapter->cancelOrder($this->authenticationService->login(), $orderIncrementId);
    }
}
