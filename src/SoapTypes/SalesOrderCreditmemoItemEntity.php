<?php

namespace Etrias\MagentoConnector\SoapTypes;

class SalesOrderCreditmemoItemEntity
{

    /**
     * @var string
     */
    protected $item_id = null;

    /**
     * @var string
     */
    protected $parent_id = null;

    /**
     * @var string
     */
    protected $weee_tax_applied_row_amount = null;

    /**
     * @var string
     */
    protected $base_price = null;

    /**
     * @var string
     */
    protected $base_weee_tax_row_disposition = null;

    /**
     * @var string
     */
    protected $tax_amount = null;

    /**
     * @var string
     */
    protected $base_weee_tax_applied_amount = null;

    /**
     * @var string
     */
    protected $weee_tax_row_disposition = null;

    /**
     * @var string
     */
    protected $base_row_total = null;

    /**
     * @var string
     */
    protected $discount_amount = null;

    /**
     * @var string
     */
    protected $row_total = null;

    /**
     * @var string
     */
    protected $weee_tax_applied_amount = null;

    /**
     * @var string
     */
    protected $base_discount_amount = null;

    /**
     * @var string
     */
    protected $base_weee_tax_disposition = null;

    /**
     * @var string
     */
    protected $price_incl_tax = null;

    /**
     * @var string
     */
    protected $base_tax_amount = null;

    /**
     * @var string
     */
    protected $weee_tax_disposition = null;

    /**
     * @var string
     */
    protected $base_price_incl_tax = null;

    /**
     * @var string
     */
    protected $qty = null;

    /**
     * @var string
     */
    protected $base_cost = null;

    /**
     * @var string
     */
    protected $base_weee_tax_applied_row_amount = null;

    /**
     * @var string
     */
    protected $price = null;

    /**
     * @var string
     */
    protected $base_row_total_incl_tax = null;

    /**
     * @var string
     */
    protected $row_total_incl_tax = null;

    /**
     * @var string
     */
    protected $product_id = null;

    /**
     * @var string
     */
    protected $order_item_id = null;

    /**
     * @var string
     */
    protected $additional_data = null;

    /**
     * @var string
     */
    protected $description = null;

    /**
     * @var string
     */
    protected $weee_tax_applied = null;

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
    protected $hidden_tax_amount = null;

    /**
     * @var string
     */
    protected $base_hidden_tax_amount = null;

