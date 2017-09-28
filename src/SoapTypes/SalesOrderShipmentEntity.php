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

class SalesOrderShipmentEntity
{
    /**
     * @var string
     */
    protected $increment_id = null;

    /**
     * @var string
     */
    protected $parent_id = null;

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
    protected $is_active = null;

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
    protected $order_id = null;

    /**
     * @var string
     */
    protected $order_increment_id = null;

    /**
     * @var string
     */
    protected $order_created_at = null;

    /**
     * @var string
     */
    protected $total_qty = null;

    /**
     * @var string
     */
    protected $shipment_id = null;

    /**
     * @var salesOrderShipmentItemEntityArray
     */
    protected $items = null;

    /**
     * @var salesOrderShipmentTrackEntityArray
     */
    protected $tracks = null;

    /**
     * @var salesOrderShipmentCommentEntityArray
     */
    protected $comments = null;

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
    public function getParentId()
    {
        return $this->parent_id;
    }

    /**
     * @param string $parent_id
     *
     * @return $this
     */
    public function setParentId($parent_id)
    {
        $this->parent_id = $parent_id;

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
    public function getIsActive()
    {
        return $this->is_active;
    }

    /**
     * @param string $is_active
     *
     * @return $this
     */
    public function setIsActive($is_active)
    {
        $this->is_active = $is_active;

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
    public function getOrderIncrementId()
    {
        return $this->order_increment_id;
    }

    /**
     * @param string $order_increment_id
     *
     * @return $this
     */
    public function setOrderIncrementId($order_increment_id)
    {
        $this->order_increment_id = $order_increment_id;

        return $this;
    }

    /**
     * @return string
     */
    public function getOrderCreatedAt()
    {
        return $this->order_created_at;
    }

    /**
     * @param string $order_created_at
     *
     * @return $this
     */
    public function setOrderCreatedAt($order_created_at)
    {
        $this->order_created_at = $order_created_at;

        return $this;
    }

    /**
     * @return string
     */
    public function getTotalQty()
    {
        return $this->total_qty;
    }

    /**
     * @param string $total_qty
     *
     * @return $this
     */
    public function setTotalQty($total_qty)
    {
        $this->total_qty = $total_qty;

        return $this;
    }

    /**
     * @return string
     */
    public function getShipmentId()
    {
        return $this->shipment_id;
    }

    /**
     * @param string $shipment_id
     *
     * @return $this
     */
    public function setShipmentId($shipment_id)
    {
        $this->shipment_id = $shipment_id;

        return $this;
    }

    /**
     * @return salesOrderShipmentItemEntityArray
     */
    public function getItems()
    {
        return $this->items;
    }

    /**
     * @param salesOrderShipmentItemEntityArray $items
     *
     * @return $this
     */
    public function setItems(array $items)
    {
        $this->items = $items;

        return $this;
    }

    /**
     * @return salesOrderShipmentTrackEntityArray
     */
    public function getTracks()
    {
        return $this->tracks;
    }

    /**
     * @param salesOrderShipmentTrackEntityArray $tracks
     *
     * @return $this
     */
    public function setTracks(array $tracks)
    {
        $this->tracks = $tracks;

        return $this;
    }

    /**
     * @return salesOrderShipmentCommentEntityArray
     */
    public function getComments()
    {
        return $this->comments;
    }

    /**
     * @param salesOrderShipmentCommentEntityArray $comments
     *
     * @return $this
     */
    public function setComments(array $comments)
    {
        $this->comments = $comments;

        return $this;
    }
}
