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

class SalesOrderItemEntity
{
    /**
     * @var string
     */
    protected $item_id = null;

    /**
     * @var string
     */
    protected $order_id = null;

    /**
     * @var string
     */
    protected $quote_item_id = null;

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
    protected $product_type = null;

    /**
     * @var string
     */
    protected $product_options = null;

    /**
     * @var string
     */
    protected $weight = null;

    /**
     * @var string
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
    protected $applied_rule_ids = null;

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
     * @var string
     */
    protected $qty_canceled = null;

    /**
     * @var string
     */
    protected $qty_invoiced = null;

    /**
     * @var string
     */
    protected $qty_ordered = null;

    /**
     * @var string
     */
    protected $qty_refunded = null;

    /**
     * @var string
     */
    protected $qty_shipped = null;

    /**
     * @var string
     */
    protected $cost = null;

    /**
     * @var string
     */
    protected $price = null;

    /**
     * @var string
     */
    protected $base_price = null;

    /**
     * @var string
     */
    protected $original_price = null;

    /**
     * @var string
     */
    protected $base_original_price = null;

    /**
     * @var string
     */
    protected $tax_percent = null;

    /**
     * @var string
     */
    protected $tax_amount = null;

    /**
     * @var string
     */
    protected $base_tax_amount = null;

    /**
     * @var string
     */
    protected $tax_invoiced = null;

    /**
     * @var string
     */
    protected $base_tax_invoiced = null;

    /**
     * @var string
     */
    protected $discount_percent = null;

    /**
     * @var string
     */
    protected $discount_amount = null;

    /**
     * @var string
     */
    protected $base_discount_amount = null;

    /**
     * @var string
     */
    protected $discount_invoiced = null;

    /**
     * @var string
     */
    protected $base_discount_invoiced = null;

    /**
     * @var string
     */
    protected $amount_refunded = null;

    /**
     * @var string
     */
    protected $base_amount_refunded = null;

    /**
     * @var string
     */
    protected $row_total = null;

    /**
     * @var string
     */
    protected $base_row_total = null;

    /**
     * @var string
     */
    protected $row_invoiced = null;

    /**
     * @var string
     */
    protected $base_row_invoiced = null;

    /**
     * @var string
     */
    protected $row_weight = null;

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
     * @var string
     */
    protected $base_tax_before_discount = null;

    /**
     * @var string
     */
    protected $tax_before_discount = null;

    /**
     * @var string
     */
    protected $weee_tax_applied = null;

    /**
     * @var string
     */
    protected $weee_tax_applied_amount = null;

    /**
     * @var string
     */
    protected $weee_tax_applied_row_amount = null;

    /**
     * @var string
     */
    protected $base_weee_tax_applied_amount = null;

    /**
     * @var string
     */
    protected $base_weee_tax_applied_row_amount = null;

    /**
     * @var string
     */
    protected $weee_tax_disposition = null;

    /**
     * @var string
     */
    protected $weee_tax_row_disposition = null;

    /**
     * @var string
     */
    protected $base_weee_tax_disposition = null;

    /**
     * @var string
     */
    protected $base_weee_tax_row_disposition = null;

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
    public function getOrderId()
    {
        return $this->order_id;
    }

    /**
     * @param string $order_id
     *
     * @return $this
     */
    public function setOrderId($order_id)
    {
        $this->order_id = $order_id;

        return $this;
    }

    /**
     * @return string
     */
    public function getQuoteItemId()
    {
        return $this->quote_item_id;
    }