    /**
     * Constructor
     *
     * @var string $item_id
     * @var string $parent_id
     * @var string $weee_tax_applied_row_amount
     * @var string $base_price
     * @var string $base_weee_tax_row_disposition
     * @var string $tax_amount
     * @var string $base_weee_tax_applied_amount
     * @var string $weee_tax_row_disposition
     * @var string $base_row_total
     * @var string $discount_amount
     * @var string $row_total
     * @var string $weee_tax_applied_amount
     * @var string $base_discount_amount
     * @var string $base_weee_tax_disposition
     * @var string $price_incl_tax
     * @var string $base_tax_amount
     * @var string $weee_tax_disposition
     * @var string $base_price_incl_tax
     * @var string $qty
     * @var string $base_cost
     * @var string $base_weee_tax_applied_row_amount
     * @var string $price
     * @var string $base_row_total_incl_tax
     * @var string $row_total_incl_tax
     * @var string $product_id
     * @var string $order_item_id
     * @var string $additional_data
     * @var string $description
     * @var string $weee_tax_applied
     * @var string $sku
     * @var string $name
     * @var string $hidden_tax_amount
     * @var string $base_hidden_tax_amount
     */
    public function __construct($item_id, $parent_id, $weee_tax_applied_row_amount, $base_price, $base_weee_tax_row_disposition, $tax_amount, $base_weee_tax_applied_amount, $weee_tax_row_disposition, $base_row_total, $discount_amount, $row_total, $weee_tax_applied_amount, $base_discount_amount, $base_weee_tax_disposition, $price_incl_tax, $base_tax_amount, $weee_tax_disposition, $base_price_incl_tax, $qty, $base_cost, $base_weee_tax_applied_row_amount, $price, $base_row_total_incl_tax, $row_total_incl_tax, $product_id, $order_item_id, $additional_data, $description, $weee_tax_applied, $sku, $name, $hidden_tax_amount, $base_hidden_tax_amount)
    {
        $this->item_id = $item_id;
        $this->parent_id = $parent_id;
        $this->weee_tax_applied_row_amount = $weee_tax_applied_row_amount;
        $this->base_price = $base_price;
        $this->base_weee_tax_row_disposition = $base_weee_tax_row_disposition;
        $this->tax_amount = $tax_amount;
        $this->base_weee_tax_applied_amount = $base_weee_tax_applied_amount;
        $this->weee_tax_row_disposition = $weee_tax_row_disposition;
        $this->base_row_total = $base_row_total;
        $this->discount_amount = $discount_amount;
        $this->row_total = $row_total;
        $this->weee_tax_applied_amount = $weee_tax_applied_amount;
        $this->base_discount_amount = $base_discount_amount;
        $this->base_weee_tax_disposition = $base_weee_tax_disposition;
        $this->price_incl_tax = $price_incl_tax;
        $this->base_tax_amount = $base_tax_amount;
        $this->weee_tax_disposition = $weee_tax_disposition;
        $this->base_price_incl_tax = $base_price_incl_tax;
        $this->qty = $qty;
        $this->base_cost = $base_cost;
        $this->base_weee_tax_applied_row_amount = $base_weee_tax_applied_row_amount;
        $this->price = $price;
        $this->base_row_total_incl_tax = $base_row_total_incl_tax;
        $this->row_total_incl_tax = $row_total_incl_tax;
        $this->product_id = $product_id;
        $this->order_item_id = $order_item_id;
        $this->additional_data = $additional_data;
        $this->description = $description;
        $this->weee_tax_applied = $weee_tax_applied;
        $this->sku = $sku;
        $this->name = $name;
        $this->hidden_tax_amount = $hidden_tax_amount;
        $this->base_hidden_tax_amount = $base_hidden_tax_amount;
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
    public function getWeee_tax_applied_row_amount()
    {
        return $this->weee_tax_applied_row_amount;
    }

    /**
     * @param string $weee_tax_applied_row_amount
     * @return $this
     */
    public function setWeee_tax_applied_row_amount($weee_tax_applied_row_amount)
    {
        $this->weee_tax_applied_row_amount = $weee_tax_applied_row_amount;
        return $this;
    }

    /**
     * @return string
     */
    public function getBase_price()
    {
        return $this->base_price;
    }

    /**
     * @param string $base_price
     * @return $this
     */
    public function setBase_price($base_price)
    {
        $this->base_price = $base_price;
        return $this;
    }

    /**
     * @return string
     */
    public function getBase_weee_tax_row_disposition()
    {
        return $this->base_weee_tax_row_disposition;
    }

    /**
     * @param string $base_weee_tax_row_disposition
     * @return $this
     */
    public function setBase_weee_tax_row_disposition($base_weee_tax_row_disposition)
    {
        $this->base_weee_tax_row_disposition = $base_weee_tax_row_disposition;
        return $this;
    }

    /**
     * @return string
     */
    public function getTax_amount()
    {
        return $this->tax_amount;
    }

    /**
     * @param string $tax_amount
     * @return $this
     */
    public function setTax_amount($tax_amount)
    {
        $this->tax_amount = $tax_amount;
        return $this;
    }

    /**
     * @return string
     */
    public function getBase_weee_tax_applied_amount()
    {
        return $this->base_weee_tax_applied_amount;
    }

    /**
     * @param string $base_weee_tax_applied_amount
     * @return $this
     */
    public function setBase_weee_tax_applied_amount($base_weee_tax_applied_amount)
    {
        $this->base_weee_tax_applied_amount = $base_weee_tax_applied_amount;
        return $this;
    }

    /**
     * @return string
     */
    public function getWeee_tax_row_disposition()
    {
        return $this->weee_tax_row_disposition;
    }

    /**
     * @param string $weee_tax_row_disposition
     * @return $this
     */
    public function setWeee_tax_row_disposition($weee_tax_row_disposition)
    {
        $this->weee_tax_row_disposition = $weee_tax_row_disposition;
        return $this;
    }

    /**
     * @return string
     */
    public function getBase_row_total()
    {
        return $this->base_row_total;
    }

    /**
     * @param string $base_row_total
     * @return $this
     */
    public function setBase_row_total($base_row_total)
    {
        $this->base_row_total = $base_row_total;
        return $this;
    }

    /**
     * @return string
     */
    public function getDiscount_amount()
    {
        return $this->discount_amount;
    }

    /**
     * @param string $discount_amount
     * @return $this
     */
    public function setDiscount_amount($discount_amount)
    {
        $this->discount_amount = $discount_amount;
        return $this;
    }

    /**
     * @return string
     */
    public function getRow_total()
    {
        return $this->row_total;
    }

    /**
     * @param string $row_total
     * @return $this
     */
    public function setRow_total($row_total)
    {
        $this->row_total = $row_total;
        return $this;
    }

    /**
     * @return string
     */
    public function getWeee_tax_applied_amount()
    {
        return $this->weee_tax_applied_amount;
    }

    /**
     * @param string $weee_tax_applied_amount
     * @return $this
     */
    public function setWeee_tax_applied_amount($weee_tax_applied_amount)
    {
        $this->weee_tax_applied_amount = $weee_tax_applied_amount;
        return $this;
    }

    /**
     * @return string
     */
    public function getBase_discount_amount()
    {
        return $this->base_discount_amount;
    }

    /**
     * @param string $base_discount_amount
     * @return $this
     */
    public function setBase_discount_amount($base_discount_amount)
    {
        $this->base_discount_amount = $base_discount_amount;
        return $this;
    }

    /**
     * @return string
     */
    public function getBase_weee_tax_disposition()
    {
        return $this->base_weee_tax_disposition;
    }

    /**
     * @param string $base_weee_tax_disposition
     * @return $this
     */
    public function setBase_weee_tax_disposition($base_weee_tax_disposition)
    {
        $this->base_weee_tax_disposition = $base_weee_tax_disposition;
        return $this;
    }

    /**
     * @return string
     */
    public function getPrice_incl_tax()
    {
        return $this->price_incl_tax;
    }

    /**
     * @param string $price_incl_tax
     * @return $this
     */
    public function setPrice_incl_tax($price_incl_tax)
    {
        $this->price_incl_tax = $price_incl_tax;
        return $this;
    }

    /**
     * @return string
     */
    public function getBase_tax_amount()
    {
        return $this->base_tax_amount;
    }

    /**
     * @param string $base_tax_amount
     * @return $this
     */
    public function setBase_tax_amount($base_tax_amount)
    {
        $this->base_tax_amount = $base_tax_amount;
        return $this;
    }

    /**
     * @return string
     */
    public function getWeee_tax_disposition()
    {
        return $this->weee_tax_disposition;
    }

    /**
     * @param string $weee_tax_disposition
     * @return $this
     */
    public function setWeee_tax_disposition($weee_tax_disposition)
    {
        $this->weee_tax_disposition = $weee_tax_disposition;
        return $this;
    }

    /**
     * @return string
     */
    public function getBase_price_incl_tax()
    {
        return $this->base_price_incl_tax;
    }

    /**
     * @param string $base_price_incl_tax
     * @return $this
     */
    public function setBase_price_incl_tax($base_price_incl_tax)
    {
        $this->base_price_incl_tax = $base_price_incl_tax;
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
    public function getBase_cost()
    {
        return $this->base_cost;
    }

    /**
     * @param string $base_cost
     * @return $this
     */
    public function setBase_cost($base_cost)
    {
        $this->base_cost = $base_cost;
        return $this;
    }

    /**
     * @return string
     */
    public function getBase_weee_tax_applied_row_amount()
    {
        return $this->base_weee_tax_applied_row_amount;
    }

    /**
     * @param string $base_weee_tax_applied_row_amount
     * @return $this
     */
    public function setBase_weee_tax_applied_row_amount($base_weee_tax_applied_row_amount)
    {
        $this->base_weee_tax_applied_row_amount = $base_weee_tax_applied_row_amount;
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
    public function getBase_row_total_incl_tax()
    {
        return $this->base_row_total_incl_tax;
    }

    /**
     * @param string $base_row_total_incl_tax
     * @return $this
     */
    public function setBase_row_total_incl_tax($base_row_total_incl_tax)
    {
        $this->base_row_total_incl_tax = $base_row_total_incl_tax;
        return $this;
    }

    /**
     * @return string
     */
    public function getRow_total_incl_tax()
    {
        return $this->row_total_incl_tax;
    }

    /**
     * @param string $row_total_incl_tax
     * @return $this
     */
    public function setRow_total_incl_tax($row_total_incl_tax)
    {
        $this->row_total_incl_tax = $row_total_incl_tax;
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
    public function getAdditional_data()
    {
        return $this->additional_data;
    }

    /**
     * @param string $additional_data
     * @return $this
     */
    public function setAdditional_data($additional_data)
    {
        $this->additional_data = $additional_data;
        return $this;
    }

    /**
     * @return string
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * @param string $description
     * @return $this
     */
    public function setDescription($description)
    {
        $this->description = $description;
        return $this;
    }

    /**
     * @return string
     */
    public function getWeee_tax_applied()
    {
        return $this->weee_tax_applied;
    }

    /**
     * @param string $weee_tax_applied
     * @return $this
     */
    public function setWeee_tax_applied($weee_tax_applied)
    {
        $this->weee_tax_applied = $weee_tax_applied;
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
    public function getHidden_tax_amount()
    {
        return $this->hidden_tax_amount;
    }

    /**
     * @param string $hidden_tax_amount
     * @return $this
     */
    public function setHidden_tax_amount($hidden_tax_amount)
    {
        $this->hidden_tax_amount = $hidden_tax_amount;
        return $this;
    }

    /**
     * @return string
     */
    public function getBase_hidden_tax_amount()
    {
        return $this->base_hidden_tax_amount;
    }

    /**
     * @param string $base_hidden_tax_amount
     * @return $this
     */
    public function setBase_hidden_tax_amount($base_hidden_tax_amount)
    {
        $this->base_hidden_tax_amount = $base_hidden_tax_amount;
        return $this;
    }


}

