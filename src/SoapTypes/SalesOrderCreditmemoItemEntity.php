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
    public function getParentId()
    {
        return $this->parent_id;
    }

    /**
     * @param string $parent_id
     *
     * @return $this
     */
    public function setParentId($parent_id)
    {
        $this->parent_id = $parent_id;

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
    public function getPriceInclTax()
    {
        return $this->price_incl_tax;
    }

    /**
     * @param string $price_incl_tax
     *
     * @return $this
     */
    public function setPriceInclTax($price_incl_tax)
    {
        $this->price_incl_tax = $price_incl_tax;

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
    public function getBasePriceInclTax()
    {
        return $this->base_price_incl_tax;
    }

    /**
     * @param string $base_price_incl_tax
     *
     * @return $this
     */
    public function setBasePriceInclTax($base_price_incl_tax)
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
     *
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
    public function getBaseCost()
    {
        return $this->base_cost;
    }

    /**
     * @param string $base_cost
     *
     * @return $this
     */
    public function setBaseCost($base_cost)
    {
        $this->base_cost = $base_cost;

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
    public function getBaseRowTotalInclTax()
    {
        return $this->base_row_total_incl_tax;
    }

    /**
     * @param string $base_row_total_incl_tax
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
    public function getRowTotalInclTax()
    {
        return $this->row_total_incl_tax;
    }

    /**
     * @param string $row_total_incl_tax
     *
     * @return $this
     */
    public function setRowTotalInclTax($row_total_incl_tax)
    {
        $this->row_total_incl_tax = $row_total_incl_tax;

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
    public function getOrderItemId()
    {
        return $this->order_item_id;
    }

    /**
     * @param string $order_item_id
     *
     * @return $this
     */
    public function setOrderItemId($order_item_id)
    {
        $this->order_item_id = $order_item_id;

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
    public function getHiddenTaxAmount()
    {
        return $this->hidden_tax_amount;
    }

    /**
     * @param string $hidden_tax_amount
     *
     * @return $this
     */
    public function setHiddenTaxAmount($hidden_tax_amount)
    {
        $this->hidden_tax_amount = $hidden_tax_amount;

        return $this;
    }

    /**
     * @return string
     */
    public function getBaseHiddenTaxAmount()
    {
        return $this->base_hidden_tax_amount;
    }

    /**
     * @param string $base_hidden_tax_amount
     *
     * @return $this
     */
    public function setBaseHiddenTaxAmount($base_hidden_tax_amount)
    {
        $this->base_hidden_tax_amount = $base_hidden_tax_amount;

        return $this;
    }
}
