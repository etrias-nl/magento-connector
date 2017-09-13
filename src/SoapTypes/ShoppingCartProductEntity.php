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

class ShoppingCartProductEntity
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
     * @var float
     */
    protected $qty = null;

    /**
     * @var associativeArray
     */
    protected $options = null;

    /**
     * @var associativeArray
     */
    protected $bundle_option = null;

    /**
     * @var associativeArray
     */
    protected $bundle_option_qty = null;

    /**
     * @var ArrayOfString
     */
    protected $links = null;

    /**
     * Constructor.
     *
     * @var string
     * @var string           $sku
     * @var float            $qty
     * @var associativeArray $options
     * @var associativeArray $bundle_option
     * @var associativeArray $bundle_option_qty
     * @var ArrayOfString    $links
     *
     * @param mixed $product_id
     * @param mixed $sku
     * @param mixed $qty
     * @param mixed $options
     * @param mixed $bundle_option
     * @param mixed $bundle_option_qty
     * @param mixed $links
     */
    public function __construct($product_id, $sku, $qty, $options, $bundle_option, $bundle_option_qty, $links)
    {
        $this->product_id = $product_id;
        $this->sku = $sku;
        $this->qty = $qty;
        $this->options = $options;
        $this->bundle_option = $bundle_option;
        $this->bundle_option_qty = $bundle_option_qty;
        $this->links = $links;
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
     * @return float
     */
    public function getQty()
    {
        return $this->qty;
    }

    /**
     * @param float $qty
     *
     * @return $this
     */
    public function setQty($qty)
    {
        $this->qty = $qty;

        return $this;
    }

    /**
     * @return associativeArray
     */
    public function getOptions()
    {
        return $this->options;
    }

    /**
     * @param associativeArray $options
     *
     * @return $this
     */
    public function setOptions($options)
    {
        $this->options = $options;

        return $this;
    }

    /**
     * @return associativeArray
     */
    public function getBundle_option()
    {
        return $this->bundle_option;
    }

    /**
     * @param associativeArray $bundle_option
     *
     * @return $this
     */
    public function setBundle_option($bundle_option)
    {
        $this->bundle_option = $bundle_option;

        return $this;
    }

    /**
     * @return associativeArray
     */
    public function getBundle_option_qty()
    {
        return $this->bundle_option_qty;
    }

    /**
     * @param associativeArray $bundle_option_qty
     *
     * @return $this
     */
    public function setBundle_option_qty($bundle_option_qty)
    {
        $this->bundle_option_qty = $bundle_option_qty;

        return $this;
    }

    /**
     * @return ArrayOfString
     */
    public function getLinks()
    {
        return $this->links;
    }

    /**
     * @param ArrayOfString $links
     *
     * @return $this
     */
    public function setLinks($links)
    {
        $this->links = $links;

        return $this;
    }
}
