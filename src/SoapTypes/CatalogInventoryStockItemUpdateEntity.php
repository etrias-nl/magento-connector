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
     * @return int
     */
    public function getIsInStock()
    {
        return $this->is_in_stock;
    }

    /**
     * @param int $is_in_stock
     *
     * @return $this
     */
    public function setIsInStock($is_in_stock)
    {
        $this->is_in_stock = $is_in_stock;

        return $this;
    }

    /**
     * @return int
     */
    public function getManageStock()
    {
        return $this->manage_stock;
    }

    /**
     * @param int $manage_stock
     *
     * @return $this
     */
    public function setManageStock($manage_stock)
    {
        $this->manage_stock = $manage_stock;

        return $this;
    }

    /**
     * @return int
     */
    public function getUseConfigManageStock()
    {
        return $this->use_config_manage_stock;
    }

    /**
     * @param int $use_config_manage_stock
     *
     * @return $this
     */
    public function setUseConfigManageStock($use_config_manage_stock)
    {
        $this->use_config_manage_stock = $use_config_manage_stock;

        return $this;
    }

    /**
     * @return int
     */
    public function getMinQty()
    {
        return $this->min_qty;
    }

    /**
     * @param int $min_qty
     *
     * @return $this
     */
    public function setMinQty($min_qty)
    {
        $this->min_qty = $min_qty;

        return $this;
    }

    /**
     * @return int
     */
    public function getUseConfigMinQty()
    {
        return $this->use_config_min_qty;
    }

    /**
     * @param int $use_config_min_qty
     *
     * @return $this
     */
    public function setUseConfigMinQty($use_config_min_qty)
    {
        $this->use_config_min_qty = $use_config_min_qty;

        return $this;
    }

    /**
     * @return int
     */
    public function getMinSaleQty()
    {
        return $this->min_sale_qty;
    }

    /**
     * @param int $min_sale_qty
     *
     * @return $this
     */
    public function setMinSaleQty($min_sale_qty)
    {
        $this->min_sale_qty = $min_sale_qty;

        return $this;
    }

    /**
     * @return int
     */
    public function getUseConfigMinSaleQty()
    {
        return $this->use_config_min_sale_qty;
    }

    /**
     * @param int $use_config_min_sale_qty
     *
     * @return $this
     */
    public function setUseConfigMinSaleQty($use_config_min_sale_qty)
    {
        $this->use_config_min_sale_qty = $use_config_min_sale_qty;

        return $this;
    }

    /**
     * @return int
     */
    public function getMaxSaleQty()
    {
        return $this->max_sale_qty;
    }

    /**
     * @param int $max_sale_qty
     *
     * @return $this
     */
    public function setMaxSaleQty($max_sale_qty)
    {
        $this->max_sale_qty = $max_sale_qty;

        return $this;
    }

    /**
     * @return int
     */
    public function getUseConfigMaxSaleQty()
    {
        return $this->use_config_max_sale_qty;
    }

    /**
     * @param int $use_config_max_sale_qty
     *
     * @return $this
     */
    public function setUseConfigMaxSaleQty($use_config_max_sale_qty)
    {
        $this->use_config_max_sale_qty = $use_config_max_sale_qty;

        return $this;
    }

    /**
     * @return int
     */
    public function getIsQtyDecimal()
    {
        return $this->is_qty_decimal;
    }

    /**
     * @param int $is_qty_decimal
     *
     * @return $this
     */
    public function setIsQtyDecimal($is_qty_decimal)
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
     *
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
    public function getUseConfigBackorders()
    {
        return $this->use_config_backorders;
    }

    /**
     * @param int $use_config_backorders
     *
     * @return $this
     */
    public function setUseConfigBackorders($use_config_backorders)
    {
        $this->use_config_backorders = $use_config_backorders;

        return $this;
    }

    /**
     * @return int
     */
    public function getNotifyStockQty()
    {
        return $this->notify_stock_qty;
    }

    /**
     * @param int $notify_stock_qty
     *
     * @return $this
     */
    public function setNotifyStockQty($notify_stock_qty)
    {
        $this->notify_stock_qty = $notify_stock_qty;

        return $this;
    }

    /**
     * @return int
     */
    public function getUseConfigNotifyStockQty()
    {
        return $this->use_config_notify_stock_qty;
    }

    /**
     * @param int $use_config_notify_stock_qty
     *
     * @return $this
     */
    public function setUseConfigNotifyStockQty($use_config_notify_stock_qty)
    {
        $this->use_config_notify_stock_qty = $use_config_notify_stock_qty;

        return $this;
    }
}
