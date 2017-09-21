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

class CatalogCategoryInfo
{
    /**
     * @var string
     */
    protected $category_id = null;

    /**
     * @var int
     */
    protected $is_active = null;

    /**
     * @var string
     */
    protected $position = null;

    /**
     * @var string
     */
    protected $level = null;

    /**
     * @var string
     */
    protected $parent_id = null;

    /**
     * @var string
     */
    protected $all_children = null;

    /**
     * @var string
     */
    protected $children = null;

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
    protected $name = null;

    /**
     * @var string
     */
    protected $url_key = null;

    /**
     * @var string
     */
    protected $description = null;

    /**
     * @var string
     */
    protected $meta_title = null;

    /**
     * @var string
     */
    protected $meta_keywords = null;

    /**
     * @var string
     */
    protected $meta_description = null;

    /**
     * @var string
     */
    protected $path = null;

    /**
     * @var string
     */
    protected $url_path = null;

    /**
     * @var int
     */
    protected $children_count = null;

    /**
     * @var string
     */
    protected $display_mode = null;

    /**
     * @var int
     */
    protected $is_anchor = null;

    /**
     * @var string[]
     */
    protected $available_sort_by = null;

    /**
     * @var string
     */
    protected $custom_design = null;

    /**
     * @var string
     */
    protected $custom_design_apply = null;

    /**
     * @var string
     */
    protected $custom_design_from = null;

    /**
     * @var string
     */
    protected $custom_design_to = null;

    /**
     * @var string
     */
    protected $page_layout = null;

    /**
     * @var string
     */
    protected $custom_layout_update = null;

    /**
     * @var string
     */
    protected $default_sort_by = null;

    /**
     * @var int
     */
    protected $landing_page = null;

    /**
     * Constructor.
     *
     * @var string   $category_id
     * @var int      $is_active
     * @var string   $position
     * @var string   $level
     * @var string   $parent_id
     * @var string   $all_children
     * @var string   $children
     *
     * @param mixed $category_id
     * @param mixed $is_active
     * @param mixed $position
     * @param mixed $level
     * @param mixed $parent_id
     * @param mixed $all_children
     * @param mixed $children
     */
    public function __construct($category_id, $is_active, $position, $level, $parent_id, $all_children, $children)
    {
        $this->category_id = $category_id;
        $this->is_active = $is_active;
        $this->position = $position;
        $this->level = $level;
        $this->parent_id = $parent_id;
        $this->all_children = $all_children;
        $this->children = $children;
    }

    /**
     * @return string
     */
    public function getCategoryId()
    {
        return $this->category_id;
    }

    /**
     * @param string $category_id
     *
     * @return $this
     */
    public function setCategoryId($category_id)
    {
        $this->category_id = $category_id;

        return $this;
    }

    /**
     * @return int
     */
    public function getIsActive()
    {
        return $this->is_active;
    }

    /**
     * @param int $is_active
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
    public function getPosition()
    {
        return $this->position;
    }

    /**
     * @param string $position
     *
     * @return $this
     */
    public function setPosition($position)
    {
        $this->position = $position;

        return $this;
    }

    /**
     * @return string
     */
    public function getLevel()
    {
        return $this->level;
    }

