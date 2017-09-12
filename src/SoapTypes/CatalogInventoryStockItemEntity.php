<?php

namespace Etrias\MagentoConnector\SoapTypes;

class CatalogInventoryStockItemEntity
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
    protected $qty = null;

    /**
     * @var string
     */
    protected $is_in_stock = null;

    /**
     * Constructor
     *
     * @var string $product_id
     * @var string $sku
     * @var string $qty
     * @var string $is_in_stock
     */
    public function __construct($product_id, $sku, $qty, $is_in_stock)
    {
        $this->product_id = $product_id;
        $this->sku = $sku;
        $this->qty = $qty;
        $this->is_in_stock = $is_in_stock;
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

    /**
     * @return string
     */
    public function getIs_in_stock()
    {
        return $this->is_in_stock;
    }

    /**
     * @param string $is_in_stock
     * @return $this
     */
    public function setIs_in_stock($is_in_stock)
    {
        $this->is_in_stock = $is_in_stock;
        return $this;
    }


}

