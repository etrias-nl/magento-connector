<?php

namespace Etrias\MagentoConnector\SoapTypes;

class SalesOrderCreditmemoCommentEntity
{

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
     * @var string
     */
    protected $is_visible_on_front = null;

    /**
     * Constructor
     *
     * @var string $parent_id
     * @var string $created_at
     * @var string $comment
     * @var string $is_customer_notified
     * @var string $comment_id
     * @var string $is_visible_on_front
     */
    public function __construct($parent_id, $created_at, $comment, $is_customer_notified, $comment_id, $is_visible_on_front)
    {
        $this->parent_id = $parent_id;
        $this->created_at = $created_at;
        $this->comment = $comment;
        $this->is_customer_notified = $is_customer_notified;
        $this->comment_id = $comment_id;
        $this->is_visible_on_front = $is_visible_on_front;
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

    /**
     * @return string
     */
    public function getIs_visible_on_front()
    {
        return $this->is_visible_on_front;
    }

    /**
     * @param string $is_visible_on_front
     * @return $this
     */
    public function setIs_visible_on_front($is_visible_on_front)
    {
        $this->is_visible_on_front = $is_visible_on_front;
        return $this;
    }


}

