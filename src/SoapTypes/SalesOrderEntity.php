<?php

declare(strict_types = 1);

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

class SalesOrderEntity
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
    protected $customer_id = null;

    /**
     * @var string
     */
    protected $tax_amount = null;

    /**
     * @var string
     */
    protected $shipping_amount = null;

    /**
     * @var string
     */
    protected $discount_amount = null;

    /**
     * @var string
     */
    protected $subtotal = null;

    /**
     * @var string
     */
    protected $grand_total = null;

    /**
     * @var string
     */
    protected $total_paid = null;

    /**
     * @var string
     */
    protected $total_refunded = null;

    /**
     * @var string
     */
    protected $total_qty_ordered = null;

    /**
     * @var string
     */
    protected $total_canceled = null;

    /**
     * @var string
     */
    protected $total_invoiced = null;

    /**
     * @var string
     */
    protected $total_online_refunded = null;

    /**
     * @var string
     */
    protected $total_offline_refunded = null;

    /**
     * @var string
     */
    protected $base_tax_amount = null;

    /**
     * @var string
     */
    protected $base_shipping_amount = null;

    /**
     * @var string
     */
    protected $base_discount_amount = null;

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
    protected $base_total_paid = null;

    /**
     * @var string
     */
    protected $base_total_refunded = null;

    /**
     * @var string
     */
    protected $base_total_qty_ordered = null;

    /**
     * @var string
     */
    protected $base_total_canceled = null;

    /**
     * @var string
     */
    protected $base_total_invoiced = null;

    /**
     * @var string
     */
    protected $base_total_online_refunded = null;

    /**
     * @var string
     */
    protected $base_total_offline_refunded = null;

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
    protected $shipping_address_id = null;

    /**
     * @var string
     */
    protected $shipping_firstname = null;

    /**
     * @var string
     */
    protected $shipping_lastname = null;

    /**
     * @var string
     */
    protected $billing_name = null;

    /**
     * @var string
     */
    protected $shipping_name = null;

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
    protected $weight = null;

    /**
     * @var string
     */
    protected $store_name = null;

    /**
     * @var string
     */
    protected $remote_ip = null;

    /**
     * @var string
     */
    protected $status = null;

    /**
     * @var string
     */
    protected $state = null;

    /**
     * @var string
     */
    protected $applied_rule_ids = null;

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
    protected $shipping_method = null;

    /**
     * @var string
     */
    protected $shipping_description = null;

    /**
     * @var string
     */
    protected $customer_email = null;

    /**
     * @var string
     */
    protected $customer_firstname = null;

    /**
     * @var string
     */
    protected $customer_lastname = null;

    /**
     * @var string
     */
    protected $quote_id = null;

    /**
     * @var string
     */
    protected $is_virtual = null;

    /**
     * @var string
     */
    protected $customer_group_id = null;

    /**
     * @var string
     */
    protected $customer_note_notify = null;

    /**
     * @var string
     */
    protected $customer_is_guest = null;

    /**
     * @var string
     */
    protected $email_sent = null;

    /**
     * @var string
     */
    protected $order_id = null;

    /**
     * @var string
     */
    protected $gift_message_id = null;

    /**
     * @var string
     */
    protected $gift_message = null;

    /**
     * @var salesOrderAddressEntity
     */
    protected $shipping_address = null;

    /**
     * @var salesOrderAddressEntity
     */
    protected $billing_address = null;

    /**
     * @var salesOrderItemEntityArray
     */
    protected $items = null;

    /**
     * @var salesOrderPaymentEntity
     */
    protected $payment = null;

    /**
     * @var salesOrderStatusHistoryEntityArray
     */
    protected $status_history = null;

    /**
     * Constructor.
     *
     * @var string
     * @var string                             $parent_id
     * @var string                             $store_id
     * @var string                             $created_at
     * @var string                             $updated_at
     * @var string                             $is_active
     * @var string                             $customer_id
     * @var string                             $tax_amount
     * @var string                             $shipping_amount
     * @var string                             $discount_amount
     * @var string                             $subtotal
     * @var string                             $grand_total
     * @var string                             $total_paid
     * @var string                             $total_refunded
     * @var string                             $total_qty_ordered
     * @var string                             $total_canceled
     * @var string                             $total_invoiced
     * @var string                             $total_online_refunded
     * @var string                             $total_offline_refunded
     * @var string                             $base_tax_amount
     * @var string                             $base_shipping_amount
     * @var string                             $base_discount_amount
     * @var string                             $base_subtotal
     * @var string                             $base_grand_total
     * @var string                             $base_total_paid
     * @var string                             $base_total_refunded
     * @var string                             $base_total_qty_ordered
     * @var string                             $base_total_canceled
     * @var string                             $base_total_invoiced
     * @var string                             $base_total_online_refunded
     * @var string                             $base_total_offline_refunded
     * @var string                             $billing_address_id
     * @var string                             $billing_firstname
     * @var string                             $billing_lastname
     * @var string                             $shipping_address_id
     * @var string                             $shipping_firstname
     * @var string                             $shipping_lastname
     * @var string                             $billing_name
     * @var string                             $shipping_name
     * @var string                             $store_to_base_rate
     * @var string                             $store_to_order_rate
     * @var string                             $base_to_global_rate
     * @var string                             $base_to_order_rate
     * @var string                             $weight
     * @var string                             $store_name
     * @var string                             $remote_ip
     * @var string                             $status
     * @var string                             $state
     * @var string                             $applied_rule_ids
     * @var string                             $global_currency_code
     * @var string                             $base_currency_code
     * @var string                             $store_currency_code
     * @var string                             $order_currency_code
     * @var string                             $shipping_method
     * @var string                             $shipping_description
     * @var string                             $customer_email
     * @var string                             $customer_firstname
     * @var string                             $customer_lastname
     * @var string                             $quote_id
     * @var string                             $is_virtual
     * @var string                             $customer_group_id
     * @var string                             $customer_note_notify
     * @var string                             $customer_is_guest
     * @var string                             $email_sent
     * @var string                             $order_id
     * @var string                             $gift_message_id
     * @var string                             $gift_message
     * @var salesOrderAddressEntity            $shipping_address
     * @var salesOrderAddressEntity            $billing_address
     * @var salesOrderItemEntityArray          $items
     * @var salesOrderPaymentEntity            $payment
     * @var salesOrderStatusHistoryEntityArray $status_history
     *
     * @param mixed $increment_id
     * @param mixed $parent_id
     * @param mixed $store_id
     * @param mixed $created_at
     * @param mixed $updated_at
     * @param mixed $is_active
     * @param mixed $customer_id
     * @param mixed $tax_amount
     * @param mixed $shipping_amount
     * @param mixed $discount_amount
     * @param mixed $subtotal
     * @param mixed $grand_total
     * @param mixed $total_paid
     * @param mixed $total_refunded
     * @param mixed $total_qty_ordered
     * @param mixed $total_canceled
     * @param mixed $total_invoiced
     * @param mixed $total_online_refunded
     * @param mixed $total_offline_refunded
     * @param mixed $base_tax_amount
     * @param mixed $base_shipping_amount
     * @param mixed $base_discount_amount
     * @param mixed $base_subtotal
     * @param mixed $base_grand_total
     * @param mixed $base_total_paid
     * @param mixed $base_total_refunded
     * @param mixed $base_total_qty_ordered
     * @param mixed $base_total_canceled
     * @param mixed $base_total_invoiced
     * @param mixed $base_total_online_refunded
     * @param mixed $base_total_offline_refunded
     * @param mixed $billing_address_id
     * @param mixed $billing_firstname
     * @param mixed $billing_lastname
     * @param mixed $shipping_address_id
     * @param mixed $shipping_firstname
     * @param mixed $shipping_lastname
     * @param mixed $billing_name
     * @param mixed $shipping_name
     * @param mixed $store_to_base_rate
     * @param mixed $store_to_order_rate
     * @param mixed $base_to_global_rate
     * @param mixed $base_to_order_rate
     * @param mixed $weight
     * @param mixed $store_name
     * @param mixed $remote_ip
     * @param mixed $status
     * @param mixed $state
     * @param mixed $applied_rule_ids
     * @param mixed $global_currency_code
     * @param mixed $base_currency_code
     * @param mixed $store_currency_code
     * @param mixed $order_currency_code
     * @param mixed $shipping_method
     * @param mixed $shipping_description
     * @param mixed $customer_email
     * @param mixed $customer_firstname
     * @param mixed $customer_lastname
     * @param mixed $quote_id
     * @param mixed $is_virtual
     * @param mixed $customer_group_id
     * @param mixed $customer_note_notify
     * @param mixed $customer_is_guest
     * @param mixed $email_sent
     * @param mixed $order_id
     * @param mixed $gift_message_id
     * @param mixed $gift_message
     * @param mixed $shipping_address
     * @param mixed $billing_address
     * @param mixed $items
     * @param mixed $payment
     * @param mixed $status_history
     */
    public function __construct($increment_id, $parent_id, $store_id, $created_at, $updated_at, $is_active, $customer_id, $tax_amount, $shipping_amount, $discount_amount, $subtotal, $grand_total, $total_paid, $total_refunded, $total_qty_ordered, $total_canceled, $total_invoiced, $total_online_refunded, $total_offline_refunded, $base_tax_amount, $base_shipping_amount, $base_discount_amount, $base_subtotal, $base_grand_total, $base_total_paid, $base_total_refunded, $base_total_qty_ordered, $base_total_canceled, $base_total_invoiced, $base_total_online_refunded, $base_total_offline_refunded, $billing_address_id, $billing_firstname, $billing_lastname, $shipping_address_id, $shipping_firstname, $shipping_lastname, $billing_name, $shipping_name, $store_to_base_rate, $store_to_order_rate, $base_to_global_rate, $base_to_order_rate, $weight, $store_name, $remote_ip, $status, $state, $applied_rule_ids, $global_currency_code, $base_currency_code, $store_currency_code, $order_currency_code, $shipping_method, $shipping_description, $customer_email, $customer_firstname, $customer_lastname, $quote_id, $is_virtual, $customer_group_id, $customer_note_notify, $customer_is_guest, $email_sent, $order_id, $gift_message_id, $gift_message, $shipping_address, $billing_address, $items, $payment, $status_history)
    {
        $this->increment_id = $increment_id;
        $this->parent_id = $parent_id;
        $this->store_id = $store_id;
        $this->created_at = $created_at;
        $this->updated_at = $updated_at;
        $this->is_active = $is_active;
        $this->customer_id = $customer_id;
        $this->tax_amount = $tax_amount;
        $this->shipping_amount = $shipping_amount;
        $this->discount_amount = $discount_amount;
        $this->subtotal = $subtotal;
        $this->grand_total = $grand_total;
        $this->total_paid = $total_paid;
        $this->total_refunded = $total_refunded;
        $this->total_qty_ordered = $total_qty_ordered;
        $this->total_canceled = $total_canceled;
        $this->total_invoiced = $total_invoiced;
        $this->total_online_refunded = $total_online_refunded;
        $this->total_offline_refunded = $total_offline_refunded;
        $this->base_tax_amount = $base_tax_amount;
        $this->base_shipping_amount = $base_shipping_amount;
        $this->base_discount_amount = $base_discount_amount;
        $this->base_subtotal = $base_subtotal;
        $this->base_grand_total = $base_grand_total;
        $this->base_total_paid = $base_total_paid;
        $this->base_total_refunded = $base_total_refunded;
        $this->base_total_qty_ordered = $base_total_qty_ordered;
        $this->base_total_canceled = $base_total_canceled;
        $this->base_total_invoiced = $base_total_invoiced;
        $this->base_total_online_refunded = $base_total_online_refunded;
        $this->base_total_offline_refunded = $base_total_offline_refunded;
        $this->billing_address_id = $billing_address_id;
        $this->billing_firstname = $billing_firstname;
        $this->billing_lastname = $billing_lastname;
        $this->shipping_address_id = $shipping_address_id;
        $this->shipping_firstname = $shipping_firstname;
        $this->shipping_lastname = $shipping_lastname;
        $this->billing_name = $billing_name;
        $this->shipping_name = $shipping_name;
        $this->store_to_base_rate = $store_to_base_rate;
        $this->store_to_order_rate = $store_to_order_rate;
        $this->base_to_global_rate = $base_to_global_rate;
        $this->base_to_order_rate = $base_to_order_rate;
        $this->weight = $weight;
        $this->store_name = $store_name;
        $this->remote_ip = $remote_ip;
        $this->status = $status;
        $this->state = $state;
        $this->applied_rule_ids = $applied_rule_ids;
        $this->global_currency_code = $global_currency_code;
        $this->base_currency_code = $base_currency_code;
        $this->store_currency_code = $store_currency_code;
        $this->order_currency_code = $order_currency_code;
        $this->shipping_method = $shipping_method;
        $this->shipping_description = $shipping_description;
        $this->customer_email = $customer_email;
        $this->customer_firstname = $customer_firstname;
        $this->customer_lastname = $customer_lastname;
        $this->quote_id = $quote_id;
        $this->is_virtual = $is_virtual;
        $this->customer_group_id = $customer_group_id;
        $this->customer_note_notify = $customer_note_notify;
        $this->customer_is_guest = $customer_is_guest;
        $this->email_sent = $email_sent;
        $this->order_id = $order_id;
        $this->gift_message_id = $gift_message_id;
        $this->gift_message = $gift_message;
        $this->shipping_address = $shipping_address;
        $this->billing_address = $billing_address;
        $this->items = $items;
        $this->payment = $payment;
        $this->status_history = $status_history;
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
    public function getCustomer_id()
    {
        return $this->customer_id;
    }

    /**
     * @param string $customer_id
     *
     * @return $this
     */
    public function setCustomer_id($customer_id)
    {
        $this->customer_id = $customer_id;

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
    public function getTotal_paid()
    {
        return $this->total_paid;
    }

    /**
     * @param string $total_paid
     *
     * @return $this
     */
    public function setTotal_paid($total_paid)
    {
        $this->total_paid = $total_paid;

        return $this;
    }

    /**
     * @return string
     */
    public function getTotal_refunded()
    {
        return $this->total_refunded;
    }

    /**
     * @param string $total_refunded
     *
     * @return $this
     */
    public function setTotal_refunded($total_refunded)
    {
        $this->total_refunded = $total_refunded;

        return $this;
    }

    /**
     * @return string
     */
    public function getTotal_qty_ordered()
    {
        return $this->total_qty_ordered;
    }

    /**
     * @param string $total_qty_ordered
     *
     * @return $this
     */
    public function setTotal_qty_ordered($total_qty_ordered)
    {
        $this->total_qty_ordered = $total_qty_ordered;

        return $this;
    }

    /**
     * @return string
     */
    public function getTotal_canceled()
    {
        return $this->total_canceled;
    }

    /**
     * @param string $total_canceled
     *
     * @return $this
     */
    public function setTotal_canceled($total_canceled)
    {
        $this->total_canceled = $total_canceled;

        return $this;
    }

    /**
     * @return string
     */
    public function getTotal_invoiced()
    {
        return $this->total_invoiced;
    }

    /**
     * @param string $total_invoiced
     *
     * @return $this
     */
    public function setTotal_invoiced($total_invoiced)
    {
        $this->total_invoiced = $total_invoiced;

        return $this;
    }

    /**
     * @return string
     */
    public function getTotal_online_refunded()
    {
        return $this->total_online_refunded;
    }

    /**
     * @param string $total_online_refunded
     *
     * @return $this
     */
    public function setTotal_online_refunded($total_online_refunded)
    {
        $this->total_online_refunded = $total_online_refunded;

        return $this;
    }

    /**
     * @return string
     */
    public function getTotal_offline_refunded()
    {
        return $this->total_offline_refunded;
    }

    /**
     * @param string $total_offline_refunded
     *
     * @return $this
     */
    public function setTotal_offline_refunded($total_offline_refunded)
    {
        $this->total_offline_refunded = $total_offline_refunded;

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
    public function getBase_total_paid()
    {
        return $this->base_total_paid;
    }

    /**
     * @param string $base_total_paid
     *
     * @return $this
     */
    public function setBase_total_paid($base_total_paid)
    {
        $this->base_total_paid = $base_total_paid;

        return $this;
    }

    /**
     * @return string
     */
    public function getBase_total_refunded()
    {
        return $this->base_total_refunded;
    }

    /**
     * @param string $base_total_refunded
     *
     * @return $this
     */
    public function setBase_total_refunded($base_total_refunded)
    {
        $this->base_total_refunded = $base_total_refunded;

        return $this;
    }

    /**
     * @return string
     */
    public function getBase_total_qty_ordered()
    {
        return $this->base_total_qty_ordered;
    }

    /**
     * @param string $base_total_qty_ordered
     *
     * @return $this
     */
    public function setBase_total_qty_ordered($base_total_qty_ordered)
    {
        $this->base_total_qty_ordered = $base_total_qty_ordered;

        return $this;
    }

    /**
     * @return string
     */
    public function getBase_total_canceled()
    {
        return $this->base_total_canceled;
    }

    /**
     * @param string $base_total_canceled
     *
     * @return $this
     */
    public function setBase_total_canceled($base_total_canceled)
    {
        $this->base_total_canceled = $base_total_canceled;

        return $this;
    }

    /**
     * @return string
     */
    public function getBase_total_invoiced()
    {
        return $this->base_total_invoiced;
    }

    /**
     * @param string $base_total_invoiced
     *
     * @return $this
     */
    public function setBase_total_invoiced($base_total_invoiced)
    {
        $this->base_total_invoiced = $base_total_invoiced;

        return $this;
    }

    /**
     * @return string
     */
    public function getBase_total_online_refunded()
    {
        return $this->base_total_online_refunded;
    }

    /**
     * @param string $base_total_online_refunded
     *
     * @return $this
     */
    public function setBase_total_online_refunded($base_total_online_refunded)
    {
        $this->base_total_online_refunded = $base_total_online_refunded;

        return $this;
    }

    /**
     * @return string
     */
    public function getBase_total_offline_refunded()
    {
        return $this->base_total_offline_refunded;
    }

    /**
     * @param string $base_total_offline_refunded
     *
     * @return $this
     */
    public function setBase_total_offline_refunded($base_total_offline_refunded)
    {
        $this->base_total_offline_refunded = $base_total_offline_refunded;

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
    public function getShipping_address_id()
    {
        return $this->shipping_address_id;
    }

    /**
     * @param string $shipping_address_id
     *
     * @return $this
     */
    public function setShipping_address_id($shipping_address_id)
    {
        $this->shipping_address_id = $shipping_address_id;

        return $this;
    }

    /**
     * @return string
     */
    public function getShipping_firstname()
    {
        return $this->shipping_firstname;
    }

    /**
     * @param string $shipping_firstname
     *
     * @return $this
     */
    public function setShipping_firstname($shipping_firstname)
    {
        $this->shipping_firstname = $shipping_firstname;

        return $this;
    }

    /**
     * @return string
     */
    public function getShipping_lastname()
    {
        return $this->shipping_lastname;
    }

    /**
     * @param string $shipping_lastname
     *
     * @return $this
     */
    public function setShipping_lastname($shipping_lastname)
    {
        $this->shipping_lastname = $shipping_lastname;

        return $this;
    }

    /**
     * @return string
     */
    public function getBilling_name()
    {
        return $this->billing_name;
    }

    /**
     * @param string $billing_name
     *
     * @return $this
     */
    public function setBilling_name($billing_name)
    {
        $this->billing_name = $billing_name;

        return $this;
    }

    /**
     * @return string
     */
    public function getShipping_name()
    {
        return $this->shipping_name;
    }

    /**
     * @param string $shipping_name
     *
     * @return $this
     */
    public function setShipping_name($shipping_name)
    {
        $this->shipping_name = $shipping_name;

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
    public function getStore_name()
    {
        return $this->store_name;
    }

    /**
     * @param string $store_name
     *
     * @return $this
     */
    public function setStore_name($store_name)
    {
        $this->store_name = $store_name;

        return $this;
    }

    /**
     * @return string
     */
    public function getRemote_ip()
    {
        return $this->remote_ip;
    }

    /**
     * @param string $remote_ip
     *
     * @return $this
     */
    public function setRemote_ip($remote_ip)
    {
        $this->remote_ip = $remote_ip;

        return $this;
    }

    /**
     * @return string
     */
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * @param string $status
     *
     * @return $this
     */
    public function setStatus($status)
    {
        $this->status = $status;

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
    public function getApplied_rule_ids()
    {
        return $this->applied_rule_ids;
    }

    /**
     * @param string $applied_rule_ids
     *
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
    public function getShipping_method()
    {
        return $this->shipping_method;
    }

    /**
     * @param string $shipping_method
     *
     * @return $this
     */
    public function setShipping_method($shipping_method)
    {
        $this->shipping_method = $shipping_method;

        return $this;
    }

    /**
     * @return string
     */
    public function getShipping_description()
    {
        return $this->shipping_description;
    }

    /**
     * @param string $shipping_description
     *
     * @return $this
     */
    public function setShipping_description($shipping_description)
    {
        $this->shipping_description = $shipping_description;

        return $this;
    }

    /**
     * @return string
     */
    public function getCustomer_email()
    {
        return $this->customer_email;
    }

    /**
     * @param string $customer_email
     *
     * @return $this
     */
    public function setCustomer_email($customer_email)
    {
        $this->customer_email = $customer_email;

        return $this;
    }

    /**
     * @return string
     */
    public function getCustomer_firstname()
    {
        return $this->customer_firstname;
    }

    /**
     * @param string $customer_firstname
     *
     * @return $this
     */
    public function setCustomer_firstname($customer_firstname)
    {
        $this->customer_firstname = $customer_firstname;

        return $this;
    }

    /**
     * @return string
     */
    public function getCustomer_lastname()
    {
        return $this->customer_lastname;
    }

    /**
     * @param string $customer_lastname
     *
     * @return $this
     */
    public function setCustomer_lastname($customer_lastname)
    {
        $this->customer_lastname = $customer_lastname;

        return $this;
    }

    /**
     * @return string
     */
    public function getQuote_id()
    {
        return $this->quote_id;
    }

    /**
     * @param string $quote_id
     *
     * @return $this
     */
    public function setQuote_id($quote_id)
    {
        $this->quote_id = $quote_id;

        return $this;
    }

    /**
     * @return string
     */
    public function getIs_virtual()
    {
        return $this->is_virtual;
    }

    /**
     * @param string $is_virtual
     *
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
    public function getCustomer_group_id()
    {
        return $this->customer_group_id;
    }

    /**
     * @param string $customer_group_id
     *
     * @return $this
     */
    public function setCustomer_group_id($customer_group_id)
    {
        $this->customer_group_id = $customer_group_id;

        return $this;
    }

    /**
     * @return string
     */
    public function getCustomer_note_notify()
    {
        return $this->customer_note_notify;
    }

    /**
     * @param string $customer_note_notify
     *
     * @return $this
     */
    public function setCustomer_note_notify($customer_note_notify)
    {
        $this->customer_note_notify = $customer_note_notify;

        return $this;
    }

    /**
     * @return string
     */
    public function getCustomer_is_guest()
    {
        return $this->customer_is_guest;
    }

    /**
     * @param string $customer_is_guest
     *
     * @return $this
     */
    public function setCustomer_is_guest($customer_is_guest)
    {
        $this->customer_is_guest = $customer_is_guest;

        return $this;
    }

    /**
     * @return string
     */
    public function getEmail_sent()
    {
        return $this->email_sent;
    }

    /**
     * @param string $email_sent
     *
     * @return $this
     */
    public function setEmail_sent($email_sent)
    {
        $this->email_sent = $email_sent;

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
    public function getGift_message_id()
    {
        return $this->gift_message_id;
    }

    /**
     * @param string $gift_message_id
     *
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
     *
     * @return $this
     */
    public function setGift_message($gift_message)
    {
        $this->gift_message = $gift_message;

        return $this;
    }

    /**
     * @return salesOrderAddressEntity
     */
    public function getShipping_address()
    {
        return $this->shipping_address;
    }

    /**
     * @param salesOrderAddressEntity $shipping_address
     *
     * @return $this
     */
    public function setShipping_address($shipping_address)
    {
        $this->shipping_address = $shipping_address;

        return $this;
    }

    /**
     * @return salesOrderAddressEntity
     */
    public function getBilling_address()
    {
        return $this->billing_address;
    }

    /**
     * @param salesOrderAddressEntity $billing_address
     *
     * @return $this
     */
    public function setBilling_address($billing_address)
    {
        $this->billing_address = $billing_address;

        return $this;
    }

    /**
     * @return salesOrderItemEntityArray
     */
    public function getItems()
    {
        return $this->items;
    }

    /**
     * @param salesOrderItemEntityArray $items
     *
     * @return $this
     */
    public function setItems($items)
    {
        $this->items = $items;

        return $this;
    }

    /**
     * @return salesOrderPaymentEntity
     */
    public function getPayment()
    {
        return $this->payment;
    }

    /**
     * @param salesOrderPaymentEntity $payment
     *
     * @return $this
     */
    public function setPayment($payment)
    {
        $this->payment = $payment;

        return $this;
    }

    /**
     * @return salesOrderStatusHistoryEntityArray
     */
    public function getStatus_history()
    {
        return $this->status_history;
    }

    /**
     * @param salesOrderStatusHistoryEntityArray $status_history
     *
     * @return $this
     */
    public function setStatus_history($status_history)
    {
        $this->status_history = $status_history;

        return $this;
    }
}
