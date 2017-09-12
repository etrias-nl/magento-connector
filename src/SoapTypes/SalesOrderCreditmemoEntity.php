<?php

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
     * @var salesOrderCreditmemoItemEntityArray
     */
    protected $items = null;

    /**
     * @var salesOrderCreditmemoCommentEntityArray
     */
    protected $comments = null;

    /**
     * Constructor
     *
     * @var string $updated_at
     * @var string $created_at
     * @var string $increment_id
     * @var string $transaction_id
     * @var string $global_currency_code
     * @var string $base_currency_code
     * @var string $order_currency_code
     * @var string $store_currency_code
     * @var string $cybersource_token
     * @var string $invoice_id
     * @var string $billing_address_id
     * @var string $shipping_address_id
     * @var string $state
     * @var string $creditmemo_status
     * @var string $email_sent
     * @var string $order_id
     * @var string $tax_amount
     * @var string $shipping_tax_amount
     * @var string $base_tax_amount
     * @var string $base_adjustment_positive
     * @var string $base_grand_total
     * @var string $adjustment
     * @var string $subtotal
     * @var string $discount_amount
     * @var string $base_subtotal
     * @var string $base_adjustment
     * @var string $base_to_global_rate
     * @var string $store_to_base_rate
     * @var string $base_shipping_amount
     * @var string $adjustment_negative
     * @var string $subtotal_incl_tax
     * @var string $shipping_amount
     * @var string $base_subtotal_incl_tax
     * @var string $base_adjustment_negative
     * @var string $grand_total
     * @var string $base_discount_amount
     * @var string $base_to_order_rate
     * @var string $store_to_order_rate
     * @var string $base_shipping_tax_amount
     * @var string $adjustment_positive
     * @var string $store_id
     * @var string $hidden_tax_amount
     * @var string $base_hidden_tax_amount
     * @var string $shipping_hidden_tax_amount
     * @var string $base_shipping_hidden_tax_amnt
     * @var string $shipping_incl_tax
     * @var string $base_shipping_incl_tax
     * @var string $base_customer_balance_amount
     * @var string $customer_balance_amount
     * @var string $bs_customer_bal_total_refunded
     * @var string $customer_bal_total_refunded
     * @var string $base_gift_cards_amount
     * @var string $gift_cards_amount
     * @var string $gw_base_price
     * @var string $gw_price
     * @var string $gw_items_base_price
     * @var string $gw_items_price
     * @var string $gw_card_base_price
     * @var string $gw_card_price
     * @var string $gw_base_tax_amount
     * @var string $gw_tax_amount
     * @var string $gw_items_base_tax_amount
     * @var string $gw_items_tax_amount
     * @var string $gw_card_base_tax_amount
     * @var string $gw_card_tax_amount
     * @var string $base_reward_currency_amount
     * @var string $reward_currency_amount
     * @var string $reward_points_balance
     * @var string $reward_points_balance_refund
     * @var string $creditmemo_id
     * @var salesOrderCreditmemoItemEntityArray $items
     * @var salesOrderCreditmemoCommentEntityArray $comments
     */
    public function __construct($updated_at, $created_at, $increment_id, $transaction_id, $global_currency_code, $base_currency_code, $order_currency_code, $store_currency_code, $cybersource_token, $invoice_id, $billing_address_id, $shipping_address_id, $state, $creditmemo_status, $email_sent, $order_id, $tax_amount, $shipping_tax_amount, $base_tax_amount, $base_adjustment_positive, $base_grand_total, $adjustment, $subtotal, $discount_amount, $base_subtotal, $base_adjustment, $base_to_global_rate, $store_to_base_rate, $base_shipping_amount, $adjustment_negative, $subtotal_incl_tax, $shipping_amount, $base_subtotal_incl_tax, $base_adjustment_negative, $grand_total, $base_discount_amount, $base_to_order_rate, $store_to_order_rate, $base_shipping_tax_amount, $adjustment_positive, $store_id, $hidden_tax_amount, $base_hidden_tax_amount, $shipping_hidden_tax_amount, $base_shipping_hidden_tax_amnt, $shipping_incl_tax, $base_shipping_incl_tax, $base_customer_balance_amount, $customer_balance_amount, $bs_customer_bal_total_refunded, $customer_bal_total_refunded, $base_gift_cards_amount, $gift_cards_amount, $gw_base_price, $gw_price, $gw_items_base_price, $gw_items_price, $gw_card_base_price, $gw_card_price, $gw_base_tax_amount, $gw_tax_amount, $gw_items_base_tax_amount, $gw_items_tax_amount, $gw_card_base_tax_amount, $gw_card_tax_amount, $base_reward_currency_amount, $reward_currency_amount, $reward_points_balance, $reward_points_balance_refund, $creditmemo_id, $items, $comments)
    {
        $this->updated_at = $updated_at;
        $this->created_at = $created_at;
        $this->increment_id = $increment_id;
        $this->transaction_id = $transaction_id;
        $this->global_currency_code = $global_currency_code;
        $this->base_currency_code = $base_currency_code;
        $this->order_currency_code = $order_currency_code;
        $this->store_currency_code = $store_currency_code;
        $this->cybersource_token = $cybersource_token;
        $this->invoice_id = $invoice_id;
        $this->billing_address_id = $billing_address_id;
        $this->shipping_address_id = $shipping_address_id;
        $this->state = $state;
        $this->creditmemo_status = $creditmemo_status;
        $this->email_sent = $email_sent;
        $this->order_id = $order_id;
        $this->tax_amount = $tax_amount;
        $this->shipping_tax_amount = $shipping_tax_amount;
        $this->base_tax_amount = $base_tax_amount;
        $this->base_adjustment_positive = $base_adjustment_positive;
        $this->base_grand_total = $base_grand_total;
        $this->adjustment = $adjustment;
        $this->subtotal = $subtotal;
        $this->discount_amount = $discount_amount;
        $this->base_subtotal = $base_subtotal;
        $this->base_adjustment = $base_adjustment;
        $this->base_to_global_rate = $base_to_global_rate;
        $this->store_to_base_rate = $store_to_base_rate;
        $this->base_shipping_amount = $base_shipping_amount;
        $this->adjustment_negative = $adjustment_negative;
        $this->subtotal_incl_tax = $subtotal_incl_tax;
        $this->shipping_amount = $shipping_amount;
        $this->base_subtotal_incl_tax = $base_subtotal_incl_tax;
        $this->base_adjustment_negative = $base_adjustment_negative;
        $this->grand_total = $grand_total;
        $this->base_discount_amount = $base_discount_amount;
        $this->base_to_order_rate = $base_to_order_rate;
        $this->store_to_order_rate = $store_to_order_rate;
        $this->base_shipping_tax_amount = $base_shipping_tax_amount;
        $this->adjustment_positive = $adjustment_positive;
        $this->store_id = $store_id;
        $this->hidden_tax_amount = $hidden_tax_amount;
        $this->base_hidden_tax_amount = $base_hidden_tax_amount;
        $this->shipping_hidden_tax_amount = $shipping_hidden_tax_amount;
        $this->base_shipping_hidden_tax_amnt = $base_shipping_hidden_tax_amnt;
        $this->shipping_incl_tax = $shipping_incl_tax;
        $this->base_shipping_incl_tax = $base_shipping_incl_tax;
        $this->base_customer_balance_amount = $base_customer_balance_amount;
        $this->customer_balance_amount = $customer_balance_amount;
        $this->bs_customer_bal_total_refunded = $bs_customer_bal_total_refunded;
        $this->customer_bal_total_refunded = $customer_bal_total_refunded;
        $this->base_gift_cards_amount = $base_gift_cards_amount;
        $this->gift_cards_amount = $gift_cards_amount;
        $this->gw_base_price = $gw_base_price;
        $this->gw_price = $gw_price;
        $this->gw_items_base_price = $gw_items_base_price;
        $this->gw_items_price = $gw_items_price;
        $this->gw_card_base_price = $gw_card_base_price;
        $this->gw_card_price = $gw_card_price;
        $this->gw_base_tax_amount = $gw_base_tax_amount;
        $this->gw_tax_amount = $gw_tax_amount;
        $this->gw_items_base_tax_amount = $gw_items_base_tax_amount;
        $this->gw_items_tax_amount = $gw_items_tax_amount;
        $this->gw_card_base_tax_amount = $gw_card_base_tax_amount;
        $this->gw_card_tax_amount = $gw_card_tax_amount;
        $this->base_reward_currency_amount = $base_reward_currency_amount;
        $this->reward_currency_amount = $reward_currency_amount;
        $this->reward_points_balance = $reward_points_balance;
        $this->reward_points_balance_refund = $reward_points_balance_refund;
        $this->creditmemo_id = $creditmemo_id;
        $this->items = $items;
        $this->comments = $comments;
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
    public function getIncrement_id()
    {
        return $this->increment_id;
    }

    /**
     * @param string $increment_id
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
    public function getTransaction_id()
    {
        return $this->transaction_id;
    }

    /**
     * @param string $transaction_id
     * @return $this
     */
    public function setTransaction_id($transaction_id)
    {
        $this->transaction_id = $transaction_id;
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
    public function getOrder_currency_code()
    {
        return $this->order_currency_code;
    }

    /**
     * @param string $order_currency_code
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
    public function getStore_currency_code()
    {
        return $this->store_currency_code;
    }

    /**
     * @param string $store_currency_code
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
    public function getCybersource_token()
    {
        return $this->cybersource_token;
    }

    /**
     * @param string $cybersource_token
     * @return $this
     */
    public function setCybersource_token($cybersource_token)
    {
        $this->cybersource_token = $cybersource_token;
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
     * @return $this
     */
    public function setInvoice_id($invoice_id)
    {
        $this->invoice_id = $invoice_id;
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
    public function getShipping_address_id()
    {
        return $this->shipping_address_id;
    }

    /**
     * @param string $shipping_address_id
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
    public function getState()
    {
        return $this->state;
    }

    /**
     * @param string $state
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
    public function getCreditmemo_status()
    {
        return $this->creditmemo_status;
    }

    /**
     * @param string $creditmemo_status
     * @return $this
     */
    public function setCreditmemo_status($creditmemo_status)
    {
        $this->creditmemo_status = $creditmemo_status;
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
    public function getTax_amount()
    {
        return $this->tax_amount;
    }

    /**
     * @param string $tax_amount
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
    public function getShipping_tax_amount()
    {
        return $this->shipping_tax_amount;
    }

    /**
     * @param string $shipping_tax_amount
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
    public function getBase_tax_amount()
    {
        return $this->base_tax_amount;
    }

    /**
     * @param string $base_tax_amount
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
    public function getBase_adjustment_positive()
    {
        return $this->base_adjustment_positive;
    }

    /**
     * @param string $base_adjustment_positive
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
    public function getBase_grand_total()
    {
        return $this->base_grand_total;
    }

    /**
     * @param string $base_grand_total
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
    public function getAdjustment()
    {
        return $this->adjustment;
    }

    /**
     * @param string $adjustment
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
    public function getDiscount_amount()
    {
        return $this->discount_amount;
    }

    /**
     * @param string $discount_amount
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
    public function getBase_subtotal()
    {
        return $this->base_subtotal;
    }

    /**
     * @param string $base_subtotal
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
    public function getBase_adjustment()
    {
        return $this->base_adjustment;
    }

    /**
     * @param string $base_adjustment
     * @return $this
     */
    public function setBase_adjustment($base_adjustment)
    {
        $this->base_adjustment = $base_adjustment;
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
    public function getStore_to_base_rate()
    {
        return $this->store_to_base_rate;
    }

    /**
     * @param string $store_to_base_rate
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
    public function getBase_shipping_amount()
    {
        return $this->base_shipping_amount;
    }

    /**
     * @param string $base_shipping_amount
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
    public function getAdjustment_negative()
    {
        return $this->adjustment_negative;
    }

    /**
     * @param string $adjustment_negative
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
    public function getSubtotal_incl_tax()
    {
        return $this->subtotal_incl_tax;
    }

    /**
     * @param string $subtotal_incl_tax
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
    public function getShipping_amount()
    {
        return $this->shipping_amount;
    }

    /**
     * @param string $shipping_amount
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
    public function getBase_subtotal_incl_tax()
    {
        return $this->base_subtotal_incl_tax;
    }

    /**
     * @param string $base_subtotal_incl_tax
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
    public function getBase_adjustment_negative()
    {
        return $this->base_adjustment_negative;
    }

    /**
     * @param string $base_adjustment_negative
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
    public function getGrand_total()
    {
        return $this->grand_total;
    }

    /**
     * @param string $grand_total
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
    public function getBase_discount_amount()
    {
        return $this->base_discount_amount;
    }

    /**
     * @param string $base_discount_amount
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
    public function getBase_to_order_rate()
    {
        return $this->base_to_order_rate;
    }

    /**
     * @param string $base_to_order_rate
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
    public function getStore_to_order_rate()
    {
        return $this->store_to_order_rate;
    }

    /**
     * @param string $store_to_order_rate
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
    public function getBase_shipping_tax_amount()
    {
        return $this->base_shipping_tax_amount;
    }

    /**
     * @param string $base_shipping_tax_amount
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
    public function getAdjustment_positive()
    {
        return $this->adjustment_positive;
    }

    /**
     * @param string $adjustment_positive
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
    public function getStore_id()
    {
        return $this->store_id;
    }

    /**
     * @param string $store_id
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
    public function getHidden_tax_amount()
    {
        return $this->hidden_tax_amount;
    }

    /**
     * @param string $hidden_tax_amount
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
    public function getBase_shipping_hidden_tax_amnt()
    {
        return $this->base_shipping_hidden_tax_amnt;
    }

    /**
     * @param string $base_shipping_hidden_tax_amnt
     * @return $this
     */
    public function setBase_shipping_hidden_tax_amnt($base_shipping_hidden_tax_amnt)
    {
        $this->base_shipping_hidden_tax_amnt = $base_shipping_hidden_tax_amnt;
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
    public function getBs_customer_bal_total_refunded()
    {
        return $this->bs_customer_bal_total_refunded;
    }

    /**
     * @param string $bs_customer_bal_total_refunded
     * @return $this
     */
    public function setBs_customer_bal_total_refunded($bs_customer_bal_total_refunded)
    {
        $this->bs_customer_bal_total_refunded = $bs_customer_bal_total_refunded;
        return $this;
    }

    /**
     * @return string
     */
    public function getCustomer_bal_total_refunded()
    {
        return $this->customer_bal_total_refunded;
    }

    /**
     * @param string $customer_bal_total_refunded
     * @return $this
     */
    public function setCustomer_bal_total_refunded($customer_bal_total_refunded)
    {
        $this->customer_bal_total_refunded = $customer_bal_total_refunded;
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
    public function getGw_base_price()
    {
        return $this->gw_base_price;
    }

    /**
     * @param string $gw_base_price
     * @return $this
     */
    public function setGw_base_price($gw_base_price)
    {
        $this->gw_base_price = $gw_base_price;
        return $this;
    }

    /**
     * @return string
     */
    public function getGw_price()
    {
        return $this->gw_price;
    }

    /**
     * @param string $gw_price
     * @return $this
     */
    public function setGw_price($gw_price)
    {
        $this->gw_price = $gw_price;
        return $this;
    }

    /**
     * @return string
     */
    public function getGw_items_base_price()
    {
        return $this->gw_items_base_price;
    }

    /**
     * @param string $gw_items_base_price
     * @return $this
     */
    public function setGw_items_base_price($gw_items_base_price)
    {
        $this->gw_items_base_price = $gw_items_base_price;
        return $this;
    }

    /**
     * @return string
     */
    public function getGw_items_price()
    {
        return $this->gw_items_price;
    }

    /**
     * @param string $gw_items_price
     * @return $this
     */
    public function setGw_items_price($gw_items_price)
    {
        $this->gw_items_price = $gw_items_price;
        return $this;
    }

    /**
     * @return string
     */
    public function getGw_card_base_price()
    {
        return $this->gw_card_base_price;
    }

    /**
     * @param string $gw_card_base_price
     * @return $this
     */
    public function setGw_card_base_price($gw_card_base_price)
    {
        $this->gw_card_base_price = $gw_card_base_price;
        return $this;
    }

    /**
     * @return string
     */
    public function getGw_card_price()
    {
        return $this->gw_card_price;
    }

    /**
     * @param string $gw_card_price
     * @return $this
     */
    public function setGw_card_price($gw_card_price)
    {
        $this->gw_card_price = $gw_card_price;
        return $this;
    }

    /**
     * @return string
     */
    public function getGw_base_tax_amount()
    {
        return $this->gw_base_tax_amount;
    }

    /**
     * @param string $gw_base_tax_amount
     * @return $this
     */
    public function setGw_base_tax_amount($gw_base_tax_amount)
    {
        $this->gw_base_tax_amount = $gw_base_tax_amount;
        return $this;
    }

    /**
     * @return string
     */
    public function getGw_tax_amount()
    {
        return $this->gw_tax_amount;
    }

    /**
     * @param string $gw_tax_amount
     * @return $this
     */
    public function setGw_tax_amount($gw_tax_amount)
    {
        $this->gw_tax_amount = $gw_tax_amount;
        return $this;
    }

    /**
     * @return string
     */
    public function getGw_items_base_tax_amount()
    {
        return $this->gw_items_base_tax_amount;
    }

    /**
     * @param string $gw_items_base_tax_amount
     * @return $this
     */
    public function setGw_items_base_tax_amount($gw_items_base_tax_amount)
    {
        $this->gw_items_base_tax_amount = $gw_items_base_tax_amount;
        return $this;
    }

    /**
     * @return string
     */
    public function getGw_items_tax_amount()
    {
        return $this->gw_items_tax_amount;
    }

    /**
     * @param string $gw_items_tax_amount
     * @return $this
     */
    public function setGw_items_tax_amount($gw_items_tax_amount)
    {
        $this->gw_items_tax_amount = $gw_items_tax_amount;
        return $this;
    }

    /**
     * @return string
     */
    public function getGw_card_base_tax_amount()
    {
        return $this->gw_card_base_tax_amount;
    }

    /**
     * @param string $gw_card_base_tax_amount
     * @return $this
     */
    public function setGw_card_base_tax_amount($gw_card_base_tax_amount)
    {
        $this->gw_card_base_tax_amount = $gw_card_base_tax_amount;
        return $this;
    }

    /**
     * @return string
     */
    public function getGw_card_tax_amount()
    {
        return $this->gw_card_tax_amount;
    }

    /**
     * @param string $gw_card_tax_amount
     * @return $this
     */
    public function setGw_card_tax_amount($gw_card_tax_amount)
    {
        $this->gw_card_tax_amount = $gw_card_tax_amount;
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
    public function getReward_points_balance()
    {
        return $this->reward_points_balance;
    }

    /**
     * @param string $reward_points_balance
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
    public function getReward_points_balance_refund()
    {
        return $this->reward_points_balance_refund;
    }

    /**
     * @param string $reward_points_balance_refund
     * @return $this
     */
    public function setReward_points_balance_refund($reward_points_balance_refund)
    {
        $this->reward_points_balance_refund = $reward_points_balance_refund;
        return $this;
    }

    /**
     * @return string
     */
    public function getCreditmemo_id()
    {
        return $this->creditmemo_id;
    }

    /**
     * @param string $creditmemo_id
     * @return $this
     */
    public function setCreditmemo_id($creditmemo_id)
    {
        $this->creditmemo_id = $creditmemo_id;
        return $this;
    }

    /**
     * @return salesOrderCreditmemoItemEntityArray
     */
    public function getItems()
    {
        return $this->items;
    }

    /**
     * @param salesOrderCreditmemoItemEntityArray $items
     * @return $this
     */
    public function setItems($items)
    {
        $this->items = $items;
        return $this;
    }

    /**
     * @return salesOrderCreditmemoCommentEntityArray
     */
    public function getComments()
    {
        return $this->comments;
    }

    /**
     * @param salesOrderCreditmemoCommentEntityArray $comments
     * @return $this
     */
    public function setComments($comments)
    {
        $this->comments = $comments;
        return $this;
    }


}

