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
     * Constructor.
     *
     * @var string
     * @var string $created_at
     * @var string $comment
     * @var string $is_customer_notified
     * @var string $comment_id
     * @var string $is_visible_on_front
     *
     * @param mixed $parent_id
     * @param mixed $created_at
     * @param mixed $comment
     * @param mixed $is_customer_notified
     * @param mixed $comment_id
     * @param mixed $is_visible_on_front
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
    public function getComment()
    {
        return $this->comment;
    }

    /**
     * @param string $comment
     *
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
    public function getIsCustomerNotified()
    {
        return $this->is_customer_notified;
    }

    /**
     * @param string $is_customer_notified
     *
     * @return $this
     */
    public function setIsCustomerNotified($is_customer_notified)
    {
        $this->is_customer_notified = $is_customer_notified;

        return $this;
    }

    /**
     * @return string
     */
    public function getCommentId()
    {
        return $this->comment_id;
    }

    /**
     * @param string $comment_id
     *
     * @return $this
     */
    public function setCommentId($comment_id)
    {
        $this->comment_id = $comment_id;

        return $this;
    }

    /**
     * @return string
     */
    public function getIsVisibleOnFront()
    {
        return $this->is_visible_on_front;
    }

    /**
     * @param string $is_visible_on_front
     *
     * @return $this
     */
    public function setIsVisibleOnFront($is_visible_on_front)
    {
        $this->is_visible_on_front = $is_visible_on_front;

        return $this;
    }
}
