<?php

namespace Etrias\MagentoConnector\SoapTypes;

class SalesOrderCreditmemoData
{

    /**
     * @var orderItemIdQtyArray
     */
    protected $qtys = null;

    /**
     * @var float
     */
    protected $shipping_amount = null;

    /**
     * @var float
     */
    protected $adjustment_positive = null;

    /**
     * @var float
     */
    protected $adjustment_negative = null;

    /**
     * Constructor
     *
     * @var orderItemIdQtyArray $qtys
     * @var float $shipping_amount
     * @var float $adjustment_positive
     * @var float $adjustment_negative
     */
    public function __construct($qtys, $shipping_amount, $adjustment_positive, $adjustment_negative)
    {
        $this->qtys = $qtys;
        $this->shipping_amount = $shipping_amount;
        $this->adjustment_positive = $adjustment_positive;
        $this->adjustment_negative = $adjustment_negative;
    }

    /**
     * @return orderItemIdQtyArray
     */
    public function getQtys()
    {
        return $this->qtys;
    }

    /**
     * @param orderItemIdQtyArray $qtys
     * @return $this
     */
    public function setQtys($qtys)
    {
        $this->qtys = $qtys;
        return $this;
    }

    /**
     * @return float
     */
    public function getShipping_amount()
    {
        return $this->shipping_amount;
    }

    /**
     * @param float $shipping_amount
     * @return $this
     */
    public function setShipping_amount($shipping_amount)
    {
        $this->shipping_amount = $shipping_amount;
        return $this;
    }

    /**
     * @return float
     */
    public function getAdjustment_positive()
    {
        return $this->adjustment_positive;
    }

    /**
     * @param float $adjustment_positive
     * @return $this
     */
    public function setAdjustment_positive($adjustment_positive)
    {
        $this->adjustment_positive = $adjustment_positive;
        return $this;
    }

    /**
     * @return float
     */
    public function getAdjustment_negative()
    {
        return $this->adjustment_negative;
    }

    /**
     * @param float $adjustment_negative
     * @return $this
     */
    public function setAdjustment_negative($adjustment_negative)
    {
        $this->adjustment_negative = $adjustment_negative;
        return $this;
    }


}

