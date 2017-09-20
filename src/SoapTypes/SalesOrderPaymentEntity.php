<?php

declare(strict_types = 1);

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

class SalesOrderPaymentEntity
{
    /**
     * @var string
     */
    protected $increment_id = null;

    /**
     * @var string
     */
    protected $parent_id = null;

    /**
     * @var string
     */
    protected $created_at = null;

    /**
     * @var string
     */
    protected $updated_at = null;

    /**
     * @var string
     */
    protected $is_active = null;

    /**
     * @var string
     */
    protected $amount_ordered = null;

    /**
     * @var string
     */
    protected $shipping_amount = null;

    /**
     * @var string
     */
    protected $base_amount_ordered = null;

    /**
     * @var string
     */
    protected $base_shipping_amount = null;

    /**
     * @var string
     */
    protected $method = null;

    /**
     * @var string
     */
    protected $po_number = null;

    /**
     * @var string
     */
    protected $cc_type = null;

    /**
     * @var string
     */
    protected $cc_number_enc = null;

    /**
     * @var string
     */
    protected $cc_last4 = null;

    /**
     * @var string
     */
    protected $cc_owner = null;

    /**
     * @var string
     */
    protected $cc_exp_month = null;

    /**
     * @var string
     */
    protected $cc_exp_year = null;

    /**
     * @var string
     */
    protected $cc_ss_start_month = null;

    /**
     * @var string
     */
    protected $cc_ss_start_year = null;

    /**
     * @var string
     */
    protected $payment_id = null;

    /**
     * Constructor.
     *
     * @var string
     * @var string $parent_id
     * @var string $created_at
     * @var string $updated_at
     * @var string $is_active
     * @var string $amount_ordered
     * @var string $shipping_amount
     * @var string $base_amount_ordered
     * @var string $base_shipping_amount
     * @var string $method
     * @var string $po_number
     * @var string $cc_type
     * @var string $cc_number_enc
     * @var string $cc_last4
     * @var string $cc_owner
     * @var string $cc_exp_month
     * @var string $cc_exp_year
     * @var string $cc_ss_start_month
     * @var string $cc_ss_start_year
     * @var string $payment_id
     *
     * @param mixed $increment_id
     * @param mixed $parent_id
     * @param mixed $created_at
     * @param mixed $updated_at
     * @param mixed $is_active
     * @param mixed $amount_ordered
     * @param mixed $shipping_amount
     * @param mixed $base_amount_ordered
     * @param mixed $base_shipping_amount
     * @param mixed $method
     * @param mixed $po_number
     * @param mixed $cc_type
     * @param mixed $cc_number_enc
     * @param mixed $cc_last4
     * @param mixed $cc_owner
     * @param mixed $cc_exp_month
     * @param mixed $cc_exp_year
     * @param mixed $cc_ss_start_month
     * @param mixed $cc_ss_start_year
     * @param mixed $payment_id
     */
    public function __construct($increment_id, $parent_id, $created_at, $updated_at, $is_active, $amount_ordered, $shipping_amount, $base_amount_ordered, $base_shipping_amount, $method, $po_number, $cc_type, $cc_number_enc, $cc_last4, $cc_owner, $cc_exp_month, $cc_exp_year, $cc_ss_start_month, $cc_ss_start_year, $payment_id)
    {
        $this->increment_id = $increment_id;
        $this->parent_id = $parent_id;
        $this->created_at = $created_at;
        $this->updated_at = $updated_at;
        $this->is_active = $is_active;
        $this->amount_ordered = $amount_ordered;
        $this->shipping_amount = $shipping_amount;
        $this->base_amount_ordered = $base_amount_ordered;
        $this->base_shipping_amount = $base_shipping_amount;
        $this->method = $method;
        $this->po_number = $po_number;
        $this->cc_type = $cc_type;
        $this->cc_number_enc = $cc_number_enc;
        $this->cc_last4 = $cc_last4;
        $this->cc_owner = $cc_owner;
        $this->cc_exp_month = $cc_exp_month;
        $this->cc_exp_year = $cc_exp_year;
        $this->cc_ss_start_month = $cc_ss_start_month;
        $this->cc_ss_start_year = $cc_ss_start_year;
        $this->payment_id = $payment_id;
    }

    /**
     * @return string
     */
    public function getIncrement_id()
    {
        return $this->increment_id;
    }

    /**
     * @param string $increment_id
     *
     * @return $this
     */
    public function setIncrement_id($increment_id)
    {
        $this->increment_id = $increment_id;

        return $this;
    }

    /**
     * @return string
     */
    public function getParent_id()
    {
        return $this->parent_id;
    }

    /**
     * @param string $parent_id
     *
     * @return $this
     */
    public function setParent_id($parent_id)
    {
        $this->parent_id = $parent_id;

        return $this;
    }

    /**
     * @return string
     */
    public function getCreated_at()
    {
        return $this->created_at;
    }

    /**
     * @param string $created_at
     *
     * @return $this
     */
    public function setCreated_at($created_at)
    {
        $this->created_at = $created_at;

        return $this;
    }

