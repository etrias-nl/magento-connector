<?php

namespace Etrias\MagentoConnector\SoapTypes;

class SalesOrderShipmentCommentEntity
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
    protected $comment = null;

    /**
     * @var string
     */
    protected $is_customer_notified = null;

    /**
     * @var string
     */
    protected $comment_id = null;

    /**
     * Constructor
     *
     * @var string $increment_id
     * @var string $parent_id
     * @var string $created_at
     * @var string $updated_at
     * @var string $is_active
     * @var string $comment
     * @var string $is_customer_notified
     * @var string $comment_id
     */
    public function __construct($increment_id, $parent_id, $created_at, $updated_at, $is_active, $comment, $is_customer_notified, $comment_id)
    {
        $this->increment_id = $increment_id;
        $this->parent_id = $parent_id;
        $this->created_at = $created_at;
        $this->updated_at = $updated_at;
        $this->is_active = $is_active;
        $this->comment = $comment;
        $this->is_customer_notified = $is_customer_notified;
        $this->comment_id = $comment_id;
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
    public function getComment_id()
    {
        return $this->comment_id;
    }

    /**
     * @param string $comment_id
     * @return $this
     */
    public function setComment_id($comment_id)
    {
        $this->comment_id = $comment_id;
        return $this;
    }


}

