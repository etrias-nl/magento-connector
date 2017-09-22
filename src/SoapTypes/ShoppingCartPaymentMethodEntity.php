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

class ShoppingCartPaymentMethodEntity
{
    /**
     * @var string
     */
    protected $po_number = null;

    /**
     * @var string
     */
    protected $method = null;

    /**
     * @var string
     */
    protected $cc_cid = null;

    /**
     * @var string
     */
    protected $cc_owner = null;

    /**
     * @var string
     */
    protected $cc_number = null;

    /**
     * @var string
     */
    protected $cc_type = null;

    /**
     * @var string
     */
    protected $cc_exp_year = null;

    /**
     * @var string
     */
    protected $cc_exp_month = null;

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
    public function getCcCid()
    {
        return $this->cc_cid;
    }

    /**
     * @param string $cc_cid
     *
     * @return $this
     */
    public function setCcCid($cc_cid)
    {
        $this->cc_cid = $cc_cid;

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
    public function getCcNumber()
    {
        return $this->cc_number;
    }

    /**
     * @param string $cc_number
     *
     * @return $this
     */
    public function setCcNumber($cc_number)
    {
        $this->cc_number = $cc_number;

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
}
