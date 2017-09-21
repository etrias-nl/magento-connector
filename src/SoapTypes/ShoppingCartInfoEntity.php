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

class ShoppingCartInfoEntity
{
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
    protected $converted_at = null;

    /**
     * @var int
     */
    protected $quote_id = null;

    /**
     * @var int
     */
    protected $is_active = null;

    /**
     * @var int
     */
    protected $is_virtual = null;

    /**
     * @var int
     */
    protected $is_multi_shipping = null;

    /**
     * @var float
     */
    protected $items_count = null;

    /**
     * @var float
     */
    protected $items_qty = null;

    /**
     * @var string
     */
    protected $orig_order_id = null;

    /**
     * @var string
     */
    protected $store_to_base_rate = null;

    /**
     * @var string
     */
    protected $store_to_quote_rate = null;

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
    protected $quote_currency_code = null;

    /**
     * @var string
     */
    protected $grand_total = null;

    /**
     * @var string
     */
    protected $base_grand_total = null;

    /**
     * @var string
     */
    protected $checkout_method = null;

    /**
     * @var string
     */
    protected $customer_id = null;

    /**
     * @var string
     */
    protected $customer_tax_class_id = null;

    /**
     * @var int
     */
    protected $customer_group_id = null;

    /**
     * @var string
     */
    protected $customer_email = null;

    /**
     * @var string
     */
    protected $customer_prefix = null;

    /**
     * @var string
     */
    protected $customer_firstname = null;

    /**
     * @var string
     */
    protected $customer_middlename = null;

    /**
     * @var string
     */
    protected $customer_lastname = null;

    /**
     * @var string
     */
    protected $customer_suffix = null;

    /**
     * @var string
     */
    protected $customer_note = null;

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
    protected $applied_rule_ids = null;

    /**
     * @var string
     */
    protected $reserved_order_id = null;

    /**
     * @var string
     */
    protected $password_hash = null;

    /**
     * @var string
     */
    protected $coupon_code = null;

    /**
     * @var string
     */
    protected $global_currency_code = null;

    /**
     * @var float
     */
    protected $base_to_global_rate = null;

    /**
     * @var float
     */
    protected $base_to_quote_rate = null;

    /**
     * @var string
     */
    protected $customer_taxvat = null;

    /**
     * @var string
     */
    protected $customer_gender = null;

    /**
     * @var float
     */
    protected $subtotal = null;

    /**
     * @var float
     */
    protected $base_subtotal = null;

    /**
     * @var float
     */
    protected $subtotal_with_discount = null;

    /**
     * @var float
     */
    protected $base_subtotal_with_discount = null;

    /**
     * @var string
     */
    protected $ext_shipping_info = null;

    /**
     * @var string
     */
    protected $gift_message_id = null;

    /**
     * @var string
     */
    protected $gift_message = null;

    /**
     * @var float
     */
    protected $customer_balance_amount_used = null;

    /**
     * @var float
     */
    protected $base_customer_balance_amount_used = null;

    /**
     * @var string
     */
    protected $use_customer_balance = null;

    /**
     * @var string
     */
    protected $gift_cards_amount = null;

    /**
     * @var string
     */
    protected $base_gift_cards_amount = null;

    /**
     * @var string
     */
    protected $gift_cards_amount_used = null;

    /**
     * @var string
     */
    protected $use_reward_points = null;

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
     * @var shoppingCartAddressEntity
     */
    protected $shipping_address = null;

    /**
     * @var shoppingCartAddressEntity
     */
    protected $billing_address = null;

    /**
     * @var shoppingCartItemEntityArray
     */
    protected $items = null;

    /**
     * @var shoppingCartPaymentEntity
     */
    protected $payment = null;

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
    public function getConvertedAt()
    {
        return $this->converted_at;
    }

    /**
     * @param string $converted_at
     *
     * @return $this
     */
    public function setConvertedAt($converted_at)
    {
        $this->converted_at = $converted_at;

        return $this;
    }

    /**
     * @return int
     */
    public function getQuoteId()
    {
        return $this->quote_id;
    }

    /**
     * @param int $quote_id
     *
     * @return $this
     */
    public function setQuoteId($quote_id)
    {
        $this->quote_id = $quote_id;

        return $this;
    }

    /**
     * @return int
     */
    public function getIsActive()
    {
        return $this->is_active;
    }

    /**
     * @param int $is_active
     *
     * @return $this
     */
    public function setIsActive($is_active)
    {
        $this->is_active = $is_active;

        return $this;
    }

