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
     * Constructor.
     *
     * @var string
     * @var string $store_id
     * @var string $created_at
     * @var string $updated_at
     * @var string $customer_id
     * @var string $tax_amount
     * @var string $shipping_amount
     * @var string $discount_amount
     * @var string $subtotal
     * @var string $grand_total
     * @var string $total_paid
     * @var string $total_refunded
     * @var string $total_qty_ordered
     * @var string $total_canceled
     * @var string $total_invoiced
     * @var string $total_online_refunded
     * @var string $total_offline_refunded
     * @var string $base_tax_amount
     * @var string $base_shipping_amount
     * @var string $base_discount_amount
     * @var string $base_subtotal
     * @var string $base_grand_total
     * @var string $base_total_paid
     * @var string $base_total_refunded
     * @var string $base_total_qty_ordered
     * @var string $base_total_canceled
     * @var string $base_total_invoiced
     * @var string $base_total_online_refunded
     * @var string $base_total_offline_refunded
     * @var string $billing_address_id
     * @var string $billing_firstname
     * @var string $billing_lastname
     * @var string $shipping_address_id
     * @var string $shipping_firstname
     * @var string $shipping_lastname
     * @var string $billing_name
     * @var string $shipping_name
     * @var string $store_to_base_rate
     * @var string $store_to_order_rate
     * @var string $base_to_global_rate
     * @var string $base_to_order_rate
     * @var string $weight
     * @var string $store_name
     * @var string $remote_ip
     * @var string $status
     * @var string $state
     * @var string $applied_rule_ids
     * @var string $global_currency_code
     * @var string $base_currency_code
     * @var string $store_currency_code
     * @var string $order_currency_code
     * @var string $shipping_method
     * @var string $shipping_description
     * @var string $customer_email
     * @var string $customer_firstname
     * @var string $customer_lastname
     * @var string $quote_id
     * @var string $is_virtual
     * @var string $customer_group_id
     * @var string $customer_note_notify
     * @var string $customer_is_guest
     * @var string $email_sent
     * @var string $order_id
     * @var string $gift_message_id
     * @var string $coupon_code
     * @var string $protect_code
     * @var string $base_discount_canceled
     * @var string $base_discount_invoiced
     * @var string $base_discount_refunded
     * @var string $base_shipping_canceled
     * @var string $base_shipping_invoiced
     * @var string $base_shipping_refunded
     * @var string $base_shipping_tax_amount
     * @var string $base_shipping_tax_refunded
     * @var string $base_subtotal_canceled
     * @var string $base_subtotal_invoiced
     * @var string $base_subtotal_refunded
     * @var string $base_tax_canceled
     * @var string $base_tax_invoiced
     * @var string $base_tax_refunded
     * @var string $base_total_invoiced_cost
     * @var string $discount_canceled
     * @var string $discount_invoiced
     * @var string $discount_refunded
     * @var string $shipping_canceled
     * @var string $shipping_invoiced
     * @var string $shipping_refunded
     * @var string $shipping_tax_amount
     * @var string $shipping_tax_refunded
     * @var string $subtotal_canceled
     * @var string $subtotal_invoiced
     * @var string $subtotal_refunded
     * @var string $tax_canceled
     * @var string $tax_invoiced
     * @var string $tax_refunded
     * @var string $can_ship_partially
     * @var string $can_ship_partially_item
     * @var string $edit_increment
     * @var string $forced_do_shipment_with_invoice
     * @var string $payment_authorization_expiration
     * @var string $paypal_ipn_customer_notified
     * @var string $quote_address_id
     * @var string $adjustment_negative
     * @var string $adjustment_positive
     * @var string $base_adjustment_negative
     * @var string $base_adjustment_positive
     * @var string $base_shipping_discount_amount
     * @var string $base_subtotal_incl_tax
     * @var string $base_total_due
     * @var string $payment_authorization_amount
     * @var string $shipping_discount_amount
     * @var string $subtotal_incl_tax
     * @var string $total_due
     * @var string $customer_dob
     * @var string $customer_middlename
     * @var string $customer_prefix
     * @var string $customer_suffix
     * @var string $customer_taxvat
     * @var string $discount_description
     * @var string $ext_customer_id
     * @var string $ext_order_id
     * @var string $hold_before_state
     * @var string $hold_before_status
     * @var string $original_increment_id
     * @var string $relation_child_id
     * @var string $relation_child_real_id
     * @var string $relation_parent_id
     * @var string $relation_parent_real_id
     * @var string $x_forwarded_for
     * @var string $customer_note
     * @var string $total_item_count
     * @var string $customer_gender
     * @var string $hidden_tax_amount
     * @var string $base_hidden_tax_amount
     * @var string $shipping_hidden_tax_amount
     * @var string $base_shipping_hidden_tax_amount
     * @var string $hidden_tax_invoiced
     * @var string $base_hidden_tax_invoiced
     * @var string $hidden_tax_refunded
     * @var string $base_hidden_tax_refunded
     * @var string $shipping_incl_tax
     * @var string $base_shipping_incl_tax
     * @var string $base_customer_balance_amount
     * @var string $customer_balance_amount
     * @var string $base_customer_balance_invoiced
     * @var string $customer_balance_invoiced
     * @var string $base_customer_balance_refunded
     * @var string $customer_balance_refunded
     * @var string $base_customer_balance_total_refunded
     * @var string $customer_balance_total_refunded
     * @var string $gift_cards
     * @var string $base_gift_cards_amount
     * @var string $gift_cards_amount
     * @var string $base_gift_cards_invoiced
     * @var string $gift_cards_invoiced
     * @var string $base_gift_cards_refunded
     * @var string $gift_cards_refunded
     * @var string $reward_points_balance
     * @var string $base_reward_currency_amount
     * @var string $reward_currency_amount
     * @var string $base_reward_currency_amount_invoiced
     * @var string $reward_currency_amount_invoiced
     * @var string $base_reward_currency_amount_refunded
     * @var string $reward_currency_amount_refunded
     * @var string $reward_points_balance_refunded
     * @var string $reward_points_balance_to_refund
     * @var string $reward_salesrule_points
     * @var string $firstname
     * @var string $lastname
     * @var string $telephone
     * @var string $postcode
     *
     * @param mixed $increment_id
     * @param mixed $store_id
     * @param mixed $created_at
     * @param mixed $updated_at
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
     * @param mixed $coupon_code
     * @param mixed $protect_code
     * @param mixed $base_discount_canceled
     * @param mixed $base_discount_invoiced
     * @param mixed $base_discount_refunded
     * @param mixed $base_shipping_canceled
     * @param mixed $base_shipping_invoiced
     * @param mixed $base_shipping_refunded
     * @param mixed $base_shipping_tax_amount
     * @param mixed $base_shipping_tax_refunded
     * @param mixed $base_subtotal_canceled
     * @param mixed $base_subtotal_invoiced
     * @param mixed $base_subtotal_refunded
     * @param mixed $base_tax_canceled
     * @param mixed $base_tax_invoiced
     * @param mixed $base_tax_refunded
     * @param mixed $base_total_invoiced_cost
     * @param mixed $discount_canceled
     * @param mixed $discount_invoiced
     * @param mixed $discount_refunded
     * @param mixed $shipping_canceled
     * @param mixed $shipping_invoiced
     * @param mixed $shipping_refunded
     * @param mixed $shipping_tax_amount
     * @param mixed $shipping_tax_refunded
     * @param mixed $subtotal_canceled
     * @param mixed $subtotal_invoiced
     * @param mixed $subtotal_refunded
     * @param mixed $tax_canceled
     * @param mixed $tax_invoiced
     * @param mixed $tax_refunded
     * @param mixed $can_ship_partially
     * @param mixed $can_ship_partially_item
     * @param mixed $edit_increment
     * @param mixed $forced_do_shipment_with_invoice
     * @param mixed $payment_authorization_expiration
     * @param mixed $paypal_ipn_customer_notified
     * @param mixed $quote_address_id
     * @param mixed $adjustment_negative
     * @param mixed $adjustment_positive
     * @param mixed $base_adjustment_negative
     * @param mixed $base_adjustment_positive
     * @param mixed $base_shipping_discount_amount
     * @param mixed $base_subtotal_incl_tax
     * @param mixed $base_total_due
     * @param mixed $payment_authorization_amount
     * @param mixed $shipping_discount_amount
     * @param mixed $subtotal_incl_tax
     * @param mixed $total_due
     * @param mixed $customer_dob
     * @param mixed $customer_middlename
     * @param mixed $customer_prefix
     * @param mixed $customer_suffix
     * @param mixed $customer_taxvat
     * @param mixed $discount_description
     * @param mixed $ext_customer_id
     * @param mixed $ext_order_id
     * @param mixed $hold_before_state
     * @param mixed $hold_before_status
     * @param mixed $original_increment_id
     * @param mixed $relation_child_id
     * @param mixed $relation_child_real_id
     * @param mixed $relation_parent_id
     * @param mixed $relation_parent_real_id
     * @param mixed $x_forwarded_for
     * @param mixed $customer_note
     * @param mixed $total_item_count
     * @param mixed $customer_gender
     * @param mixed $hidden_tax_amount
     * @param mixed $base_hidden_tax_amount
     * @param mixed $shipping_hidden_tax_amount
     * @param mixed $base_shipping_hidden_tax_amount
     * @param mixed $hidden_tax_invoiced
     * @param mixed $base_hidden_tax_invoiced
     * @param mixed $hidden_tax_refunded
     * @param mixed $base_hidden_tax_refunded
     * @param mixed $shipping_incl_tax
     * @param mixed $base_shipping_incl_tax
     * @param mixed $base_customer_balance_amount
     * @param mixed $customer_balance_amount
     * @param mixed $base_customer_balance_invoiced
     * @param mixed $customer_balance_invoiced
     * @param mixed $base_customer_balance_refunded
     * @param mixed $customer_balance_refunded
     * @param mixed $base_customer_balance_total_refunded
     * @param mixed $customer_balance_total_refunded
     * @param mixed $gift_cards
     * @param mixed $base_gift_cards_amount
     * @param mixed $gift_cards_amount
     * @param mixed $base_gift_cards_invoiced
     * @param mixed $gift_cards_invoiced
     * @param mixed $base_gift_cards_refunded
     * @param mixed $gift_cards_refunded
     * @param mixed $reward_points_balance
     * @param mixed $base_reward_currency_amount
     * @param mixed $reward_currency_amount
     * @param mixed $base_reward_currency_amount_invoiced
     * @param mixed $reward_currency_amount_invoiced
     * @param mixed $base_reward_currency_amount_refunded
     * @param mixed $reward_currency_amount_refunded
     * @param mixed $reward_points_balance_refunded
     * @param mixed $reward_points_balance_to_refund
     * @param mixed $reward_salesrule_points
     * @param mixed $firstname
     * @param mixed $lastname
     * @param mixed $telephone
     * @param mixed $postcode
     */
    public function __construct($increment_id, $store_id, $created_at, $updated_at, $customer_id, $tax_amount, $shipping_amount, $discount_amount, $subtotal, $grand_total, $total_paid, $total_refunded, $total_qty_ordered, $total_canceled, $total_invoiced, $total_online_refunded, $total_offline_refunded, $base_tax_amount, $base_shipping_amount, $base_discount_amount, $base_subtotal, $base_grand_total, $base_total_paid, $base_total_refunded, $base_total_qty_ordered, $base_total_canceled, $base_total_invoiced, $base_total_online_refunded, $base_total_offline_refunded, $billing_address_id, $billing_firstname, $billing_lastname, $shipping_address_id, $shipping_firstname, $shipping_lastname, $billing_name, $shipping_name, $store_to_base_rate, $store_to_order_rate, $base_to_global_rate, $base_to_order_rate, $weight, $store_name, $remote_ip, $status, $state, $applied_rule_ids, $global_currency_code, $base_currency_code, $store_currency_code, $order_currency_code, $shipping_method, $shipping_description, $customer_email, $customer_firstname, $customer_lastname, $quote_id, $is_virtual, $customer_group_id, $customer_note_notify, $customer_is_guest, $email_sent, $order_id, $gift_message_id, $coupon_code, $protect_code, $base_discount_canceled, $base_discount_invoiced, $base_discount_refunded, $base_shipping_canceled, $base_shipping_invoiced, $base_shipping_refunded, $base_shipping_tax_amount, $base_shipping_tax_refunded, $base_subtotal_canceled, $base_subtotal_invoiced, $base_subtotal_refunded, $base_tax_canceled, $base_tax_invoiced, $base_tax_refunded, $base_total_invoiced_cost, $discount_canceled, $discount_invoiced, $discount_refunded, $shipping_canceled, $shipping_invoiced, $shipping_refunded, $shipping_tax_amount, $shipping_tax_refunded, $subtotal_canceled, $subtotal_invoiced, $subtotal_refunded, $tax_canceled, $tax_invoiced, $tax_refunded, $can_ship_partially, $can_ship_partially_item, $edit_increment, $forced_do_shipment_with_invoice, $payment_authorization_expiration, $paypal_ipn_customer_notified, $quote_address_id, $adjustment_negative, $adjustment_positive, $base_adjustment_negative, $base_adjustment_positive, $base_shipping_discount_amount, $base_subtotal_incl_tax, $base_total_due, $payment_authorization_amount, $shipping_discount_amount, $subtotal_incl_tax, $total_due, $customer_dob, $customer_middlename, $customer_prefix, $customer_suffix, $customer_taxvat, $discount_description, $ext_customer_id, $ext_order_id, $hold_before_state, $hold_before_status, $original_increment_id, $relation_child_id, $relation_child_real_id, $relation_parent_id, $relation_parent_real_id, $x_forwarded_for, $customer_note, $total_item_count, $customer_gender, $hidden_tax_amount, $base_hidden_tax_amount, $shipping_hidden_tax_amount, $base_shipping_hidden_tax_amount, $hidden_tax_invoiced, $base_hidden_tax_invoiced, $hidden_tax_refunded, $base_hidden_tax_refunded, $shipping_incl_tax, $base_shipping_incl_tax, $base_customer_balance_amount, $customer_balance_amount, $base_customer_balance_invoiced, $customer_balance_invoiced, $base_customer_balance_refunded, $customer_balance_refunded, $base_customer_balance_total_refunded, $customer_balance_total_refunded, $gift_cards, $base_gift_cards_amount, $gift_cards_amount, $base_gift_cards_invoiced, $gift_cards_invoiced, $base_gift_cards_refunded, $gift_cards_refunded, $reward_points_balance, $base_reward_currency_amount, $reward_currency_amount, $base_reward_currency_amount_invoiced, $reward_currency_amount_invoiced, $base_reward_currency_amount_refunded, $reward_currency_amount_refunded, $reward_points_balance_refunded, $reward_points_balance_to_refund, $reward_salesrule_points, $firstname, $lastname, $telephone, $postcode)
    {
        $this->increment_id = $increment_id;
        $this->store_id = $store_id;
        $this->created_at = $created_at;
        $this->updated_at = $updated_at;
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
        $this->coupon_code = $coupon_code;
        $this->protect_code = $protect_code;
        $this->base_discount_canceled = $base_discount_canceled;
        $this->base_discount_invoiced = $base_discount_invoiced;
        $this->base_discount_refunded = $base_discount_refunded;
        $this->base_shipping_canceled = $base_shipping_canceled;
        $this->base_shipping_invoiced = $base_shipping_invoiced;
        $this->base_shipping_refunded = $base_shipping_refunded;
        $this->base_shipping_tax_amount = $base_shipping_tax_amount;
        $this->base_shipping_tax_refunded = $base_shipping_tax_refunded;
        $this->base_subtotal_canceled = $base_subtotal_canceled;
        $this->base_subtotal_invoiced = $base_subtotal_invoiced;
        $this->base_subtotal_refunded = $base_subtotal_refunded;
        $this->base_tax_canceled = $base_tax_canceled;
        $this->base_tax_invoiced = $base_tax_invoiced;
        $this->base_tax_refunded = $base_tax_refunded;
        $this->base_total_invoiced_cost = $base_total_invoiced_cost;
        $this->discount_canceled = $discount_canceled;
        $this->discount_invoiced = $discount_invoiced;
        $this->discount_refunded = $discount_refunded;
        $this->shipping_canceled = $shipping_canceled;
        $this->shipping_invoiced = $shipping_invoiced;
        $this->shipping_refunded = $shipping_refunded;
        $this->shipping_tax_amount = $shipping_tax_amount;
        $this->shipping_tax_refunded = $shipping_tax_refunded;
        $this->subtotal_canceled = $subtotal_canceled;
        $this->subtotal_invoiced = $subtotal_invoiced;
        $this->subtotal_refunded = $subtotal_refunded;
        $this->tax_canceled = $tax_canceled;
        $this->tax_invoiced = $tax_invoiced;
        $this->tax_refunded = $tax_refunded;
        $this->can_ship_partially = $can_ship_partially;
        $this->can_ship_partially_item = $can_ship_partially_item;
        $this->edit_increment = $edit_increment;
        $this->forced_do_shipment_with_invoice = $forced_do_shipment_with_invoice;
        $this->payment_authorization_expiration = $payment_authorization_expiration;
        $this->paypal_ipn_customer_notified = $paypal_ipn_customer_notified;
        $this->quote_address_id = $quote_address_id;
        $this->adjustment_negative = $adjustment_negative;
        $this->adjustment_positive = $adjustment_positive;
        $this->base_adjustment_negative = $base_adjustment_negative;
        $this->base_adjustment_positive = $base_adjustment_positive;
        $this->base_shipping_discount_amount = $base_shipping_discount_amount;
        $this->base_subtotal_incl_tax = $base_subtotal_incl_tax;
        $this->base_total_due = $base_total_due;
        $this->payment_authorization_amount = $payment_authorization_amount;
        $this->shipping_discount_amount = $shipping_discount_amount;
        $this->subtotal_incl_tax = $subtotal_incl_tax;
        $this->total_due = $total_due;
        $this->customer_dob = $customer_dob;
        $this->customer_middlename = $customer_middlename;
        $this->customer_prefix = $customer_prefix;
        $this->customer_suffix = $customer_suffix;
        $this->customer_taxvat = $customer_taxvat;
        $this->discount_description = $discount_description;
        $this->ext_customer_id = $ext_customer_id;
        $this->ext_order_id = $ext_order_id;
        $this->hold_before_state = $hold_before_state;
        $this->hold_before_status = $hold_before_status;
        $this->original_increment_id = $original_increment_id;
        $this->relation_child_id = $relation_child_id;
        $this->relation_child_real_id = $relation_child_real_id;
        $this->relation_parent_id = $relation_parent_id;
        $this->relation_parent_real_id = $relation_parent_real_id;
        $this->x_forwarded_for = $x_forwarded_for;
        $this->customer_note = $customer_note;
        $this->total_item_count = $total_item_count;
        $this->customer_gender = $customer_gender;
        $this->hidden_tax_amount = $hidden_tax_amount;
        $this->base_hidden_tax_amount = $base_hidden_tax_amount;
        $this->shipping_hidden_tax_amount = $shipping_hidden_tax_amount;
        $this->base_shipping_hidden_tax_amount = $base_shipping_hidden_tax_amount;
        $this->hidden_tax_invoiced = $hidden_tax_invoiced;
        $this->base_hidden_tax_invoiced = $base_hidden_tax_invoiced;
        $this->hidden_tax_refunded = $hidden_tax_refunded;
        $this->base_hidden_tax_refunded = $base_hidden_tax_refunded;
        $this->shipping_incl_tax = $shipping_incl_tax;
        $this->base_shipping_incl_tax = $base_shipping_incl_tax;
        $this->base_customer_balance_amount = $base_customer_balance_amount;
        $this->customer_balance_amount = $customer_balance_amount;
        $this->base_customer_balance_invoiced = $base_customer_balance_invoiced;
        $this->customer_balance_invoiced = $customer_balance_invoiced;
        $this->base_customer_balance_refunded = $base_customer_balance_refunded;
        $this->customer_balance_refunded = $customer_balance_refunded;
        $this->base_customer_balance_total_refunded = $base_customer_balance_total_refunded;
        $this->customer_balance_total_refunded = $customer_balance_total_refunded;
        $this->gift_cards = $gift_cards;
        $this->base_gift_cards_amount = $base_gift_cards_amount;
        $this->gift_cards_amount = $gift_cards_amount;
        $this->base_gift_cards_invoiced = $base_gift_cards_invoiced;
        $this->gift_cards_invoiced = $gift_cards_invoiced;
        $this->base_gift_cards_refunded = $base_gift_cards_refunded;
        $this->gift_cards_refunded = $gift_cards_refunded;
        $this->reward_points_balance = $reward_points_balance;
        $this->base_reward_currency_amount = $base_reward_currency_amount;
        $this->reward_currency_amount = $reward_currency_amount;
        $this->base_reward_currency_amount_invoiced = $base_reward_currency_amount_invoiced;
        $this->reward_currency_amount_invoiced = $reward_currency_amount_invoiced;
        $this->base_reward_currency_amount_refunded = $base_reward_currency_amount_refunded;
        $this->reward_currency_amount_refunded = $reward_currency_amount_refunded;
        $this->reward_points_balance_refunded = $reward_points_balance_refunded;
        $this->reward_points_balance_to_refund = $reward_points_balance_to_refund;
        $this->reward_salesrule_points = $reward_salesrule_points;
        $this->firstname = $firstname;
        $this->lastname = $lastname;
        $this->telephone = $telephone;
        $this->postcode = $postcode;
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
    public function getCoupon_code()
    {
        return $this->coupon_code;
    }

    /**
     * @param string $coupon_code
     *
     * @return $this
     */
    public function setCoupon_code($coupon_code)
    {
        $this->coupon_code = $coupon_code;

        return $this;
    }

    /**
     * @return string
     */
    public function getProtect_code()
    {
        return $this->protect_code;
    }

    /**
     * @param string $protect_code
     *
     * @return $this
     */
    public function setProtect_code($protect_code)
    {
        $this->protect_code = $protect_code;

        return $this;
    }

    /**
     * @return string
     */
    public function getBase_discount_canceled()
    {
        return $this->base_discount_canceled;
    }

    /**
     * @param string $base_discount_canceled
     *
     * @return $this
     */
    public function setBase_discount_canceled($base_discount_canceled)
    {
        $this->base_discount_canceled = $base_discount_canceled;

        return $this;
    }

    /**
     * @return string
     */
    public function getBase_discount_invoiced()
    {
        return $this->base_discount_invoiced;
    }

    /**
     * @param string $base_discount_invoiced
     *
     * @return $this
     */
    public function setBase_discount_invoiced($base_discount_invoiced)
    {
        $this->base_discount_invoiced = $base_discount_invoiced;

        return $this;
    }

    /**
     * @return string
     */
    public function getBase_discount_refunded()
    {
        return $this->base_discount_refunded;
    }

    /**
     * @param string $base_discount_refunded
     *
     * @return $this
     */
    public function setBase_discount_refunded($base_discount_refunded)
    {
        $this->base_discount_refunded = $base_discount_refunded;

        return $this;
    }

    /**
     * @return string
     */
    public function getBase_shipping_canceled()
    {
        return $this->base_shipping_canceled;
    }

    /**
     * @param string $base_shipping_canceled
     *
     * @return $this
     */
    public function setBase_shipping_canceled($base_shipping_canceled)
    {
        $this->base_shipping_canceled = $base_shipping_canceled;

        return $this;
    }

    /**
     * @return string
     */
    public function getBase_shipping_invoiced()
    {
        return $this->base_shipping_invoiced;
    }

    /**
     * @param string $base_shipping_invoiced
     *
     * @return $this
     */
    public function setBase_shipping_invoiced($base_shipping_invoiced)
    {
        $this->base_shipping_invoiced = $base_shipping_invoiced;

        return $this;
    }

    /**
     * @return string
     */
    public function getBase_shipping_refunded()
    {
        return $this->base_shipping_refunded;
    }

    /**
     * @param string $base_shipping_refunded
     *
     * @return $this
     */
    public function setBase_shipping_refunded($base_shipping_refunded)
    {
        $this->base_shipping_refunded = $base_shipping_refunded;

        return $this;
    }

    /**
     * @return string
     */
    public function getBase_shipping_tax_amount()
    {
        return $this->base_shipping_tax_amount;
    }

    /**
     * @param string $base_shipping_tax_amount
     *
     * @return $this
     */
    public function setBase_shipping_tax_amount($base_shipping_tax_amount)
    {
        $this->base_shipping_tax_amount = $base_shipping_tax_amount;

        return $this;
    }

    /**
     * @return string
     */
    public function getBase_shipping_tax_refunded()
    {
        return $this->base_shipping_tax_refunded;
    }

    /**
     * @param string $base_shipping_tax_refunded
     *
     * @return $this
     */
    public function setBase_shipping_tax_refunded($base_shipping_tax_refunded)
    {
        $this->base_shipping_tax_refunded = $base_shipping_tax_refunded;

        return $this;
    }

    /**
     * @return string
     */
    public function getBase_subtotal_canceled()
    {
        return $this->base_subtotal_canceled;
    }

    /**
     * @param string $base_subtotal_canceled
     *
     * @return $this
     */
    public function setBase_subtotal_canceled($base_subtotal_canceled)
    {
        $this->base_subtotal_canceled = $base_subtotal_canceled;

        return $this;
    }

    /**
     * @return string
     */
    public function getBase_subtotal_invoiced()
    {
        return $this->base_subtotal_invoiced;
    }

    /**
     * @param string $base_subtotal_invoiced
     *
     * @return $this
     */
    public function setBase_subtotal_invoiced($base_subtotal_invoiced)
    {
        $this->base_subtotal_invoiced = $base_subtotal_invoiced;

        return $this;
    }

    /**
     * @return string
     */
    public function getBase_subtotal_refunded()
    {
        return $this->base_subtotal_refunded;
    }

    /**
     * @param string $base_subtotal_refunded
     *
     * @return $this
     */
    public function setBase_subtotal_refunded($base_subtotal_refunded)
    {
        $this->base_subtotal_refunded = $base_subtotal_refunded;

        return $this;
    }

    /**
     * @return string
     */
    public function getBase_tax_canceled()
    {
        return $this->base_tax_canceled;
    }

    /**
     * @param string $base_tax_canceled
     *
     * @return $this
     */
    public function setBase_tax_canceled($base_tax_canceled)
    {
        $this->base_tax_canceled = $base_tax_canceled;

        return $this;
    }

    /**
     * @return string
     */
    public function getBase_tax_invoiced()
    {
        return $this->base_tax_invoiced;
    }

    /**
     * @param string $base_tax_invoiced
     *
     * @return $this
     */
    public function setBase_tax_invoiced($base_tax_invoiced)
    {
        $this->base_tax_invoiced = $base_tax_invoiced;

        return $this;
    }

    /**
     * @return string
     */
    public function getBase_tax_refunded()
    {
        return $this->base_tax_refunded;
    }

    /**
     * @param string $base_tax_refunded
     *
     * @return $this
     */
    public function setBase_tax_refunded($base_tax_refunded)
    {
        $this->base_tax_refunded = $base_tax_refunded;

        return $this;
    }

    /**
     * @return string
     */
    public function getBase_total_invoiced_cost()
    {
        return $this->base_total_invoiced_cost;
    }

    /**
     * @param string $base_total_invoiced_cost
     *
     * @return $this
     */
    public function setBase_total_invoiced_cost($base_total_invoiced_cost)
    {
        $this->base_total_invoiced_cost = $base_total_invoiced_cost;

        return $this;
    }

    /**
     * @return string
     */
    public function getDiscount_canceled()
    {
        return $this->discount_canceled;
    }

    /**
     * @param string $discount_canceled
     *
     * @return $this
     */
    public function setDiscount_canceled($discount_canceled)
    {
        $this->discount_canceled = $discount_canceled;

        return $this;
    }

    /**
     * @return string
     */
    public function getDiscount_invoiced()
    {
        return $this->discount_invoiced;
    }

    /**
     * @param string $discount_invoiced
     *
     * @return $this
     */
    public function setDiscount_invoiced($discount_invoiced)
    {
        $this->discount_invoiced = $discount_invoiced;

        return $this;
    }

    /**
     * @return string
     */
    public function getDiscount_refunded()
    {
        return $this->discount_refunded;
    }

    /**
     * @param string $discount_refunded
     *
     * @return $this
     */
    public function setDiscount_refunded($discount_refunded)
    {
        $this->discount_refunded = $discount_refunded;

        return $this;
    }

    /**
     * @return string
     */
    public function getShipping_canceled()
    {
        return $this->shipping_canceled;
    }

    /**
     * @param string $shipping_canceled
     *
     * @return $this
     */
    public function setShipping_canceled($shipping_canceled)
    {
        $this->shipping_canceled = $shipping_canceled;

        return $this;
    }

    /**
     * @return string
     */
    public function getShipping_invoiced()
    {
        return $this->shipping_invoiced;
    }

    /**
     * @param string $shipping_invoiced
     *
     * @return $this
     */
    public function setShipping_invoiced($shipping_invoiced)
    {
        $this->shipping_invoiced = $shipping_invoiced;

        return $this;
    }

    /**
     * @return string
     */
    public function getShipping_refunded()
    {
        return $this->shipping_refunded;
    }

    /**
     * @param string $shipping_refunded
     *
     * @return $this
     */
    public function setShipping_refunded($shipping_refunded)
    {
        $this->shipping_refunded = $shipping_refunded;

        return $this;
    }

    /**
     * @return string
     */
    public function getShipping_tax_amount()
    {
        return $this->shipping_tax_amount;
    }

    /**
     * @param string $shipping_tax_amount
     *
     * @return $this
     */
    public function setShipping_tax_amount($shipping_tax_amount)
    {
        $this->shipping_tax_amount = $shipping_tax_amount;

        return $this;
    }

    /**
     * @return string
     */
    public function getShipping_tax_refunded()
    {
        return $this->shipping_tax_refunded;
    }

    /**
     * @param string $shipping_tax_refunded
     *
     * @return $this
     */
    public function setShipping_tax_refunded($shipping_tax_refunded)
    {
        $this->shipping_tax_refunded = $shipping_tax_refunded;

        return $this;
    }

    /**
     * @return string
     */
    public function getSubtotal_canceled()
    {
        return $this->subtotal_canceled;
    }

    /**
     * @param string $subtotal_canceled
     *
     * @return $this
     */
    public function setSubtotal_canceled($subtotal_canceled)
    {
        $this->subtotal_canceled = $subtotal_canceled;

        return $this;
    }

    /**
     * @return string
     */
    public function getSubtotal_invoiced()
    {
        return $this->subtotal_invoiced;
    }

    /**
     * @param string $subtotal_invoiced
     *
     * @return $this
     */
    public function setSubtotal_invoiced($subtotal_invoiced)
    {
        $this->subtotal_invoiced = $subtotal_invoiced;

        return $this;
    }

    /**
     * @return string
     */
    public function getSubtotal_refunded()
    {
        return $this->subtotal_refunded;
    }

    /**
     * @param string $subtotal_refunded
     *
     * @return $this
     */
    public function setSubtotal_refunded($subtotal_refunded)
    {
        $this->subtotal_refunded = $subtotal_refunded;

        return $this;
    }

    /**
     * @return string
     */
    public function getTax_canceled()
    {
        return $this->tax_canceled;
    }

    /**
     * @param string $tax_canceled
     *
     * @return $this
     */
    public function setTax_canceled($tax_canceled)
    {
        $this->tax_canceled = $tax_canceled;

        return $this;
    }

    /**
     * @return string
     */
    public function getTax_invoiced()
    {
        return $this->tax_invoiced;
    }

    /**
     * @param string $tax_invoiced
     *
     * @return $this
     */
    public function setTax_invoiced($tax_invoiced)
    {
        $this->tax_invoiced = $tax_invoiced;

        return $this;
    }

    /**
     * @return string
     */
    public function getTax_refunded()
    {
        return $this->tax_refunded;
    }

    /**
     * @param string $tax_refunded
     *
     * @return $this
     */
    public function setTax_refunded($tax_refunded)
    {
        $this->tax_refunded = $tax_refunded;

        return $this;
    }

    /**
     * @return string
     */
    public function getCan_ship_partially()
    {
        return $this->can_ship_partially;
    }

    /**
     * @param string $can_ship_partially
     *
     * @return $this
     */
    public function setCan_ship_partially($can_ship_partially)
    {
        $this->can_ship_partially = $can_ship_partially;

        return $this;
    }

    /**
     * @return string
     */
    public function getCan_ship_partially_item()
    {
        return $this->can_ship_partially_item;
    }

    /**
     * @param string $can_ship_partially_item
     *
     * @return $this
     */
    public function setCan_ship_partially_item($can_ship_partially_item)
    {
        $this->can_ship_partially_item = $can_ship_partially_item;

        return $this;
    }

    /**
     * @return string
     */
    public function getEdit_increment()
    {
        return $this->edit_increment;
    }

    /**
     * @param string $edit_increment
     *
     * @return $this
     */
    public function setEdit_increment($edit_increment)
    {
        $this->edit_increment = $edit_increment;

        return $this;
    }

    /**
     * @return string
     */
    public function getForced_do_shipment_with_invoice()
    {
        return $this->forced_do_shipment_with_invoice;
    }

    /**
     * @param string $forced_do_shipment_with_invoice
     *
     * @return $this
     */
    public function setForced_do_shipment_with_invoice($forced_do_shipment_with_invoice)
    {
        $this->forced_do_shipment_with_invoice = $forced_do_shipment_with_invoice;

        return $this;
    }

    /**
     * @return string
     */
    public function getPayment_authorization_expiration()
    {
        return $this->payment_authorization_expiration;
    }

    /**
     * @param string $payment_authorization_expiration
     *
     * @return $this
     */
    public function setPayment_authorization_expiration($payment_authorization_expiration)
    {
        $this->payment_authorization_expiration = $payment_authorization_expiration;

        return $this;
    }

    /**
     * @return string
     */
    public function getPaypal_ipn_customer_notified()
    {
        return $this->paypal_ipn_customer_notified;
    }

    /**
     * @param string $paypal_ipn_customer_notified
     *
     * @return $this
     */
    public function setPaypal_ipn_customer_notified($paypal_ipn_customer_notified)
    {
        $this->paypal_ipn_customer_notified = $paypal_ipn_customer_notified;

        return $this;
    }

    /**
     * @return string
     */
    public function getQuote_address_id()
    {
        return $this->quote_address_id;
    }

    /**
     * @param string $quote_address_id
     *
     * @return $this
     */
    public function setQuote_address_id($quote_address_id)
    {
        $this->quote_address_id = $quote_address_id;

        return $this;
    }

    /**
     * @return string
     */
    public function getAdjustment_negative()
    {
        return $this->adjustment_negative;
    }

    /**
     * @param string $adjustment_negative
     *
     * @return $this
     */
    public function setAdjustment_negative($adjustment_negative)
    {
        $this->adjustment_negative = $adjustment_negative;

        return $this;
    }

    /**
     * @return string
     */
    public function getAdjustment_positive()
    {
        return $this->adjustment_positive;
    }

    /**
     * @param string $adjustment_positive
     *
     * @return $this
     */
    public function setAdjustment_positive($adjustment_positive)
    {
        $this->adjustment_positive = $adjustment_positive;

        return $this;
    }

    /**
     * @return string
     */
    public function getBase_adjustment_negative()
    {
        return $this->base_adjustment_negative;
    }

    /**
     * @param string $base_adjustment_negative
     *
     * @return $this
     */
    public function setBase_adjustment_negative($base_adjustment_negative)
    {
        $this->base_adjustment_negative = $base_adjustment_negative;

        return $this;
    }

    /**
     * @return string
     */
    public function getBase_adjustment_positive()
    {
        return $this->base_adjustment_positive;
    }

    /**
     * @param string $base_adjustment_positive
     *
     * @return $this
     */
    public function setBase_adjustment_positive($base_adjustment_positive)
    {
        $this->base_adjustment_positive = $base_adjustment_positive;

        return $this;
    }

    /**
     * @return string
     */
    public function getBase_shipping_discount_amount()
    {
        return $this->base_shipping_discount_amount;
    }

    /**
     * @param string $base_shipping_discount_amount
     *
     * @return $this
     */
    public function setBase_shipping_discount_amount($base_shipping_discount_amount)
    {
        $this->base_shipping_discount_amount = $base_shipping_discount_amount;

        return $this;
    }

    /**
     * @return string
     */
    public function getBase_subtotal_incl_tax()
    {
        return $this->base_subtotal_incl_tax;
    }

    /**
     * @param string $base_subtotal_incl_tax
     *
     * @return $this
     */
    public function setBase_subtotal_incl_tax($base_subtotal_incl_tax)
    {
        $this->base_subtotal_incl_tax = $base_subtotal_incl_tax;

        return $this;
    }

    /**
     * @return string
     */
    public function getBase_total_due()
    {
        return $this->base_total_due;
    }

    /**
     * @param string $base_total_due
     *
     * @return $this
     */
    public function setBase_total_due($base_total_due)
    {
        $this->base_total_due = $base_total_due;

        return $this;
    }

    /**
     * @return string
     */
    public function getPayment_authorization_amount()
    {
        return $this->payment_authorization_amount;
    }

    /**
     * @param string $payment_authorization_amount
     *
     * @return $this
     */
    public function setPayment_authorization_amount($payment_authorization_amount)
    {
        $this->payment_authorization_amount = $payment_authorization_amount;

        return $this;
    }

    /**
     * @return string
     */
    public function getShipping_discount_amount()
    {
        return $this->shipping_discount_amount;
    }

    /**
     * @param string $shipping_discount_amount
     *
     * @return $this
     */
    public function setShipping_discount_amount($shipping_discount_amount)
    {
        $this->shipping_discount_amount = $shipping_discount_amount;

        return $this;
    }

    /**
     * @return string
     */
    public function getSubtotal_incl_tax()
    {
        return $this->subtotal_incl_tax;
    }

    /**
     * @param string $subtotal_incl_tax
     *
     * @return $this
     */
    public function setSubtotal_incl_tax($subtotal_incl_tax)
    {
        $this->subtotal_incl_tax = $subtotal_incl_tax;

        return $this;
    }

    /**
     * @return string
     */
    public function getTotal_due()
    {
        return $this->total_due;
    }

    /**
     * @param string $total_due
     *
     * @return $this
     */
    public function setTotal_due($total_due)
    {
        $this->total_due = $total_due;

        return $this;
    }

    /**
     * @return string
     */
    public function getCustomer_dob()
    {
        return $this->customer_dob;
    }

    /**
     * @param string $customer_dob
     *
     * @return $this
     */
    public function setCustomer_dob($customer_dob)
    {
        $this->customer_dob = $customer_dob;

        return $this;
    }

    /**
     * @return string
     */
    public function getCustomer_middlename()
    {
        return $this->customer_middlename;
    }

    /**
     * @param string $customer_middlename
     *
     * @return $this
     */
    public function setCustomer_middlename($customer_middlename)
    {
        $this->customer_middlename = $customer_middlename;

        return $this;
    }

    /**
     * @return string
     */
    public function getCustomer_prefix()
    {
        return $this->customer_prefix;
    }

    /**
     * @param string $customer_prefix
     *
     * @return $this
     */
    public function setCustomer_prefix($customer_prefix)
    {
        $this->customer_prefix = $customer_prefix;

        return $this;
    }

    /**
     * @return string
     */
    public function getCustomer_suffix()
    {
        return $this->customer_suffix;
    }

    /**
     * @param string $customer_suffix
     *
     * @return $this
     */
    public function setCustomer_suffix($customer_suffix)
    {
        $this->customer_suffix = $customer_suffix;

        return $this;
    }

    /**
     * @return string
     */
    public function getCustomer_taxvat()
    {
        return $this->customer_taxvat;
    }

    /**
     * @param string $customer_taxvat
     *
     * @return $this
     */
    public function setCustomer_taxvat($customer_taxvat)
    {
        $this->customer_taxvat = $customer_taxvat;

        return $this;
    }

    /**
     * @return string
     */
    public function getDiscount_description()
    {
        return $this->discount_description;
    }

    /**
     * @param string $discount_description
     *
     * @return $this
     */
    public function setDiscount_description($discount_description)
    {
        $this->discount_description = $discount_description;

        return $this;
    }

    /**
     * @return string
     */
    public function getExt_customer_id()
    {
        return $this->ext_customer_id;
    }

    /**
     * @param string $ext_customer_id
     *
     * @return $this
     */
    public function setExt_customer_id($ext_customer_id)
    {
        $this->ext_customer_id = $ext_customer_id;

        return $this;
    }

    /**
     * @return string
     */
    public function getExt_order_id()
    {
        return $this->ext_order_id;
    }

    /**
     * @param string $ext_order_id
     *
     * @return $this
     */
    public function setExt_order_id($ext_order_id)
    {
        $this->ext_order_id = $ext_order_id;

        return $this;
    }

    /**
     * @return string
     */
    public function getHold_before_state()
    {
        return $this->hold_before_state;
    }

    /**
     * @param string $hold_before_state
     *
     * @return $this
     */
    public function setHold_before_state($hold_before_state)
    {
        $this->hold_before_state = $hold_before_state;

        return $this;
    }

    /**
     * @return string
     */
    public function getHold_before_status()
    {
        return $this->hold_before_status;
    }

    /**
     * @param string $hold_before_status
     *
     * @return $this
     */
    public function setHold_before_status($hold_before_status)
    {
        $this->hold_before_status = $hold_before_status;

        return $this;
    }

    /**
     * @return string
     */
    public function getOriginal_increment_id()
    {
        return $this->original_increment_id;
    }

    /**
     * @param string $original_increment_id
     *
     * @return $this
     */
    public function setOriginal_increment_id($original_increment_id)
    {
        $this->original_increment_id = $original_increment_id;

        return $this;
    }

    /**
     * @return string
     */
    public function getRelation_child_id()
    {
        return $this->relation_child_id;
    }

    /**
     * @param string $relation_child_id
     *
     * @return $this
     */
    public function setRelation_child_id($relation_child_id)
    {
        $this->relation_child_id = $relation_child_id;

        return $this;
    }

    /**
     * @return string
     */
    public function getRelation_child_real_id()
    {
        return $this->relation_child_real_id;
    }

    /**
     * @param string $relation_child_real_id
     *
     * @return $this
     */
    public function setRelation_child_real_id($relation_child_real_id)
    {
        $this->relation_child_real_id = $relation_child_real_id;

        return $this;
    }

    /**
     * @return string
     */
    public function getRelation_parent_id()
    {
        return $this->relation_parent_id;
    }

    /**
     * @param string $relation_parent_id
     *
     * @return $this
     */
    public function setRelation_parent_id($relation_parent_id)
    {
        $this->relation_parent_id = $relation_parent_id;

        return $this;
    }

    /**
     * @return string
     */
    public function getRelation_parent_real_id()
    {
        return $this->relation_parent_real_id;
    }

    /**
     * @param string $relation_parent_real_id
     *
     * @return $this
     */
    public function setRelation_parent_real_id($relation_parent_real_id)
    {
        $this->relation_parent_real_id = $relation_parent_real_id;

        return $this;
    }

    /**
     * @return string
     */
    public function getX_forwarded_for()
    {
        return $this->x_forwarded_for;
    }

    /**
     * @param string $x_forwarded_for
     *
     * @return $this
     */
    public function setX_forwarded_for($x_forwarded_for)
    {
        $this->x_forwarded_for = $x_forwarded_for;

        return $this;
    }

    /**
     * @return string
     */
    public function getCustomer_note()
    {
        return $this->customer_note;
    }

    /**
     * @param string $customer_note
     *
     * @return $this
     */
    public function setCustomer_note($customer_note)
    {
        $this->customer_note = $customer_note;

        return $this;
    }

    /**
     * @return string
     */
    public function getTotal_item_count()
    {
        return $this->total_item_count;
    }

    /**
     * @param string $total_item_count
     *
     * @return $this
     */
    public function setTotal_item_count($total_item_count)
    {
        $this->total_item_count = $total_item_count;

        return $this;
    }

    /**
     * @return string
     */
    public function getCustomer_gender()
    {
        return $this->customer_gender;
    }

    /**
     * @param string $customer_gender
     *
     * @return $this
     */
    public function setCustomer_gender($customer_gender)
    {
        $this->customer_gender = $customer_gender;

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
     *
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
     *
     * @return $this
     */
    public function setBase_hidden_tax_amount($base_hidden_tax_amount)
    {
        $this->base_hidden_tax_amount = $base_hidden_tax_amount;

        return $this;
    }

    /**
     * @return string
     */
    public function getShipping_hidden_tax_amount()
    {
        return $this->shipping_hidden_tax_amount;
    }

    /**
     * @param string $shipping_hidden_tax_amount
     *
     * @return $this
     */
    public function setShipping_hidden_tax_amount($shipping_hidden_tax_amount)
    {
        $this->shipping_hidden_tax_amount = $shipping_hidden_tax_amount;

        return $this;
    }

    /**
     * @return string
     */
    public function getBase_shipping_hidden_tax_amount()
    {
        return $this->base_shipping_hidden_tax_amount;
    }

    /**
     * @param string $base_shipping_hidden_tax_amount
     *
     * @return $this
     */
    public function setBase_shipping_hidden_tax_amount($base_shipping_hidden_tax_amount)
    {
        $this->base_shipping_hidden_tax_amount = $base_shipping_hidden_tax_amount;

        return $this;
    }

    /**
     * @return string
     */
    public function getHidden_tax_invoiced()
    {
        return $this->hidden_tax_invoiced;
    }

    /**
     * @param string $hidden_tax_invoiced
     *
     * @return $this
     */
    public function setHidden_tax_invoiced($hidden_tax_invoiced)
    {
        $this->hidden_tax_invoiced = $hidden_tax_invoiced;

        return $this;
    }

    /**
     * @return string
     */
    public function getBase_hidden_tax_invoiced()
    {
        return $this->base_hidden_tax_invoiced;
    }

    /**
     * @param string $base_hidden_tax_invoiced
     *
     * @return $this
     */
    public function setBase_hidden_tax_invoiced($base_hidden_tax_invoiced)
    {
        $this->base_hidden_tax_invoiced = $base_hidden_tax_invoiced;

        return $this;
    }

    /**
     * @return string
     */
    public function getHidden_tax_refunded()
    {
        return $this->hidden_tax_refunded;
    }

    /**
     * @param string $hidden_tax_refunded
     *
     * @return $this
     */
    public function setHidden_tax_refunded($hidden_tax_refunded)
    {
        $this->hidden_tax_refunded = $hidden_tax_refunded;

        return $this;
    }

    /**
     * @return string
     */
    public function getBase_hidden_tax_refunded()
    {
        return $this->base_hidden_tax_refunded;
    }

    /**
     * @param string $base_hidden_tax_refunded
     *
     * @return $this
     */
    public function setBase_hidden_tax_refunded($base_hidden_tax_refunded)
    {
        $this->base_hidden_tax_refunded = $base_hidden_tax_refunded;

        return $this;
    }

    /**
     * @return string
     */
    public function getShipping_incl_tax()
    {
        return $this->shipping_incl_tax;
    }

    /**
     * @param string $shipping_incl_tax
     *
     * @return $this
     */
    public function setShipping_incl_tax($shipping_incl_tax)
    {
        $this->shipping_incl_tax = $shipping_incl_tax;

        return $this;
    }

    /**
     * @return string
     */
    public function getBase_shipping_incl_tax()
    {
        return $this->base_shipping_incl_tax;
    }

    /**
     * @param string $base_shipping_incl_tax
     *
     * @return $this
     */
    public function setBase_shipping_incl_tax($base_shipping_incl_tax)
    {
        $this->base_shipping_incl_tax = $base_shipping_incl_tax;

        return $this;
    }

    /**
     * @return string
     */
    public function getBase_customer_balance_amount()
    {
        return $this->base_customer_balance_amount;
    }

    /**
     * @param string $base_customer_balance_amount
     *
     * @return $this
     */
    public function setBase_customer_balance_amount($base_customer_balance_amount)
    {
        $this->base_customer_balance_amount = $base_customer_balance_amount;

        return $this;
    }

    /**
     * @return string
     */
    public function getCustomer_balance_amount()
    {
        return $this->customer_balance_amount;
    }

    /**
     * @param string $customer_balance_amount
     *
     * @return $this
     */
    public function setCustomer_balance_amount($customer_balance_amount)
    {
        $this->customer_balance_amount = $customer_balance_amount;

        return $this;
    }

    /**
     * @return string
     */
    public function getBase_customer_balance_invoiced()
    {
        return $this->base_customer_balance_invoiced;
    }

    /**
     * @param string $base_customer_balance_invoiced
     *
     * @return $this
     */
    public function setBase_customer_balance_invoiced($base_customer_balance_invoiced)
    {
        $this->base_customer_balance_invoiced = $base_customer_balance_invoiced;

        return $this;
    }

    /**
     * @return string
     */
    public function getCustomer_balance_invoiced()
    {
        return $this->customer_balance_invoiced;
    }

    /**
     * @param string $customer_balance_invoiced
     *
     * @return $this
     */
    public function setCustomer_balance_invoiced($customer_balance_invoiced)
    {
        $this->customer_balance_invoiced = $customer_balance_invoiced;

        return $this;
    }

    /**
     * @return string
     */
    public function getBase_customer_balance_refunded()
    {
        return $this->base_customer_balance_refunded;
    }

    /**
     * @param string $base_customer_balance_refunded
     *
     * @return $this
     */
    public function setBase_customer_balance_refunded($base_customer_balance_refunded)
    {
        $this->base_customer_balance_refunded = $base_customer_balance_refunded;

        return $this;
    }

    /**
     * @return string
     */
    public function getCustomer_balance_refunded()
    {
        return $this->customer_balance_refunded;
    }

    /**
     * @param string $customer_balance_refunded
     *
     * @return $this
     */
    public function setCustomer_balance_refunded($customer_balance_refunded)
    {
        $this->customer_balance_refunded = $customer_balance_refunded;

        return $this;
    }

    /**
     * @return string
     */
    public function getBase_customer_balance_total_refunded()
    {
        return $this->base_customer_balance_total_refunded;
    }

    /**
     * @param string $base_customer_balance_total_refunded
     *
     * @return $this
     */
    public function setBase_customer_balance_total_refunded($base_customer_balance_total_refunded)
    {
        $this->base_customer_balance_total_refunded = $base_customer_balance_total_refunded;

        return $this;
    }

    /**
     * @return string
     */
    public function getCustomer_balance_total_refunded()
    {
        return $this->customer_balance_total_refunded;
    }

    /**
     * @param string $customer_balance_total_refunded
     *
     * @return $this
     */
    public function setCustomer_balance_total_refunded($customer_balance_total_refunded)
    {
        $this->customer_balance_total_refunded = $customer_balance_total_refunded;

        return $this;
    }

    /**
     * @return string
     */
    public function getGift_cards()
    {
        return $this->gift_cards;
    }

    /**
     * @param string $gift_cards
     *
     * @return $this
     */
    public function setGift_cards($gift_cards)
    {
        $this->gift_cards = $gift_cards;

        return $this;
    }

    /**
     * @return string
     */
    public function getBase_gift_cards_amount()
    {
        return $this->base_gift_cards_amount;
    }

    /**
     * @param string $base_gift_cards_amount
     *
     * @return $this
     */
    public function setBase_gift_cards_amount($base_gift_cards_amount)
    {
        $this->base_gift_cards_amount = $base_gift_cards_amount;

        return $this;
    }

    /**
     * @return string
     */
    public function getGift_cards_amount()
    {
        return $this->gift_cards_amount;
    }

    /**
     * @param string $gift_cards_amount
     *
     * @return $this
     */
    public function setGift_cards_amount($gift_cards_amount)
    {
        $this->gift_cards_amount = $gift_cards_amount;

        return $this;
    }

    /**
     * @return string
     */
    public function getBase_gift_cards_invoiced()
    {
        return $this->base_gift_cards_invoiced;
    }

    /**
     * @param string $base_gift_cards_invoiced
     *
     * @return $this
     */
    public function setBase_gift_cards_invoiced($base_gift_cards_invoiced)
    {
        $this->base_gift_cards_invoiced = $base_gift_cards_invoiced;

        return $this;
    }

    /**
     * @return string
     */
    public function getGift_cards_invoiced()
    {
        return $this->gift_cards_invoiced;
    }

    /**
     * @param string $gift_cards_invoiced
     *
     * @return $this
     */
    public function setGift_cards_invoiced($gift_cards_invoiced)
    {
        $this->gift_cards_invoiced = $gift_cards_invoiced;

        return $this;
    }

    /**
     * @return string
     */
    public function getBase_gift_cards_refunded()
    {
        return $this->base_gift_cards_refunded;
    }

    /**
     * @param string $base_gift_cards_refunded
     *
     * @return $this
     */
    public function setBase_gift_cards_refunded($base_gift_cards_refunded)
    {
        $this->base_gift_cards_refunded = $base_gift_cards_refunded;

        return $this;
    }

    /**
     * @return string
     */
    public function getGift_cards_refunded()
    {
        return $this->gift_cards_refunded;
    }

    /**
     * @param string $gift_cards_refunded
     *
     * @return $this
     */
    public function setGift_cards_refunded($gift_cards_refunded)
    {
        $this->gift_cards_refunded = $gift_cards_refunded;

        return $this;
    }

    /**
     * @return string
     */
    public function getReward_points_balance()
    {
        return $this->reward_points_balance;
    }

    /**
     * @param string $reward_points_balance
     *
     * @return $this
     */
    public function setReward_points_balance($reward_points_balance)
    {
        $this->reward_points_balance = $reward_points_balance;

        return $this;
    }

    /**
     * @return string
     */
    public function getBase_reward_currency_amount()
    {
        return $this->base_reward_currency_amount;
    }

    /**
     * @param string $base_reward_currency_amount
     *
     * @return $this
     */
    public function setBase_reward_currency_amount($base_reward_currency_amount)
    {
        $this->base_reward_currency_amount = $base_reward_currency_amount;

        return $this;
    }

    /**
     * @return string
     */
    public function getReward_currency_amount()
    {
        return $this->reward_currency_amount;
    }

    /**
     * @param string $reward_currency_amount
     *
     * @return $this
     */
    public function setReward_currency_amount($reward_currency_amount)
    {
        $this->reward_currency_amount = $reward_currency_amount;

        return $this;
    }

    /**
     * @return string
     */
    public function getBase_reward_currency_amount_invoiced()
    {
        return $this->base_reward_currency_amount_invoiced;
    }

    /**
     * @param string $base_reward_currency_amount_invoiced
     *
     * @return $this
     */
    public function setBase_reward_currency_amount_invoiced($base_reward_currency_amount_invoiced)
    {
        $this->base_reward_currency_amount_invoiced = $base_reward_currency_amount_invoiced;

        return $this;
    }

    /**
     * @return string
     */
    public function getReward_currency_amount_invoiced()
    {
        return $this->reward_currency_amount_invoiced;
    }

    /**
     * @param string $reward_currency_amount_invoiced
     *
     * @return $this
     */
    public function setReward_currency_amount_invoiced($reward_currency_amount_invoiced)
    {
        $this->reward_currency_amount_invoiced = $reward_currency_amount_invoiced;

        return $this;
    }

    /**
     * @return string
     */
    public function getBase_reward_currency_amount_refunded()
    {
        return $this->base_reward_currency_amount_refunded;
    }

    /**
     * @param string $base_reward_currency_amount_refunded
     *
     * @return $this
     */
    public function setBase_reward_currency_amount_refunded($base_reward_currency_amount_refunded)
    {
        $this->base_reward_currency_amount_refunded = $base_reward_currency_amount_refunded;

        return $this;
    }

    /**
     * @return string
     */
    public function getReward_currency_amount_refunded()
    {
        return $this->reward_currency_amount_refunded;
    }

    /**
     * @param string $reward_currency_amount_refunded
     *
     * @return $this
     */
    public function setReward_currency_amount_refunded($reward_currency_amount_refunded)
    {
        $this->reward_currency_amount_refunded = $reward_currency_amount_refunded;

        return $this;
    }

    /**
     * @return string
     */
    public function getReward_points_balance_refunded()
    {
        return $this->reward_points_balance_refunded;
    }

    /**
     * @param string $reward_points_balance_refunded
     *
     * @return $this
     */
    public function setReward_points_balance_refunded($reward_points_balance_refunded)
    {
        $this->reward_points_balance_refunded = $reward_points_balance_refunded;

        return $this;
    }

    /**
     * @return string
     */
    public function getReward_points_balance_to_refund()
    {
        return $this->reward_points_balance_to_refund;
    }

    /**
     * @param string $reward_points_balance_to_refund
     *
     * @return $this
     */
    public function setReward_points_balance_to_refund($reward_points_balance_to_refund)
    {
        $this->reward_points_balance_to_refund = $reward_points_balance_to_refund;

        return $this;
    }

    /**
     * @return string
     */
    public function getReward_salesrule_points()
    {
        return $this->reward_salesrule_points;
    }

    /**
     * @param string $reward_salesrule_points
     *
     * @return $this
     */
    public function setReward_salesrule_points($reward_salesrule_points)
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
