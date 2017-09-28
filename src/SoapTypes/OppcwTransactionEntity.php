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

namespace Etrias\MagentoConnector\SoapTypes;

class OppcwTransactionEntity
{
    /**
     * @var int
     */
    protected $transaction_id = null;

    /**
     * @var string
     */
    protected $transaction_external_id = null;

    /**
     * @var int
     */
    protected $order_id = null;

    /**
     * @var int
     */
    protected $order_payment_id = null;

    /**
     * @var string
     */
    protected $alias_for_display = null;

    /**
     * @var bool
     */
    protected $alias_active = null;

    /**
     * @var string
     */
    protected $payment_method = null;

    /**
     * @var string
     */
    protected $authorization_type = null;

    /**
     * @var int
     */
    protected $customer_id = null;

    /**
     * @var string
     */
    protected $updated_on = null;

    /**
     * @var string
     */
    protected $created_on = null;

    /**
     * @var string
     */
    protected $payment_id = null;

    /**
     * @var string
     */
    protected $authorization_amount = null;

    /**
     * @var string
     */
    protected $authorization_status = null;

    /**
     * @var bool
     */
    protected $paid = null;

    /**
     * @var string
     */
    protected $currency = null;

    /**
     * @var array
     */
    protected $data = null;

    /**
     * @return int
     */
    public function getTransactionId()
    {
        return $this->transaction_id;
    }

    /**
     * @param int $transaction_id
     *
     * @return $this
     */
    public function setTransactionId($transaction_id)
    {
        $this->transaction_id = $transaction_id;

        return $this;
    }

    /**
     * @return string
     */
    public function getTransactionExternalId()
    {
        return $this->transaction_external_id;
    }

    /**
     * @param string $transaction_external_id
     *
     * @return $this
     */
    public function setTransactionExternalId($transaction_external_id)
    {
        $this->transaction_external_id = $transaction_external_id;

        return $this;
    }

    /**
     * @return int
     */
    public function getOrderId()
    {
        return $this->order_id;
    }

    /**
     * @param int $order_id
     *
     * @return $this
     */
    public function setOrderId($order_id)
    {
        $this->order_id = $order_id;

        return $this;
    }

    /**
     * @return int
     */
    public function getOrderPaymentId()
    {
        return $this->order_payment_id;
    }

    /**
     * @param int $order_payment_id
     *
     * @return $this
     */
    public function setOrderPaymentId($order_payment_id)
    {
        $this->order_payment_id = $order_payment_id;

        return $this;
    }

    /**
     * @return string
     */
    public function getAliasForDisplay()
    {
        return $this->alias_for_display;
    }

    /**
     * @param string $alias_for_display
     *
     * @return $this
     */
    public function setAliasForDisplay($alias_for_display)
    {
        $this->alias_for_display = $alias_for_display;

        return $this;
    }

    /**
     * @return bool
     */
    public function getAliasActive()
    {
        return $this->alias_active;
    }

    /**
     * @param bool $alias_active
     *
     * @return $this
     */
    public function setAliasActive($alias_active)
    {
        $this->alias_active = $alias_active;

        return $this;
    }

    /**
     * @return string
     */
    public function getPaymentMethod()
    {
        return $this->payment_method;
    }

    /**
     * @param string $payment_method
     *
     * @return $this
     */
    public function setPaymentMethod($payment_method)
    {
        $this->payment_method = $payment_method;

        return $this;
    }

    /**
     * @return string
     */
    public function getAuthorizationType()
    {
        return $this->authorization_type;
    }

    /**
     * @param string $authorization_type
     *
     * @return $this
     */
    public function setAuthorizationType($authorization_type)
    {
        $this->authorization_type = $authorization_type;

        return $this;
    }

    /**
     * @return int
     */
    public function getCustomerId()
    {
        return $this->customer_id;
    }

    /**
     * @param int $customer_id
     *
     * @return $this
     */
    public function setCustomerId($customer_id)
    {
        $this->customer_id = $customer_id;

        return $this;
    }

    /**
     * @return string
     */
    public function getUpdatedOn()
    {
        return $this->updated_on;
    }

    /**
     * @param string $updated_on
     *
     * @return $this
     */
    public function setUpdatedOn($updated_on)
    {
        $this->updated_on = $updated_on;

        return $this;
    }

    /**
     * @return string
     */
    public function getCreatedOn()
    {
        return $this->created_on;
    }

    /**
     * @param string $created_on
     *
     * @return $this
     */
    public function setCreatedOn($created_on)
    {
        $this->created_on = $created_on;

        return $this;
    }

    /**
     * @return string
     */
    public function getPaymentId()
    {
        return $this->payment_id;
    }

    /**
     * @param string $payment_id
     *
     * @return $this
     */
    public function setPaymentId($payment_id)
    {
        $this->payment_id = $payment_id;

        return $this;
    }

    /**
     * @return string
     */
    public function getAuthorizationAmount()
    {
        return $this->authorization_amount;
    }

    /**
     * @param string $authorization_amount
     *
     * @return $this
     */
    public function setAuthorizationAmount($authorization_amount)
    {
        $this->authorization_amount = $authorization_amount;

        return $this;
    }

    /**
     * @return string
     */
    public function getAuthorizationStatus()
    {
        return $this->authorization_status;
    }

    /**
     * @param string $authorization_status
     *
     * @return $this
     */
    public function setAuthorizationStatus($authorization_status)
    {
        $this->authorization_status = $authorization_status;

        return $this;
    }

    /**
     * @return bool
     */
    public function getPaid()
    {
        return $this->paid;
    }

    /**
     * @param bool $paid
     *
     * @return $this
     */
    public function setPaid($paid)
    {
        $this->paid = $paid;

        return $this;
    }

    /**
     * @return string
     */
    public function getCurrency()
    {
        return $this->currency;
    }

    /**
     * @param string $currency
     *
     * @return $this
     */
    public function setCurrency($currency)
    {
        $this->currency = $currency;

        return $this;
    }

    /**
     * @return array
     */
    public function getData()
    {
        return $this->data;
    }

    /**
     * @param array $data
     *
     * @return $this
     */
    public function setData(array $data)
    {
        $this->data = $data;

        return $this;
    }
}
