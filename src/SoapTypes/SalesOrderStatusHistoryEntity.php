<?php

namespace Etrias\MagentoConnector\SoapTypes;

class SalesOrderStatusHistoryEntity
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
    protected $is_customer_notified = null;

    /**
     * @var string
     */
    protected $status = null;

    /**
     * @var string
     */
    protected $comment = null;

    /**
     * Constructor
     *
     * @var string $increment_id
     * @var string $parent_id
     * @var string $created_at
     * @var string $updated_at
     * @var string $is_active
     * @var string $is_customer_notified
     * @var string $status
     * @var string $comment
     */
    public function __construct($increment_id, $parent_id, $created_at, $updated_at, $is_active, $is_customer_notified, $status, $comment)
    {
        $this->increment_id = $increment_id;
        $this->parent_id = $parent_id;
        $this->created_at = $created_at;
        $this->updated_at = $updated_at;
        $this->is_active = $is_active;
        $this->is_customer_notified = $is_customer_notified;
        $this->status = $status;
        $this->comment = $comment;
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
    public function getIs_customer_notified()
    {
        return $this->is_customer_notified;
    }

    /**
     * @param string $is_customer_notified
     * @return $this
     */
    public function setIs_customer_notified($is_customer_notified)
    {
        $this->is_customer_notified = $is_customer_notified;
        return $this;
    }

    /**
     * @return string
     */
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * @param string $status
     * @return $this
     */
    public function setStatus($status)
    {
        $this->status = $status;
        return $this;
    }

    /**
     * @return string
     */
    public function getComment()
    {
        return $this->comment;
    }

    /**
     * @param string $comment
     * @return $this
     */
    public function setComment($comment)
    {
        $this->comment = $comment;
        return $this;
    }


}

