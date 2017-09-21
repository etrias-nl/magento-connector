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

class SalesOrderListEntity
{
    /**
     * @var string
     */
    protected $increment_id = null;

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
    protected $coupon_code = null;

    /**
     * @var string
     */
    protected $protect_code = null;

    /**
     * @var string
     */
    protected $base_discount_canceled = null;

    /**
     * @var string
     */
    protected $base_discount_invoiced = null;

    /**
     * @var string
     */
    protected $base_discount_refunded = null;

    /**
     * @var string
     */
    protected $base_shipping_canceled = null;

    /**
     * @var string
     */
    protected $base_shipping_invoiced = null;

    /**
     * @var string
     */
    protected $base_shipping_refunded = null;

    /**
     * @var string
     */
    protected $base_shipping_tax_amount = null;

    /**
     * @var string
     */
    protected $base_shipping_tax_refunded = null;

    /**
     * @var string
     */
    protected $base_subtotal_canceled = null;

    /**
     * @var string
     */
    protected $base_subtotal_invoiced = null;

    /**
     * @var string
     */
    protected $base_subtotal_refunded = null;

    /**
     * @var string
     */
    protected $base_tax_canceled = null;

    /**
     * @var string
     */
    protected $base_tax_invoiced = null;

    /**
     * @var string
     */
    protected $base_tax_refunded = null;

    /**
     * @var string
     */
    protected $base_total_invoiced_cost = null;

    /**
     * @var string
     */
    protected $discount_canceled = null;

    /**
     * @var string
     */
    protected $discount_invoiced = null;

    /**
     * @var string
     */
    protected $discount_refunded = null;

    /**
     * @var string
     */
    protected $shipping_canceled = null;

    /**
     * @var string
     */
    protected $shipping_invoiced = null;

    /**
     * @var string
     */
    protected $shipping_refunded = null;

    /**
     * @var string
     */
    protected $shipping_tax_amount = null;

    /**
     * @var string
     */
    protected $shipping_tax_refunded = null;

    /**
     * @var string
     */
    protected $subtotal_canceled = null;

    /**
     * @var string
     */
    protected $subtotal_invoiced = null;

    /**
     * @var string
     */
    protected $subtotal_refunded = null;

    /**
     * @var string
     */
    protected $tax_canceled = null;

    /**
     * @var string
     */
    protected $tax_invoiced = null;

    /**
     * @var string
     */
    protected $tax_refunded = null;

    /**
     * @var string
     */
    protected $can_ship_partially = null;

    /**
     * @var string
     */
    protected $can_ship_partially_item = null;

    /**
     * @var string
     */
    protected $edit_increment = null;

    /**
     * @var string
     */
    protected $forced_do_shipment_with_invoice = null;

    /**
     * @var string
     */
    protected $payment_authorization_expiration = null;

    /**
     * @var string
     */
    protected $paypal_ipn_customer_notified = null;

    /**
     * @var string
     */
    protected $quote_address_id = null;

    /**
     * @var string
     */
    protected $adjustment_negative = null;

    /**
     * @var string
     */
    protected $adjustment_positive = null;

    /**
     * @var string
     */
    protected $base_adjustment_negative = null;

    /**
     * @var string
     */
    protected $base_adjustment_positive = null;

    /**
     * @var string
     */
    protected $base_shipping_discount_amount = null;

    /**
     * @var string
     */
    protected $base_subtotal_incl_tax = null;

    /**
     * @var string
     */
    protected $base_total_due = null;

    /**
     * @var string
     */
    protected $payment_authorization_amount = null;

    /**
     * @var string
     */
    protected $shipping_discount_amount = null;

    /**
     * @var string
     */
    protected $subtotal_incl_tax = null;

    /**
     * @var string
     */
    protected $total_due = null;

    /**
     * @var string
     */
    protected $customer_dob = null;

    /**
     * @var string
     */
    protected $customer_middlename = null;

    /**
     * @var string
     */
    protected $customer_prefix = null;

    /**
     * @var string
     */
    protected $customer_suffix = null;

    /**
     * @var string
     */
    protected $customer_taxvat = null;

    /**
     * @var string
     */
    protected $discount_description = null;

    /**
     * @var string
     */
    protected $ext_customer_id = null;

    /**
     * @var string
     */
    protected $ext_order_id = null;

    /**
     * @var string
     */
    protected $hold_before_state = null;

    /**
     * @var string
     */
    protected $hold_before_status = null;

    /**
     * @var string
     */
    protected $original_increment_id = null;

    /**
     * @var string
     */
    protected $relation_child_id = null;

    /**
     * @var string
     */
    protected $relation_child_real_id = null;

    /**
     * @var string
     */
    protected $relation_parent_id = null;

    /**
     * @var string
     */
    protected $relation_parent_real_id = null;

    /**
     * @var string
     */
    protected $x_forwarded_for = null;

    /**
     * @var string
     */
    protected $customer_note = null;

    /**
     * @var string
     */
    protected $total_item_count = null;

    /**
     * @var string
     */
    protected $customer_gender = null;

    /**
     * @var string
     */
    protected $hidden_tax_amount = null;

    /**
     * @var string
     */
    protected $base_hidden_tax_amount = null;

    /**
     * @var string
     */
    protected $shipping_hidden_tax_amount = null;

    /**
     * @var string
     */
    protected $base_shipping_hidden_tax_amount = null;

    /**
     * @var string
     */
    protected $hidden_tax_invoiced = null;

    /**
     * @var string
     */
    protected $base_hidden_tax_invoiced = null;

    /**
     * @var string
     */
    protected $hidden_tax_refunded = null;

