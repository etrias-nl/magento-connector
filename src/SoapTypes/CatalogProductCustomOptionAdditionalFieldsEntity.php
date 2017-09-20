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

class CatalogProductCustomOptionAdditionalFieldsEntity
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
    protected $max_characters = null;

    /**
     * @var string
     */
    protected $sort_order = null;

    /**
     * @var string
     */
    protected $file_extension = null;

    /**
     * @var string
     */
    protected $image_size_x = null;

    /**
     * @var string
     */
    protected $image_size_y = null;

    /**
     * @var string
     */
    protected $value_id = null;

    /**
     * Constructor.
     *
     * @var string
     * @var string $price
     * @var string $price_type
     * @var string $sku
     * @var string $max_characters
     * @var string $sort_order
     * @var string $file_extension
     * @var string $image_size_x
     * @var string $image_size_y
     * @var string $value_id
     *
     * @param mixed $title
     * @param mixed $price
     * @param mixed $price_type
     * @param mixed $sku
     * @param mixed $sort_order
     */
    public function __construct($title, $price, $price_type, $sku, $sort_order)
    {
        $this->title = $title;
        $this->price = $price;
        $this->price_type = $price_type;
        $this->sku = $sku;
        $this->sort_order = $sort_order;
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
    public function getMaxCharacters()
    {
        return $this->max_characters;
    }

    /**
     * @param string $max_characters
     *
     * @return $this
     */
    public function setMaxCharacters($max_characters)
    {
        $this->max_characters = $max_characters;

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
    public function getFileExtension()
    {
        return $this->file_extension;
    }

    /**
     * @param string $file_extension
     *
     * @return $this
     */
    public function setFileExtension($file_extension)
    {
        $this->file_extension = $file_extension;

        return $this;
    }

    /**
     * @return string
     */
    public function getImageSizeX()
    {
        return $this->image_size_x;
    }

    /**
     * @param string $image_size_x
     *
     * @return $this
     */
    public function setImageSizeX($image_size_x)
    {
        $this->image_size_x = $image_size_x;

        return $this;
    }

    /**
     * @return string
     */
    public function getImageSizeY()
    {
        return $this->image_size_y;
    }

    /**
     * @param string $image_size_y
     *
     * @return $this
     */
    public function setImageSizeY($image_size_y)
    {
        $this->image_size_y = $image_size_y;

        return $this;
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
}
