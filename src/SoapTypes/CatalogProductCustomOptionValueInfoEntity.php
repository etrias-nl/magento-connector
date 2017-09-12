<?php

namespace Etrias\MagentoConnector\SoapTypes;

class CatalogProductCustomOptionValueInfoEntity
{

    /**
     * @var string
     */
    protected $value_id = null;

    /**
     * @var string
     */
    protected $option_id = null;

    /**
     * @var string
     */
    protected $sku = null;

    /**
     * @var string
     */
    protected $sort_order = null;

    /**
     * @var string
     */
    protected $default_price = null;

    /**
     * @var string
     */
    protected $default_price_type = null;

    /**
     * @var string
     */
    protected $store_price = null;

    /**
     * @var string
     */
    protected $store_price_type = null;

    /**
     * @var string
     */
    protected $price = null;

    /**
     * @var string
     */
    protected $price_type = null;

    /**
     * @var string
     */
    protected $default_title = null;

    /**
     * @var string
     */
    protected $store_title = null;

    /**
     * @var string
     */
    protected $title = null;

    /**
     * Constructor
     *
     * @var string $value_id
     * @var string $option_id
     * @var string $sku
     * @var string $sort_order
     * @var string $default_price
     * @var string $default_price_type
     * @var string $store_price
     * @var string $store_price_type
     * @var string $price
     * @var string $price_type
     * @var string $default_title
     * @var string $store_title
     * @var string $title
     */
    public function __construct($value_id, $option_id, $sku, $sort_order, $default_price, $default_price_type, $store_price, $store_price_type, $price, $price_type, $default_title, $store_title, $title)
    {
        $this->value_id = $value_id;
        $this->option_id = $option_id;
        $this->sku = $sku;
        $this->sort_order = $sort_order;
        $this->default_price = $default_price;
        $this->default_price_type = $default_price_type;
        $this->store_price = $store_price;
        $this->store_price_type = $store_price_type;
        $this->price = $price;
        $this->price_type = $price_type;
        $this->default_title = $default_title;
        $this->store_title = $store_title;
        $this->title = $title;
    }

    /**
     * @return string
     */
    public function getValue_id()
    {
        return $this->value_id;
    }

    /**
     * @param string $value_id
     * @return $this
     */
    public function setValue_id($value_id)
    {
        $this->value_id = $value_id;
        return $this;
    }

    /**
     * @return string
     */
    public function getOption_id()
    {
        return $this->option_id;
    }

    /**
     * @param string $option_id
     * @return $this
     */
    public function setOption_id($option_id)
    {
        $this->option_id = $option_id;
        return $this;
    }

    /**
     * @return string
     */
    public function getSku()
    {
        return $this->sku;
    }

    /**
     * @param string $sku
     * @return $this
     */
    public function setSku($sku)
    {
        $this->sku = $sku;
        return $this;
    }

    /**
     * @return string
     */
    public function getSort_order()
    {
        return $this->sort_order;
    }

    /**
     * @param string $sort_order
     * @return $this
     */
    public function setSort_order($sort_order)
    {
        $this->sort_order = $sort_order;
        return $this;
    }

    /**
     * @return string
     */
    public function getDefault_price()
    {
        return $this->default_price;
    }

    /**
     * @param string $default_price
     * @return $this
     */
    public function setDefault_price($default_price)
    {
        $this->default_price = $default_price;
        return $this;
    }

    /**
     * @return string
     */
    public function getDefault_price_type()
    {
        return $this->default_price_type;
    }

    /**
     * @param string $default_price_type
     * @return $this
     */
    public function setDefault_price_type($default_price_type)
    {
        $this->default_price_type = $default_price_type;
        return $this;
    }

    /**
     * @return string
     */
    public function getStore_price()
    {
        return $this->store_price;
    }

    /**
     * @param string $store_price
     * @return $this
     */
    public function setStore_price($store_price)
    {
        $this->store_price = $store_price;
        return $this;
    }

    /**
     * @return string
     */
    public function getStore_price_type()
    {
        return $this->store_price_type;
    }

    /**
     * @param string $store_price_type
     * @return $this
     */
    public function setStore_price_type($store_price_type)
    {
        $this->store_price_type = $store_price_type;
        return $this;
    }

    /**
     * @return string
     */
    public function getPrice()
    {
        return $this->price;
    }

    /**
     * @param string $price
     * @return $this
     */
    public function setPrice($price)
    {
        $this->price = $price;
        return $this;
    }

    /**
     * @return string
     */
    public function getPrice_type()
    {
        return $this->price_type;
    }

    /**
     * @param string $price_type
     * @return $this
     */
    public function setPrice_type($price_type)
    {
        $this->price_type = $price_type;
        return $this;
    }

    /**
     * @return string
     */
    public function getDefault_title()
    {
        return $this->default_title;
    }

    /**
     * @param string $default_title
     * @return $this
     */
    public function setDefault_title($default_title)
    {
        $this->default_title = $default_title;
        return $this;
    }

    /**
     * @return string
     */
    public function getStore_title()
    {
        return $this->store_title;
    }

    /**
     * @param string $store_title
     * @return $this
     */
    public function setStore_title($store_title)
    {
        $this->store_title = $store_title;
        return $this;
    }

    /**
     * @return string
     */
    public function getTitle()
    {
        return $this->title;
    }

    /**
     * @param string $title
     * @return $this
     */
    public function setTitle($title)
    {
        $this->title = $title;
        return $this;
    }


}

