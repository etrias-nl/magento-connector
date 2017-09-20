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
     * Constructor.
     *
     * @var string
     * @var string                               $parent_id
     * @var string                               $store_id
     * @var string                               $created_at
     * @var string                               $updated_at
     * @var string                               $is_active
     * @var string                               $shipping_address_id
     * @var string                               $shipping_firstname
     * @var string                               $shipping_lastname
     * @var string                               $order_id
     * @var string                               $order_increment_id
     * @var string                               $order_created_at
     * @var string                               $total_qty
     * @var string                               $shipment_id
     * @var salesOrderShipmentItemEntityArray    $items
     * @var salesOrderShipmentTrackEntityArray   $tracks
     * @var salesOrderShipmentCommentEntityArray $comments
     *
     * @param mixed $increment_id
     * @param mixed $parent_id
     * @param mixed $store_id
     * @param mixed $created_at
     * @param mixed $updated_at
     * @param mixed $is_active
     * @param mixed $shipping_address_id
     * @param mixed $shipping_firstname
     * @param mixed $shipping_lastname
     * @param mixed $order_id
     * @param mixed $order_increment_id
     * @param mixed $order_created_at
     * @param mixed $total_qty
     * @param mixed $shipment_id
     * @param mixed $items
     * @param mixed $tracks
     * @param mixed $comments
     */
    public function __construct($increment_id, $parent_id, $store_id, $created_at, $updated_at, $is_active, $shipping_address_id, $shipping_firstname, $shipping_lastname, $order_id, $order_increment_id, $order_created_at, $total_qty, $shipment_id, $items, $tracks, $comments)
    {
        $this->increment_id = $increment_id;
        $this->parent_id = $parent_id;
        $this->store_id = $store_id;
        $this->created_at = $created_at;
        $this->updated_at = $updated_at;
        $this->is_active = $is_active;
        $this->shipping_address_id = $shipping_address_id;
        $this->shipping_firstname = $shipping_firstname;
        $this->shipping_lastname = $shipping_lastname;
        $this->order_id = $order_id;
        $this->order_increment_id = $order_increment_id;
        $this->order_created_at = $order_created_at;
        $this->total_qty = $total_qty;
        $this->shipment_id = $shipment_id;
        $this->items = $items;
        $this->tracks = $tracks;
        $this->comments = $comments;
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
    public function getParent_id()
    {
        return $this->parent_id;
    }

    /**
     * @param string $parent_id
     *
     * @return $this
     */
    public function setParent_id($parent_id)
    {
        $this->parent_id = $parent_id;

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
    public function getIs_active()
    {
        return $this->is_active;
    }

    /**
     * @param string $is_active
     *
     * @return $this
     */
    public function setIs_active($is_active)
    {
        $this->is_active = $is_active;

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
    public function getOrder_increment_id()
    {
        return $this->order_increment_id;
    }

    /**
     * @param string $order_increment_id
     *
     * @return $this
     */
    public function setOrder_increment_id($order_increment_id)
    {
        $this->order_increment_id = $order_increment_id;

        return $this;
    }

    /**
     * @return string
     */
    public function getOrder_created_at()
    {
        return $this->order_created_at;
    }

    /**
     * @param string $order_created_at
     *
     * @return $this
     */
    public function setOrder_created_at($order_created_at)
    {
        $this->order_created_at = $order_created_at;

        return $this;
    }

    /**
     * @return string
     */
    public function getTotal_qty()
    {
        return $this->total_qty;
    }

    /**
     * @param string $total_qty
     *
     * @return $this
     */
    public function setTotal_qty($total_qty)
    {
        $this->total_qty = $total_qty;

        return $this;
    }

    /**
     * @return string
     */
    public function getShipment_id()
    {
        return $this->shipment_id;
    }

    /**
     * @param string $shipment_id
     *
     * @return $this
     */
    public function setShipment_id($shipment_id)
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
    public function setItems($items)
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
    public function setTracks($tracks)
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
    public function setComments($comments)
    {
        $this->comments = $comments;

        return $this;
    }
}