    /**
     * @var string
     */
    protected $base_hidden_tax_refunded = null;

    /**
     * @var string
     */
    protected $shipping_incl_tax = null;

    /**
     * @var string
     */
    protected $base_shipping_incl_tax = null;

    /**
     * @var string
     */
    protected $base_customer_balance_amount = null;

    /**
     * @var string
     */
    protected $customer_balance_amount = null;

    /**
     * @var string
     */
    protected $base_customer_balance_invoiced = null;

    /**
     * @var string
     */
    protected $customer_balance_invoiced = null;

    /**
     * @var string
     */
    protected $base_customer_balance_refunded = null;

    /**
     * @var string
     */
    protected $customer_balance_refunded = null;

    /**
     * @var string
     */
    protected $base_customer_balance_total_refunded = null;

    /**
     * @var string
     */
    protected $customer_balance_total_refunded = null;

    /**
     * @var string
     */
    protected $gift_cards = null;

    /**
     * @var string
     */
    protected $base_gift_cards_amount = null;

    /**
     * @var string
     */
    protected $gift_cards_amount = null;

    /**
     * @var string
     */
    protected $base_gift_cards_invoiced = null;

    /**
     * @var string
     */
    protected $gift_cards_invoiced = null;

    /**
     * @var string
     */
    protected $base_gift_cards_refunded = null;

    /**
     * @var string
     */
    protected $gift_cards_refunded = null;

    /**
     * @var string
     */
    protected $reward_points_balance = null;

    /**
     * @var string
     */
    protected $base_reward_currency_amount = null;

    /**
     * @var string
     */
    protected $reward_currency_amount = null;

    /**
     * @var string
     */
    protected $base_reward_currency_amount_invoiced = null;

    /**
     * @var string
     */
    protected $reward_currency_amount_invoiced = null;

    /**
     * @var string
     */
    protected $base_reward_currency_amount_refunded = null;

    /**
     * @var string
     */
    protected $reward_currency_amount_refunded = null;

    /**
     * @var string
     */
    protected $reward_points_balance_refunded = null;

    /**
     * @var string
     */
    protected $reward_points_balance_to_refund = null;

    /**
     * @var string
     */
    protected $reward_salesrule_points = null;

    /**
     * @var string
     */
    protected $firstname = null;

    /**
     * @var string
     */
    protected $lastname = null;

    /**
     * @var string
     */
    protected $telephone = null;

    /**
     * @var string
     */
    protected $postcode = null;

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
    public function getCouponCode()
    {
        return $this->coupon_code;
    }

    /**
     * @param string $coupon_code
     *
     * @return $this
     */
    public function setCouponCode($coupon_code)
    {
        $this->coupon_code = $coupon_code;

        return $this;
    }

    /**
     * @return string
     */
    public function getProtectCode()
    {
        return $this->protect_code;
    }

    /**
     * @param string $protect_code
     *
     * @return $this
     */
    public function setProtectCode($protect_code)
    {
        $this->protect_code = $protect_code;

        return $this;
    }

    /**
     * @return string
     */
    public function getBaseDiscountCanceled()
    {
        return $this->base_discount_canceled;
    }

