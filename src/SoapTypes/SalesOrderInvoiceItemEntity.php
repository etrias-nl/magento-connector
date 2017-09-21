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

class SalesOrderInvoiceItemEntity
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
    protected $weee_tax_applied = null;

    /**
     * @var string
     */
    protected $qty = null;

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
    protected $tax_amount = null;

    /**
     * @var string
     */
    protected $row_total = null;

    /**
     * @var string
     */
    protected $base_price = null;

    /**
     * @var string
     */
    protected $base_tax_amount = null;

    /**
     * @var string
     */
    protected $base_row_total = null;

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
    protected $weee_tax_applied_amount = null;

    /**
     * @var string
     */
    protected $weee_tax_applied_row_amount = null;

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
    protected $item_id = null;

    /**
     * @return string
     */
    public function getIncrementId()
    {
        return $this->increment_id;
    }

    /**
     * @param string $increment_id
     *
     * @return $this
     */
    public function setIncrementId($increment_id)
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
     *
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
     *
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
     *
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
     *
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
    public function getWeee_tax_applied()
    {
        return $this->weee_tax_applied;
    }

    /**
     * @param string $weee_tax_applied
     *
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
    public function getTax_amount()
    {
        return $this->tax_amount;
    }

    /**
     * @param string $tax_amount
     *
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
    public function getRow_total()
    {
        return $this->row_total;
    }

    /**
     * @param string $row_total
     *
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
    public function getBase_price()
    {
        return $this->base_price;
    }

    /**
     * @param string $base_price
     *
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
    public function getBase_tax_amount()
    {
        return $this->base_tax_amount;
    }

    /**
     * @param string $base_tax_amount
     *
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
    public function getBase_row_total()
    {
        return $this->base_row_total;
    }

    /**
     * @param string $base_row_total
     *
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
    public function getBase_weee_tax_applied_amount()
    {
        return $this->base_weee_tax_applied_amount;
    }

    /**
     * @param string $base_weee_tax_applied_amount
     *
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
    public function getBase_weee_tax_applied_row_amount()
    {
        return $this->base_weee_tax_applied_row_amount;
    }

    /**
     * @param string $base_weee_tax_applied_row_amount
     *
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
    public function getWeee_tax_applied_amount()
    {
        return $this->weee_tax_applied_amount;
    }

    /**
     * @param string $weee_tax_applied_amount
     *
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
    public function getWeee_tax_applied_row_amount()
    {
        return $this->weee_tax_applied_row_amount;
    }

    /**
     * @param string $weee_tax_applied_row_amount
     *
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
    public function getWeee_tax_disposition()
    {
        return $this->weee_tax_disposition;
    }

    /**
     * @param string $weee_tax_disposition
     *
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
    public function getWeee_tax_row_disposition()
    {
        return $this->weee_tax_row_disposition;
    }

    /**
     * @param string $weee_tax_row_disposition
     *
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
    public function getBase_weee_tax_disposition()
    {
        return $this->base_weee_tax_disposition;
    }

    /**
     * @param string $base_weee_tax_disposition
     *
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
    public function getBase_weee_tax_row_disposition()
    {
        return $this->base_weee_tax_row_disposition;
    }

    /**
     * @param string $base_weee_tax_row_disposition
     *
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
    public function getOrder_item_id()
    {
        return $this->order_item_id;
    }

    /**
     * @param string $order_item_id
     *
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
    public function getItem_id()
    {
        return $this->item_id;
    }

    /**
     * @param string $item_id
     *
     * @return $this
     */
    public function setItem_id($item_id)
    {
        $this->item_id = $item_id;

        return $this;
    }
}
