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

class SalesOrderCreditmemoEntity
{
    /**
     * @var string
     */
    protected $updated_at = null;

    /**
     * @var string
     */
    protected $created_at = null;

    /**
     * @var string
     */
    protected $increment_id = null;

    /**
     * @var string
     */
    protected $transaction_id = null;

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
    protected $order_currency_code = null;

    /**
     * @var string
     */
    protected $store_currency_code = null;

    /**
     * @var string
     */
    protected $cybersource_token = null;

    /**
     * @var string
     */
    protected $invoice_id = null;

    /**
     * @var string
     */
    protected $billing_address_id = null;

    /**
     * @var string
     */
    protected $shipping_address_id = null;

    /**
     * @var string
     */
    protected $state = null;

    /**
     * @var string
     */
    protected $creditmemo_status = null;

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
    protected $tax_amount = null;

    /**
     * @var string
     */
    protected $shipping_tax_amount = null;

    /**
     * @var string
     */
    protected $base_tax_amount = null;

    /**
     * @var string
     */
    protected $base_adjustment_positive = null;

    /**
     * @var string
     */
    protected $base_grand_total = null;

    /**
     * @var string
     */
    protected $adjustment = null;

    /**
     * @var string
     */
    protected $subtotal = null;

    /**
     * @var string
     */
    protected $discount_amount = null;

    /**
     * @var string
     */
    protected $base_subtotal = null;

    /**
     * @var string
     */
    protected $base_adjustment = null;

    /**
     * @var string
     */
    protected $base_to_global_rate = null;

    /**
     * @var string
     */
    protected $store_to_base_rate = null;

    /**
     * @var string
     */
    protected $base_shipping_amount = null;

    /**
     * @var string
     */
    protected $adjustment_negative = null;

    /**
     * @var string
     */
    protected $subtotal_incl_tax = null;

    /**
     * @var string
     */
    protected $shipping_amount = null;

    /**
     * @var string
     */
    protected $base_subtotal_incl_tax = null;

    /**
     * @var string
     */
    protected $base_adjustment_negative = null;

    /**
     * @var string
     */
    protected $grand_total = null;

    /**
     * @var string
     */
    protected $base_discount_amount = null;

    /**
     * @var string
     */
    protected $base_to_order_rate = null;

    /**
     * @var string
     */
    protected $store_to_order_rate = null;

    /**
     * @var string
     */
    protected $base_shipping_tax_amount = null;

    /**
     * @var string
     */
    protected $adjustment_positive = null;

    /**
     * @var string
     */
    protected $store_id = null;

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
    protected $base_shipping_hidden_tax_amnt = null;

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
    protected $bs_customer_bal_total_refunded = null;

    /**
     * @var string
     */
    protected $customer_bal_total_refunded = null;

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
    protected $gw_base_price = null;

    /**
     * @var string
     */
    protected $gw_price = null;

    /**
     * @var string
     */
    protected $gw_items_base_price = null;

    /**
     * @var string
     */
    protected $gw_items_price = null;

    /**
     * @var string
     */
    protected $gw_card_base_price = null;

    /**
     * @var string
     */
    protected $gw_card_price = null;

    /**
     * @var string
     */
    protected $gw_base_tax_amount = null;

    /**
     * @var string
     */
    protected $gw_tax_amount = null;

    /**
     * @var string
     */
    protected $gw_items_base_tax_amount = null;

    /**
     * @var string
     */
    protected $gw_items_tax_amount = null;

    /**
     * @var string
     */
    protected $gw_card_base_tax_amount = null;

    /**
     * @var string
     */
    protected $gw_card_tax_amount = null;

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
    protected $reward_points_balance = null;

    /**
     * @var string
     */
    protected $reward_points_balance_refund = null;

    /**
     * @var string
     */
    protected $creditmemo_id = null;

    /**
     * @var SalesOrderCreditmemoItemEntity[]
     */
    protected $items = null;

    /**
     * @var SalesOrderCreditmemoCommentEntity[]
     */
    protected $comments = null;

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
    public function getTransactionId()
    {
        return $this->transaction_id;
    }

