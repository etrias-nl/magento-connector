<?php

namespace Etrias\MagentoConnector\SoapTypes;

class CatalogProductLinkEntity
{

    /**
     * @var string
     */
    protected $product_id = null;

    /**
     * @var string
     */
    protected $type = null;

    /**
     * @var string
     */
    protected $set = null;

    /**
     * @var string
     */
    protected $sku = null;

    /**
     * @var string
     */
    protected $position = null;

    /**
     * @var string
     */
    protected $qty = null;

    /**
     * Constructor
     *
     * @var string $product_id
     * @var string $type
     * @var string $set
     * @var string $sku
     * @var string $position
     * @var string $qty
     */
    public function __construct($product_id, $type, $set, $sku, $position, $qty)
    {
        $this->product_id = $product_id;
        $this->type = $type;
        $this->set = $set;
        $this->sku = $sku;
        $this->position = $position;
        $this->qty = $qty;
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
     * @return $this
     */
    public function setType($type)
    {
        $this->type = $type;
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
    public function getPosition()
    {
        return $this->position;
    }

    /**
     * @param string $position
     * @return $this
     */
    public function setPosition($position)
    {
        $this->position = $position;
        return $this;
    }

    /**
     * @return string
     */
    public function getQty()
    {
        return $this->qty;
    }

    /**
     * @param string $qty
     * @return $this
     */
    public function setQty($qty)
    {
        $this->qty = $qty;
        return $this;
    }


}