    /**
     * @return int
     */
    public function getIsVirtual()
    {
        return $this->is_virtual;
    }

    /**
     * @param int $is_virtual
     *
     * @return $this
     */
    public function setIsVirtual($is_virtual)
    {
        $this->is_virtual = $is_virtual;

        return $this;
    }

    /**
     * @return int
     */
    public function getIsMultiShipping()
    {
        return $this->is_multi_shipping;
    }

    /**
     * @param int $is_multi_shipping
     *
     * @return $this
     */
    public function setIsMultiShipping($is_multi_shipping)
    {
        $this->is_multi_shipping = $is_multi_shipping;

        return $this;
    }

    /**
     * @return float
     */
    public function getItemsCount()
    {
        return $this->items_count;
    }

    /**
     * @param float $items_count
     *
     * @return $this
     */
    public function setItemsCount($items_count)
    {
        $this->items_count = $items_count;

        return $this;
    }

    /**
     * @return float
     */
    public function getItemsQty()
    {
        return $this->items_qty;
    }

    /**
     * @param float $items_qty
     *
     * @return $this
     */
    public function setItemsQty($items_qty)
    {
        $this->items_qty = $items_qty;

        return $this;
    }

    /**
     * @return string
     */
    public function getOrigOrderId()
    {
        return $this->orig_order_id;
    }