    /**
     * @param string $transaction_id
     *
     * @return $this
     */
    public function setTransactionId($transaction_id)
    {
        $this->transaction_id = $transaction_id;

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
    public function getCybersourceToken()
    {
        return $this->cybersource_token;
    }

    /**
     * @param string $cybersource_token
     *
     * @return $this
     */
    public function setCybersourceToken($cybersource_token)
    {
        $this->cybersource_token = $cybersource_token;

        return $this;
    }

    /**
     * @return string
     */
    public function getInvoiceId()
    {
        return $this->invoice_id;
    }

    /**
     * @param string $invoice_id
     *
     * @return $this
     */
    public function setInvoiceId($invoice_id)
    {
        $this->invoice_id = $invoice_id;

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
    public function getCreditmemoStatus()
    {
        return $this->creditmemo_status;
    }

    /**
     * @param string $creditmemo_status
     *
     * @return $this
     */
    public function setCreditmemoStatus($creditmemo_status)
    {
        $this->creditmemo_status = $creditmemo_status;

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
    public function getAdjustment()
    {
        return $this->adjustment;
    }

    /**
     * @param string $adjustment
     *
     * @return $this
     */
    public function setAdjustment($adjustment)
    {
        $this->adjustment = $adjustment;

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
    public function getBaseAdjustment()
    {
        return $this->base_adjustment;
    }

    /**
     * @param string $base_adjustment
     *
     * @return $this
     */
    public function setBaseAdjustment($base_adjustment)
    {
        $this->base_adjustment = $base_adjustment;

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
        return $this->base_shipping_hidden_tax_amnt;
    }

    /**
     * @param string $base_shipping_hidden_tax_amnt
     *
     * @return $this
     */
    public function setBaseShippingHiddenTaxAmount($base_shipping_hidden_tax_amnt)
    {
        $this->base_shipping_hidden_tax_amnt = $base_shipping_hidden_tax_amnt;

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
    public function getBsCustomerBalTotalRefunded()
    {
        return $this->bs_customer_bal_total_refunded;
    }

    /**
     * @param string $bs_customer_bal_total_refunded
     *
     * @return $this
     */
    public function setBsCustomerBalTotalRefunded($bs_customer_bal_total_refunded)
    {
        $this->bs_customer_bal_total_refunded = $bs_customer_bal_total_refunded;

        return $this;
    }

    /**
     * @return string
     */
    public function getCustomerBalTotalRefunded()
    {
        return $this->customer_bal_total_refunded;
    }

    /**
     * @param string $customer_bal_total_refunded
     *
     * @return $this
     */
    public function setCustomerBalTotalRefunded($customer_bal_total_refunded)
    {
        $this->customer_bal_total_refunded = $customer_bal_total_refunded;

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
    public function getGwBasePrice()
    {
        return $this->gw_base_price;
    }

    /**
     * @param string $gw_base_price
     *
     * @return $this
     */
    public function setGwBasePrice($gw_base_price)
    {
        $this->gw_base_price = $gw_base_price;

        return $this;
    }

    /**
     * @return string
     */
    public function getGwPrice()
    {
        return $this->gw_price;
    }

    /**
     * @param string $gw_price
     *
     * @return $this
     */
    public function setGwPrice($gw_price)
    {
        $this->gw_price = $gw_price;

        return $this;
    }

    /**
     * @return string
     */
    public function getGwItemsBasePrice()
    {
        return $this->gw_items_base_price;
    }

    /**
     * @param string $gw_items_base_price
     *
     * @return $this
     */
    public function setGwItemsBasePrice($gw_items_base_price)
    {
        $this->gw_items_base_price = $gw_items_base_price;

        return $this;
    }

    /**
     * @return string
     */
    public function getGwItemsPrice()
    {
        return $this->gw_items_price;
    }

    /**
     * @param string $gw_items_price
     *
     * @return $this
     */
    public function setGwItemsPrice($gw_items_price)
    {
        $this->gw_items_price = $gw_items_price;

        return $this;
    }

    /**
     * @return string
     */
    public function getGwCardBasePrice()
    {
        return $this->gw_card_base_price;
    }

    /**
     * @param string $gw_card_base_price
     *
     * @return $this
     */
    public function setGwCardBasePrice($gw_card_base_price)
    {
        $this->gw_card_base_price = $gw_card_base_price;

        return $this;
    }

    /**
     * @return string
     */
    public function getGwCardPrice()
    {
        return $this->gw_card_price;
    }

    /**
     * @param string $gw_card_price
     *
     * @return $this
     */
    public function setGwCardPrice($gw_card_price)
    {
        $this->gw_card_price = $gw_card_price;

        return $this;
    }

    /**
     * @return string
     */
    public function getGwBaseTaxAmount()
    {
        return $this->gw_base_tax_amount;
    }

    /**
     * @param string $gw_base_tax_amount
     *
     * @return $this
     */
    public function setGwBaseTaxAmount($gw_base_tax_amount)
    {
        $this->gw_base_tax_amount = $gw_base_tax_amount;

        return $this;
    }

    /**
     * @return string
     */
    public function getGwTaxAmount()
    {
        return $this->gw_tax_amount;
    }

    /**
     * @param string $gw_tax_amount
     *
     * @return $this
     */
    public function setGwTaxAmount($gw_tax_amount)
    {
        $this->gw_tax_amount = $gw_tax_amount;

        return $this;
    }

    /**
     * @return string
     */
    public function getGwItemsBaseTaxAmount()
    {
        return $this->gw_items_base_tax_amount;
    }

    /**
     * @param string $gw_items_base_tax_amount
     *
     * @return $this
     */
    public function setGwItemsBaseTaxAmount($gw_items_base_tax_amount)
    {
        $this->gw_items_base_tax_amount = $gw_items_base_tax_amount;

        return $this;
    }

    /**
     * @return string
     */
    public function getGwItemsTaxAmount()
    {
        return $this->gw_items_tax_amount;
    }

    /**
     * @param string $gw_items_tax_amount
     *
     * @return $this
     */
    public function setGwItemsTaxAmount($gw_items_tax_amount)
    {
        $this->gw_items_tax_amount = $gw_items_tax_amount;

        return $this;
    }

    /**
     * @return string
     */
    public function getGwCardBaseTaxAmount()
    {
        return $this->gw_card_base_tax_amount;
    }

    /**
     * @param string $gw_card_base_tax_amount
     *
     * @return $this
     */
    public function setGwCardBaseTaxAmount($gw_card_base_tax_amount)
    {
        $this->gw_card_base_tax_amount = $gw_card_base_tax_amount;

        return $this;
    }

    /**
     * @return string
     */
    public function getGwCardTaxAmount()
    {
        return $this->gw_card_tax_amount;
    }

    /**
     * @param string $gw_card_tax_amount
     *
     * @return $this
     */
    public function setGwCardTaxAmount($gw_card_tax_amount)
    {
        $this->gw_card_tax_amount = $gw_card_tax_amount;

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
    public function getRewardPointsBalanceRefund()
    {
        return $this->reward_points_balance_refund;
    }

    /**
     * @param string $reward_points_balance_refund
     *
     * @return $this
     */
    public function setRewardPointsBalanceRefund($reward_points_balance_refund)
    {
        $this->reward_points_balance_refund = $reward_points_balance_refund;

        return $this;
    }

    /**
     * @return string
     */
    public function getCreditmemoId()
    {
        return $this->creditmemo_id;
    }

    /**
     * @param string $creditmemo_id
     *
     * @return $this
     */
    public function setCreditmemoId($creditmemo_id)
    {
        $this->creditmemo_id = $creditmemo_id;

        return $this;
    }

    /**
     * @return SalesOrderCreditmemoItemEntity[]
     */
    public function getItems()
    {
        return $this->items;
    }

    /**
     * @param SalesOrderCreditmemoItemEntity[] $items
     *
     * @return $this
     */
    public function setItems(array $items)
    {
        $this->items = $items;

        return $this;
    }

    /**
     * @return SalesOrderCreditmemoItemEntity[]
     */
    public function getComments()
    {
        return $this->comments;
    }

    /**
     * @param SalesOrderCreditmemoItemEntity[] $comments
     *
     * @return $this
     */
    public function setComments($comments)
    {
        $this->comments = $comments;

        return $this;
    }
}
