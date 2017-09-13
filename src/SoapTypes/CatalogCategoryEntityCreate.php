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

class CatalogCategoryEntityCreate
{
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
     * @var string[]
     */
    protected $available_sort_by = ['position'];

    /**
     * @var string
     */
    protected $custom_design = null;

    /**
     * @var int
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
    protected $custom_layout_update = null;

    /**
     * @var string
     */
    protected $default_sort_by = 'position';

    /**
     * @var string
     */
    protected $description = null;

    /**
     * @var string
     */
    protected $display_mode = null;

    /**
     * @var int
     */
    protected $is_anchor = null;

    /**
     * @var int
     */
    protected $landing_page = null;

    /**
     * @var string
     */
    protected $meta_description = null;

    /**
     * @var string
     */
    protected $meta_keywords = null;

    /**
     * @var string
     */
    protected $meta_title = null;

    /**
     * @var string
     */
    protected $page_layout = null;

    /**
     * @var string
     */
    protected $url_key = null;

    /**
     * @var int
     */
    protected $include_in_menu = null;

    /**
     * Constructor.
     *
     * @var string
     * @var int           $is_active
     * @var int           $position
     * @var string[] $available_sort_by
     * @var string        $custom_design
     * @var int           $custom_design_apply
     * @var string        $custom_design_from
     * @var string        $custom_design_to
     * @var string        $custom_layout_update
     * @var string        $default_sort_by
     * @var string        $description
     * @var string        $display_mode
     * @var int           $is_anchor
     * @var int           $landing_page
     * @var string        $meta_description
     * @var string        $meta_keywords
     * @var string        $meta_title
     * @var string        $page_layout
     * @var string        $url_key
     * @var int           $include_in_menu
     *
     * @param mixed $name
     * @param mixed $is_active
     * @param mixed $include_in_menu
     */
    public function __construct(
        string $name,
        bool $is_active,
        bool $include_in_menu
    ) {
        $this->name = $name;
        $this->is_active = $is_active;
        $this->include_in_menu = $include_in_menu;
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
     * @return int
     */
    public function getPosition()
    {
        return $this->position;
    }

    /**
     * @param int $position
     *
     * @return $this
     */
    public function setPosition($position)
    {
        $this->position = $position;

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
     * @return int
     */
    public function getCustomDesignApply()
    {
        return $this->custom_design_apply;
    }

    /**
     * @param int $custom_design_apply
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
     * @return int
     */
    public function getIncludeInMenu()
    {
        return $this->include_in_menu;
    }

    /**
     * @param int $include_in_menu
     *
     * @return $this
     */
    public function setIncludeInMenu($include_in_menu)
    {
        $this->include_in_menu = $include_in_menu;

        return $this;
    }
}