    /**
     * @return string
     */
    public function getUpdated_at()
    {
        return $this->updated_at;
    }

    /**
     * @param string $updated_at
     *
     * @return $this
     */
    public function setUpdated_at($updated_at)
    {
        $this->updated_at = $updated_at;

        return $this;
    }

    /**
     * @return string
     */
    public function getIs_active()
    {
        return $this->is_active;
    }

    /**
     * @param string $is_active
     *
     * @return $this
     */
    public function setIs_active($is_active)
    {
        $this->is_active = $is_active;

        return $this;
    }

    /**
     * @return string
     */
    public function getAmount_ordered()
    {
        return $this->amount_ordered;
    }

    /**
     * @param string $amount_ordered
     *
     * @return $this
     */
    public function setAmount_ordered($amount_ordered)
    {
        $this->amount_ordered = $amount_ordered;

        return $this;
    }

    /**
     * @return string
     */
    public function getShipping_amount()
    {
        return $this->shipping_amount;
    }

    /**
     * @param string $shipping_amount
     *
     * @return $this
     */
    public function setShipping_amount($shipping_amount)
    {
        $this->shipping_amount = $shipping_amount;

        return $this;
    }

    /**
     * @return string
     */
    public function getBase_amount_ordered()
    {
        return $this->base_amount_ordered;
    }

    /**
     * @param string $base_amount_ordered
     *
     * @return $this
     */
    public function setBase_amount_ordered($base_amount_ordered)
    {
        $this->base_amount_ordered = $base_amount_ordered;

        return $this;
    }

    /**
     * @return string
     */
    public function getBase_shipping_amount()
    {
        return $this->base_shipping_amount;
    }

    /**
     * @param string $base_shipping_amount
     *
     * @return $this
     */
    public function setBase_shipping_amount($base_shipping_amount)
    {
        $this->base_shipping_amount = $base_shipping_amount;

        return $this;
    }

    /**
     * @return string
     */
    public function getMethod()
    {
        return $this->method;
    }

    /**
     * @param string $method
     *
     * @return $this
     */
    public function setMethod($method)
    {
        $this->method = $method;

        return $this;
    }

    /**
     * @return string
     */
    public function getPo_number()
    {
        return $this->po_number;
    }

    /**
     * @param string $po_number
     *
     * @return $this
     */
    public function setPo_number($po_number)
    {
        $this->po_number = $po_number;

        return $this;
    }

    /**
     * @return string
     */
    public function getCc_type()
    {
        return $this->cc_type;
    }

    /**
     * @param string $cc_type
     *
     * @return $this
     */
    public function setCc_type($cc_type)
    {
        $this->cc_type = $cc_type;

        return $this;
    }

    /**
     * @return string
     */
    public function getCc_number_enc()
    {
        return $this->cc_number_enc;
    }

    /**
     * @param string $cc_number_enc
     *
     * @return $this
     */
    public function setCc_number_enc($cc_number_enc)
    {
        $this->cc_number_enc = $cc_number_enc;

        return $this;
    }

    /**
     * @return string
     */
    public function getCc_last4()
    {
        return $this->cc_last4;
    }

    /**
     * @param string $cc_last4
     *
     * @return $this
     */
    public function setCc_last4($cc_last4)
    {
        $this->cc_last4 = $cc_last4;

        return $this;
    }

    /**
     * @return string
     */
    public function getCc_owner()
    {
        return $this->cc_owner;
    }

    /**
     * @param string $cc_owner
     *
     * @return $this
     */
    public function setCc_owner($cc_owner)
    {
        $this->cc_owner = $cc_owner;

        return $this;
    }

    /**
     * @return string
     */
    public function getCc_exp_month()
    {
        return $this->cc_exp_month;
    }

    /**
     * @param string $cc_exp_month
     *
     * @return $this
     */
    public function setCc_exp_month($cc_exp_month)
    {
        $this->cc_exp_month = $cc_exp_month;

        return $this;
    }

    /**
     * @return string
     */
    public function getCc_exp_year()
    {
        return $this->cc_exp_year;
    }

    /**
     * @param string $cc_exp_year
     *
     * @return $this
     */
    public function setCc_exp_year($cc_exp_year)
    {
        $this->cc_exp_year = $cc_exp_year;

        return $this;
    }

    /**
     * @return string
     */
    public function getCc_ss_start_month()
    {
        return $this->cc_ss_start_month;
    }

    /**
     * @param string $cc_ss_start_month
     *
     * @return $this
     */
    public function setCc_ss_start_month($cc_ss_start_month)
    {
        $this->cc_ss_start_month = $cc_ss_start_month;

        return $this;
    }

    /**
     * @return string
     */
    public function getCc_ss_start_year()
    {
        return $this->cc_ss_start_year;
    }

    /**
     * @param string $cc_ss_start_year
     *
     * @return $this
     */
    public function setCc_ss_start_year($cc_ss_start_year)
    {
        $this->cc_ss_start_year = $cc_ss_start_year;

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
}
