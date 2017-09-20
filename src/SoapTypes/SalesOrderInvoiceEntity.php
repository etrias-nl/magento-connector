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

class SalesOrderInvoiceEntity
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
    protected $store_id = null;

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
    protected $global_currency_code = null;

    /**
     * @var string
     */
    protected $base_currency_code = null;

    /**
     * @var string
     */
    protected $store_currency_code = null;

    /**
     * @var string
     */
    protected $order_currency_code = null;

    /**
     * @var string
     */
    protected $store_to_base_rate = null;

    /**
     * @var string
     */
    protected $store_to_order_rate = null;

    /**
     * @var string
     */
    protected $base_to_global_rate = null;

    /**
     * @var string
     */
    protected $base_to_order_rate = null;

    /**
     * @var string
     */
    protected $subtotal = null;

    /**
     * @var string
     */
    protected $base_subtotal = null;

    /**
     * @var string
     */
    protected $base_grand_total = null;

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
    protected $shipping_amount = null;

    /**
     * @var string
     */
    protected $base_shipping_amount = null;

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
    protected $billing_address_id = null;

    /**
     * @var string
     */
    protected $billing_firstname = null;

    /**
     * @var string
     */
    protected $billing_lastname = null;

    /**
     * @var string
     */
    protected $order_id = null;

    /**
     * @var string
     */
    protected $order_increment_id = null;

    /**
     * @var string
     */
    protected $order_created_at = null;

    /**
     * @var string
     */
    protected $state = null;

    /**
     * @var string
     */
    protected $grand_total = null;

    /**
     * @var string
     */
    protected $invoice_id = null;

    /**
     * @var salesOrderInvoiceItemEntityArray
     */
    protected $items = null;

    /**
     * @var salesOrderInvoiceCommentEntityArray
     */
    protected $comments = null;

    /**
     * Constructor.
     *
     * @var string
     * @var string                              $parent_id
     * @var string                              $store_id
     * @var string                              $created_at
     * @var string                              $updated_at
     * @var string                              $is_active
     * @var string                              $global_currency_code
     * @var string                              $base_currency_code
     * @var string                              $store_currency_code
     * @var string                              $order_currency_code
     * @var string                              $store_to_base_rate
     * @var string                              $store_to_order_rate
     * @var string                              $base_to_global_rate
     * @var string                              $base_to_order_rate
     * @var string                              $subtotal
     * @var string                              $base_subtotal
     * @var string                              $base_grand_total
     * @var string                              $discount_amount
     * @var string                              $base_discount_amount
     * @var string                              $shipping_amount
     * @var string                              $base_shipping_amount
     * @var string                              $tax_amount
     * @var string                              $base_tax_amount
     * @var string                              $billing_address_id
     * @var string                              $billing_firstname
     * @var string                              $billing_lastname
     * @var string                              $order_id
     * @var string                              $order_increment_id
     * @var string                              $order_created_at
     * @var string                              $state
     * @var string                              $grand_total
     * @var string                              $invoice_id
     * @var salesOrderInvoiceItemEntityArray    $items
     * @var salesOrderInvoiceCommentEntityArray $comments
     *
     * @param mixed $increment_id
     * @param mixed $parent_id
     * @param mixed $store_id
     * @param mixed $created_at
     * @param mixed $updated_at
     * @param mixed $is_active
     * @param mixed $global_currency_code
     * @param mixed $base_currency_code
     * @param mixed $store_currency_code
     * @param mixed $order_currency_code
     * @param mixed $store_to_base_rate
     * @param mixed $store_to_order_rate
     * @param mixed $base_to_global_rate
     * @param mixed $base_to_order_rate
     * @param mixed $subtotal
     * @param mixed $base_subtotal
     * @param mixed $base_grand_total
     * @param mixed $discount_amount
     * @param mixed $base_discount_amount
     * @param mixed $shipping_amount
     * @param mixed $base_shipping_amount
     * @param mixed $tax_amount
     * @param mixed $base_tax_amount
     * @param mixed $billing_address_id
     * @param mixed $billing_firstname
     * @param mixed $billing_lastname
     * @param mixed $order_id
     * @param mixed $order_increment_id
     * @param mixed $order_created_at
     * @param mixed $state
     * @param mixed $grand_total
     * @param mixed $invoice_id
     * @param mixed $items
     * @param mixed $comments
     */
    public function __construct($increment_id, $parent_id, $store_id, $created_at, $updated_at, $is_active, $global_currency_code, $base_currency_code, $store_currency_code, $order_currency_code, $store_to_base_rate, $store_to_order_rate, $base_to_global_rate, $base_to_order_rate, $subtotal, $base_subtotal, $base_grand_total, $discount_amount, $base_discount_amount, $shipping_amount, $base_shipping_amount, $tax_amount, $base_tax_amount, $billing_address_id, $billing_firstname, $billing_lastname, $order_id, $order_increment_id, $order_created_at, $state, $grand_total, $invoice_id, $items, $comments)
    {
        $this->increment_id = $increment_id;
        $this->parent_id = $parent_id;
        $this->store_id = $store_id;
        $this->created_at = $created_at;
        $this->updated_at = $updated_at;
        $this->is_active = $is_active;
        $this->global_currency_code = $global_currency_code;
        $this->base_currency_code = $base_currency_code;
        $this->store_currency_code = $store_currency_code;
        $this->order_currency_code = $order_currency_code;
        $this->store_to_base_rate = $store_to_base_rate;
        $this->store_to_order_rate = $store_to_order_rate;
        $this->base_to_global_rate = $base_to_global_rate;
        $this->base_to_order_rate = $base_to_order_rate;
        $this->subtotal = $subtotal;
        $this->base_subtotal = $base_subtotal;
        $this->base_grand_total = $base_grand_total;
        $this->discount_amount = $discount_amount;
        $this->base_discount_amount = $base_discount_amount;
        $this->shipping_amount = $shipping_amount;
        $this->base_shipping_amount = $base_shipping_amount;
        $this->tax_amount = $tax_amount;
        $this->base_tax_amount = $base_tax_amount;
        $this->billing_address_id = $billing_address_id;
        $this->billing_firstname = $billing_firstname;
        $this->billing_lastname = $billing_lastname;
        $this->order_id = $order_id;
        $this->order_increment_id = $order_increment_id;
        $this->order_created_at = $order_created_at;
        $this->state = $state;
        $this->grand_total = $grand_total;
        $this->invoice_id = $invoice_id;
        $this->items = $items;
        $this->comments = $comments;
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
     *
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
    public function getStore_id()
    {
        return $this->store_id;
    }

    /**
     * @param string $store_id
     *
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
    public function getGlobal_currency_code()
    {
        return $this->global_currency_code;
    }

    /**
     * @param string $global_currency_code
     *
     * @return $this
     */
    public function setGlobal_currency_code($global_currency_code)
    {
        $this->global_currency_code = $global_currency_code;

        return $this;
    }

    /**
     * @return string
     */
    public function getBase_currency_code()
    {
        return $this->base_currency_code;
    }

    /**
     * @param string $base_currency_code
     *
     * @return $this
     */
    public function setBase_currency_code($base_currency_code)
    {
        $this->base_currency_code = $base_currency_code;

        return $this;
    }

    /**
     * @return string
     */
    public function getStore_currency_code()
    {
        return $this->store_currency_code;
    }

    /**
     * @param string $store_currency_code
     *
     * @return $this
     */
    public function setStore_currency_code($store_currency_code)
    {
        $this->store_currency_code = $store_currency_code;

        return $this;
    }

    /**
     * @return string
     */
    public function getOrder_currency_code()
    {
        return $this->order_currency_code;
    }

    /**
     * @param string $order_currency_code
     *
     * @return $this
     */
    public function setOrder_currency_code($order_currency_code)
    {
        $this->order_currency_code = $order_currency_code;

        return $this;
    }

    /**
     * @return string
     */
    public function getStore_to_base_rate()
    {
        return $this->store_to_base_rate;
    }

    /**
     * @param string $store_to_base_rate
     *
     * @return $this
     */
    public function setStore_to_base_rate($store_to_base_rate)
    {
        $this->store_to_base_rate = $store_to_base_rate;

        return $this;
    }

    /**
     * @return string
     */
    public function getStore_to_order_rate()
    {
        return $this->store_to_order_rate;
    }

    /**
     * @param string $store_to_order_rate
     *
     * @return $this
     */
    public function setStore_to_order_rate($store_to_order_rate)
    {
        $this->store_to_order_rate = $store_to_order_rate;

        return $this;
    }

    /**
     * @return string
     */
    public function getBase_to_global_rate()
    {
        return $this->base_to_global_rate;
    }

    /**
     * @param string $base_to_global_rate
     *
     * @return $this
     */
    public function setBase_to_global_rate($base_to_global_rate)
    {
        $this->base_to_global_rate = $base_to_global_rate;

        return $this;
    }

    /**
     * @return string
     */
    public function getBase_to_order_rate()
    {
        return $this->base_to_order_rate;
    }

    /**
     * @param string $base_to_order_rate
     *
     * @return $this
     */
    public function setBase_to_order_rate($base_to_order_rate)
    {
        $this->base_to_order_rate = $base_to_order_rate;

        return $this;
    }

    /**
     * @return string
     */
    public function getSubtotal()
    {
        return $this->subtotal;
    }

    /**
     * @param string $subtotal
     *
     * @return $this
     */
    public function setSubtotal($subtotal)
    {
        $this->subtotal = $subtotal;

        return $this;
    }

    /**
     * @return string
     */
    public function getBase_subtotal()
    {
        return $this->base_subtotal;
    }

    /**
     * @param string $base_subtotal
     *
     * @return $this
     */
    public function setBase_subtotal($base_subtotal)
    {
        $this->base_subtotal = $base_subtotal;

        return $this;
    }

    /**
     * @return string
     */
    public function getBase_grand_total()
    {
        return $this->base_grand_total;
    }

    /**
     * @param string $base_grand_total
     *
     * @return $this
     */
    public function setBase_grand_total($base_grand_total)
    {
        $this->base_grand_total = $base_grand_total;

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
     *
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
    public function getBase_discount_amount()
    {
        return $this->base_discount_amount;
    }

    /**
     * @param string $base_discount_amount
     *
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
    public function getShipping_amount()
    {
        return $this->shipping_amount;
    }

    /**
     * @param string $shipping_amount
     *
     * @return $this
     */
    public function setShipping_amount($shipping_amount)
    {
        $this->shipping_amount = $shipping_amount;

        return $this;
    }

    /**
     * @return string
     */
    public function getBase_shipping_amount()
    {
        return $this->base_shipping_amount;
    }

    /**
     * @param string $base_shipping_amount
     *
     * @return $this
     */
    public function setBase_shipping_amount($base_shipping_amount)
    {
        $this->base_shipping_amount = $base_shipping_amount;

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
    public function getBilling_address_id()
    {
        return $this->billing_address_id;
    }

    /**
     * @param string $billing_address_id
     *
     * @return $this
     */
    public function setBilling_address_id($billing_address_id)
    {
        $this->billing_address_id = $billing_address_id;

        return $this;
    }

    /**
     * @return string
     */
    public function getBilling_firstname()
    {
        return $this->billing_firstname;
    }

    /**
     * @param string $billing_firstname
     *
     * @return $this
     */
    public function setBilling_firstname($billing_firstname)
    {
        $this->billing_firstname = $billing_firstname;

        return $this;
    }

    /**
     * @return string
     */
    public function getBilling_lastname()
    {
        return $this->billing_lastname;
    }

    /**
     * @param string $billing_lastname
     *
     * @return $this
     */
    public function setBilling_lastname($billing_lastname)
    {
        $this->billing_lastname = $billing_lastname;

        return $this;
    }

    /**
     * @return string
     */
    public function getOrder_id()
    {
        return $this->order_id;
    }

    /**
     * @param string $order_id
     *
     * @return $this
     */
    public function setOrder_id($order_id)
    {
        $this->order_id = $order_id;

        return $this;
    }

    /**
     * @return string
     */
    public function getOrder_increment_id()
    {
        return $this->order_increment_id;
    }

    /**
     * @param string $order_increment_id
     *
     * @return $this
     */
    public function setOrder_increment_id($order_increment_id)
    {
        $this->order_increment_id = $order_increment_id;

        return $this;
    }

    /**
     * @return string
     */
    public function getOrder_created_at()
    {
        return $this->order_created_at;
    }

    /**
     * @param string $order_created_at
     *
     * @return $this
     */
    public function setOrder_created_at($order_created_at)
    {
        $this->order_created_at = $order_created_at;

        return $this;
    }

    /**
     * @return string
     */
    public function getState()
    {
        return $this->state;
    }

    /**
     * @param string $state
     *
     * @return $this
     */
    public function setState($state)
    {
        $this->state = $state;

        return $this;
    }

    /**
     * @return string
     */
    public function getGrand_total()
    {
        return $this->grand_total;
    }

    /**
     * @param string $grand_total
     *
     * @return $this
     */
    public function setGrand_total($grand_total)
    {
        $this->grand_total = $grand_total;

        return $this;
    }

    /**
     * @return string
     */
    public function getInvoice_id()
    {
        return $this->invoice_id;
    }

    /**
     * @param string $invoice_id
     *
     * @return $this
     */
    public function setInvoice_id($invoice_id)
    {
        $this->invoice_id = $invoice_id;

        return $this;
    }

    /**
     * @return salesOrderInvoiceItemEntityArray
     */
    public function getItems()
    {
        return $this->items;
    }

    /**
     * @param salesOrderInvoiceItemEntityArray $items
     *
     * @return $this
     */
    public function setItems($items)
    {
        $this->items = $items;

        return $this;
    }

    /**
     * @return salesOrderInvoiceCommentEntityArray
     */
    public function getComments()
    {
        return $this->comments;
    }

    /**
     * @param salesOrderInvoiceCommentEntityArray $comments
     *
     * @return $this
     */
    public function setComments($comments)
    {
        $this->comments = $comments;

        return $this;
    }
}
