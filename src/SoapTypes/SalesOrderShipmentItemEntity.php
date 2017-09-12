<?php

namespace Etrias\MagentoConnector\SoapTypes;

class SalesOrderShipmentItemEntity
{

    /**
     * @var string
     */
    protected $increment_id = null;

    /**
     * @var string
     */
    protected $parent_id = null;

    /**
     * @var string
     */
    protected $created_at = null;

    /**
     * @var string
     */
    protected $updated_at = null;

    /**
     * @var string
     */
    protected $is_active = null;

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
    protected $order_item_id = null;

    /**
     * @var string
     */
    protected $product_id = null;

    /**
     * @var string
     */
    protected $weight = null;

    /**
     * @var string
     */
    protected $price = null;

    /**
     * @var string
     */
    protected $qty = null;

    /**
     * @var string
     */
    protected $item_id = null;

    /**
     * Constructor
     *
     * @var string $increment_id
     * @var string $parent_id
     * @var string $created_at
     * @var string $updated_at
     * @var string $is_active
     * @var string $sku
     * @var string $name
     * @var string $order_item_id
     * @var string $product_id
     * @var string $weight
     * @var string $price
     * @var string $qty
     * @var string $item_id
     */
    public function __construct($increment_id, $parent_id, $created_at, $updated_at, $is_active, $sku, $name, $order_item_id, $product_id, $weight, $price, $qty, $item_id)
    {
        $this->increment_id = $increment_id;
        $this->parent_id = $parent_id;
        $this->created_at = $created_at;
        $this->updated_at = $updated_at;
        $this->is_active = $is_active;
        $this->sku = $sku;
        $this->name = $name;
        $this->order_item_id = $order_item_id;
        $this->product_id = $product_id;
        $this->weight = $weight;
        $this->price = $price;
        $this->qty = $qty;
        $this->item_id = $item_id;
    }

    /**
     * @return string
     */
    public function getIncrement_id()
    {
        return $this->increment_id;
    }

    /**
     * @param string $increment_id
     * @return $this
     */
    public function setIncrement_id($increment_id)
    {
        $this->increment_id = $increment_id;
        return $this;
    }

    /**
     * @return string
     */
    public function getParent_id()
    {
        return $this->parent_id;
    }

    /**
     * @param string $parent_id
     * @return $this
     */
    public function setParent_id($parent_id)
    {
        $this->parent_id = $parent_id;
        return $this;
    }

    /**
     * @return string
     */
    public function getCreated_at()
    {
        return $this->created_at;
    }

    /**
     * @param string $created_at
     * @return $this
     */
    public function setCreated_at($created_at)
    {
        $this->created_at = $created_at;
        return $this;
    }

    /**
     * @return string
     */
    public function getUpdated_at()
    {
        return $this->updated_at;
    }

    /**
     * @param string $updated_at
     * @return $this
     */
    public function setUpdated_at($updated_at)
    {
        $this->updated_at = $updated_at;
        return $this;
    }

    /**
     * @return string
     */
    public function getIs_active()
    {
        return $this->is_active;
    }

    /**
     * @param string $is_active
     * @return $this
     */
    public function setIs_active($is_active)
    {
        $this->is_active = $is_active;
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
    public function getName()
    {
        return $this->name;
    }

    /**
     * @param string $name
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
    public function getOrder_item_id()
    {
        return $this->order_item_id;
    }

    /**
     * @param string $order_item_id
     * @return $this
     */
    public function setOrder_item_id($order_item_id)
    {
        $this->order_item_id = $order_item_id;
        return $this;
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
    public function getWeight()
    {
        return $this->weight;
    }

    /**
     * @param string $weight
     * @return $this
     */
    public function setWeight($weight)
    {
        $this->weight = $weight;
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
    public function getItem_id()
    {
        return $this->item_id;
    }

    /**
     * @param string $item_id
     * @return $this
     */
    public function setItem_id($item_id)
    {
        $this->item_id = $item_id;
        return $this;
    }


}

