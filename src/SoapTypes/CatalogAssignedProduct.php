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

class CatalogAssignedProduct
{
    /**
     * @var int
     */
    protected $product_id = null;

    /**
     * @var string
     */
    protected $type = null;

    /**
     * @var int
     */
    protected $set = null;

    /**
     * @var string
     */
    protected $sku = null;

    /**
     * @var int
     */
    protected $position = null;

    /**
     * Constructor.
     *
     * @var int
     * @var string $type
     * @var int    $set
     * @var string $sku
     * @var int    $position
     *
     * @param mixed $product_id
     * @param mixed $type
     * @param mixed $set
     * @param mixed $sku
     * @param mixed $position
     */
    public function __construct($product_id, $type, $set, $sku, $position)
    {
        $this->product_id = $product_id;
        $this->type = $type;
        $this->set = $set;
        $this->sku = $sku;
        $this->position = $position;
    }

    /**
     * @return int
     */
    public function getProduct_id()
    {
        return $this->product_id;
    }

    /**
     * @param int $product_id
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
     * @return int
     */
    public function getSet()
    {
        return $this->set;
    }

    /**
     * @param int $set
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
     * @return int
     */
    public function getPosition()
    {
        return $this->position;
    }

    /**
     * @param int $position
     *
     * @return $this
     */
    public function setPosition($position)
    {
        $this->position = $position;

        return $this;
    }
}
