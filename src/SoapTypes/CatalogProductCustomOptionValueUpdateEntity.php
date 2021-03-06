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

class CatalogProductCustomOptionValueUpdateEntity
{
    /**
     * @var string
     */
    protected $title = null;

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
    protected $sku = null;

    /**
     * @var string
     */
    protected $sort_order = null;

    /**
     * Constructor.
     *
     * @var string
     * @var string $price
     * @var string $price_type
     * @var string $sku
     * @var string $sort_order
     *
     * @param mixed $title
     * @param mixed $price
     * @param mixed $price_type
     * @param mixed $sku
     * @param mixed $sort_order
     */
    public function __construct($title, $price, $price_type, $sku)
    {
        $this->title = $title;
        $this->price = $price;
        $this->price_type = $price_type;
        $this->sku = $sku;
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
}
