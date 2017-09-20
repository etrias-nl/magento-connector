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

class OrderItemIdQty
{
    /**
     * @var int
     */
    protected $order_item_id = null;

    /**
     * @var float
     */
    protected $qty = null;

    /**
     * Constructor.
     *
     * @var int
     * @var float $qty
     *
     * @param mixed $order_item_id
     * @param mixed $qty
     */
    public function __construct($order_item_id, $qty)
    {
        $this->order_item_id = $order_item_id;
        $this->qty = $qty;
    }

    /**
     * @return int
     */
    public function getOrder_item_id()
    {
        return $this->order_item_id;
    }

    /**
     * @param int $order_item_id
     *
     * @return $this
     */
    public function setOrder_item_id($order_item_id)
    {
        $this->order_item_id = $order_item_id;

        return $this;
    }

    /**
     * @return float
     */
    public function getQty()
    {
        return $this->qty;
    }

    /**
     * @param float $qty
     *
     * @return $this
     */
    public function setQty($qty)
    {
        $this->qty = $qty;

        return $this;
    }
}
