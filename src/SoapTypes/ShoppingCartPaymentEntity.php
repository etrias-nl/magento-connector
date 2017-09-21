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

class ShoppingCartPaymentEntity
{
    /**
     * @var string
     */
    protected $payment_id = null;

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
    protected $method = null;

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
    protected $cc_cid_enc = null;

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
    protected $cc_ss_owner = null;

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
    protected $cc_ss_issue = null;

    /**
     * @var string
     */
    protected $po_number = null;

    /**
     * @var string
     */
    protected $additional_data = null;

    /**
     * @var string
     */
    protected $additional_information = null;

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
    public function getCcCidEnc()
    {
        return $this->cc_cid_enc;
    }

    /**
     * @param string $cc_cid_enc
     *
     * @return $this
     */
    public function setCcCidEnc($cc_cid_enc)
    {
        $this->cc_cid_enc = $cc_cid_enc;

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
    public function getCcSsOwner()
    {
        return $this->cc_ss_owner;
    }

    /**
     * @param string $cc_ss_owner
     *
     * @return $this
     */
    public function setCcSsOwner($cc_ss_owner)
    {
        $this->cc_ss_owner = $cc_ss_owner;

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
    public function getCcSsIssue()
    {
        return $this->cc_ss_issue;
    }

    /**
     * @param string $cc_ss_issue
     *
     * @return $this
     */
    public function setCcSsIssue($cc_ss_issue)
    {
        $this->cc_ss_issue = $cc_ss_issue;

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
    public function getAdditionalData()
    {
        return $this->additional_data;
    }

    /**
     * @param string $additional_data
     *
     * @return $this
     */
    public function setAdditionalData($additional_data)
    {
        $this->additional_data = $additional_data;

        return $this;
    }

    /**
     * @return string
     */
    public function getAdditionalInformation()
    {
        return $this->additional_information;
    }

    /**
     * @param string $additional_information
     *
     * @return $this
     */
    public function setAdditionalInformation($additional_information)
    {
        $this->additional_information = $additional_information;

        return $this;
    }
}
