<?php

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
     * Constructor
     *
     * @var string $code
     * @var string $carrier
     * @var string $carrier_title
     * @var string $method
     * @var string $method_title
     * @var string $method_description
     * @var float $price
     */
    public function __construct($code, $carrier, $carrier_title, $method, $method_title, $method_description, $price)
    {
        $this->code = $code;
        $this->carrier = $carrier;
        $this->carrier_title = $carrier_title;
        $this->method = $method;
        $this->method_title = $method_title;
        $this->method_description = $method_description;
        $this->price = $price;
    }

    /**
     * @return string
     */
    public function getCode()
    {
        return $this->code;
    }

    /**
     * @param string $code
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
    public function getCarrier_title()
    {
        return $this->carrier_title;
    }

    /**
     * @param string $carrier_title
     * @return $this
     */
    public function setCarrier_title($carrier_title)
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
    public function getMethod_title()
    {
        return $this->method_title;
    }

    /**
     * @param string $method_title
     * @return $this
     */
    public function setMethod_title($method_title)
    {
        $this->method_title = $method_title;
        return $this;
    }

    /**
     * @return string
     */
    public function getMethod_description()
    {
        return $this->method_description;
    }

    /**
     * @param string $method_description
     * @return $this
     */
    public function setMethod_description($method_description)
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
     * @return $this
     */
    public function setPrice($price)
    {
        $this->price = $price;
        return $this;
    }


}

