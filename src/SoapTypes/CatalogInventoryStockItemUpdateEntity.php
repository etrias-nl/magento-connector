<?php

namespace Etrias\MagentoConnector\SoapTypes;

class CatalogInventoryStockItemUpdateEntity
{

    /**
     * @var string
     */
    protected $qty = null;

    /**
     * @var int
     */
    protected $is_in_stock = null;

    /**
     * @var int
     */
    protected $manage_stock = null;

    /**
     * @var int
     */
    protected $use_config_manage_stock = null;

    /**
     * @var int
     */
    protected $min_qty = null;

    /**
     * @var int
     */
    protected $use_config_min_qty = null;

    /**
     * @var int
     */
    protected $min_sale_qty = null;

    /**
     * @var int
     */
    protected $use_config_min_sale_qty = null;

    /**
     * @var int
     */
    protected $max_sale_qty = null;

    /**
     * @var int
     */
    protected $use_config_max_sale_qty = null;

    /**
     * @var int
     */
    protected $is_qty_decimal = null;

    /**
     * @var int
     */
    protected $backorders = null;

    /**
     * @var int
     */
    protected $use_config_backorders = null;

    /**
     * @var int
     */
    protected $notify_stock_qty = null;

    /**
     * @var int
     */
    protected $use_config_notify_stock_qty = null;

