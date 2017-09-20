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
     * Constructor.
     *
     * @var string
     * @var string $method
     * @var string $cc_cid
     * @var string $cc_owner
     * @var string $cc_number
     * @var string $cc_type
     * @var string $cc_exp_year
     * @var string $cc_exp_month
     *
     * @param mixed $po_number
     * @param mixed $method
     * @param mixed $cc_cid
     * @param mixed $cc_owner
     * @param mixed $cc_number
     * @param mixed $cc_type
     * @param mixed $cc_exp_year
     * @param mixed $cc_exp_month
     */
    public function __construct($po_number, $method, $cc_cid, $cc_owner, $cc_number, $cc_type, $cc_exp_year, $cc_exp_month)
    {
        $this->po_number = $po_number;
        $this->method = $method;
        $this->cc_cid = $cc_cid;
        $this->cc_owner = $cc_owner;
        $this->cc_number = $cc_number;
        $this->cc_type = $cc_type;
        $this->cc_exp_year = $cc_exp_year;
        $this->cc_exp_month = $cc_exp_month;
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
    public function getCc_cid()
    {
        return $this->cc_cid;
    }

    /**
     * @param string $cc_cid
     *
     * @return $this
     */
    public function setCc_cid($cc_cid)
    {
        $this->cc_cid = $cc_cid;

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
    public function getCc_number()
    {
        return $this->cc_number;
    }

    /**
     * @param string $cc_number
     *
     * @return $this
     */
    public function setCc_number($cc_number)
    {
        $this->cc_number = $cc_number;

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
}
