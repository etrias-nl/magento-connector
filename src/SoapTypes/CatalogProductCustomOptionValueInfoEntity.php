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
     * Constructor.
     *
     * @var string
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
     *
     * @param mixed $value_id
     * @param mixed $option_id
     * @param mixed $sku
     * @param mixed $sort_order
     * @param mixed $default_price
     * @param mixed $default_price_type
     * @param mixed $store_price
     * @param mixed $store_price_type
     * @param mixed $price
     * @param mixed $price_type
     * @param mixed $default_title
     * @param mixed $store_title
     * @param mixed $title
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
    public function getValueId()
    {
        return $this->value_id;
    }

    /**
     * @param string $value_id
     *
     * @return $this
     */
    public function setValueId($value_id)
    {
        $this->value_id = $value_id;

        return $this;
    }

    /**
     * @return string
     */
    public function getOptionId()
    {
        return $this->option_id;
    }

    /**
     * @param string $option_id
     *
     * @return $this
     */
    public function setOptionId($option_id)
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
     *
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
    public function getSortOrder()
    {
        return $this->sort_order;
    }

    /**
     * @param string $sort_order
     *
     * @return $this
     */
    public function setSortOrder($sort_order)
    {
        $this->sort_order = $sort_order;

        return $this;
    }

    /**
     * @return string
     */
    public function getDefaultPrice()
    {
        return $this->default_price;
    }

    /**
     * @param string $default_price
     *
     * @return $this
     */
    public function setDefaultPrice($default_price)
    {
        $this->default_price = $default_price;

        return $this;
    }

    /**
     * @return string
     */
    public function getDefaultPriceType()
    {
        return $this->default_price_type;
    }

    /**
     * @param string $default_price_type
     *
     * @return $this
     */
    public function setDefaultPriceType($default_price_type)
    {
        $this->default_price_type = $default_price_type;

        return $this;
    }

    /**
     * @return string
     */
    public function getStorePrice()
    {
        return $this->store_price;
    }

    /**
     * @param string $store_price
     *
     * @return $this
     */
    public function setStorePrice($store_price)
    {
        $this->store_price = $store_price;

        return $this;
    }

    /**
     * @return string
     */
    public function getStorePriceType()
    {
        return $this->store_price_type;
    }

    /**
     * @param string $store_price_type
     *
     * @return $this
     */
    public function setStorePriceType($store_price_type)
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
     *
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
    public function getPriceType()
    {
        return $this->price_type;
    }

    /**
     * @param string $price_type
     *
     * @return $this
     */
    public function setPriceType($price_type)
    {
        $this->price_type = $price_type;

        return $this;
    }

    /**
     * @return string
     */
    public function getDefaultTitle()
    {
        return $this->default_title;
    }

    /**
     * @param string $default_title
     *
     * @return $this
     */
    public function setDefaultTitle($default_title)
    {
        $this->default_title = $default_title;

        return $this;
    }

    /**
     * @return string
     */
    public function getStoreTitle()
    {
        return $this->store_title;
    }

    /**
     * @param string $store_title
     *
     * @return $this
     */
    public function setStoreTitle($store_title)
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
     *
     * @return $this
     */
    public function setTitle($title)
    {
        $this->title = $title;

        return $this;
    }
}
