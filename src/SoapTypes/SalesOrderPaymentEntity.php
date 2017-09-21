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
     * @return string
     */
    public function getIncrementId()
    {
        return $this->increment_id;
    }

    /**
     * @param string $increment_id
     *
     * @return $this
     */
    public function setIncrementId($increment_id)
    {
        $this->increment_id = $increment_id;

        return $this;
    }

    /**
     * @return string
     */
    public function getParentId()
    {
        return $this->parent_id;
    }

    /**
     * @param string $parent_id
     *
     * @return $this
     */
    public function setParentId($parent_id)
    {
        $this->parent_id = $parent_id;

        return $this;
    }

    /**
     * @return string
     */
    public function getCreatedAt()
    {
        return $this->created_at;
    }

    /**
     * @param string $created_at
     *
     * @return $this
     */
    public function setCreatedAt($created_at)
    {
        $this->created_at = $created_at;

        return $this;
    }

    /**
     * @return string
     */
    public function getUpdatedAt()
    {
        return $this->updated_at;
    }

    /**
     * @param string $updated_at
     *
     * @return $this
     */
    public function setUpdatedAt($updated_at)
    {
        $this->updated_at = $updated_at;

        return $this;
    }

    /**
     * @return string
     */
    public function getIsActive()
    {
        return $this->is_active;
    }

    /**
     * @param string $is_active
     *
     * @return $this
     */
    public function setIsActive($is_active)
    {
        $this->is_active = $is_active;

        return $this;
    }

    /**
     * @return string
     */
    public function getAmountOrdered()
    {
        return $this->amount_ordered;
    }

    /**
     * @param string $amount_ordered
     *
     * @return $this
     */
    public function setAmountOrdered($amount_ordered)
    {
        $this->amount_ordered = $amount_ordered;

        return $this;
    }

    /**
     * @return string
     */
    public function getShippingAmount()
    {
        return $this->shipping_amount;
    }

    /**
     * @param string $shipping_amount
     *
     * @return $this
     */
    public function setShippingAmount($shipping_amount)
    {
        $this->shipping_amount = $shipping_amount;

        return $this;
    }

    /**
     * @return string
     */
    public function getBaseAmountOrdered()
    {
        return $this->base_amount_ordered;
    }

    /**
     * @param string $base_amount_ordered
     *
     * @return $this
     */
    public function setBaseAmountOrdered($base_amount_ordered)
    {
        $this->base_amount_ordered = $base_amount_ordered;

        return $this;
    }

    /**
     * @return string
     */
    public function getBaseShippingAmount()
    {
        return $this->base_shipping_amount;
    }

    /**
     * @param string $base_shipping_amount
     *
     * @return $this
     */
    public function setBaseShippingAmount($base_shipping_amount)
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
    public function getPoNumber()
    {
        return $this->po_number;
    }

    /**
     * @param string $po_number
     *
     * @return $this
     */
    public function setPoNumber($po_number)
    {
        $this->po_number = $po_number;

        return $this;
    }

    /**
     * @return string
     */
    public function getCcType()
    {
        return $this->cc_type;
    }

    /**
     * @param string $cc_type
     *
     * @return $this
     */
    public function setCcType($cc_type)
    {
        $this->cc_type = $cc_type;

        return $this;
    }

    /**
     * @return string
     */
    public function getCcNumberEnc()
    {
        return $this->cc_number_enc;
    }

    /**
     * @param string $cc_number_enc
     *
     * @return $this
     */
    public function setCcNumberEnc($cc_number_enc)
    {
        $this->cc_number_enc = $cc_number_enc;

        return $this;
    }

    /**
     * @return string
     */
    public function getCcLast4()
    {
        return $this->cc_last4;
    }

    /**
     * @param string $cc_last4
     *
     * @return $this
     */
    public function setCcLast4($cc_last4)
    {
        $this->cc_last4 = $cc_last4;

        return $this;
    }

    /**
     * @return string
     */
    public function getCcOwner()
    {
        return $this->cc_owner;
    }

    /**
     * @param string $cc_owner
     *
     * @return $this
     */
    public function setCcOwner($cc_owner)
    {
        $this->cc_owner = $cc_owner;

        return $this;
    }

    /**
     * @return string
     */
    public function getCcExpMonth()
    {
        return $this->cc_exp_month;
    }

    /**
     * @param string $cc_exp_month
     *
     * @return $this
     */
    public function setCcExpMonth($cc_exp_month)
    {
        $this->cc_exp_month = $cc_exp_month;

        return $this;
    }

    /**
     * @return string
     */
    public function getCcExpYear()
    {
        return $this->cc_exp_year;
    }

    /**
     * @param string $cc_exp_year
     *
     * @return $this
     */
    public function setCcExpYear($cc_exp_year)
    {
        $this->cc_exp_year = $cc_exp_year;

        return $this;
    }

    /**
     * @return string
     */
    public function getCcSsStartMonth()
    {
        return $this->cc_ss_start_month;
    }

    /**
     * @param string $cc_ss_start_month
     *
     * @return $this
     */
    public function setCcSsStartMonth($cc_ss_start_month)
    {
        $this->cc_ss_start_month = $cc_ss_start_month;

        return $this;
    }

    /**
     * @return string
     */
    public function getCcSsStartYear()
    {
        return $this->cc_ss_start_year;
    }

    /**
     * @param string $cc_ss_start_year
     *
     * @return $this
     */
    public function setCcSsStartYear($cc_ss_start_year)
    {
        $this->cc_ss_start_year = $cc_ss_start_year;

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
}
