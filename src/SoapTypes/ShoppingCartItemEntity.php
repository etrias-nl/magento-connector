<?php

namespace Etrias\MagentoConnector\SoapTypes;

class ShoppingCartItemEntity
{

    /**
     * @var string
     */
    protected $item_id = null;

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
    protected $product_id = null;

    /**
     * @var string
     */
    protected $store_id = null;

    /**
     * @var string
     */
    protected $parent_item_id = null;

    /**
     * @var int
     */
    protected $is_virtual = null;

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
    protected $description = null;

    /**
     * @var string
     */
    protected $applied_rule_ids = null;

    /**
     * @var string
     */
    protected $additional_data = null;

    /**
     * @var string
     */
    protected $free_shipping = null;

    /**
     * @var string
     */
    protected $is_qty_decimal = null;

    /**
     * @var string
     */
    protected $no_discount = null;

    /**
     * @var float
     */
    protected $weight = null;

    /**
     * @var float
     */
    protected $qty = null;

    /**
     * @var float
     */
    protected $price = null;

    /**
     * @var float
     */
    protected $base_price = null;

    /**
     * @var float
     */
    protected $custom_price = null;

    /**
     * @var float
     */
    protected $discount_percent = null;

    /**
     * @var float
     */
    protected $discount_amount = null;

    /**
     * @var float
     */
    protected $base_discount_amount = null;

    /**
     * @var float
     */
    protected $tax_percent = null;

    /**
     * @var float
     */
    protected $tax_amount = null;

    /**
     * @var float
     */
    protected $base_tax_amount = null;

    /**
     * @var float
     */
    protected $row_total = null;

    /**
     * @var float
     */
    protected $base_row_total = null;

    /**
     * @var float
     */
    protected $row_total_with_discount = null;

    /**
     * @var float
     */
    protected $row_weight = null;

    /**
     * @var string
     */
    protected $product_type = null;

    /**
     * @var float
     */
    protected $base_tax_before_discount = null;

    /**
     * @var float
     */
    protected $tax_before_discount = null;

    /**
     * @var float
     */
    protected $original_custom_price = null;

    /**
     * @var float
     */
    protected $base_cost = null;

    /**
     * @var float
     */
    protected $price_incl_tax = null;

    /**
     * @var float
     */
    protected $base_price_incl_tax = null;

    /**
     * @var float
     */
    protected $row_total_incl_tax = null;

    /**
     * @var float
     */
    protected $base_row_total_incl_tax = null;

    /**
     * @var string
     */
    protected $gift_message_id = null;

    /**
     * @var string
     */
    protected $gift_message = null;

    /**
     * @var string
     */
    protected $gift_message_available = null;

    /**
     * @var float
     */
    protected $weee_tax_applied = null;

    /**
     * @var float
     */
    protected $weee_tax_applied_amount = null;

    /**
     * @var float
     */
    protected $weee_tax_applied_row_amount = null;

    /**
     * @var float
     */
    protected $base_weee_tax_applied_amount = null;

    /**
     * @var float
     */
    protected $base_weee_tax_applied_row_amount = null;

    /**
     * @var float
     */
    protected $weee_tax_disposition = null;

    /**
     * @var float
     */
    protected $weee_tax_row_disposition = null;

    /**
     * @var float
     */
    protected $base_weee_tax_disposition = null;

    /**
     * @var float
     */
    protected $base_weee_tax_row_disposition = null;

    /**
     * @var string
     */
    protected $tax_class_id = null;

