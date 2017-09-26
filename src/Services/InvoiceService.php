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

class InvoiceService
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
     * @param string $invoiceIncrementId
     * @param string|null $comment
     * @param bool|null $sendEmail
     * @param bool|null $includeComment
     * @return bool
     */
    public function addComment(
        string $invoiceIncrementId,
        string $comment = null,
        bool $sendEmail = null,
        bool $includeComment = null
    ): bool
    {
        return $this->adapter->addCommentToOrderInvoice(
            $this->authenticationService->login(),
            $invoiceIncrementId,
            $comment,
            (int) $sendEmail,
            (int) $includeComment
        );
    }

    /**
     * @param string $orderIncrementId
     * @param OrderItemIdQty[] $itemsQty
     * @param string|null $comment
     * @param bool|null $sendEmail
     * @param bool|null $includeComment
     * @return string InvoiceIncrementId
     */
    public function createInvoice(
        string $orderIncrementId,
        array $itemsQty = null,
        string $comment = null,
        bool $sendEmail = null,
        bool $includeComment = null
    ): string {
        return $this->adapter->createOrderInvoice(
            $this->authenticationService->login(),
            $orderIncrementId,
            $itemsQty,
            $comment,
            (string) $sendEmail,
            (string) $includeComment
            );
    }

    /**
     * @param array $filters
     * @return SalesOrderInvoiceEntity[]
     */
    public function getInvoices(array $filters = []): array
    {
        return $this->adapter->listInvoices($this->authenticationService->login(), $filters);
    }

    /**
     * @param string $invoiceIncrementId
     * @return SalesOrderInvoiceEntity
     */
    public function getInvoiceInfo(string $invoiceIncrementId): SalesOrderInvoiceEntity
    {
        return $this->adapter->getInvoiceInfo($this->authenticationService->login(), $invoiceIncrementId);
    }

    /**
     * @param string $invoiceIncrementId
     * @return bool
     */
    public function cancelInvoice(string $invoiceIncrementId): bool
    {
        return $this->adapter->cancelInvoice($this->authenticationService->login(), $invoiceIncrementId);
    }

    /**
     * @param string $invoiceIncrementId
     * @return bool
     */
    public function captureInvoice(string $invoiceIncrementId): bool
    {
        return $this->adapter->captureInvoice($this->authenticationService->login(), $invoiceIncrementId);
    }
}