    /**
     * Constructor
     *
     * @var string $qty
     * @var int $is_in_stock
     * @var int $manage_stock
     * @var int $use_config_manage_stock
     * @var int $min_qty
     * @var int $use_config_min_qty
     * @var int $min_sale_qty
     * @var int $use_config_min_sale_qty
     * @var int $max_sale_qty
     * @var int $use_config_max_sale_qty
     * @var int $is_qty_decimal
     * @var int $backorders
     * @var int $use_config_backorders
     * @var int $notify_stock_qty
     * @var int $use_config_notify_stock_qty
     */
    public function __construct($qty, $is_in_stock, $manage_stock, $use_config_manage_stock, $min_qty, $use_config_min_qty, $min_sale_qty, $use_config_min_sale_qty, $max_sale_qty, $use_config_max_sale_qty, $is_qty_decimal, $backorders, $use_config_backorders, $notify_stock_qty, $use_config_notify_stock_qty)
    {
        $this->qty = $qty;
        $this->is_in_stock = $is_in_stock;
        $this->manage_stock = $manage_stock;
        $this->use_config_manage_stock = $use_config_manage_stock;
        $this->min_qty = $min_qty;
        $this->use_config_min_qty = $use_config_min_qty;
        $this->min_sale_qty = $min_sale_qty;
        $this->use_config_min_sale_qty = $use_config_min_sale_qty;
        $this->max_sale_qty = $max_sale_qty;
        $this->use_config_max_sale_qty = $use_config_max_sale_qty;
        $this->is_qty_decimal = $is_qty_decimal;
        $this->backorders = $backorders;
        $this->use_config_backorders = $use_config_backorders;
        $this->notify_stock_qty = $notify_stock_qty;
        $this->use_config_notify_stock_qty = $use_config_notify_stock_qty;
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
     * @return $this
     */
    public function setQty($qty)
    {
        $this->qty = $qty;
        return $this;
    }

    /**
     * @return int
     */
    public function getIs_in_stock()
    {
        return $this->is_in_stock;
    }

    /**
     * @param int $is_in_stock
     * @return $this
     */
    public function setIs_in_stock($is_in_stock)
    {
        $this->is_in_stock = $is_in_stock;
        return $this;
    }

    /**
     * @return int
     */
    public function getManage_stock()
    {
        return $this->manage_stock;
    }

    /**
     * @param int $manage_stock
     * @return $this
     */
    public function setManage_stock($manage_stock)
    {
        $this->manage_stock = $manage_stock;
        return $this;
    }

    /**
     * @return int
     */
    public function getUse_config_manage_stock()
    {
        return $this->use_config_manage_stock;
    }

    /**
     * @param int $use_config_manage_stock
     * @return $this
     */
    public function setUse_config_manage_stock($use_config_manage_stock)
    {
        $this->use_config_manage_stock = $use_config_manage_stock;
        return $this;
    }

    /**
     * @return int
     */
    public function getMin_qty()
    {
        return $this->min_qty;
    }

    /**
     * @param int $min_qty
     * @return $this
     */
    public function setMin_qty($min_qty)
    {
        $this->min_qty = $min_qty;
        return $this;
    }

    /**
     * @return int
     */
    public function getUse_config_min_qty()
    {
        return $this->use_config_min_qty;
    }

    /**
     * @param int $use_config_min_qty
     * @return $this
     */
    public function setUse_config_min_qty($use_config_min_qty)
    {
        $this->use_config_min_qty = $use_config_min_qty;
        return $this;
    }

    /**
     * @return int
     */
    public function getMin_sale_qty()
    {
        return $this->min_sale_qty;
    }

    /**
     * @param int $min_sale_qty
     * @return $this
     */
    public function setMin_sale_qty($min_sale_qty)
    {
        $this->min_sale_qty = $min_sale_qty;
        return $this;
    }

    /**
     * @return int
     */
    public function getUse_config_min_sale_qty()
    {
        return $this->use_config_min_sale_qty;
    }

    /**
     * @param int $use_config_min_sale_qty
     * @return $this
     */
    public function setUse_config_min_sale_qty($use_config_min_sale_qty)
    {
        $this->use_config_min_sale_qty = $use_config_min_sale_qty;
        return $this;
    }

    /**
     * @return int
     */
    public function getMax_sale_qty()
    {
        return $this->max_sale_qty;
    }

    /**
     * @param int $max_sale_qty
     * @return $this
     */
    public function setMax_sale_qty($max_sale_qty)
    {
        $this->max_sale_qty = $max_sale_qty;
        return $this;
    }

    /**
     * @return int
     */
    public function getUse_config_max_sale_qty()
    {
        return $this->use_config_max_sale_qty;
    }

    /**
     * @param int $use_config_max_sale_qty
     * @return $this
     */
    public function setUse_config_max_sale_qty($use_config_max_sale_qty)
    {
        $this->use_config_max_sale_qty = $use_config_max_sale_qty;
        return $this;
    }

    /**
     * @return int
     */
    public function getIs_qty_decimal()
    {
        return $this->is_qty_decimal;
    }

    /**
     * @param int $is_qty_decimal
     * @return $this
     */
    public function setIs_qty_decimal($is_qty_decimal)
    {
        $this->is_qty_decimal = $is_qty_decimal;
        return $this;
    }

    /**
     * @return int
     */
    public function getBackorders()
    {
        return $this->backorders;
    }

    /**
     * @param int $backorders
     * @return $this
     */
    public function setBackorders($backorders)
    {
        $this->backorders = $backorders;
        return $this;
    }

    /**
     * @return int
     */
    public function getUse_config_backorders()
    {
        return $this->use_config_backorders;
    }

    /**
     * @param int $use_config_backorders
     * @return $this
     */
    public function setUse_config_backorders($use_config_backorders)
    {
        $this->use_config_backorders = $use_config_backorders;
        return $this;
    }

    /**
     * @return int
     */
    public function getNotify_stock_qty()
    {
        return $this->notify_stock_qty;
    }

    /**
     * @param int $notify_stock_qty
     * @return $this
     */
    public function setNotify_stock_qty($notify_stock_qty)
    {
        $this->notify_stock_qty = $notify_stock_qty;
        return $this;
    }

    /**
     * @return int
     */
    public function getUse_config_notify_stock_qty()
    {
        return $this->use_config_notify_stock_qty;
    }

    /**
     * @param int $use_config_notify_stock_qty
     * @return $this
     */
    public function setUse_config_notify_stock_qty($use_config_notify_stock_qty)
    {
        $this->use_config_notify_stock_qty = $use_config_notify_stock_qty;
        return $this;
    }


}