    /**
     * @param string $level
     *
     * @return $this
     */
    public function setLevel($level)
    {
        $this->level = $level;

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
    public function getAllChildren()
    {
        return $this->all_children;
    }

    /**
     * @param string $all_children
     *
     * @return $this
     */
    public function setAllChildren($all_children)
    {
        $this->all_children = $all_children;

        return $this;
    }

    /**
     * @return string
     */
    public function getChildren()
    {
        return $this->children;
    }

    /**
     * @param string $children
     *
     * @return $this
     */
    public function setChildren($children)
    {
        $this->children = $children;

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
    public function getName()
    {
        return $this->name;
    }

    /**
     * @param string $name
     *
     * @return $this
     */
    public function setName($name)
    {
        $this->name = $name;

        return $this;
    }

    /**
     * @return string
     */
    public function getUrlKey()
    {
        return $this->url_key;
    }

    /**
     * @param string $url_key
     *
     * @return $this
     */
    public function setUrlKey($url_key)
    {
        $this->url_key = $url_key;

        return $this;
    }

    /**
     * @return string
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * @param string $description
     *
     * @return $this
     */
    public function setDescription($description)
    {
        $this->description = $description;

        return $this;
    }

    /**
     * @return string
     */
    public function getMetaTitle()
    {
        return $this->meta_title;
    }

    /**
     * @param string $meta_title
     *
     * @return $this
     */
    public function setMetaTitle($meta_title)
    {
        $this->meta_title = $meta_title;

        return $this;
    }

    /**
     * @return string
     */
    public function getMetaKeywords()
    {
        return $this->meta_keywords;
    }

    /**
     * @param string $meta_keywords
     *
     * @return $this
     */
    public function setMetaKeywords($meta_keywords)
    {
        $this->meta_keywords = $meta_keywords;

        return $this;
    }

    /**
     * @return string
     */
    public function getMetaDescription()
    {
        return $this->meta_description;
    }

    /**
     * @param string $meta_description
     *
     * @return $this
     */
    public function setMetaDescription($meta_description)
    {
        $this->meta_description = $meta_description;

        return $this;
    }

    /**
     * @return string
     */
    public function getPath()
    {
        return $this->path;
    }

    /**
     * @param string $path
     *
     * @return $this
     */
    public function setPath($path)
    {
        $this->path = $path;

        return $this;
    }

    /**
     * @return string
     */
    public function getUrlPath()
    {
        return $this->url_path;
    }

    /**
     * @param string $url_path
     *
     * @return $this
     */
    public function setUrlPath($url_path)
    {
        $this->url_path = $url_path;

        return $this;
    }

    /**
     * @return int
     */
    public function getChildrenCount()
    {
        return $this->children_count;
    }

    /**
     * @param int $children_count
     *
     * @return $this
     */
    public function setChildrenCount($children_count)
    {
        $this->children_count = $children_count;

        return $this;
    }

    /**
     * @return string
     */
    public function getDisplayMode()
    {
        return $this->display_mode;
    }

    /**
     * @param string $display_mode
     *
     * @return $this
     */
    public function setDisplayMode($display_mode)
    {
        $this->display_mode = $display_mode;

        return $this;
    }

    /**
     * @return int
     */
    public function getIsAnchor()
    {
        return $this->is_anchor;
    }

    /**
     * @param int $is_anchor
     *
     * @return $this
     */
    public function setIsAnchor($is_anchor)
    {
        $this->is_anchor = $is_anchor;

        return $this;
    }

    /**
     * @return string[]
     */
    public function getAvailableSortBy()
    {
        return $this->available_sort_by;
    }

    /**
     * @param string[] $available_sort_by
     *
     * @return $this
     */
    public function setAvailableSortBy($available_sort_by)
    {
        $this->available_sort_by = $available_sort_by;

        return $this;
    }

    /**
     * @return string
     */
    public function getCustomDesign()
    {
        return $this->custom_design;
    }

    /**
     * @param string $custom_design
     *
     * @return $this
     */
    public function setCustomDesign($custom_design)
    {
        $this->custom_design = $custom_design;

        return $this;
    }

    /**
     * @return string
     */
    public function getCustomDesignApply()
    {
        return $this->custom_design_apply;
    }

    /**
     * @param string $custom_design_apply
     *
     * @return $this
     */
    public function setCustomDesignApply($custom_design_apply)
    {
        $this->custom_design_apply = $custom_design_apply;

        return $this;
    }

    /**
     * @return string
     */
    public function getCustomDesignFrom()
    {
        return $this->custom_design_from;
    }

    /**
     * @param string $custom_design_from
     *
     * @return $this
     */
    public function setCustomDesignFrom($custom_design_from)
    {
        $this->custom_design_from = $custom_design_from;

        return $this;
    }

    /**
     * @return string
     */
    public function getCustomDesignTo()
    {
        return $this->custom_design_to;
    }

    /**
     * @param string $custom_design_to
     *
     * @return $this
     */
    public function setCustomDesignTo($custom_design_to)
    {
        $this->custom_design_to = $custom_design_to;

        return $this;
    }

    /**
     * @return string
     */
    public function getPageLayout()
    {
        return $this->page_layout;
    }

    /**
     * @param string $page_layout
     *
     * @return $this
     */
    public function setPageLayout($page_layout)
    {
        $this->page_layout = $page_layout;

        return $this;
    }

    /**
     * @return string
     */
    public function getCustomLayoutUpdate()
    {
        return $this->custom_layout_update;
    }

    /**
     * @param string $custom_layout_update
     *
     * @return $this
     */
    public function setCustomLayoutUpdate($custom_layout_update)
    {
        $this->custom_layout_update = $custom_layout_update;

        return $this;
    }

    /**
     * @return string
     */
    public function getDefaultSortBy()
    {
        return $this->default_sort_by;
    }

    /**
     * @param string $default_sort_by
     *
     * @return $this
     */
    public function setDefaultSortBy($default_sort_by)
    {
        $this->default_sort_by = $default_sort_by;

        return $this;
    }

    /**
     * @return int
     */
    public function getLandingPage()
    {
        return $this->landing_page;
    }

    /**
     * @param int $landing_page
     *
     * @return $this
     */
    public function setLandingPage($landing_page)
    {
        $this->landing_page = $landing_page;

        return $this;
    }
}
