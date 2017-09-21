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
    public function getIsActive()
    {
        return $this->is_active;
    }

    /**
     * @param string $is_active
     *
     * @return $this
     */
    public function setIsActive($is_active)
    {
        $this->is_active = $is_active;

        return $this;
    }

    /**
     * @return string
     */
    public function getCustomerId()
    {
        return $this->customer_id;
    }

    /**
     * @param string $customer_id
     *
     * @return $this
     */
    public function setCustomerId($customer_id)
    {
        $this->customer_id = $customer_id;

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
    public function getShippingAmount()
    {
        return $this->shipping_amount;
    }

    /**
     * @param string $shipping_amount
     *
     * @return $this
     */
    public function setShippingAmount($shipping_amount)
    {
        $this->shipping_amount = $shipping_amount;

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
    public function getGrandTotal()
    {
        return $this->grand_total;
    }

    /**
     * @param string $grand_total
     *
     * @return $this
     */
    public function setGrandTotal($grand_total)
    {
        $this->grand_total = $grand_total;

        return $this;
    }

    /**
     * @return string
     */
    public function getTotalPaid()
    {
        return $this->total_paid;
    }

    /**
     * @param string $total_paid
     *
     * @return $this
     */
    public function setTotalPaid($total_paid)
    {
        $this->total_paid = $total_paid;

        return $this;
    }

    /**
     * @return string
     */
    public function getTotalRefunded()
    {
        return $this->total_refunded;
    }

    /**
     * @param string $total_refunded
     *
     * @return $this
     */
    public function setTotalRefunded($total_refunded)
    {
        $this->total_refunded = $total_refunded;

        return $this;
    }

    /**
     * @return string
     */
    public function getTotalQtyOrdered()
    {
        return $this->total_qty_ordered;
    }

    /**
     * @param string $total_qty_ordered
     *
     * @return $this
     */
    public function setTotalQtyOrdered($total_qty_ordered)
    {
        $this->total_qty_ordered = $total_qty_ordered;

        return $this;
    }

    /**
     * @return string
     */
    public function getTotalCanceled()
    {
        return $this->total_canceled;
    }

    /**
     * @param string $total_canceled
     *
     * @return $this
     */
    public function setTotalCanceled($total_canceled)
    {
        $this->total_canceled = $total_canceled;

        return $this;
    }

    /**
     * @return string
     */
    public function getTotalInvoiced()
    {
        return $this->total_invoiced;
    }

    /**
     * @param string $total_invoiced
     *
     * @return $this
     */
    public function setTotalInvoiced($total_invoiced)
    {
        $this->total_invoiced = $total_invoiced;

        return $this;
    }

    /**
     * @return string
     */
    public function getTotalOnlineRefunded()
    {
        return $this->total_online_refunded;
    }

    /**
     * @param string $total_online_refunded
     *
     * @return $this
     */
    public function setTotalOnlineRefunded($total_online_refunded)
    {
        $this->total_online_refunded = $total_online_refunded;

        return $this;
    }

    /**
     * @return string
     */
    public function getTotalOfflineRefunded()
    {
        return $this->total_offline_refunded;
    }

    /**
     * @param string $total_offline_refunded
     *
     * @return $this
     */
    public function setTotalOfflineRefunded($total_offline_refunded)
    {
        $this->total_offline_refunded = $total_offline_refunded;

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
    public function getBaseShippingAmount()
    {
        return $this->base_shipping_amount;
    }

    /**
     * @param string $base_shipping_amount
     *
     * @return $this
     */
    public function setBaseShippingAmount($base_shipping_amount)
    {
        $this->base_shipping_amount = $base_shipping_amount;

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
    public function getBaseSubtotal()
    {
        return $this->base_subtotal;
    }

    /**
     * @param string $base_subtotal
     *
     * @return $this
     */
    public function setBaseSubtotal($base_subtotal)
    {
        $this->base_subtotal = $base_subtotal;

        return $this;
    }

    /**
     * @return string
     */
    public function getBaseGrandTotal()
    {
        return $this->base_grand_total;
    }

    /**
     * @param string $base_grand_total
     *
     * @return $this
     */
    public function setBaseGrandTotal($base_grand_total)
    {
        $this->base_grand_total = $base_grand_total;

        return $this;
    }

    /**
     * @return string
     */
    public function getBaseTotalPaid()
    {
        return $this->base_total_paid;
    }

    /**
     * @param string $base_total_paid
     *
     * @return $this
     */
    public function setBaseTotalPaid($base_total_paid)
    {
        $this->base_total_paid = $base_total_paid;

        return $this;
    }

    /**
     * @return string
     */
    public function getBaseTotalRefunded()
    {
        return $this->base_total_refunded;
    }

    /**
     * @param string $base_total_refunded
     *
     * @return $this
     */
    public function setBaseTotalRefunded($base_total_refunded)
    {
        $this->base_total_refunded = $base_total_refunded;

        return $this;
    }

    /**
     * @return string
     */
    public function getBaseTotalQtyOrdered()
    {
        return $this->base_total_qty_ordered;
    }

    /**
     * @param string $base_total_qty_ordered
     *
     * @return $this
     */
    public function setBaseTotalQtyOrdered($base_total_qty_ordered)
    {
        $this->base_total_qty_ordered = $base_total_qty_ordered;

        return $this;
    }

    /**
     * @return string
     */
    public function getBaseTotalCanceled()
    {
        return $this->base_total_canceled;
    }

    /**
     * @param string $base_total_canceled
     *
     * @return $this
     */
    public function setBaseTotalCanceled($base_total_canceled)
    {
        $this->base_total_canceled = $base_total_canceled;

        return $this;
    }

    /**
     * @return string
     */
    public function getBaseTotalInvoiced()
    {
        return $this->base_total_invoiced;
    }

    /**
     * @param string $base_total_invoiced
     *
     * @return $this
     */
    public function setBaseTotalInvoiced($base_total_invoiced)
    {
        $this->base_total_invoiced = $base_total_invoiced;

        return $this;
    }

    /**
     * @return string
     */
    public function getBaseTotalOnlineRefunded()
    {
        return $this->base_total_online_refunded;
    }

    /**
     * @param string $base_total_online_refunded
     *
     * @return $this
     */
    public function setBaseTotalOnlineRefunded($base_total_online_refunded)
    {
        $this->base_total_online_refunded = $base_total_online_refunded;

        return $this;
    }

    /**
     * @return string
     */
    public function getBaseTotalOfflineRefunded()
    {
        return $this->base_total_offline_refunded;
    }

    /**
     * @param string $base_total_offline_refunded
     *
     * @return $this
     */
    public function setBaseTotalOfflineRefunded($base_total_offline_refunded)
    {
        $this->base_total_offline_refunded = $base_total_offline_refunded;

        return $this;
    }

    /**
     * @return string
     */
    public function getBillingAddressId()
    {
        return $this->billing_address_id;
    }

    /**
     * @param string $billing_address_id
     *
     * @return $this
     */
    public function setBillingAddressId($billing_address_id)
    {
        $this->billing_address_id = $billing_address_id;

        return $this;
    }

    /**
     * @return string
     */
    public function getBillingFirstname()
    {
        return $this->billing_firstname;
    }

    /**
     * @param string $billing_firstname
     *
     * @return $this
     */
    public function setBillingFirstname($billing_firstname)
    {
        $this->billing_firstname = $billing_firstname;

        return $this;
    }

    /**
     * @return string
     */
    public function getBillingLastname()
    {
        return $this->billing_lastname;
    }

    /**
     * @param string $billing_lastname
     *
     * @return $this
     */
    public function setBillingLastname($billing_lastname)
    {
        $this->billing_lastname = $billing_lastname;

        return $this;
    }

    /**
     * @return string
     */
    public function getShippingAddressId()
    {
        return $this->shipping_address_id;
    }

    /**
     * @param string $shipping_address_id
     *
     * @return $this
     */
    public function setShippingAddressId($shipping_address_id)
    {
        $this->shipping_address_id = $shipping_address_id;

        return $this;
    }

    /**
     * @return string
     */
    public function getShippingFirstname()
    {
        return $this->shipping_firstname;
    }

    /**
     * @param string $shipping_firstname
     *
     * @return $this
     */
    public function setShippingFirstname($shipping_firstname)
    {
        $this->shipping_firstname = $shipping_firstname;

        return $this;
    }

    /**
     * @return string
     */
    public function getShippingLastname()
    {
        return $this->shipping_lastname;
    }

    /**
     * @param string $shipping_lastname
     *
     * @return $this
     */
    public function setShippingLastname($shipping_lastname)
    {
        $this->shipping_lastname = $shipping_lastname;

        return $this;
    }

    /**
     * @return string
     */
    public function getBillingName()
    {
        return $this->billing_name;
    }

    /**
     * @param string $billing_name
     *
     * @return $this
     */
    public function setBillingName($billing_name)
    {
        $this->billing_name = $billing_name;

        return $this;
    }

    /**
     * @return string
     */
    public function getShippingName()
    {
        return $this->shipping_name;
    }

    /**
     * @param string $shipping_name
     *
     * @return $this
     */
    public function setShippingName($shipping_name)
    {
        $this->shipping_name = $shipping_name;

        return $this;
    }

    /**
     * @return string
     */
    public function getStoreToBaseRate()
    {
        return $this->store_to_base_rate;
    }

    /**
     * @param string $store_to_base_rate
     *
     * @return $this
     */
    public function setStoreToBaseRate($store_to_base_rate)
    {
        $this->store_to_base_rate = $store_to_base_rate;

        return $this;
    }

    /**
     * @return string
     */
    public function getStoreToOrderRate()
    {
        return $this->store_to_order_rate;
    }

    /**
     * @param string $store_to_order_rate
     *
     * @return $this
     */
    public function setStoreToOrderRate($store_to_order_rate)
    {
        $this->store_to_order_rate = $store_to_order_rate;

        return $this;
    }

    /**
     * @return string
     */
    public function getBaseToGlobalRate()
    {
        return $this->base_to_global_rate;
    }

    /**
     * @param string $base_to_global_rate
     *
     * @return $this
     */
    public function setBaseToGlobalRate($base_to_global_rate)
    {
        $this->base_to_global_rate = $base_to_global_rate;

        return $this;
    }

    /**
     * @return string
     */
    public function getBaseToOrderRate()
    {
        return $this->base_to_order_rate;
    }

    /**
     * @param string $base_to_order_rate
     *
     * @return $this
     */
    public function setBaseToOrderRate($base_to_order_rate)
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
    public function getStoreName()
    {
        return $this->store_name;
    }

    /**
     * @param string $store_name
     *
     * @return $this
     */
    public function setStoreName($store_name)
    {
        $this->store_name = $store_name;

        return $this;
    }

    /**
     * @return string
     */
    public function getRemoteIp()
    {
        return $this->remote_ip;
    }

    /**
     * @param string $remote_ip
     *
     * @return $this
     */
    public function setRemoteIp($remote_ip)
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
    public function getGlobalCurrencyCode()
    {
        return $this->global_currency_code;
    }

    /**
     * @param string $global_currency_code
     *
     * @return $this
     */
    public function setGlobalCurrencyCode($global_currency_code)
    {
        $this->global_currency_code = $global_currency_code;

        return $this;
    }

    /**
     * @return string
     */
    public function getBaseCurrencyCode()
    {
        return $this->base_currency_code;
    }

    /**
     * @param string $base_currency_code
     *
     * @return $this
     */
    public function setBaseCurrencyCode($base_currency_code)
    {
        $this->base_currency_code = $base_currency_code;

        return $this;
    }

    /**
     * @return string
     */
    public function getStoreCurrencyCode()
    {
        return $this->store_currency_code;
    }

    /**
     * @param string $store_currency_code
     *
     * @return $this
     */
    public function setStoreCurrencyCode($store_currency_code)
    {
        $this->store_currency_code = $store_currency_code;

        return $this;
    }

    /**
     * @return string
     */
    public function getOrderCurrencyCode()
    {
        return $this->order_currency_code;
    }

    /**
     * @param string $order_currency_code
     *
     * @return $this
     */
    public function setOrderCurrencyCode($order_currency_code)
    {
        $this->order_currency_code = $order_currency_code;

        return $this;
    }

    /**
     * @return string
     */
    public function getShippingMethod()
    {
        return $this->shipping_method;
    }

    /**
     * @param string $shipping_method
     *
     * @return $this
     */
    public function setShippingMethod($shipping_method)
    {
        $this->shipping_method = $shipping_method;

        return $this;
    }

    /**
     * @return string
     */
    public function getShippingDescription()
    {
        return $this->shipping_description;
    }

    /**
     * @param string $shipping_description
     *
     * @return $this
     */
    public function setShippingDescription($shipping_description)
    {
        $this->shipping_description = $shipping_description;

        return $this;
    }

    /**
     * @return string
     */
    public function getCustomerEmail()
    {
        return $this->customer_email;
    }

    /**
     * @param string $customer_email
     *
     * @return $this
     */
    public function setCustomerEmail($customer_email)
    {
        $this->customer_email = $customer_email;

        return $this;
    }

    /**
     * @return string
     */
    public function getCustomerFirstname()
    {
        return $this->customer_firstname;
    }

    /**
     * @param string $customer_firstname
     *
     * @return $this
     */
    public function setCustomerFirstname($customer_firstname)
    {
        $this->customer_firstname = $customer_firstname;

        return $this;
    }

    /**
     * @return string
     */
    public function getCustomerLastname()
    {
        return $this->customer_lastname;
    }

    /**
     * @param string $customer_lastname
     *
     * @return $this
     */
    public function setCustomerLastname($customer_lastname)
    {
        $this->customer_lastname = $customer_lastname;

        return $this;
    }

    /**
     * @return string
     */
    public function getQuoteId()
    {
        return $this->quote_id;
    }

    /**
     * @param string $quote_id
     *
     * @return $this
     */
    public function setQuoteId($quote_id)
    {
        $this->quote_id = $quote_id;

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
    public function getCustomerGroupId()
    {
        return $this->customer_group_id;
    }

    /**
     * @param string $customer_group_id
     *
     * @return $this
     */
    public function setCustomerGroupId($customer_group_id)
    {
        $this->customer_group_id = $customer_group_id;

        return $this;
    }

    /**
     * @return string
     */
    public function getCustomerNoteNotify()
    {
        return $this->customer_note_notify;
    }

    /**
     * @param string $customer_note_notify
     *
     * @return $this
     */
    public function setCustomerNoteNotify($customer_note_notify)
    {
        $this->customer_note_notify = $customer_note_notify;

        return $this;
    }

    /**
     * @return string
     */
    public function getCustomerIsGuest()
    {
        return $this->customer_is_guest;
    }

    /**
     * @param string $customer_is_guest
     *
     * @return $this
     */
    public function setCustomerIsGuest($customer_is_guest)
    {
        $this->customer_is_guest = $customer_is_guest;

        return $this;
    }

    /**
     * @return string
     */
    public function getEmailSent()
    {
        return $this->email_sent;
    }

    /**
     * @param string $email_sent
     *
     * @return $this
     */
    public function setEmailSent($email_sent)
    {
        $this->email_sent = $email_sent;

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
     * @return salesOrderAddressEntity
     */
    public function getShippingAddress()
    {
        return $this->shipping_address;
    }

    /**
     * @param salesOrderAddressEntity $shipping_address
     *
     * @return $this
     */
    public function setShippingAddress($shipping_address)
    {
        $this->shipping_address = $shipping_address;

        return $this;
    }

    /**
     * @return salesOrderAddressEntity
     */
    public function getBillingAddress()
    {
        return $this->billing_address;
    }

    /**
     * @param salesOrderAddressEntity $billing_address
     *
     * @return $this
     */
    public function setBillingAddress($billing_address)
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
    public function setItems(array $items)
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
    public function getStatusHistory()
    {
        return $this->status_history;
    }

    /**
     * @param salesOrderStatusHistoryEntityArray $status_history
     *
     * @return $this
     */
    public function setStatusHistory(array $status_history)
    {
        $this->status_history = $status_history;

        return $this;
    }
}
