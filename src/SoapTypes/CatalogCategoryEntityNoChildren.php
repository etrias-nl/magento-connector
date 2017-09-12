<?php

namespace Etrias\MagentoConnector\SoapTypes;

class CatalogCategoryEntityNoChildren
{

    /**
     * @var int
     */
    protected $category_id = null;

    /**
     * @var int
     */
    protected $parent_id = null;

    /**
     * @var string
     */
    protected $name = null;

    /**
     * @var int
     */
    protected $is_active = null;

    /**
     * @var int
     */
    protected $position = null;

    /**
     * @var int
     */
    protected $level = null;

    /**
     * Constructor
     *
     * @var int $category_id
     * @var int $parent_id
     * @var string $name
     * @var int $is_active
     * @var int $position
     * @var int $level
     */
    public function __construct($category_id, $parent_id, $name, $is_active, $position, $level)
    {
        $this->category_id = $category_id;
        $this->parent_id = $parent_id;
        $this->name = $name;
        $this->is_active = $is_active;
        $this->position = $position;
        $this->level = $level;
    }

    /**
     * @return int
     */
    public function getCategory_id()
    {
        return $this->category_id;
    }

    /**
     * @param int $category_id
     * @return $this
     */
    public function setCategory_id($category_id)
    {
        $this->category_id = $category_id;
        return $this;
    }

    /**
     * @return int
     */
    public function getParent_id()
    {
        return $this->parent_id;
    }

    /**
     * @param int $parent_id
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
    public function getName()
    {
        return $this->name;
    }

    /**
     * @param string $name
     * @return $this
     */
    public function setName($name)
    {
        $this->name = $name;
        return $this;
    }

    /**
     * @return int
     */
    public function getIs_active()
    {
        return $this->is_active;
    }

    /**
     * @param int $is_active
     * @return $this
     */
    public function setIs_active($is_active)
    {
        $this->is_active = $is_active;
        return $this;
    }

    /**
     * @return int
     */
    public function getPosition()
    {
        return $this->position;
    }

    /**
     * @param int $position
     * @return $this
     */
    public function setPosition($position)
    {
        $this->position = $position;
        return $this;
    }

    /**
     * @return int
     */
    public function getLevel()
    {
        return $this->level;
    }

    /**
     * @param int $level
     * @return $this
     */
    public function setLevel($level)
    {
        $this->level = $level;
        return $this;
    }


}
