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
     * @return orderItemIdQtyArray
     */
    public function getQtys()
    {
        return $this->qtys;
    }

    /**
     * @param orderItemIdQtyArray $qtys
     *
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
    public function getShippingAmount()
    {
        return $this->shipping_amount;
    }

    /**
     * @param float $shipping_amount
     *
     * @return $this
     */
    public function setShippingAmount($shipping_amount)
    {
        $this->shipping_amount = $shipping_amount;

        return $this;
    }

    /**
     * @return float
     */
    public function getAdjustmentPositive()
    {
        return $this->adjustment_positive;
    }

    /**
     * @param float $adjustment_positive
     *
     * @return $this
     */
    public function setAdjustmentPositive($adjustment_positive)
    {
        $this->adjustment_positive = $adjustment_positive;

        return $this;
    }

    /**
     * @return float
     */
    public function getAdjustmentNegative()
    {
        return $this->adjustment_negative;
    }

    /**
     * @param float $adjustment_negative
     *
     * @return $this
     */
    public function setAdjustmentNegative($adjustment_negative)
    {
        $this->adjustment_negative = $adjustment_negative;

        return $this;
    }
}
