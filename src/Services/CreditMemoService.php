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
use Etrias\MagentoConnector\SoapTypes\SalesOrderCreditmemoData;
use Etrias\MagentoConnector\SoapTypes\SalesOrderCreditmemoEntity;
use Etrias\MagentoConnector\SoapTypes\SalesOrderEntity;

class CreditMemoService
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
     * @param string $creditMemoIncrementId
     * @param string|null $comment
     * @param bool|null $notify
     * @param bool|null $includeComment
     * @return bool
     */
    public function addComment(
        string $creditMemoIncrementId,
        string $comment = null,
        bool $notify = null,
        bool $includeComment = null
    ): bool
    {
        return $this->adapter->addCommentToCreditMemo(
            $this->authenticationService->login(),
            $creditMemoIncrementId,
            $comment,
            $notify,
            $includeComment
        );
    }

    /**
     * @param string $orderIncrementId
     * @param SalesOrderCreditmemoData|null $data
     * @param string|null $comment
     * @param bool|null $notifyCustomer
     * @param bool|null $includeComment
     * @param bool $refundToStoreCreditAmount
     * @return string CreditMemoIncrementId
     */
    public function createCreditmemo(
        string $orderIncrementId,
        SalesOrderCreditmemoData $data = null,
        string $comment = null,
        bool $notifyCustomer = null,
        bool $includeComment = null,
        bool $refundToStoreCreditAmount = null

    ): string {
        return $this->adapter->createCreditMemo(
                $this->authenticationService->login(),
                $orderIncrementId,
                $data,
                $comment,
                (int) $notifyCustomer,
                (int) $includeComment,
                (string) $refundToStoreCreditAmount
            );
    }

    /**
     * @param array $filters
     * @return SalesOrderCreditmemoEntity[]
     */
    public function getCreditMemos(array $filters = []): array
    {
        return $this->adapter->listCreditMemos($this->authenticationService->login(), $filters);
    }

    /**
     * @param string $creditMemoIncrementId
     * @return SalesOrderCreditmemoEntity
     */
    public function getCreditMemoInfo(string $creditMemoIncrementId): SalesOrderCreditmemoEntity
    {
        return $this->adapter->getCreditMemoInfo($this->authenticationService->login(), $creditMemoIncrementId);
    }

    /**
     * @param string $creditMemoIncrementId
     * @return bool
     */
    public function cancelCreditMemo(string $creditMemoIncrementId): bool
    {
        return $this->adapter->cancelCreditMemo($this->authenticationService->login(), $creditMemoIncrementId);
    }
}
