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
     * @var associativeArray
     */
    protected $data = null;

    /**
     * Constructor.
     *
     * @var int
     * @var string           $transaction_external_id
     * @var int              $order_id
     * @var int              $order_payment_id
     * @var string           $alias_for_display
     * @var bool             $alias_active
     * @var string           $payment_method
     * @var string           $authorization_type
     * @var int              $customer_id
     * @var string           $updated_on
     * @var string           $created_on
     * @var string           $payment_id
     * @var string           $authorization_amount
     * @var string           $authorization_status
     * @var bool             $paid
     * @var string           $currency
     * @var associativeArray $data
     *
     * @param mixed $transaction_id
     * @param mixed $transaction_external_id
     * @param mixed $order_id
     * @param mixed $order_payment_id
     * @param mixed $alias_for_display
     * @param mixed $alias_active
     * @param mixed $payment_method
     * @param mixed $authorization_type
     * @param mixed $customer_id
     * @param mixed $updated_on
     * @param mixed $created_on
     * @param mixed $payment_id
     * @param mixed $authorization_amount
     * @param mixed $authorization_status
     * @param mixed $paid
     * @param mixed $currency
     * @param mixed $data
     */
    public function __construct($transaction_id, $transaction_external_id, $order_id, $order_payment_id, $alias_for_display, $alias_active, $payment_method, $authorization_type, $customer_id, $updated_on, $created_on, $payment_id, $authorization_amount, $authorization_status, $paid, $currency, $data)
    {
        $this->transaction_id = $transaction_id;
        $this->transaction_external_id = $transaction_external_id;
        $this->order_id = $order_id;
        $this->order_payment_id = $order_payment_id;
        $this->alias_for_display = $alias_for_display;
        $this->alias_active = $alias_active;
        $this->payment_method = $payment_method;
        $this->authorization_type = $authorization_type;
        $this->customer_id = $customer_id;
        $this->updated_on = $updated_on;
        $this->created_on = $created_on;
        $this->payment_id = $payment_id;
        $this->authorization_amount = $authorization_amount;
        $this->authorization_status = $authorization_status;
        $this->paid = $paid;
        $this->currency = $currency;
        $this->data = $data;
    }

    /**
     * @return int
     */
    public function getTransaction_id()
    {
        return $this->transaction_id;
    }

    /**
     * @param int $transaction_id
     *
     * @return $this
     */
    public function setTransaction_id($transaction_id)
    {
        $this->transaction_id = $transaction_id;

        return $this;
    }

    /**
     * @return string
     */
    public function getTransaction_external_id()
    {
        return $this->transaction_external_id;
    }

    /**
     * @param string $transaction_external_id
     *
     * @return $this
     */
    public function setTransaction_external_id($transaction_external_id)
    {
        $this->transaction_external_id = $transaction_external_id;

        return $this;
    }

    /**
     * @return int
     */
    public function getOrder_id()
    {
        return $this->order_id;
    }

    /**
     * @param int $order_id
     *
     * @return $this
     */
    public function setOrder_id($order_id)
    {
        $this->order_id = $order_id;

        return $this;
    }

    /**
     * @return int
     */
    public function getOrder_payment_id()
    {
        return $this->order_payment_id;
    }

    /**
     * @param int $order_payment_id
     *
     * @return $this
     */
    public function setOrder_payment_id($order_payment_id)
    {
        $this->order_payment_id = $order_payment_id;

        return $this;
    }

    /**
     * @return string
     */
    public function getAlias_for_display()
    {
        return $this->alias_for_display;
    }

    /**
     * @param string $alias_for_display
     *
     * @return $this
     */
    public function setAlias_for_display($alias_for_display)
    {
        $this->alias_for_display = $alias_for_display;

        return $this;
    }

    /**
     * @return bool
     */
    public function getAlias_active()
    {
        return $this->alias_active;
    }

    /**
     * @param bool $alias_active
     *
     * @return $this
     */
    public function setAlias_active($alias_active)
    {
        $this->alias_active = $alias_active;

        return $this;
    }

    /**
     * @return string
     */
    public function getPayment_method()
    {
        return $this->payment_method;
    }

    /**
     * @param string $payment_method
     *
     * @return $this
     */
    public function setPayment_method($payment_method)
    {
        $this->payment_method = $payment_method;

        return $this;
    }

    /**
     * @return string
     */
    public function getAuthorization_type()
    {
        return $this->authorization_type;
    }

    /**
     * @param string $authorization_type
     *
     * @return $this
     */
    public function setAuthorization_type($authorization_type)
    {
        $this->authorization_type = $authorization_type;

        return $this;
    }

    /**
     * @return int
     */
    public function getCustomer_id()
    {
        return $this->customer_id;
    }

    /**
     * @param int $customer_id
     *
     * @return $this
     */
    public function setCustomer_id($customer_id)
    {
        $this->customer_id = $customer_id;

        return $this;
    }

    /**
     * @return string
     */
    public function getUpdated_on()
    {
        return $this->updated_on;
    }

    /**
     * @param string $updated_on
     *
     * @return $this
     */
    public function setUpdated_on($updated_on)
    {
        $this->updated_on = $updated_on;

        return $this;
    }

    /**
     * @return string
     */
    public function getCreated_on()
    {
        return $this->created_on;
    }

    /**
     * @param string $created_on
     *
     * @return $this
     */
    public function setCreated_on($created_on)
    {
        $this->created_on = $created_on;

        return $this;
    }

    /**
     * @return string
     */
    public function getPayment_id()
    {
        return $this->payment_id;
    }

    /**
     * @param string $payment_id
     *
     * @return $this
     */
    public function setPayment_id($payment_id)
    {
        $this->payment_id = $payment_id;

        return $this;
    }

    /**
     * @return string
     */
    public function getAuthorization_amount()
    {
        return $this->authorization_amount;
    }

    /**
     * @param string $authorization_amount
     *
     * @return $this
     */
    public function setAuthorization_amount($authorization_amount)
    {
        $this->authorization_amount = $authorization_amount;

        return $this;
    }

    /**
     * @return string
     */
    public function getAuthorization_status()
    {
        return $this->authorization_status;
    }

    /**
     * @param string $authorization_status
     *
     * @return $this
     */
    public function setAuthorization_status($authorization_status)
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
     * @return associativeArray
     */
    public function getData()
    {
        return $this->data;
    }

    /**
     * @param associativeArray $data
     *
     * @return $this
     */
    public function setData($data)
    {
        $this->data = $data;

        return $this;
    }
}