    /**
     * @param string $orig_order_id
     *
     * @return $this
     */
    public function setOrigOrderId($orig_order_id)
    {
        $this->orig_order_id = $orig_order_id;

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
    public function getStoreToQuoteRate()
    {
        return $this->store_to_quote_rate;
    }

    /**
     * @param string $store_to_quote_rate
     *
     * @return $this
     */
    public function setStoreToQuoteRate($store_to_quote_rate)
    {
        $this->store_to_quote_rate = $store_to_quote_rate;

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
    public function getQuoteCurrencyCode()
    {
        return $this->quote_currency_code;
    }

    /**
     * @param string $quote_currency_code
     *
     * @return $this
     */
    public function setQuoteCurrencyCode($quote_currency_code)
    {
        $this->quote_currency_code = $quote_currency_code;

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
    public function getCheckoutMethod()
    {
        return $this->checkout_method;
    }

    /**
     * @param string $checkout_method
     *
     * @return $this
     */
    public function setCheckoutMethod($checkout_method)
    {
        $this->checkout_method = $checkout_method;

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
    public function getCustomerTaxClassId()
    {
        return $this->customer_tax_class_id;
    }

    /**
     * @param string $customer_tax_class_id
     *
     * @return $this
     */
    public function setCustomerTaxClassId($customer_tax_class_id)
    {
        $this->customer_tax_class_id = $customer_tax_class_id;

        return $this;
    }

    /**
     * @return int
     */
    public function getCustomerGroupId()
    {
        return $this->customer_group_id;
    }

    /**
     * @param int $customer_group_id
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
    public function getReservedOrderId()
    {
        return $this->reserved_order_id;
    }

    /**
     * @param string $reserved_order_id
     *
     * @return $this
     */
    public function setReservedOrderId($reserved_order_id)
    {
        $this->reserved_order_id = $reserved_order_id;

        return $this;
    }

    /**
     * @return string
     */
    public function getPasswordHash()
    {
        return $this->password_hash;
    }

    /**
     * @param string $password_hash
     *
     * @return $this
     */
    public function setPasswordHash($password_hash)
    {
        $this->password_hash = $password_hash;

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
     * @return float
     */
    public function getBaseToGlobalRate()
    {
        return $this->base_to_global_rate;
    }

    /**
     * @param float $base_to_global_rate
     *
     * @return $this
     */
    public function setBaseToGlobalRate($base_to_global_rate)
    {
        $this->base_to_global_rate = $base_to_global_rate;

        return $this;
    }

    /**
     * @return float
     */
    public function getBaseToQuoteRate()
    {
        return $this->base_to_quote_rate;
    }

    /**
     * @param float $base_to_quote_rate
     *
     * @return $this
     */
    public function setBaseToQuoteRate($base_to_quote_rate)
    {
        $this->base_to_quote_rate = $base_to_quote_rate;

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
     * @return float
     */
    public function getSubtotal()
    {
        return $this->subtotal;
    }

    /**
     * @param float $subtotal
     *
     * @return $this
     */
    public function setSubtotal($subtotal)
    {
        $this->subtotal = $subtotal;

        return $this;
    }

    /**
     * @return float
     */
    public function getBaseSubtotal()
    {
        return $this->base_subtotal;
    }

    /**
     * @param float $base_subtotal
     *
     * @return $this
     */
    public function setBaseSubtotal($base_subtotal)
    {
        $this->base_subtotal = $base_subtotal;

        return $this;
    }

    /**
     * @return float
     */
    public function getSubtotalWithDiscount()
    {
        return $this->subtotal_with_discount;
    }

    /**
     * @param float $subtotal_with_discount
     *
     * @return $this
     */
    public function setSubtotalWithDiscount($subtotal_with_discount)
    {
        $this->subtotal_with_discount = $subtotal_with_discount;

        return $this;
    }

    /**
     * @return float
     */
    public function getBaseSubtotalWithDiscount()
    {
        return $this->base_subtotal_with_discount;
    }

    /**
     * @param float $base_subtotal_with_discount
     *
     * @return $this
     */
    public function setBaseSubtotalWithDiscount($base_subtotal_with_discount)
    {
        $this->base_subtotal_with_discount = $base_subtotal_with_discount;

        return $this;
    }

    /**
     * @return string
     */
    public function getExtShippingInfo()
    {
        return $this->ext_shipping_info;
    }

    /**
     * @param string $ext_shipping_info
     *
     * @return $this
     */
    public function setExtShippingInfo($ext_shipping_info)
    {
        $this->ext_shipping_info = $ext_shipping_info;

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
     * @return float
     */
    public function getCustomerBalanceAmountUsed()
    {
        return $this->customer_balance_amount_used;
    }

    /**
     * @param float $customer_balance_amount_used
     *
     * @return $this
     */
    public function setCustomerBalanceAmountUsed($customer_balance_amount_used)
    {
        $this->customer_balance_amount_used = $customer_balance_amount_used;

        return $this;
    }

    /**
     * @return float
     */
    public function getBaseCustomerBalanceAmountUsed()
    {
        return $this->base_customer_balance_amount_used;
    }

    /**
     * @param float $base_customer_balance_amount_used
     *
     * @return $this
     */
    public function setBaseCustomerBalanceAmountUsed($base_customer_balance_amount_used)
    {
        $this->base_customer_balance_amount_used = $base_customer_balance_amount_used;

        return $this;
    }

    /**
     * @return string
     */
    public function getUseCustomerBalance()
    {
        return $this->use_customer_balance;
    }

    /**
     * @param string $use_customer_balance
     *
     * @return $this
     */
    public function setUseCustomerBalance($use_customer_balance)
    {
        $this->use_customer_balance = $use_customer_balance;

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
    public function getGiftCardsAmountUsed()
    {
        return $this->gift_cards_amount_used;
    }

    /**
     * @param string $gift_cards_amount_used
     *
     * @return $this
     */
    public function setGiftCardsAmountUsed($gift_cards_amount_used)
    {
        $this->gift_cards_amount_used = $gift_cards_amount_used;

        return $this;
    }

    /**
     * @return string
     */
    public function getUseRewardPoints()
    {
        return $this->use_reward_points;
    }

    /**
     * @param string $use_reward_points
     *
     * @return $this
     */
    public function setUseRewardPoints($use_reward_points)
    {
        $this->use_reward_points = $use_reward_points;

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
     * @return shoppingCartAddressEntity
     */
    public function getShippingAddress()
    {
        return $this->shipping_address;
    }

    /**
     * @param shoppingCartAddressEntity $shipping_address
     *
     * @return $this
     */
    public function setShippingAddress($shipping_address)
    {
        $this->shipping_address = $shipping_address;

        return $this;
    }

    /**
     * @return shoppingCartAddressEntity
     */
    public function getBillingAddress()
    {
        return $this->billing_address;
    }

    /**
     * @param shoppingCartAddressEntity $billing_address
     *
     * @return $this
     */
    public function setBillingAddress($billing_address)
    {
        $this->billing_address = $billing_address;

        return $this;
    }

    /**
     * @return shoppingCartItemEntityArray
     */
    public function getItems()
    {
        return $this->items;
    }

    /**
     * @param shoppingCartItemEntityArray $items
     *
     * @return $this
     */
    public function setItems(array $items)
    {
        $this->items = $items;

        return $this;
    }

    /**
     * @return shoppingCartPaymentEntity
     */
    public function getPayment()
    {
        return $this->payment;
    }

    /**
     * @param shoppingCartPaymentEntity $payment
     *
     * @return $this
     */
    public function setPayment($payment)
    {
        $this->payment = $payment;

        return $this;
    }
}
