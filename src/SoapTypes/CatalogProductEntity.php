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

class CatalogProductEntity
{
    /**
     * @var string
     */
    protected $product_id = null;

    /**
     * @var string
     */
    protected $sku = null;

    /**
     * @var string
     */
    protected $name = null;

    /**
     * @var string
     */
    protected $set = null;

    /**
     * @var string
     */
    protected $type = null;

    /**
     * @var string[]
     */
    protected $category_ids = null;

    /**
     * @var string[]
     */
    protected $website_ids = null;

    /**
     * Constructor.
     *
     * @var string
     * @var string   $sku
     * @var string   $name
     * @var string   $set
     * @var string   $type
     * @var string[] $category_ids
     * @var string[] $website_ids
     *
     * @param mixed $product_id
     * @param mixed $sku
     * @param mixed $name
     * @param mixed $set
     * @param mixed $type
     * @param mixed $category_ids
     * @param mixed $website_ids
     */
    public function __construct($product_id, $sku, $name, $set, $type, $category_ids, $website_ids)
    {
        $this->product_id = $product_id;
        $this->sku = $sku;
        $this->name = $name;
        $this->set = $set;
        $this->type = $type;
        $this->category_ids = $category_ids;
        $this->website_ids = $website_ids;
    }

    /**
     * @return string
     */
    public function getProduct_id()
    {
        return $this->product_id;
    }

    /**
     * @param string $product_id
     *
     * @return $this
     */
    public function setProduct_id($product_id)
    {
        $this->product_id = $product_id;

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
    public function getName()
    {
        return $this->name;
    }

    /**
     * @param string $name
     *
     * @return $this
     */
    public function setName($name)
    {
        $this->name = $name;

        return $this;
    }

    /**
     * @return string
     */
    public function getSet()
    {
        return $this->set;
    }

    /**
     * @param string $set
     *
     * @return $this
     */
    public function setSet($set)
    {
        $this->set = $set;

        return $this;
    }

    /**
     * @return string
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * @param string $type
     *
     * @return $this
     */
    public function setType($type)
    {
        $this->type = $type;

        return $this;
    }

    /**
     * @return string[]
     */
    public function getCategory_ids()
    {
        return $this->category_ids;
    }

    /**
     * @param string[] $category_ids
     *
     * @return $this
     */
    public function setCategory_ids($category_ids)
    {
        $this->category_ids = $category_ids;

        return $this;
    }

    /**
     * @return string[]
     */
    public function getWebsite_ids()
    {
        return $this->website_ids;
    }

    /**
     * @param string[] $website_ids
     *
     * @return $this
     */
    public function setWebsite_ids($website_ids)
    {
        $this->website_ids = $website_ids;

        return $this;
    }
}