    /**
     * Constructor
     *
     * @var string $item_id
     * @var string $created_at
     * @var string $updated_at
     * @var string $product_id
     * @var string $store_id
     * @var string $parent_item_id
     * @var int $is_virtual
     * @var string $sku
     * @var string $name
     * @var string $description
     * @var string $applied_rule_ids
     * @var string $additional_data
     * @var string $free_shipping
     * @var string $is_qty_decimal
     * @var string $no_discount
     * @var float $weight
     * @var float $qty
     * @var float $price
     * @var float $base_price
     * @var float $custom_price
     * @var float $discount_percent
     * @var float $discount_amount
     * @var float $base_discount_amount
     * @var float $tax_percent
     * @var float $tax_amount
     * @var float $base_tax_amount
     * @var float $row_total
     * @var float $base_row_total
     * @var float $row_total_with_discount
     * @var float $row_weight
     * @var string $product_type
     * @var float $base_tax_before_discount
     * @var float $tax_before_discount
     * @var float $original_custom_price
     * @var float $base_cost
     * @var float $price_incl_tax
     * @var float $base_price_incl_tax
     * @var float $row_total_incl_tax
     * @var float $base_row_total_incl_tax
     * @var string $gift_message_id
     * @var string $gift_message
     * @var string $gift_message_available
     * @var float $weee_tax_applied
     * @var float $weee_tax_applied_amount
     * @var float $weee_tax_applied_row_amount
     * @var float $base_weee_tax_applied_amount
     * @var float $base_weee_tax_applied_row_amount
     * @var float $weee_tax_disposition
     * @var float $weee_tax_row_disposition
     * @var float $base_weee_tax_disposition
     * @var float $base_weee_tax_row_disposition
     * @var string $tax_class_id
     */
    public function __construct($item_id, $created_at, $updated_at, $product_id, $store_id, $parent_item_id, $is_virtual, $sku, $name, $description, $applied_rule_ids, $additional_data, $free_shipping, $is_qty_decimal, $no_discount, $weight, $qty, $price, $base_price, $custom_price, $discount_percent, $discount_amount, $base_discount_amount, $tax_percent, $tax_amount, $base_tax_amount, $row_total, $base_row_total, $row_total_with_discount, $row_weight, $product_type, $base_tax_before_discount, $tax_before_discount, $original_custom_price, $base_cost, $price_incl_tax, $base_price_incl_tax, $row_total_incl_tax, $base_row_total_incl_tax, $gift_message_id, $gift_message, $gift_message_available, $weee_tax_applied, $weee_tax_applied_amount, $weee_tax_applied_row_amount, $base_weee_tax_applied_amount, $base_weee_tax_applied_row_amount, $weee_tax_disposition, $weee_tax_row_disposition, $base_weee_tax_disposition, $base_weee_tax_row_disposition, $tax_class_id)
    {
        $this->item_id = $item_id;
        $this->created_at = $created_at;
        $this->updated_at = $updated_at;
        $this->product_id = $product_id;
        $this->store_id = $store_id;
        $this->parent_item_id = $parent_item_id;
        $this->is_virtual = $is_virtual;
        $this->sku = $sku;
        $this->name = $name;
        $this->description = $description;
        $this->applied_rule_ids = $applied_rule_ids;
        $this->additional_data = $additional_data;
        $this->free_shipping = $free_shipping;
        $this->is_qty_decimal = $is_qty_decimal;
        $this->no_discount = $no_discount;
        $this->weight = $weight;
        $this->qty = $qty;
        $this->price = $price;
        $this->base_price = $base_price;
        $this->custom_price = $custom_price;
        $this->discount_percent = $discount_percent;
        $this->discount_amount = $discount_amount;
        $this->base_discount_amount = $base_discount_amount;
        $this->tax_percent = $tax_percent;
        $this->tax_amount = $tax_amount;
        $this->base_tax_amount = $base_tax_amount;
        $this->row_total = $row_total;
        $this->base_row_total = $base_row_total;
        $this->row_total_with_discount = $row_total_with_discount;
        $this->row_weight = $row_weight;
        $this->product_type = $product_type;
        $this->base_tax_before_discount = $base_tax_before_discount;
        $this->tax_before_discount = $tax_before_discount;
        $this->original_custom_price = $original_custom_price;
        $this->base_cost = $base_cost;
        $this->price_incl_tax = $price_incl_tax;
        $this->base_price_incl_tax = $base_price_incl_tax;
        $this->row_total_incl_tax = $row_total_incl_tax;
        $this->base_row_total_incl_tax = $base_row_total_incl_tax;
        $this->gift_message_id = $gift_message_id;
        $this->gift_message = $gift_message;
        $this->gift_message_available = $gift_message_available;
        $this->weee_tax_applied = $weee_tax_applied;
        $this->weee_tax_applied_amount = $weee_tax_applied_amount;
        $this->weee_tax_applied_row_amount = $weee_tax_applied_row_amount;
        $this->base_weee_tax_applied_amount = $base_weee_tax_applied_amount;
        $this->base_weee_tax_applied_row_amount = $base_weee_tax_applied_row_amount;
        $this->weee_tax_disposition = $weee_tax_disposition;
        $this->weee_tax_row_disposition = $weee_tax_row_disposition;
        $this->base_weee_tax_disposition = $base_weee_tax_disposition;
        $this->base_weee_tax_row_disposition = $base_weee_tax_row_disposition;
        $this->tax_class_id = $tax_class_id;
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
    public function getStore_id()
    {
        return $this->store_id;
    }

    /**
     * @param string $store_id
     * @return $this
     */
    public function setStore_id($store_id)
    {
        $this->store_id = $store_id;
        return $this;
    }

    /**
     * @return string
     */
    public function getParent_item_id()
    {
        return $this->parent_item_id;
    }

    /**
     * @param string $parent_item_id
     * @return $this
     */
    public function setParent_item_id($parent_item_id)
    {
        $this->parent_item_id = $parent_item_id;
        return $this;
    }

    /**
     * @return int
     */
    public function getIs_virtual()
    {
        return $this->is_virtual;
    }

    /**
     * @param int $is_virtual
     * @return $this
     */
    public function setIs_virtual($is_virtual)
    {
        $this->is_virtual = $is_virtual;
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
    public function getApplied_rule_ids()
    {
        return $this->applied_rule_ids;
    }

    /**
     * @param string $applied_rule_ids
     * @return $this
     */
    public function setApplied_rule_ids($applied_rule_ids)
    {
        $this->applied_rule_ids = $applied_rule_ids;
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
    public function getFree_shipping()
    {
        return $this->free_shipping;
    }

    /**
     * @param string $free_shipping
     * @return $this
     */
    public function setFree_shipping($free_shipping)
    {
        $this->free_shipping = $free_shipping;
        return $this;
    }

    /**
     * @return string
     */
    public function getIs_qty_decimal()
    {
        return $this->is_qty_decimal;
    }

    /**
     * @param string $is_qty_decimal
     * @return $this
     */
    public function setIs_qty_decimal($is_qty_decimal)
    {
        $this->is_qty_decimal = $is_qty_decimal;
        return $this;
    }

    /**
     * @return string
     */
    public function getNo_discount()
    {
        return $this->no_discount;
    }

    /**
     * @param string $no_discount
     * @return $this
     */
    public function setNo_discount($no_discount)
    {
        $this->no_discount = $no_discount;
        return $this;
    }

    /**
     * @return float
     */
    public function getWeight()
    {
        return $this->weight;
    }

    /**
     * @param float $weight
     * @return $this
     */
    public function setWeight($weight)
    {
        $this->weight = $weight;
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
     * @return $this
     */
    public function setQty($qty)
    {
        $this->qty = $qty;
        return $this;
    }

    /**
     * @return float
     */
    public function getPrice()
    {
        return $this->price;
    }

    /**
     * @param float $price
     * @return $this
     */
    public function setPrice($price)
    {
        $this->price = $price;
        return $this;
    }

    /**
     * @return float
     */
    public function getBase_price()
    {
        return $this->base_price;
    }

    /**
     * @param float $base_price
     * @return $this
     */
    public function setBase_price($base_price)
    {
        $this->base_price = $base_price;
        return $this;
    }

    /**
     * @return float
     */
    public function getCustom_price()
    {
        return $this->custom_price;
    }

    /**
     * @param float $custom_price
     * @return $this
     */
    public function setCustom_price($custom_price)
    {
        $this->custom_price = $custom_price;
        return $this;
    }

    /**
     * @return float
     */
    public function getDiscount_percent()
    {
        return $this->discount_percent;
    }

    /**
     * @param float $discount_percent
     * @return $this
     */
    public function setDiscount_percent($discount_percent)
    {
        $this->discount_percent = $discount_percent;
        return $this;
    }

    /**
     * @return float
     */
    public function getDiscount_amount()
    {
        return $this->discount_amount;
    }

    /**
     * @param float $discount_amount
     * @return $this
     */
    public function setDiscount_amount($discount_amount)
    {
        $this->discount_amount = $discount_amount;
        return $this;
    }

    /**
     * @return float
     */
    public function getBase_discount_amount()
    {
        return $this->base_discount_amount;
    }

    /**
     * @param float $base_discount_amount
     * @return $this
     */
    public function setBase_discount_amount($base_discount_amount)
    {
        $this->base_discount_amount = $base_discount_amount;
        return $this;
    }

    /**
     * @return float
     */
    public function getTax_percent()
    {
        return $this->tax_percent;
    }

    /**
     * @param float $tax_percent
     * @return $this
     */
    public function setTax_percent($tax_percent)
    {
        $this->tax_percent = $tax_percent;
        return $this;
    }

    /**
     * @return float
     */
    public function getTax_amount()
    {
        return $this->tax_amount;
    }

    /**
     * @param float $tax_amount
     * @return $this
     */
    public function setTax_amount($tax_amount)
    {
        $this->tax_amount = $tax_amount;
        return $this;
    }

    /**
     * @return float
     */
    public function getBase_tax_amount()
    {
        return $this->base_tax_amount;
    }

    /**
     * @param float $base_tax_amount
     * @return $this
     */
    public function setBase_tax_amount($base_tax_amount)
    {
        $this->base_tax_amount = $base_tax_amount;
        return $this;
    }

    /**
     * @return float
     */
    public function getRow_total()
    {
        return $this->row_total;
    }

    /**
     * @param float $row_total
     * @return $this
     */
    public function setRow_total($row_total)
    {
        $this->row_total = $row_total;
        return $this;
    }

    /**
     * @return float
     */
    public function getBase_row_total()
    {
        return $this->base_row_total;
    }

    /**
     * @param float $base_row_total
     * @return $this
     */
    public function setBase_row_total($base_row_total)
    {
        $this->base_row_total = $base_row_total;
        return $this;
    }

    /**
     * @return float
     */
    public function getRow_total_with_discount()
    {
        return $this->row_total_with_discount;
    }

    /**
     * @param float $row_total_with_discount
     * @return $this
     */
    public function setRow_total_with_discount($row_total_with_discount)
    {
        $this->row_total_with_discount = $row_total_with_discount;
        return $this;
    }

    /**
     * @return float
     */
    public function getRow_weight()
    {
        return $this->row_weight;
    }

    /**
     * @param float $row_weight
     * @return $this
     */
    public function setRow_weight($row_weight)
    {
        $this->row_weight = $row_weight;
        return $this;
    }

    /**
     * @return string
     */
    public function getProduct_type()
    {
        return $this->product_type;
    }

    /**
     * @param string $product_type
     * @return $this
     */
    public function setProduct_type($product_type)
    {
        $this->product_type = $product_type;
        return $this;
    }

    /**
     * @return float
     */
    public function getBase_tax_before_discount()
    {
        return $this->base_tax_before_discount;
    }

    /**
     * @param float $base_tax_before_discount
     * @return $this
     */
    public function setBase_tax_before_discount($base_tax_before_discount)
    {
        $this->base_tax_before_discount = $base_tax_before_discount;
        return $this;
    }

    /**
     * @return float
     */
    public function getTax_before_discount()
    {
        return $this->tax_before_discount;
    }

    /**
     * @param float $tax_before_discount
     * @return $this
     */
    public function setTax_before_discount($tax_before_discount)
    {
        $this->tax_before_discount = $tax_before_discount;
        return $this;
    }

    /**
     * @return float
     */
    public function getOriginal_custom_price()
    {
        return $this->original_custom_price;
    }

    /**
     * @param float $original_custom_price
     * @return $this
     */
    public function setOriginal_custom_price($original_custom_price)
    {
        $this->original_custom_price = $original_custom_price;
        return $this;
    }

    /**
     * @return float
     */
    public function getBase_cost()
    {
        return $this->base_cost;
    }

    /**
     * @param float $base_cost
     * @return $this
     */
    public function setBase_cost($base_cost)
    {
        $this->base_cost = $base_cost;
        return $this;
    }

    /**
     * @return float
     */
    public function getPrice_incl_tax()
    {
        return $this->price_incl_tax;
    }

    /**
     * @param float $price_incl_tax
     * @return $this
     */
    public function setPrice_incl_tax($price_incl_tax)
    {
        $this->price_incl_tax = $price_incl_tax;
        return $this;
    }

    /**
     * @return float
     */
    public function getBase_price_incl_tax()
    {
        return $this->base_price_incl_tax;
    }

    /**
     * @param float $base_price_incl_tax
     * @return $this
     */
    public function setBase_price_incl_tax($base_price_incl_tax)
    {
        $this->base_price_incl_tax = $base_price_incl_tax;
        return $this;
    }

    /**
     * @return float
     */
    public function getRow_total_incl_tax()
    {
        return $this->row_total_incl_tax;
    }

    /**
     * @param float $row_total_incl_tax
     * @return $this
     */
    public function setRow_total_incl_tax($row_total_incl_tax)
    {
        $this->row_total_incl_tax = $row_total_incl_tax;
        return $this;
    }

    /**
     * @return float
     */
    public function getBase_row_total_incl_tax()
    {
        return $this->base_row_total_incl_tax;
    }

    /**
     * @param float $base_row_total_incl_tax
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
    public function getGift_message_id()
    {
        return $this->gift_message_id;
    }

    /**
     * @param string $gift_message_id
     * @return $this
     */
    public function setGift_message_id($gift_message_id)
    {
        $this->gift_message_id = $gift_message_id;
        return $this;
    }

    /**
     * @return string
     */
    public function getGift_message()
    {
        return $this->gift_message;
    }

    /**
     * @param string $gift_message
     * @return $this
     */
    public function setGift_message($gift_message)
    {
        $this->gift_message = $gift_message;
        return $this;
    }

    /**
     * @return string
     */
    public function getGift_message_available()
    {
        return $this->gift_message_available;
    }

    /**
     * @param string $gift_message_available
     * @return $this
     */
    public function setGift_message_available($gift_message_available)
    {
        $this->gift_message_available = $gift_message_available;
        return $this;
    }

    /**
     * @return float
     */
    public function getWeee_tax_applied()
    {
        return $this->weee_tax_applied;
    }

    /**
     * @param float $weee_tax_applied
     * @return $this
     */
    public function setWeee_tax_applied($weee_tax_applied)
    {
        $this->weee_tax_applied = $weee_tax_applied;
        return $this;
    }

    /**
     * @return float
     */
    public function getWeee_tax_applied_amount()
    {
        return $this->weee_tax_applied_amount;
    }

    /**
     * @param float $weee_tax_applied_amount
     * @return $this
     */
    public function setWeee_tax_applied_amount($weee_tax_applied_amount)
    {
        $this->weee_tax_applied_amount = $weee_tax_applied_amount;
        return $this;
    }

    /**
     * @return float
     */
    public function getWeee_tax_applied_row_amount()
    {
        return $this->weee_tax_applied_row_amount;
    }

    /**
     * @param float $weee_tax_applied_row_amount
     * @return $this
     */
    public function setWeee_tax_applied_row_amount($weee_tax_applied_row_amount)
    {
        $this->weee_tax_applied_row_amount = $weee_tax_applied_row_amount;
        return $this;
    }

    /**
     * @return float
     */
    public function getBase_weee_tax_applied_amount()
    {
        return $this->base_weee_tax_applied_amount;
    }

    /**
     * @param float $base_weee_tax_applied_amount
     * @return $this
     */
    public function setBase_weee_tax_applied_amount($base_weee_tax_applied_amount)
    {
        $this->base_weee_tax_applied_amount = $base_weee_tax_applied_amount;
        return $this;
    }

    /**
     * @return float
     */
    public function getBase_weee_tax_applied_row_amount()
    {
        return $this->base_weee_tax_applied_row_amount;
    }

    /**
     * @param float $base_weee_tax_applied_row_amount
     * @return $this
     */
    public function setBase_weee_tax_applied_row_amount($base_weee_tax_applied_row_amount)
    {
        $this->base_weee_tax_applied_row_amount = $base_weee_tax_applied_row_amount;
        return $this;
    }

    /**
     * @return float
     */
    public function getWeee_tax_disposition()
    {
        return $this->weee_tax_disposition;
    }

    /**
     * @param float $weee_tax_disposition
     * @return $this
     */
    public function setWeee_tax_disposition($weee_tax_disposition)
    {
        $this->weee_tax_disposition = $weee_tax_disposition;
        return $this;
    }

    /**
     * @return float
     */
    public function getWeee_tax_row_disposition()
    {
        return $this->weee_tax_row_disposition;
    }

    /**
     * @param float $weee_tax_row_disposition
     * @return $this
     */
    public function setWeee_tax_row_disposition($weee_tax_row_disposition)
    {
        $this->weee_tax_row_disposition = $weee_tax_row_disposition;
        return $this;
    }

    /**
     * @return float
     */
    public function getBase_weee_tax_disposition()
    {
        return $this->base_weee_tax_disposition;
    }

    /**
     * @param float $base_weee_tax_disposition
     * @return $this
     */
    public function setBase_weee_tax_disposition($base_weee_tax_disposition)
    {
        $this->base_weee_tax_disposition = $base_weee_tax_disposition;
        return $this;
    }

    /**
     * @return float
     */
    public function getBase_weee_tax_row_disposition()
    {
        return $this->base_weee_tax_row_disposition;
    }

    /**
     * @param float $base_weee_tax_row_disposition
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
    public function getTax_class_id()
    {
        return $this->tax_class_id;
    }

    /**
     * @param string $tax_class_id
     * @return $this
     */
    public function setTax_class_id($tax_class_id)
    {
        $this->tax_class_id = $tax_class_id;
        return $this;
    }


}