    /**
     * @param string $base_discount_canceled
     *
     * @return $this
     */
    public function setBaseDiscountCanceled($base_discount_canceled)
    {
        $this->base_discount_canceled = $base_discount_canceled;

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
    public function getBaseDiscountRefunded()
    {
        return $this->base_discount_refunded;
    }

    /**
     * @param string $base_discount_refunded
     *
     * @return $this
     */
    public function setBaseDiscountRefunded($base_discount_refunded)
    {
        $this->base_discount_refunded = $base_discount_refunded;

        return $this;
    }

    /**
     * @return string
     */
    public function getBaseShippingCanceled()
    {
        return $this->base_shipping_canceled;
    }

    /**
     * @param string $base_shipping_canceled
     *
     * @return $this
     */
    public function setBaseShippingCanceled($base_shipping_canceled)
    {
        $this->base_shipping_canceled = $base_shipping_canceled;

        return $this;
    }

    /**
     * @return string
     */
    public function getBaseShippingInvoiced()
    {
        return $this->base_shipping_invoiced;
    }

    /**
     * @param string $base_shipping_invoiced
     *
     * @return $this
     */
    public function setBaseShippingInvoiced($base_shipping_invoiced)
    {
        $this->base_shipping_invoiced = $base_shipping_invoiced;

        return $this;
    }

    /**
     * @return string
     */
    public function getBaseShippingRefunded()
    {
        return $this->base_shipping_refunded;
    }

    /**
     * @param string $base_shipping_refunded
     *
     * @return $this
     */
    public function setBaseShippingRefunded($base_shipping_refunded)
    {
        $this->base_shipping_refunded = $base_shipping_refunded;

        return $this;
    }

    /**
     * @return string
     */
    public function getBaseShippingTaxAmount()
    {
        return $this->base_shipping_tax_amount;
    }

    /**
     * @param string $base_shipping_tax_amount
     *
     * @return $this
     */
    public function setBaseShippingTaxAmount($base_shipping_tax_amount)
    {
        $this->base_shipping_tax_amount = $base_shipping_tax_amount;

        return $this;
    }

    /**
     * @return string
     */
    public function getBaseShippingTaxRefunded()
    {
        return $this->base_shipping_tax_refunded;
    }

    /**
     * @param string $base_shipping_tax_refunded
     *
     * @return $this
     */
    public function setBaseShippingTaxRefunded($base_shipping_tax_refunded)
    {
        $this->base_shipping_tax_refunded = $base_shipping_tax_refunded;

        return $this;
    }

    /**
     * @return string
     */
    public function getBaseSubtotalCanceled()
    {
        return $this->base_subtotal_canceled;
    }

    /**
     * @param string $base_subtotal_canceled
     *
     * @return $this
     */
    public function setBaseSubtotalCanceled($base_subtotal_canceled)
    {
        $this->base_subtotal_canceled = $base_subtotal_canceled;

        return $this;
    }

    /**
     * @return string
     */
    public function getBaseSubtotalInvoiced()
    {
        return $this->base_subtotal_invoiced;
    }

    /**
     * @param string $base_subtotal_invoiced
     *
     * @return $this
     */
    public function setBaseSubtotalInvoiced($base_subtotal_invoiced)
    {
        $this->base_subtotal_invoiced = $base_subtotal_invoiced;

        return $this;
    }

    /**
     * @return string
     */
    public function getBaseSubtotalRefunded()
    {
        return $this->base_subtotal_refunded;
    }

    /**
     * @param string $base_subtotal_refunded
     *
     * @return $this
     */
    public function setBaseSubtotalRefunded($base_subtotal_refunded)
    {
        $this->base_subtotal_refunded = $base_subtotal_refunded;

        return $this;
    }

    /**
     * @return string
     */
    public function getBaseTaxCanceled()
    {
        return $this->base_tax_canceled;
    }

    /**
     * @param string $base_tax_canceled
     *
     * @return $this
     */
    public function setBaseTaxCanceled($base_tax_canceled)
    {
        $this->base_tax_canceled = $base_tax_canceled;

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
    public function getBaseTaxRefunded()
    {
        return $this->base_tax_refunded;
    }

    /**
     * @param string $base_tax_refunded
     *
     * @return $this
     */
    public function setBaseTaxRefunded($base_tax_refunded)
    {
        $this->base_tax_refunded = $base_tax_refunded;

        return $this;
    }

    /**
     * @return string
     */
    public function getBaseTotalInvoicedCost()
    {
        return $this->base_total_invoiced_cost;
    }

    /**
     * @param string $base_total_invoiced_cost
     *
     * @return $this
     */
    public function setBaseTotalInvoicedCost($base_total_invoiced_cost)
    {
        $this->base_total_invoiced_cost = $base_total_invoiced_cost;

        return $this;
    }

    /**
     * @return string
     */
    public function getDiscountCanceled()
    {
        return $this->discount_canceled;
    }

    /**
     * @param string $discount_canceled
     *
     * @return $this
     */
    public function setDiscountCanceled($discount_canceled)
    {
        $this->discount_canceled = $discount_canceled;

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
    public function getDiscountRefunded()
    {
        return $this->discount_refunded;
    }

    /**
     * @param string $discount_refunded
     *
     * @return $this
     */
    public function setDiscountRefunded($discount_refunded)
    {
        $this->discount_refunded = $discount_refunded;

        return $this;
    }

    /**
     * @return string
     */
    public function getShippingCanceled()
    {
        return $this->shipping_canceled;
    }

    /**
     * @param string $shipping_canceled
     *
     * @return $this
     */
    public function setShippingCanceled($shipping_canceled)
    {
        $this->shipping_canceled = $shipping_canceled;

        return $this;
    }

    /**
     * @return string
     */
    public function getShippingInvoiced()
    {
        return $this->shipping_invoiced;
    }

    /**
     * @param string $shipping_invoiced
     *
     * @return $this
     */
    public function setShippingInvoiced($shipping_invoiced)
    {
        $this->shipping_invoiced = $shipping_invoiced;

        return $this;
    }

    /**
     * @return string
     */
    public function getShippingRefunded()
    {
        return $this->shipping_refunded;
    }

    /**
     * @param string $shipping_refunded
     *
     * @return $this
     */
    public function setShippingRefunded($shipping_refunded)
    {
        $this->shipping_refunded = $shipping_refunded;

        return $this;
    }

    /**
     * @return string
     */
    public function getShippingTaxAmount()
    {
        return $this->shipping_tax_amount;
    }

    /**
     * @param string $shipping_tax_amount
     *
     * @return $this
     */
    public function setShippingTaxAmount($shipping_tax_amount)
    {
        $this->shipping_tax_amount = $shipping_tax_amount;

        return $this;
    }

    /**
     * @return string
     */
    public function getShippingTaxRefunded()
    {
        return $this->shipping_tax_refunded;
    }

    /**
     * @param string $shipping_tax_refunded
     *
     * @return $this
     */
    public function setShippingTaxRefunded($shipping_tax_refunded)
    {
        $this->shipping_tax_refunded = $shipping_tax_refunded;

        return $this;
    }

    /**
     * @return string
     */
    public function getSubtotalCanceled()
    {
        return $this->subtotal_canceled;
    }

    /**
     * @param string $subtotal_canceled
     *
     * @return $this
     */
    public function setSubtotalCanceled($subtotal_canceled)
    {
        $this->subtotal_canceled = $subtotal_canceled;

        return $this;
    }

    /**
     * @return string
     */
    public function getSubtotalInvoiced()
    {
        return $this->subtotal_invoiced;
    }

    /**
     * @param string $subtotal_invoiced
     *
     * @return $this
     */
    public function setSubtotalInvoiced($subtotal_invoiced)
    {
        $this->subtotal_invoiced = $subtotal_invoiced;

        return $this;
    }

    /**
     * @return string
     */
    public function getSubtotalRefunded()
    {
        return $this->subtotal_refunded;
    }

    /**
     * @param string $subtotal_refunded
     *
     * @return $this
     */
    public function setSubtotalRefunded($subtotal_refunded)
    {
        $this->subtotal_refunded = $subtotal_refunded;

        return $this;
    }

    /**
     * @return string
     */
    public function getTaxCanceled()
    {
        return $this->tax_canceled;
    }

    /**
     * @param string $tax_canceled
     *
     * @return $this
     */
    public function setTaxCanceled($tax_canceled)
    {
        $this->tax_canceled = $tax_canceled;

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
    public function getTaxRefunded()
    {
        return $this->tax_refunded;
    }

    /**
     * @param string $tax_refunded
     *
     * @return $this
     */
    public function setTaxRefunded($tax_refunded)
    {
        $this->tax_refunded = $tax_refunded;

        return $this;
    }

    /**
     * @return string
     */
    public function getCanShipPartially()
    {
        return $this->can_ship_partially;
    }

    /**
     * @param string $can_ship_partially
     *
     * @return $this
     */
    public function setCanShipPartially($can_ship_partially)
    {
        $this->can_ship_partially = $can_ship_partially;

        return $this;
    }

    /**
     * @return string
     */
    public function getCanShipPartiallyItem()
    {
        return $this->can_ship_partially_item;
    }

    /**
     * @param string $can_ship_partially_item
     *
     * @return $this
     */
    public function setCanShipPartiallyItem($can_ship_partially_item)
    {
        $this->can_ship_partially_item = $can_ship_partially_item;

        return $this;
    }

    /**
     * @return string
     */
    public function getEditIncrement()
    {
        return $this->edit_increment;
    }

    /**
     * @param string $edit_increment
     *
     * @return $this
     */
    public function setEditIncrement($edit_increment)
    {
        $this->edit_increment = $edit_increment;

        return $this;
    }

    /**
     * @return string
     */
    public function getForcedDoShipmentWithInvoice()
    {
        return $this->forced_do_shipment_with_invoice;
    }

    /**
     * @param string $forced_do_shipment_with_invoice
     *
     * @return $this
     */
    public function setForcedDoShipmentWithInvoice($forced_do_shipment_with_invoice)
    {
        $this->forced_do_shipment_with_invoice = $forced_do_shipment_with_invoice;

        return $this;
    }

    /**
     * @return string
     */
    public function getPaymentAuthorizationExpiration()
    {
        return $this->payment_authorization_expiration;
    }

    /**
     * @param string $payment_authorization_expiration
     *
     * @return $this
     */
    public function setPaymentAuthorization_expiration($payment_authorization_expiration)
    {
        $this->payment_authorization_expiration = $payment_authorization_expiration;

        return $this;
    }

    /**
     * @return string
     */
    public function getPaypalIpnCustomerNotified()
    {
        return $this->paypal_ipn_customer_notified;
    }

    /**
     * @param string $paypal_ipn_customer_notified
     *
     * @return $this
     */
    public function setPaypalIpnCustomerNotified($paypal_ipn_customer_notified)
    {
        $this->paypal_ipn_customer_notified = $paypal_ipn_customer_notified;

        return $this;
    }

    /**
     * @return string
     */
    public function getQuoteAddressId()
    {
        return $this->quote_address_id;
    }

    /**
     * @param string $quote_address_id
     *
     * @return $this
     */
    public function setQuoteAddressId($quote_address_id)
    {
        $this->quote_address_id = $quote_address_id;

        return $this;
    }

    /**
     * @return string
     */
    public function getAdjustmentNegative()
    {
        return $this->adjustment_negative;
    }

    /**
     * @param string $adjustment_negative
     *
     * @return $this
     */
    public function setAdjustmentNegative($adjustment_negative)
    {
        $this->adjustment_negative = $adjustment_negative;

        return $this;
    }

    /**
     * @return string
     */
    public function getAdjustmentPositive()
    {
        return $this->adjustment_positive;
    }

    /**
     * @param string $adjustment_positive
     *
     * @return $this
     */
    public function setAdjustmentPositive($adjustment_positive)
    {
        $this->adjustment_positive = $adjustment_positive;

        return $this;
    }

    /**
     * @return string
     */
    public function getBaseAdjustmentNegative()
    {
        return $this->base_adjustment_negative;
    }

    /**
     * @param string $base_adjustment_negative
     *
     * @return $this
     */
    public function setBaseAdjustmentNegative($base_adjustment_negative)
    {
        $this->base_adjustment_negative = $base_adjustment_negative;

        return $this;
    }

    /**
     * @return string
     */
    public function getBaseAdjustmentPositive()
    {
        return $this->base_adjustment_positive;
    }

    /**
     * @param string $base_adjustment_positive
     *
     * @return $this
     */
    public function setBaseAdjustmentPositive($base_adjustment_positive)
    {
        $this->base_adjustment_positive = $base_adjustment_positive;

        return $this;
    }

    /**
     * @return string
     */
    public function getBaseShippingDiscountAmount()
    {
        return $this->base_shipping_discount_amount;
    }

    /**
     * @param string $base_shipping_discount_amount
     *
     * @return $this
     */
    public function setBaseShippingDiscountAmount($base_shipping_discount_amount)
    {
        $this->base_shipping_discount_amount = $base_shipping_discount_amount;

        return $this;
    }

    /**
     * @return string
     */
    public function getBaseSubtotalInclTax()
    {
        return $this->base_subtotal_incl_tax;
    }

    /**
     * @param string $base_subtotal_incl_tax
     *
     * @return $this
     */
    public function setBaseSubtotalInclTax($base_subtotal_incl_tax)
    {
        $this->base_subtotal_incl_tax = $base_subtotal_incl_tax;

        return $this;
    }

    /**
     * @return string
     */
    public function getBaseTotalDue()
    {
        return $this->base_total_due;
    }

    /**
     * @param string $base_total_due
     *
     * @return $this
     */
    public function setBaseTotalDue($base_total_due)
    {
        $this->base_total_due = $base_total_due;

        return $this;
    }

    /**
     * @return string
     */
    public function getPaymentAuthorizationAmount()
    {
        return $this->payment_authorization_amount;
    }

    /**
     * @param string $payment_authorization_amount
     *
     * @return $this
     */
    public function setPaymentAuthorizationAmount($payment_authorization_amount)
    {
        $this->payment_authorization_amount = $payment_authorization_amount;

        return $this;
    }

    /**
     * @return string
     */
    public function getShippingDiscountAmount()
    {
        return $this->shipping_discount_amount;
    }

    /**
     * @param string $shipping_discount_amount
     *
     * @return $this
     */
    public function setShippingDiscountAmount($shipping_discount_amount)
    {
        $this->shipping_discount_amount = $shipping_discount_amount;

        return $this;
    }

    /**
     * @return string
     */
    public function getSubtotalInclTax()
    {
        return $this->subtotal_incl_tax;
    }

    /**
     * @param string $subtotal_incl_tax
     *
     * @return $this
     */
    public function setSubtotalInclTax($subtotal_incl_tax)
    {
        $this->subtotal_incl_tax = $subtotal_incl_tax;

        return $this;
    }

    /**
     * @return string
     */
    public function getTotalDue()
    {
        return $this->total_due;
    }

    /**
     * @param string $total_due
     *
     * @return $this
     */
    public function setTotalDue($total_due)
    {
        $this->total_due = $total_due;

        return $this;
    }

    /**
     * @return string
     */
    public function getCustomerDob()
    {
        return $this->customer_dob;
    }

    /**
     * @param string $customer_dob
     *
     * @return $this
     */
    public function setCustomerDob($customer_dob)
    {
        $this->customer_dob = $customer_dob;

        return $this;
    }

    /**
     * @return string
     */
    public function getCustomerMiddlename()
    {
        return $this->customer_middlename;
    }

    /**
     * @param string $customer_middlename
     *
     * @return $this
     */
    public function setCustomerMiddlename($customer_middlename)
    {
        $this->customer_middlename = $customer_middlename;

        return $this;
    }

    /**
     * @return string
     */
    public function getCustomerPrefix()
    {
        return $this->customer_prefix;
    }

    /**
     * @param string $customer_prefix
     *
     * @return $this
     */
    public function setCustomerPrefix($customer_prefix)
    {
        $this->customer_prefix = $customer_prefix;

        return $this;
    }

    /**
     * @return string
     */
    public function getCustomerSuffix()
    {
        return $this->customer_suffix;
    }

    /**
     * @param string $customer_suffix
     *
     * @return $this
     */
    public function setCustomerSuffix($customer_suffix)
    {
        $this->customer_suffix = $customer_suffix;

        return $this;
    }

    /**
     * @return string
     */
    public function getCustomerTaxvat()
    {
        return $this->customer_taxvat;
    }

    /**
     * @param string $customer_taxvat
     *
     * @return $this
     */
    public function setCustomerTaxvat($customer_taxvat)
    {
        $this->customer_taxvat = $customer_taxvat;

        return $this;
    }

    /**
     * @return string
     */
    public function getDiscountDescription()
    {
        return $this->discount_description;
    }

    /**
     * @param string $discount_description
     *
     * @return $this
     */
    public function setDiscountDescription($discount_description)
    {
        $this->discount_description = $discount_description;

        return $this;
    }

    /**
     * @return string
     */
    public function getExtCustomerId()
    {
        return $this->ext_customer_id;
    }

    /**
     * @param string $ext_customer_id
     *
     * @return $this
     */
    public function setExtCustomerId($ext_customer_id)
    {
        $this->ext_customer_id = $ext_customer_id;

        return $this;
    }

    /**
     * @return string
     */
    public function getExtOrderId()
    {
        return $this->ext_order_id;
    }

    /**
     * @param string $ext_order_id
     *
     * @return $this
     */
    public function setExtOrderId($ext_order_id)
    {
        $this->ext_order_id = $ext_order_id;

        return $this;
    }

    /**
     * @return string
     */
    public function getHoldBeforeState()
    {
        return $this->hold_before_state;
    }

    /**
     * @param string $hold_before_state
     *
     * @return $this
     */
    public function setHoldBeforeState($hold_before_state)
    {
        $this->hold_before_state = $hold_before_state;

        return $this;
    }

    /**
     * @return string
     */
    public function getHoldBeforeStatus()
    {
        return $this->hold_before_status;
    }

    /**
     * @param string $hold_before_status
     *
     * @return $this
     */
    public function setHoldBeforeStatus($hold_before_status)
    {
        $this->hold_before_status = $hold_before_status;

        return $this;
    }

    /**
     * @return string
     */
    public function getOriginalIncrementId()
    {
        return $this->original_increment_id;
    }

    /**
     * @param string $original_increment_id
     *
     * @return $this
     */
    public function setOriginalIncrementId($original_increment_id)
    {
        $this->original_increment_id = $original_increment_id;

        return $this;
    }

    /**
     * @return string
     */
    public function getRelationChildId()
    {
        return $this->relation_child_id;
    }

    /**
     * @param string $relation_child_id
     *
     * @return $this
     */
    public function setRelationChildId($relation_child_id)
    {
        $this->relation_child_id = $relation_child_id;

        return $this;
    }

    /**
     * @return string
     */
    public function getRelationChildRealId()
    {
        return $this->relation_child_real_id;
    }

    /**
     * @param string $relation_child_real_id
     *
     * @return $this
     */
    public function setRelationChildRealId($relation_child_real_id)
    {
        $this->relation_child_real_id = $relation_child_real_id;

        return $this;
    }

    /**
     * @return string
     */
    public function getRelationParentId()
    {
        return $this->relation_parent_id;
    }

    /**
     * @param string $relation_parent_id
     *
     * @return $this
     */
    public function setRelationParentId($relation_parent_id)
    {
        $this->relation_parent_id = $relation_parent_id;

        return $this;
    }

    /**
     * @return string
     */
    public function getRelationParentRealId()
    {
        return $this->relation_parent_real_id;
    }

    /**
     * @param string $relation_parent_real_id
     *
     * @return $this
     */
    public function setRelationParentRealId($relation_parent_real_id)
    {
        $this->relation_parent_real_id = $relation_parent_real_id;

        return $this;
    }

    /**
     * @return string
     */
    public function getXForwardedFor()
    {
        return $this->x_forwarded_for;
    }

    /**
     * @param string $x_forwarded_for
     *
     * @return $this
     */
    public function setXForwardedFor($x_forwarded_for)
    {
        $this->x_forwarded_for = $x_forwarded_for;

        return $this;
    }

    /**
     * @return string
     */
    public function getCustomerNote()
    {
        return $this->customer_note;
    }

    /**
     * @param string $customer_note
     *
     * @return $this
     */
    public function setCustomerNote($customer_note)
    {
        $this->customer_note = $customer_note;

        return $this;
    }

    /**
     * @return string
     */
    public function getTotalItemCount()
    {
        return $this->total_item_count;
    }

    /**
     * @param string $total_item_count
     *
     * @return $this
     */
    public function setTotalItemCount($total_item_count)
    {
        $this->total_item_count = $total_item_count;

        return $this;
    }

    /**
     * @return string
     */
    public function getCustomerGender()
    {
        return $this->customer_gender;
    }

    /**
     * @param string $customer_gender
     *
     * @return $this
     */
    public function setCustomerGender($customer_gender)
    {
        $this->customer_gender = $customer_gender;

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

    /**
     * @return string
     */
    public function getShippingHiddenTaxAmount()
    {
        return $this->shipping_hidden_tax_amount;
    }

    /**
     * @param string $shipping_hidden_tax_amount
     *
     * @return $this
     */
    public function setShippingHiddenTaxAmount($shipping_hidden_tax_amount)
    {
        $this->shipping_hidden_tax_amount = $shipping_hidden_tax_amount;

        return $this;
    }

    /**
     * @return string
     */
    public function getBaseShippingHiddenTaxAmount()
    {
        return $this->base_shipping_hidden_tax_amount;
    }

    /**
     * @param string $base_shipping_hidden_tax_amount
     *
     * @return $this
     */
    public function setBaseShippingHiddenTaxAmount($base_shipping_hidden_tax_amount)
    {
        $this->base_shipping_hidden_tax_amount = $base_shipping_hidden_tax_amount;

        return $this;
    }

    /**
     * @return string
     */
    public function getHiddenTaxInvoiced()
    {
        return $this->hidden_tax_invoiced;
    }

    /**
     * @param string $hidden_tax_invoiced
     *
     * @return $this
     */
    public function setHiddenTaxInvoiced($hidden_tax_invoiced)
    {
        $this->hidden_tax_invoiced = $hidden_tax_invoiced;

        return $this;
    }

    /**
     * @return string
     */
    public function getBaseHiddenTaxInvoiced()
    {
        return $this->base_hidden_tax_invoiced;
    }

    /**
     * @param string $base_hidden_tax_invoiced
     *
     * @return $this
     */
    public function setBaseHiddenTaxInvoiced($base_hidden_tax_invoiced)
    {
        $this->base_hidden_tax_invoiced = $base_hidden_tax_invoiced;

        return $this;
    }

    /**
     * @return string
     */
    public function getHiddenTaxRefunded()
    {
        return $this->hidden_tax_refunded;
    }

    /**
     * @param string $hidden_tax_refunded
     *
     * @return $this
     */
    public function setHiddenTaxRefunded($hidden_tax_refunded)
    {
        $this->hidden_tax_refunded = $hidden_tax_refunded;

        return $this;
    }

    /**
     * @return string
     */
    public function getBaseHiddenTaxRefunded()
    {
        return $this->base_hidden_tax_refunded;
    }

    /**
     * @param string $base_hidden_tax_refunded
     *
     * @return $this
     */
    public function setBaseHiddenTaxRefunded($base_hidden_tax_refunded)
    {
        $this->base_hidden_tax_refunded = $base_hidden_tax_refunded;

        return $this;
    }

    /**
     * @return string
     */
    public function getShippingInclTax()
    {
        return $this->shipping_incl_tax;
    }

    /**
     * @param string $shipping_incl_tax
     *
     * @return $this
     */
    public function setShippingInclTax($shipping_incl_tax)
    {
        $this->shipping_incl_tax = $shipping_incl_tax;

        return $this;
    }

    /**
     * @return string
     */
    public function getBaseShippingInclTax()
    {
        return $this->base_shipping_incl_tax;
    }

    /**
     * @param string $base_shipping_incl_tax
     *
     * @return $this
     */
    public function setBaseShippingInclTax($base_shipping_incl_tax)
    {
        $this->base_shipping_incl_tax = $base_shipping_incl_tax;

        return $this;
    }

    /**
     * @return string
     */
    public function getBaseCustomerBalanceAmount()
    {
        return $this->base_customer_balance_amount;
    }

    /**
     * @param string $base_customer_balance_amount
     *
     * @return $this
     */
    public function setBaseCustomerBalanceAmount($base_customer_balance_amount)
    {
        $this->base_customer_balance_amount = $base_customer_balance_amount;

        return $this;
    }

    /**
     * @return string
     */
    public function getCustomerBalanceAmount()
    {
        return $this->customer_balance_amount;
    }

    /**
     * @param string $customer_balance_amount
     *
     * @return $this
     */
    public function setCustomerBalanceAmount($customer_balance_amount)
    {
        $this->customer_balance_amount = $customer_balance_amount;

        return $this;
    }

    /**
     * @return string
     */
    public function getBaseCustomerBalanceInvoiced()
    {
        return $this->base_customer_balance_invoiced;
    }

    /**
     * @param string $base_customer_balance_invoiced
     *
     * @return $this
     */
    public function setBaseCustomerBalanceInvoiced($base_customer_balance_invoiced)
    {
        $this->base_customer_balance_invoiced = $base_customer_balance_invoiced;

        return $this;
    }

    /**
     * @return string
     */
    public function getCustomerBalanceInvoiced()
    {
        return $this->customer_balance_invoiced;
    }

    /**
     * @param string $customer_balance_invoiced
     *
     * @return $this
     */
    public function setCustomerBalanceInvoiced($customer_balance_invoiced)
    {
        $this->customer_balance_invoiced = $customer_balance_invoiced;

        return $this;
    }

    /**
     * @return string
     */
    public function getBaseCustomerBalanceRefunded()
    {
        return $this->base_customer_balance_refunded;
    }

    /**
     * @param string $base_customer_balance_refunded
     *
     * @return $this
     */
    public function setBaseCustomerBalanceRefunded($base_customer_balance_refunded)
    {
        $this->base_customer_balance_refunded = $base_customer_balance_refunded;

        return $this;
    }

    /**
     * @return string
     */
    public function getCustomerBalanceRefunded()
    {
        return $this->customer_balance_refunded;
    }

    /**
     * @param string $customer_balance_refunded
     *
     * @return $this
     */
    public function setCustomerBalanceRefunded($customer_balance_refunded)
    {
        $this->customer_balance_refunded = $customer_balance_refunded;

        return $this;
    }

    /**
     * @return string
     */
    public function getBaseCustomerBalanceTotalRefunded()
    {
        return $this->base_customer_balance_total_refunded;
    }

    /**
     * @param string $base_customer_balance_total_refunded
     *
     * @return $this
     */
    public function setBaseCustomerBalanceTotalRefunded($base_customer_balance_total_refunded)
    {
        $this->base_customer_balance_total_refunded = $base_customer_balance_total_refunded;

        return $this;
    }

    /**
     * @return string
     */
    public function getCustomerBalanceTotalRefunded()
    {
        return $this->customer_balance_total_refunded;
    }

    /**
     * @param string $customer_balance_total_refunded
     *
     * @return $this
     */
    public function setCustomerBalanceTotalRefunded($customer_balance_total_refunded)
    {
        $this->customer_balance_total_refunded = $customer_balance_total_refunded;

        return $this;
    }

    /**
     * @return string
     */
    public function getGiftCards()
    {
        return $this->gift_cards;
    }

    /**
     * @param string $gift_cards
     *
     * @return $this
     */
    public function setGiftCards($gift_cards)
    {
        $this->gift_cards = $gift_cards;

        return $this;
    }

    /**
     * @return string
     */
    public function getBaseGiftCardsAmount()
    {
        return $this->base_gift_cards_amount;
    }

    /**
     * @param string $base_gift_cards_amount
     *
     * @return $this
     */
    public function setBaseGiftCardsAmount($base_gift_cards_amount)
    {
        $this->base_gift_cards_amount = $base_gift_cards_amount;

        return $this;
    }

    /**
     * @return string
     */
    public function getGiftCardsAmount()
    {
        return $this->gift_cards_amount;
    }

    /**
     * @param string $gift_cards_amount
     *
     * @return $this
     */
    public function setGiftCardsAmount($gift_cards_amount)
    {
        $this->gift_cards_amount = $gift_cards_amount;

        return $this;
    }

    /**
     * @return string
     */
    public function getBaseGiftCardsInvoiced()
    {
        return $this->base_gift_cards_invoiced;
    }

    /**
     * @param string $base_gift_cards_invoiced
     *
     * @return $this
     */
    public function setBaseGiftCardsInvoiced($base_gift_cards_invoiced)
    {
        $this->base_gift_cards_invoiced = $base_gift_cards_invoiced;

        return $this;
    }

    /**
     * @return string
     */
    public function getGiftCardsInvoiced()
    {
        return $this->gift_cards_invoiced;
    }

    /**
     * @param string $gift_cards_invoiced
     *
     * @return $this
     */
    public function setGiftCardsInvoiced($gift_cards_invoiced)
    {
        $this->gift_cards_invoiced = $gift_cards_invoiced;

        return $this;
    }

    /**
     * @return string
     */
    public function getBaseGiftCardsRefunded()
    {
        return $this->base_gift_cards_refunded;
    }

    /**
     * @param string $base_gift_cards_refunded
     *
     * @return $this
     */
    public function setBaseGiftCardsRefunded($base_gift_cards_refunded)
    {
        $this->base_gift_cards_refunded = $base_gift_cards_refunded;

        return $this;
    }

    /**
     * @return string
     */
    public function getGiftCardsRefunded()
    {
        return $this->gift_cards_refunded;
    }

    /**
     * @param string $gift_cards_refunded
     *
     * @return $this
     */
    public function setGiftCardsRefunded($gift_cards_refunded)
    {
        $this->gift_cards_refunded = $gift_cards_refunded;

        return $this;
    }

    /**
     * @return string
     */
    public function getRewardPointsBalance()
    {
        return $this->reward_points_balance;
    }

    /**
     * @param string $reward_points_balance
     *
     * @return $this
     */
    public function setRewardPointsBalance($reward_points_balance)
    {
        $this->reward_points_balance = $reward_points_balance;

        return $this;
    }

    /**
     * @return string
     */
    public function getBaseRewardCurrencyAmount()
    {
        return $this->base_reward_currency_amount;
    }

    /**
     * @param string $base_reward_currency_amount
     *
     * @return $this
     */
    public function setBaseRewardCurrencyAmount($base_reward_currency_amount)
    {
        $this->base_reward_currency_amount = $base_reward_currency_amount;

        return $this;
    }

    /**
     * @return string
     */
    public function getRewardCurrencyAmount()
    {
        return $this->reward_currency_amount;
    }

    /**
     * @param string $reward_currency_amount
     *
     * @return $this
     */
    public function setRewardCurrencyAmount($reward_currency_amount)
    {
        $this->reward_currency_amount = $reward_currency_amount;

        return $this;
    }

    /**
     * @return string
     */
    public function getBaseRewardCurrencyAmountInvoiced()
    {
        return $this->base_reward_currency_amount_invoiced;
    }

    /**
     * @param string $base_reward_currency_amount_invoiced
     *
     * @return $this
     */
    public function setBaseRewardCurrencyAmountInvoiced($base_reward_currency_amount_invoiced)
    {
        $this->base_reward_currency_amount_invoiced = $base_reward_currency_amount_invoiced;

        return $this;
    }

    /**
     * @return string
     */
    public function getRewardCurrencyAmountInvoiced()
    {
        return $this->reward_currency_amount_invoiced;
    }

    /**
     * @param string $reward_currency_amount_invoiced
     *
     * @return $this
     */
    public function setRewardCurrencyAmountInvoiced($reward_currency_amount_invoiced)
    {
        $this->reward_currency_amount_invoiced = $reward_currency_amount_invoiced;

        return $this;
    }

    /**
     * @return string
     */
    public function getBaseRewardCurrencyAmountRefunded()
    {
        return $this->base_reward_currency_amount_refunded;
    }

    /**
     * @param string $base_reward_currency_amount_refunded
     *
     * @return $this
     */
    public function setBaseRewardCurrencyAmountRefunded($base_reward_currency_amount_refunded)
    {
        $this->base_reward_currency_amount_refunded = $base_reward_currency_amount_refunded;

        return $this;
    }

    /**
     * @return string
     */
    public function getRewardCurrencyAmountRefunded()
    {
        return $this->reward_currency_amount_refunded;
    }

    /**
     * @param string $reward_currency_amount_refunded
     *
     * @return $this
     */
    public function setRewardCurrencyAmountRefunded($reward_currency_amount_refunded)
    {
        $this->reward_currency_amount_refunded = $reward_currency_amount_refunded;

        return $this;
    }

    /**
     * @return string
     */
    public function getRewardPointsBalanceRefunded()
    {
        return $this->reward_points_balance_refunded;
    }

    /**
     * @param string $reward_points_balance_refunded
     *
     * @return $this
     */
    public function setRewardPointsBalanceRefunded($reward_points_balance_refunded)
    {
        $this->reward_points_balance_refunded = $reward_points_balance_refunded;

        return $this;
    }

    /**
     * @return string
     */
    public function getRewardPointsBalanceToRefund()
    {
        return $this->reward_points_balance_to_refund;
    }

    /**
     * @param string $reward_points_balance_to_refund
     *
     * @return $this
     */
    public function setRewardPointsBalanceToRefund($reward_points_balance_to_refund)
    {
        $this->reward_points_balance_to_refund = $reward_points_balance_to_refund;

        return $this;
    }

    /**
     * @return string
     */
    public function getRewardSalesrulePoints()
    {
        return $this->reward_salesrule_points;
    }

    /**
     * @param string $reward_salesrule_points
     *
     * @return $this
     */
    public function setRewardSalesrulePoints($reward_salesrule_points)
    {
        $this->reward_salesrule_points = $reward_salesrule_points;

        return $this;
    }

    /**
     * @return string
     */
    public function getFirstname()
    {
        return $this->firstname;
    }

    /**
     * @param string $firstname
     *
     * @return $this
     */
    public function setFirstname($firstname)
    {
        $this->firstname = $firstname;

        return $this;
    }

    /**
     * @return string
     */
    public function getLastname()
    {
        return $this->lastname;
    }

    /**
     * @param string $lastname
     *
     * @return $this
     */
    public function setLastname($lastname)
    {
        $this->lastname = $lastname;

        return $this;
    }

    /**
     * @return string
     */
    public function getTelephone()
    {
        return $this->telephone;
    }

    /**
     * @param string $telephone
     *
     * @return $this
     */
    public function setTelephone($telephone)
    {
        $this->telephone = $telephone;

        return $this;
    }

    /**
     * @return string
     */
    public function getPostcode()
    {
        return $this->postcode;
    }

    /**
     * @param string $postcode
     *
     * @return $this
     */
    public function setPostcode($postcode)
    {
        $this->postcode = $postcode;

        return $this;
    }
}
