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
     * @var ArrayOfString
     */
    protected $available_sort_by = null;

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
    protected $default_sort_by = null;

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
     * @var ArrayOfString $available_sort_by
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
     * @param mixed $position
     * @param mixed $available_sort_by
     * @param mixed $custom_design
     * @param mixed $custom_design_apply
     * @param mixed $custom_design_from
     * @param mixed $custom_design_to
     * @param mixed $custom_layout_update
     * @param mixed $default_sort_by
     * @param mixed $description
     * @param mixed $display_mode
     * @param mixed $is_anchor
     * @param mixed $landing_page
     * @param mixed $meta_description
     * @param mixed $meta_keywords
     * @param mixed $meta_title
     * @param mixed $page_layout
     * @param mixed $url_key
     * @param mixed $include_in_menu
     */
    public function __construct($name, $is_active, $position, $available_sort_by, $custom_design, $custom_design_apply, $custom_design_from, $custom_design_to, $custom_layout_update, $default_sort_by, $description, $display_mode, $is_anchor, $landing_page, $meta_description, $meta_keywords, $meta_title, $page_layout, $url_key, $include_in_menu)
    {
        $this->name = $name;
        $this->is_active = $is_active;
        $this->position = $position;
        $this->available_sort_by = $available_sort_by;
        $this->custom_design = $custom_design;
        $this->custom_design_apply = $custom_design_apply;
        $this->custom_design_from = $custom_design_from;
        $this->custom_design_to = $custom_design_to;
        $this->custom_layout_update = $custom_layout_update;
        $this->default_sort_by = $default_sort_by;
        $this->description = $description;
        $this->display_mode = $display_mode;
        $this->is_anchor = $is_anchor;
        $this->landing_page = $landing_page;
        $this->meta_description = $meta_description;
        $this->meta_keywords = $meta_keywords;
        $this->meta_title = $meta_title;
        $this->page_layout = $page_layout;
        $this->url_key = $url_key;
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
    public function getIs_active()
    {
        return $this->is_active;
    }

    /**
     * @param int $is_active
     *
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
     *
     * @return $this
     */
    public function setPosition($position)
    {
        $this->position = $position;

        return $this;
    }

    /**
     * @return ArrayOfString
     */
    public function getAvailable_sort_by()
    {
        return $this->available_sort_by;
    }

    /**
     * @param ArrayOfString $available_sort_by
     *
     * @return $this
     */
    public function setAvailable_sort_by($available_sort_by)
    {
        $this->available_sort_by = $available_sort_by;

        return $this;
    }

    /**
     * @return string
     */
    public function getCustom_design()
    {
        return $this->custom_design;
    }

    /**
     * @param string $custom_design
     *
     * @return $this
     */
    public function setCustom_design($custom_design)
    {
        $this->custom_design = $custom_design;

        return $this;
    }

    /**
     * @return int
     */
    public function getCustom_design_apply()
    {
        return $this->custom_design_apply;
    }

    /**
     * @param int $custom_design_apply
     *
     * @return $this
     */
    public function setCustom_design_apply($custom_design_apply)
    {
        $this->custom_design_apply = $custom_design_apply;

        return $this;
    }

    /**
     * @return string
     */
    public function getCustom_design_from()
    {
        return $this->custom_design_from;
    }

    /**
     * @param string $custom_design_from
     *
     * @return $this
     */
    public function setCustom_design_from($custom_design_from)
    {
        $this->custom_design_from = $custom_design_from;

        return $this;
    }

    /**
     * @return string
     */
    public function getCustom_design_to()
    {
        return $this->custom_design_to;
    }

    /**
     * @param string $custom_design_to
     *
     * @return $this
     */
    public function setCustom_design_to($custom_design_to)
    {
        $this->custom_design_to = $custom_design_to;

        return $this;
    }

    /**
     * @return string
     */
    public function getCustom_layout_update()
    {
        return $this->custom_layout_update;
    }

    /**
     * @param string $custom_layout_update
     *
     * @return $this
     */
    public function setCustom_layout_update($custom_layout_update)
    {
        $this->custom_layout_update = $custom_layout_update;

        return $this;
    }

    /**
     * @return string
     */
    public function getDefault_sort_by()
    {
        return $this->default_sort_by;
    }

    /**
     * @param string $default_sort_by
     *
     * @return $this
     */
    public function setDefault_sort_by($default_sort_by)
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
    public function getDisplay_mode()
    {
        return $this->display_mode;
    }

    /**
     * @param string $display_mode
     *
     * @return $this
     */
    public function setDisplay_mode($display_mode)
    {
        $this->display_mode = $display_mode;

        return $this;
    }

    /**
     * @return int
     */
    public function getIs_anchor()
    {
        return $this->is_anchor;
    }

    /**
     * @param int $is_anchor
     *
     * @return $this
     */
    public function setIs_anchor($is_anchor)
    {
        $this->is_anchor = $is_anchor;

        return $this;
    }

    /**
     * @return int
     */
    public function getLanding_page()
    {
        return $this->landing_page;
    }

    /**
     * @param int $landing_page
     *
     * @return $this
     */
    public function setLanding_page($landing_page)
    {
        $this->landing_page = $landing_page;

        return $this;
    }

    /**
     * @return string
     */
    public function getMeta_description()
    {
        return $this->meta_description;
    }

    /**
     * @param string $meta_description
     *
     * @return $this
     */
    public function setMeta_description($meta_description)
    {
        $this->meta_description = $meta_description;

        return $this;
    }

    /**
     * @return string
     */
    public function getMeta_keywords()
    {
        return $this->meta_keywords;
    }

    /**
     * @param string $meta_keywords
     *
     * @return $this
     */
    public function setMeta_keywords($meta_keywords)
    {
        $this->meta_keywords = $meta_keywords;

        return $this;
    }

    /**
     * @return string
     */
    public function getMeta_title()
    {
        return $this->meta_title;
    }

    /**
     * @param string $meta_title
     *
     * @return $this
     */
    public function setMeta_title($meta_title)
    {
        $this->meta_title = $meta_title;

        return $this;
    }

    /**
     * @return string
     */
    public function getPage_layout()
    {
        return $this->page_layout;
    }

    /**
     * @param string $page_layout
     *
     * @return $this
     */
    public function setPage_layout($page_layout)
    {
        $this->page_layout = $page_layout;

        return $this;
    }

    /**
     * @return string
     */
    public function getUrl_key()
    {
        return $this->url_key;
    }

    /**
     * @param string $url_key
     *
     * @return $this
     */
    public function setUrl_key($url_key)
    {
        $this->url_key = $url_key;

        return $this;
    }

    /**
     * @return int
     */
    public function getInclude_in_menu()
    {
        return $this->include_in_menu;
    }

    /**
     * @param int $include_in_menu
     *
     * @return $this
     */
    public function setInclude_in_menu($include_in_menu)
    {
        $this->include_in_menu = $include_in_menu;

        return $this;
    }
}
