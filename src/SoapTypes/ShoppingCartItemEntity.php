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
     * @return string
     */
    public function getItemId()
    {
        return $this->item_id;
    }

    /**
     * @param string $item_id
     *
     * @return $this
     */
    public function setItemId($item_id)
    {
        $this->item_id = $item_id;

        return $this;
    }

    /**
     * @return string
     */
    public function getCreatedAt()
    {
        return $this->created_at;
    }

    /**
     * @param string $created_at
     *
     * @return $this
     */
    public function setCreatedAt($created_at)
    {
        $this->created_at = $created_at;

        return $this;
    }

    /**
     * @return string
     */
    public function getUpdatedAt()
    {
        return $this->updated_at;
    }

    /**
     * @param string $updated_at
     *
     * @return $this
     */
    public function setUpdatedAt($updated_at)
    {
        $this->updated_at = $updated_at;

        return $this;
    }

    /**
     * @return string
     */
    public function getProductId()
    {
        return $this->product_id;
    }

    /**
     * @param string $product_id
     *
     * @return $this
     */
    public function setProductId($product_id)
    {
        $this->product_id = $product_id;

        return $this;
    }

    /**
     * @return string
     */
    public function getStoreId()
    {
        return $this->store_id;
    }

    /**
     * @param string $store_id
     *
     * @return $this
     */
    public function setStoreId($store_id)
    {
        $this->store_id = $store_id;

        return $this;
    }

    /**
     * @return string
     */
    public function getParentItemId()
    {
        return $this->parent_item_id;
    }

    /**
     * @param string $parent_item_id
     *
     * @return $this
     */
    public function setParentItemId($parent_item_id)
    {
        $this->parent_item_id = $parent_item_id;

        return $this;
    }

    /**
     * @return int
     */
    public function getIsVirtual()
    {
        return $this->is_virtual;
    }

    /**
     * @param int $is_virtual
     *
     * @return $this
     */
    public function setIsVirtual($is_virtual)
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
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * @param string $description
     *
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
    public function getAppliedRuleIds()
    {
        return $this->applied_rule_ids;
    }

    /**
     * @param string $applied_rule_ids
     *
     * @return $this
     */
    public function setAppliedRuleIds($applied_rule_ids)
    {
        $this->applied_rule_ids = $applied_rule_ids;

        return $this;
    }

    /**
     * @return string
     */
    public function getAdditionalData()
    {
        return $this->additional_data;
    }

    /**
     * @param string $additional_data
     *
     * @return $this
     */
    public function setAdditionalData($additional_data)
    {
        $this->additional_data = $additional_data;

        return $this;
    }

    /**
     * @return string
     */
    public function getFreeShipping()
    {
        return $this->free_shipping;
    }

    /**
     * @param string $free_shipping
     *
     * @return $this
     */
    public function setFreeShipping($free_shipping)
    {
        $this->free_shipping = $free_shipping;

        return $this;
    }

    /**
     * @return string
     */
    public function getIsQtyDecimal()
    {
        return $this->is_qty_decimal;
    }

    /**
     * @param string $is_qty_decimal
     *
     * @return $this
     */
    public function setIsQtyDecimal($is_qty_decimal)
    {
        $this->is_qty_decimal = $is_qty_decimal;

        return $this;
    }

    /**
     * @return string
     */
    public function getNoDiscount()
    {
        return $this->no_discount;
    }

    /**
     * @param string $no_discount
     *
     * @return $this
     */
    public function setNoDiscount($no_discount)
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
     *
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
     *
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
     *
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
    public function getBasePrice()
    {
        return $this->base_price;
    }

    /**
     * @param float $base_price
     *
     * @return $this
     */
    public function setBasePrice($base_price)
    {
        $this->base_price = $base_price;

        return $this;
    }

    /**
     * @return float
     */
    public function getCustomPrice()
    {
        return $this->custom_price;
    }

    /**
     * @param float $custom_price
     *
     * @return $this
     */
    public function setCustomPrice($custom_price)
    {
        $this->custom_price = $custom_price;

        return $this;
    }

    /**
     * @return float
     */
    public function getDiscountPercent()
    {
        return $this->discount_percent;
    }

    /**
     * @param float $discount_percent
     *
     * @return $this
     */
    public function setDiscountPercent($discount_percent)
    {
        $this->discount_percent = $discount_percent;

        return $this;
    }

    /**
     * @return float
     */
    public function getDiscountAmount()
    {
        return $this->discount_amount;
    }

    /**
     * @param float $discount_amount
     *
     * @return $this
     */
    public function setDiscountAmount($discount_amount)
    {
        $this->discount_amount = $discount_amount;

        return $this;
    }

    /**
     * @return float
     */
    public function getBaseDiscountAmount()
    {
        return $this->base_discount_amount;
    }

    /**
     * @param float $base_discount_amount
     *
     * @return $this
     */
    public function setBaseDiscountAmount($base_discount_amount)
    {
        $this->base_discount_amount = $base_discount_amount;

        return $this;
    }

    /**
     * @return float
     */
    public function getTaxPercent()
    {
        return $this->tax_percent;
    }

    /**
     * @param float $tax_percent
     *
     * @return $this
     */
    public function setTaxPercent($tax_percent)
    {
        $this->tax_percent = $tax_percent;

        return $this;
    }

    /**
     * @return float
     */
    public function getTaxAmount()
    {
        return $this->tax_amount;
    }

    /**
     * @param float $tax_amount
     *
     * @return $this
     */
    public function setTaxAmount($tax_amount)
    {
        $this->tax_amount = $tax_amount;

        return $this;
    }

    /**
     * @return float
     */
    public function getBaseTaxAmount()
    {
        return $this->base_tax_amount;
    }

    /**
     * @param float $base_tax_amount
     *
     * @return $this
     */
    public function setBaseTaxAmount($base_tax_amount)
    {
        $this->base_tax_amount = $base_tax_amount;

        return $this;
    }

    /**
     * @return float
     */
    public function getRowTotal()
    {
        return $this->row_total;
    }

    /**
     * @param float $row_total
     *
     * @return $this
     */
    public function setRowTotal($row_total)
    {
        $this->row_total = $row_total;

        return $this;
    }

    /**
     * @return float
     */
    public function getBaseRowTotal()
    {
        return $this->base_row_total;
    }

    /**
     * @param float $base_row_total
     *
     * @return $this
     */
    public function setBaseRowTotal($base_row_total)
    {
        $this->base_row_total = $base_row_total;

        return $this;
    }

    /**
     * @return float
     */
    public function getRowTotalWithDiscount()
    {
        return $this->row_total_with_discount;
    }

    /**
     * @param float $row_total_with_discount
     *
     * @return $this
     */
    public function setRowTotalWithDiscount($row_total_with_discount)
    {
        $this->row_total_with_discount = $row_total_with_discount;

        return $this;
    }

    /**
     * @return float
     */
    public function getRowWeight()
    {
        return $this->row_weight;
    }

    /**
     * @param float $row_weight
     *
     * @return $this
     */
    public function setRowWeight($row_weight)
    {
        $this->row_weight = $row_weight;

        return $this;
    }

    /**
     * @return string
     */
    public function getProductType()
    {
        return $this->product_type;
    }

    /**
     * @param string $product_type
     *
     * @return $this
     */
    public function setProductType($product_type)
    {
        $this->product_type = $product_type;

        return $this;
    }

    /**
     * @return float
     */
    public function getBaseTaxBeforeDiscount()
    {
        return $this->base_tax_before_discount;
    }

    /**
     * @param float $base_tax_before_discount
     *
     * @return $this
     */
    public function setBaseTaxBeforeDiscount($base_tax_before_discount)
    {
        $this->base_tax_before_discount = $base_tax_before_discount;

        return $this;
    }

    /**
     * @return float
     */
    public function getTaxBeforeDiscount()
    {
        return $this->tax_before_discount;
    }

    /**
     * @param float $tax_before_discount
     *
     * @return $this
     */
    public function setTaxBeforeDiscount($tax_before_discount)
    {
        $this->tax_before_discount = $tax_before_discount;

        return $this;
    }

    /**
     * @return float
     */
    public function getOriginalCustomPrice()
    {
        return $this->original_custom_price;
    }

    /**
     * @param float $original_custom_price
     *
     * @return $this
     */
    public function setOriginalCustomPrice($original_custom_price)
    {
        $this->original_custom_price = $original_custom_price;

        return $this;
    }

    /**
     * @return float
     */
    public function getBaseCost()
    {
        return $this->base_cost;
    }

    /**
     * @param float $base_cost
     *
     * @return $this
     */
    public function setBaseCost($base_cost)
    {
        $this->base_cost = $base_cost;

        return $this;
    }

    /**
     * @return float
     */
    public function getPriceInclTax()
    {
        return $this->price_incl_tax;
    }

    /**
     * @param float $price_incl_tax
     *
     * @return $this
     */
    public function setPriceInclTax($price_incl_tax)
    {
        $this->price_incl_tax = $price_incl_tax;

        return $this;
    }

    /**
     * @return float
     */
    public function getBasePriceInclTax()
    {
        return $this->base_price_incl_tax;
    }

    /**
     * @param float $base_price_incl_tax
     *
     * @return $this
     */
    public function setBasePriceInclTax($base_price_incl_tax)
    {
        $this->base_price_incl_tax = $base_price_incl_tax;

        return $this;
    }

    /**
     * @return float
     */
    public function getRowTotalInclTax()
    {
        return $this->row_total_incl_tax;
    }

    /**
     * @param float $row_total_incl_tax
     *
     * @return $this
     */
    public function setRowTotalInclTax($row_total_incl_tax)
    {
        $this->row_total_incl_tax = $row_total_incl_tax;

        return $this;
    }

    /**
     * @return float
     */
    public function getBaseRowTotalInclTax()
    {
        return $this->base_row_total_incl_tax;
    }

    /**
     * @param float $base_row_total_incl_tax
     *
     * @return $this
     */
    public function setBaseRowTotalInclTax($base_row_total_incl_tax)
    {
        $this->base_row_total_incl_tax = $base_row_total_incl_tax;

        return $this;
    }

    /**
     * @return string
     */
    public function getGiftMessageId()
    {
        return $this->gift_message_id;
    }

    /**
     * @param string $gift_message_id
     *
     * @return $this
     */
    public function setGiftMessageId($gift_message_id)
    {
        $this->gift_message_id = $gift_message_id;

        return $this;
    }

    /**
     * @return string
     */
    public function getGiftMessage()
    {
        return $this->gift_message;
    }

    /**
     * @param string $gift_message
     *
     * @return $this
     */
    public function setGiftMessage($gift_message)
    {
        $this->gift_message = $gift_message;

        return $this;
    }

    /**
     * @return string
     */
    public function getGiftMessageAvailable()
    {
        return $this->gift_message_available;
    }

    /**
     * @param string $gift_message_available
     *
     * @return $this
     */
    public function setGiftMessageAvailable($gift_message_available)
    {
        $this->gift_message_available = $gift_message_available;

        return $this;
    }

    /**
     * @return float
     */
    public function getWeeeTaxApplied()
    {
        return $this->weee_tax_applied;
    }

    /**
     * @param float $weee_tax_applied
     *
     * @return $this
     */
    public function setWeeeTaxApplied($weee_tax_applied)
    {
        $this->weee_tax_applied = $weee_tax_applied;

        return $this;
    }

    /**
     * @return float
     */
    public function getWeeeTaxAppliedAmount()
    {
        return $this->weee_tax_applied_amount;
    }

    /**
     * @param float $weee_tax_applied_amount
     *
     * @return $this
     */
    public function setWeeeTaxAppliedAmount($weee_tax_applied_amount)
    {
        $this->weee_tax_applied_amount = $weee_tax_applied_amount;

        return $this;
    }

    /**
     * @return float
     */
    public function getWeeeTaxAppliedRowAmount()
    {
        return $this->weee_tax_applied_row_amount;
    }

    /**
     * @param float $weee_tax_applied_row_amount
     *
     * @return $this
     */
    public function setWeeeTaxAppliedRowAmount($weee_tax_applied_row_amount)
    {
        $this->weee_tax_applied_row_amount = $weee_tax_applied_row_amount;

        return $this;
    }

    /**
     * @return float
     */
    public function getBaseWeeeTaxAppliedAmount()
    {
        return $this->base_weee_tax_applied_amount;
    }

    /**
     * @param float $base_weee_tax_applied_amount
     *
     * @return $this
     */
    public function setBaseWeeeTaxAppliedAmount($base_weee_tax_applied_amount)
    {
        $this->base_weee_tax_applied_amount = $base_weee_tax_applied_amount;

        return $this;
    }

    /**
     * @return float
     */
    public function getBaseWeeeTaxAppliedRowAmount()
    {
        return $this->base_weee_tax_applied_row_amount;
    }

    /**
     * @param float $base_weee_tax_applied_row_amount
     *
     * @return $this
     */
    public function setBaseWeeeTaxAppliedRowAmount($base_weee_tax_applied_row_amount)
    {
        $this->base_weee_tax_applied_row_amount = $base_weee_tax_applied_row_amount;

        return $this;
    }

    /**
     * @return float
     */
    public function getWeeeTaxDisposition()
    {
        return $this->weee_tax_disposition;
    }

    /**
     * @param float $weee_tax_disposition
     *
     * @return $this
     */
    public function setWeeeTaxDisposition($weee_tax_disposition)
    {
        $this->weee_tax_disposition = $weee_tax_disposition;

        return $this;
    }

    /**
     * @return float
     */
    public function getWeeeTaxRowDisposition()
    {
        return $this->weee_tax_row_disposition;
    }

    /**
     * @param float $weee_tax_row_disposition
     *
     * @return $this
     */
    public function setWeeeTaxRowDisposition($weee_tax_row_disposition)
    {
        $this->weee_tax_row_disposition = $weee_tax_row_disposition;

        return $this;
    }

    /**
     * @return float
     */
    public function getBaseWeeeTaxDisposition()
    {
        return $this->base_weee_tax_disposition;
    }

    /**
     * @param float $base_weee_tax_disposition
     *
     * @return $this
     */
    public function setBaseWeeeTaxDisposition($base_weee_tax_disposition)
    {
        $this->base_weee_tax_disposition = $base_weee_tax_disposition;

        return $this;
    }

    /**
     * @return float
     */
    public function getBaseWeeeTaxRowDisposition()
    {
        return $this->base_weee_tax_row_disposition;
    }

    /**
     * @param float $base_weee_tax_row_disposition
     *
     * @return $this
     */
    public function setBaseWeeeTaxRowDisposition($base_weee_tax_row_disposition)
    {
        $this->base_weee_tax_row_disposition = $base_weee_tax_row_disposition;

        return $this;
    }

    /**
     * @return string
     */
    public function getTaxClassId()
    {
        return $this->tax_class_id;
    }

    /**
     * @param string $tax_class_id
     *
     * @return $this
     */
    public function setTaxClassId($tax_class_id)
    {
        $this->tax_class_id = $tax_class_id;

        return $this;
    }
}