    /**
     * @param string $quote_item_id
     *
     * @return $this
     */
    public function setQuoteItemId($quote_item_id)
    {
        $this->quote_item_id = $quote_item_id;

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
     * @return string
     */
    public function getProductOptions()
    {
        return $this->product_options;
    }

    /**
     * @param string $product_options
     *
     * @return $this
     */
    public function setProductOptions($product_options)
    {
        $this->product_options = $product_options;

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
     *
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
    public function getIsVirtual()
    {
        return $this->is_virtual;
    }

    /**
     * @param string $is_virtual
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
     * @return string
     */
    public function getQtyCanceled()
    {
        return $this->qty_canceled;
    }

    /**
     * @param string $qty_canceled
     *
     * @return $this
     */
    public function setQtyCanceled($qty_canceled)
    {
        $this->qty_canceled = $qty_canceled;

        return $this;
    }

    /**
     * @return string
     */
    public function getQtyInvoiced()
    {
        return $this->qty_invoiced;
    }

    /**
     * @param string $qty_invoiced
     *
     * @return $this
     */
    public function setQtyInvoiced($qty_invoiced)
    {
        $this->qty_invoiced = $qty_invoiced;

        return $this;
    }

    /**
     * @return string
     */
    public function getQtyOrdered()
    {
        return $this->qty_ordered;
    }

    /**
     * @param string $qty_ordered
     *
     * @return $this
     */
    public function setQtyOrdered($qty_ordered)
    {
        $this->qty_ordered = $qty_ordered;

        return $this;
    }

    /**
     * @return string
     */
    public function getQtyRefunded()
    {
        return $this->qty_refunded;
    }

    /**
     * @param string $qty_refunded
     *
     * @return $this
     */
    public function setQtyRefunded($qty_refunded)
    {
        $this->qty_refunded = $qty_refunded;

        return $this;
    }

    /**
     * @return string
     */
    public function getQtyShipped()
    {
        return $this->qty_shipped;
    }

    /**
     * @param string $qty_shipped
     *
     * @return $this
     */
    public function setQtyShipped($qty_shipped)
    {
        $this->qty_shipped = $qty_shipped;

        return $this;
    }

    /**
     * @return string
     */
    public function getCost()
    {
        return $this->cost;
    }

    /**
     * @param string $cost
     *
     * @return $this
     */
    public function setCost($cost)
    {
        $this->cost = $cost;

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
    public function getBasePrice()
    {
        return $this->base_price;
    }

    /**
     * @param string $base_price
     *
     * @return $this
     */
    public function setBasePrice($base_price)
    {
        $this->base_price = $base_price;

        return $this;
    }

    /**
     * @return string
     */
    public function getOriginalPrice()
    {
        return $this->original_price;
    }

    /**
     * @param string $original_price
     *
     * @return $this
     */
    public function setOriginalPrice($original_price)
    {
        $this->original_price = $original_price;

        return $this;
    }

    /**
     * @return string
     */
    public function getBaseOriginalPrice()
    {
        return $this->base_original_price;
    }

    /**
     * @param string $base_original_price
     *
     * @return $this
     */
    public function setBaseOriginalPrice($base_original_price)
    {
        $this->base_original_price = $base_original_price;

        return $this;
    }

    /**
     * @return string
     */
    public function getTaxPercent()
    {
        return $this->tax_percent;
    }

    /**
     * @param string $tax_percent
     *
     * @return $this
     */
    public function setTaxPercent($tax_percent)
    {
        $this->tax_percent = $tax_percent;

        return $this;
    }

    /**
     * @return string
     */
    public function getTaxAmount()
    {
        return $this->tax_amount;
    }

    /**
     * @param string $tax_amount
     *
     * @return $this
     */
    public function setTaxAmount($tax_amount)
    {
        $this->tax_amount = $tax_amount;

        return $this;
    }

    /**
     * @return string
     */
    public function getBaseTaxAmount()
    {
        return $this->base_tax_amount;
    }

    /**
     * @param string $base_tax_amount
     *
     * @return $this
     */
    public function setBaseTaxAmount($base_tax_amount)
    {
        $this->base_tax_amount = $base_tax_amount;

        return $this;
    }

    /**
     * @return string
     */
    public function getTaxInvoiced()
    {
        return $this->tax_invoiced;
    }

    /**
     * @param string $tax_invoiced
     *
     * @return $this
     */
    public function setTaxInvoiced($tax_invoiced)
    {
        $this->tax_invoiced = $tax_invoiced;

        return $this;
    }

    /**
     * @return string
     */
    public function getBaseTaxInvoiced()
    {
        return $this->base_tax_invoiced;
    }

    /**
     * @param string $base_tax_invoiced
     *
     * @return $this
     */
    public function setBaseTaxInvoiced($base_tax_invoiced)
    {
        $this->base_tax_invoiced = $base_tax_invoiced;

        return $this;
    }

    /**
     * @return string
     */
    public function getDiscountPercent()
    {
        return $this->discount_percent;
    }

    /**
     * @param string $discount_percent
     *
     * @return $this
     */
    public function setDiscountPercent($discount_percent)
    {
        $this->discount_percent = $discount_percent;

        return $this;
    }

    /**
     * @return string
     */
    public function getDiscountAmount()
    {
        return $this->discount_amount;
    }

    /**
     * @param string $discount_amount
     *
     * @return $this
     */
    public function setDiscountAmount($discount_amount)
    {
        $this->discount_amount = $discount_amount;

        return $this;
    }

    /**
     * @return string
     */
    public function getBaseDiscountAmount()
    {
        return $this->base_discount_amount;
    }

    /**
     * @param string $base_discount_amount
     *
     * @return $this
     */
    public function setBaseDiscountAmount($base_discount_amount)
    {
        $this->base_discount_amount = $base_discount_amount;

        return $this;
    }

    /**
     * @return string
     */
    public function getDiscountInvoiced()
    {
        return $this->discount_invoiced;
    }

    /**
     * @param string $discount_invoiced
     *
     * @return $this
     */
    public function setDiscountInvoiced($discount_invoiced)
    {
        $this->discount_invoiced = $discount_invoiced;

        return $this;
    }

    /**
     * @return string
     */
    public function getBaseDiscountInvoiced()
    {
        return $this->base_discount_invoiced;
    }

    /**
     * @param string $base_discount_invoiced
     *
     * @return $this
     */
    public function setBaseDiscountInvoiced($base_discount_invoiced)
    {
        $this->base_discount_invoiced = $base_discount_invoiced;

        return $this;
    }

    /**
     * @return string
     */
    public function getAmountRefunded()
    {
        return $this->amount_refunded;
    }

    /**
     * @param string $amount_refunded
     *
     * @return $this
     */
    public function setAmountRefunded($amount_refunded)
    {
        $this->amount_refunded = $amount_refunded;

        return $this;
    }

    /**
     * @return string
     */
    public function getBaseAmountRefunded()
    {
        return $this->base_amount_refunded;
    }

    /**
     * @param string $base_amount_refunded
     *
     * @return $this
     */
    public function setBaseAmountRefunded($base_amount_refunded)
    {
        $this->base_amount_refunded = $base_amount_refunded;

        return $this;
    }

    /**
     * @return string
     */
    public function getRowTotal()
    {
        return $this->row_total;
    }

    /**
     * @param string $row_total
     *
     * @return $this
     */
    public function setRowTotal($row_total)
    {
        $this->row_total = $row_total;

        return $this;
    }

    /**
     * @return string
     */
    public function getBaseRowTotal()
    {
        return $this->base_row_total;
    }

    /**
     * @param string $base_row_total
     *
     * @return $this
     */
    public function setBaseRowTotal($base_row_total)
    {
        $this->base_row_total = $base_row_total;

        return $this;
    }

    /**
     * @return string
     */
    public function getRowInvoiced()
    {
        return $this->row_invoiced;
    }

    /**
     * @param string $row_invoiced
     *
     * @return $this
     */
    public function setRowInvoiced($row_invoiced)
    {
        $this->row_invoiced = $row_invoiced;

        return $this;
    }

    /**
     * @return string
     */
    public function getBaseRowInvoiced()
    {
        return $this->base_row_invoiced;
    }

    /**
     * @param string $base_row_invoiced
     *
     * @return $this
     */
    public function setBaseRowInvoiced($base_row_invoiced)
    {
        $this->base_row_invoiced = $base_row_invoiced;

        return $this;
    }

    /**
     * @return string
     */
    public function getRowWeight()
    {
        return $this->row_weight;
    }

    /**
     * @param string $row_weight
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
    public function getGifMessageId()
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
     * @return string
     */
    public function getBaseTaxBeforeDiscount()
    {
        return $this->base_tax_before_discount;
    }

    /**
     * @param string $base_tax_before_discount
     *
     * @return $this
     */
    public function setBaseTaxBeforeDiscount($base_tax_before_discount)
    {
        $this->base_tax_before_discount = $base_tax_before_discount;

        return $this;
    }

    /**
     * @return string
     */
    public function getTaxBeforeDiscount()
    {
        return $this->tax_before_discount;
    }

    /**
     * @param string $tax_before_discount
     *
     * @return $this
     */
    public function setTaxBeforeDiscount($tax_before_discount)
    {
        $this->tax_before_discount = $tax_before_discount;

        return $this;
    }

    /**
     * @return string
     */
    public function getWeeeTaxApplied()
    {
        return $this->weee_tax_applied;
    }

    /**
     * @param string $weee_tax_applied
     *
     * @return $this
     */
    public function setWeeeTaxApplied($weee_tax_applied)
    {
        $this->weee_tax_applied = $weee_tax_applied;

        return $this;
    }

    /**
     * @return string
     */
    public function getWeeeTaxAppliedAmount()
    {
        return $this->weee_tax_applied_amount;
    }

    /**
     * @param string $weee_tax_applied_amount
     *
     * @return $this
     */
    public function setWeeeTaxAppliedAmount($weee_tax_applied_amount)
    {
        $this->weee_tax_applied_amount = $weee_tax_applied_amount;

        return $this;
    }

    /**
     * @return string
     */
    public function getWeeeTaxAppliedRowAmount()
    {
        return $this->weee_tax_applied_row_amount;
    }

    /**
     * @param string $weee_tax_applied_row_amount
     *
     * @return $this
     */
    public function setWeeeTaxAppliedRowAmount($weee_tax_applied_row_amount)
    {
        $this->weee_tax_applied_row_amount = $weee_tax_applied_row_amount;

        return $this;
    }

    /**
     * @return string
     */
    public function getBaseWeeeTaxAppliedAmount()
    {
        return $this->base_weee_tax_applied_amount;
    }

    /**
     * @param string $base_weee_tax_applied_amount
     *
     * @return $this
     */
    public function setBaseWeeeTaxAppliedAmount($base_weee_tax_applied_amount)
    {
        $this->base_weee_tax_applied_amount = $base_weee_tax_applied_amount;

        return $this;
    }

    /**
     * @return string
     */
    public function getBaseWeeeTaxAppliedRowAmount()
    {
        return $this->base_weee_tax_applied_row_amount;
    }

    /**
     * @param string $base_weee_tax_applied_row_amount
     *
     * @return $this
     */
    public function setBaseWeeeTaxAppliedRowAmount($base_weee_tax_applied_row_amount)
    {
        $this->base_weee_tax_applied_row_amount = $base_weee_tax_applied_row_amount;

        return $this;
    }

    /**
     * @return string
     */
    public function getWeeeTaxDisposition()
    {
        return $this->weee_tax_disposition;
    }

    /**
     * @param string $weee_tax_disposition
     *
     * @return $this
     */
    public function setWeeeTaxDisposition($weee_tax_disposition)
    {
        $this->weee_tax_disposition = $weee_tax_disposition;

        return $this;
    }

    /**
     * @return string
     */
    public function getWeeeTaxRowDisposition()
    {
        return $this->weee_tax_row_disposition;
    }

    /**
     * @param string $weee_tax_row_disposition
     *
     * @return $this
     */
    public function setWeeeTaxRowDisposition($weee_tax_row_disposition)
    {
        $this->weee_tax_row_disposition = $weee_tax_row_disposition;

        return $this;
    }

    /**
     * @return string
     */
    public function getBaseWeeeTaxDisposition()
    {
        return $this->base_weee_tax_disposition;
    }

    /**
     * @param string $base_weee_tax_disposition
     *
     * @return $this
     */
    public function setBaseWeeeTaxDisposition($base_weee_tax_disposition)
    {
        $this->base_weee_tax_disposition = $base_weee_tax_disposition;

        return $this;
    }

    /**
     * @return string
     */
    public function getBaseWeeeTaxRowDisposition()
    {
        return $this->base_weee_tax_row_disposition;
    }

    /**
     * @param string $base_weee_tax_row_disposition
     *
     * @return $this
     */
    public function setBaseWeeeTaxRowDisposition($base_weee_tax_row_disposition)
    {
        $this->base_weee_tax_row_disposition = $base_weee_tax_row_disposition;

        return $this;
    }
}
