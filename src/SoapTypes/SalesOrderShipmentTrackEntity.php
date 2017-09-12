<?php

namespace Etrias\MagentoConnector\SoapTypes;

class SalesOrderShipmentTrackEntity
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
    protected $carrier_code = null;

    /**
     * @var string
     */
    protected $title = null;

    /**
     * @var string
     */
    protected $number = null;

    /**
     * @var string
     */
    protected $order_id = null;

    /**
     * @var string
     */
    protected $track_id = null;

    /**
     * Constructor
     *
     * @var string $increment_id
     * @var string $parent_id
     * @var string $created_at
     * @var string $updated_at
     * @var string $is_active
     * @var string $carrier_code
     * @var string $title
     * @var string $number
     * @var string $order_id
     * @var string $track_id
     */
    public function __construct($increment_id, $parent_id, $created_at, $updated_at, $is_active, $carrier_code, $title, $number, $order_id, $track_id)
    {
        $this->increment_id = $increment_id;
        $this->parent_id = $parent_id;
        $this->created_at = $created_at;
        $this->updated_at = $updated_at;
        $this->is_active = $is_active;
        $this->carrier_code = $carrier_code;
        $this->title = $title;
        $this->number = $number;
        $this->order_id = $order_id;
        $this->track_id = $track_id;
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
    public function getParent_id()
    {
        return $this->parent_id;
    }

    /**
     * @param string $parent_id
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
    public function getIs_active()
    {
        return $this->is_active;
    }

    /**
     * @param string $is_active
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
    public function getCarrier_code()
    {
        return $this->carrier_code;
    }

    /**
     * @param string $carrier_code
     * @return $this
     */
    public function setCarrier_code($carrier_code)
    {
        $this->carrier_code = $carrier_code;
        return $this;
    }

    /**
     * @return string
     */
    public function getTitle()
    {
        return $this->title;
    }

    /**
     * @param string $title
     * @return $this
     */
    public function setTitle($title)
    {
        $this->title = $title;
        return $this;
    }

    /**
     * @return string
     */
    public function getNumber()
    {
        return $this->number;
    }

    /**
     * @param string $number
     * @return $this
     */
    public function setNumber($number)
    {
        $this->number = $number;
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
    public function getTrack_id()
    {
        return $this->track_id;
    }

    /**
     * @param string $track_id
     * @return $this
     */
    public function setTrack_id($track_id)
    {
        $this->track_id = $track_id;
        return $this;
    }


}

