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

class ShoppingCartShippingMethodEntity
{
    /**
     * @var string
     */
    protected $code = null;

    /**
     * @var string
     */
    protected $carrier = null;

    /**
     * @var string
     */
    protected $carrier_title = null;

    /**
     * @var string
     */
    protected $method = null;

    /**
     * @var string
     */
    protected $method_title = null;

    /**
     * @var string
     */
    protected $method_description = null;

    /**
     * @var float
     */
    protected $price = null;

    /**
     * @return string
     */
    public function getCode()
    {
        return $this->code;
    }

    /**
     * @param string $code
     *
     * @return $this
     */
    public function setCode($code)
    {
        $this->code = $code;

        return $this;
    }

    /**
     * @return string
     */
    public function getCarrier()
    {
        return $this->carrier;
    }

    /**
     * @param string $carrier
     *
     * @return $this
     */
    public function setCarrier($carrier)
    {
        $this->carrier = $carrier;

        return $this;
    }

    /**
     * @return string
     */
    public function getCarrierTitle()
    {
        return $this->carrier_title;
    }

    /**
     * @param string $carrier_title
     *
     * @return $this
     */
    public function setCarrierTitle($carrier_title)
    {
        $this->carrier_title = $carrier_title;

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
    public function getMethodTitle()
    {
        return $this->method_title;
    }

    /**
     * @param string $method_title
     *
     * @return $this
     */
    public function setMethodTitle($method_title)
    {
        $this->method_title = $method_title;

        return $this;
    }

    /**
     * @return string
     */
    public function getMethodDescription()
    {
        return $this->method_description;
    }

    /**
     * @param string $method_description
     *
     * @return $this
     */
    public function setMethodDescription($method_description)
    {
        $this->method_description = $method_description;

        return $this;
    }

    /**
     * @return float
     */
    public function getPrice()
    {
        return $this->price;
    }

    /**
     * @param float $price
     *
     * @return $this
     */
    public function setPrice($price)
    {
        $this->price = $price;

        return $this;
    }
}
