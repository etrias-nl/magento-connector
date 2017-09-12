<?php

namespace Etrias\MagentoConnector\SoapTypes;

class CatalogProductAttributeEntityToUpdate
{

    /**
     * @var string
     */
    protected $scope = null;

    /**
     * @var string
     */
    protected $default_value = null;

    /**
     * @var int
     */
    protected $is_unique = null;

    /**
     * @var int
     */
    protected $is_required = null;

    /**
     * @var ArrayOfString
     */
    protected $apply_to = null;

    /**
     * @var int
     */
    protected $is_configurable = null;

    /**
     * @var int
     */
    protected $is_searchable = null;

    /**
     * @var int
     */
    protected $is_visible_in_advanced_search = null;

    /**
     * @var int
     */
    protected $is_comparable = null;

    /**
     * @var int
     */
    protected $is_used_for_promo_rules = null;

    /**
     * @var int
     */
    protected $is_visible_on_front = null;

    /**
     * @var int
     */
    protected $used_in_product_listing = null;

    /**
     * @var associativeArray
     */
    protected $additional_fields = null;

    /**
     * @var catalogProductAttributeFrontendLabelArray
     */
    protected $frontend_label = null;

    /**
     * Constructor
     *
     * @var string $scope
     * @var string $default_value
     * @var int $is_unique
     * @var int $is_required
     * @var ArrayOfString $apply_to
     * @var int $is_configurable
     * @var int $is_searchable
     * @var int $is_visible_in_advanced_search
     * @var int $is_comparable
     * @var int $is_used_for_promo_rules
     * @var int $is_visible_on_front
     * @var int $used_in_product_listing
     * @var associativeArray $additional_fields
     * @var catalogProductAttributeFrontendLabelArray $frontend_label
     */
    public function __construct($scope, $default_value, $is_unique, $is_required, $apply_to, $is_configurable, $is_searchable, $is_visible_in_advanced_search, $is_comparable, $is_used_for_promo_rules, $is_visible_on_front, $used_in_product_listing, $additional_fields, $frontend_label)
    {
        $this->scope = $scope;
        $this->default_value = $default_value;
        $this->is_unique = $is_unique;
        $this->is_required = $is_required;
        $this->apply_to = $apply_to;
        $this->is_configurable = $is_configurable;
        $this->is_searchable = $is_searchable;
        $this->is_visible_in_advanced_search = $is_visible_in_advanced_search;
        $this->is_comparable = $is_comparable;
        $this->is_used_for_promo_rules = $is_used_for_promo_rules;
        $this->is_visible_on_front = $is_visible_on_front;
        $this->used_in_product_listing = $used_in_product_listing;
        $this->additional_fields = $additional_fields;
        $this->frontend_label = $frontend_label;
    }

    /**
     * @return string
     */
    public function getScope()
    {
        return $this->scope;
    }

    /**
     * @param string $scope
     * @return $this
     */
    public function setScope($scope)
    {
        $this->scope = $scope;
        return $this;
    }

    /**
     * @return string
     */
    public function getDefault_value()
    {
        return $this->default_value;
    }

    /**
     * @param string $default_value
     * @return $this
     */
    public function setDefault_value($default_value)
    {
        $this->default_value = $default_value;
        return $this;
    }

    /**
     * @return int
     */
    public function getIs_unique()
    {
        return $this->is_unique;
    }

    /**
     * @param int $is_unique
     * @return $this
     */
    public function setIs_unique($is_unique)
    {
        $this->is_unique = $is_unique;
        return $this;
    }

    /**
     * @return int
     */
    public function getIs_required()
    {
        return $this->is_required;
    }

    /**
     * @param int $is_required
     * @return $this
     */
    public function setIs_required($is_required)
    {
        $this->is_required = $is_required;
        return $this;
    }

    /**
     * @return ArrayOfString
     */
    public function getApply_to()
    {
        return $this->apply_to;
    }

    /**
     * @param ArrayOfString $apply_to
     * @return $this
     */
    public function setApply_to($apply_to)
    {
        $this->apply_to = $apply_to;
        return $this;
    }

    /**
     * @return int
     */
    public function getIs_configurable()
    {
        return $this->is_configurable;
    }

    /**
     * @param int $is_configurable
     * @return $this
     */
    public function setIs_configurable($is_configurable)
    {
        $this->is_configurable = $is_configurable;
        return $this;
    }

    /**
     * @return int
     */
    public function getIs_searchable()
    {
        return $this->is_searchable;
    }

    /**
     * @param int $is_searchable
     * @return $this
     */
    public function setIs_searchable($is_searchable)
    {
        $this->is_searchable = $is_searchable;
        return $this;
    }

    /**
     * @return int
     */
    public function getIs_visible_in_advanced_search()
    {
        return $this->is_visible_in_advanced_search;
    }

    /**
     * @param int $is_visible_in_advanced_search
     * @return $this
     */
    public function setIs_visible_in_advanced_search($is_visible_in_advanced_search)
    {
        $this->is_visible_in_advanced_search = $is_visible_in_advanced_search;
        return $this;
    }

    /**
     * @return int
     */
    public function getIs_comparable()
    {
        return $this->is_comparable;
    }

    /**
     * @param int $is_comparable
     * @return $this
     */
    public function setIs_comparable($is_comparable)
    {
        $this->is_comparable = $is_comparable;
        return $this;
    }

    /**
     * @return int
     */
    public function getIs_used_for_promo_rules()
    {
        return $this->is_used_for_promo_rules;
    }

    /**
     * @param int $is_used_for_promo_rules
     * @return $this
     */
    public function setIs_used_for_promo_rules($is_used_for_promo_rules)
    {
        $this->is_used_for_promo_rules = $is_used_for_promo_rules;
        return $this;
    }

    /**
     * @return int
     */
    public function getIs_visible_on_front()
    {
        return $this->is_visible_on_front;
    }

    /**
     * @param int $is_visible_on_front
     * @return $this
     */
    public function setIs_visible_on_front($is_visible_on_front)
    {
        $this->is_visible_on_front = $is_visible_on_front;
        return $this;
    }

    /**
     * @return int
     */
    public function getUsed_in_product_listing()
    {
        return $this->used_in_product_listing;
    }

    /**
     * @param int $used_in_product_listing
     * @return $this
     */
    public function setUsed_in_product_listing($used_in_product_listing)
    {
        $this->used_in_product_listing = $used_in_product_listing;
        return $this;
    }

    /**
     * @return associativeArray
     */
    public function getAdditional_fields()
    {
        return $this->additional_fields;
    }

    /**
     * @param associativeArray $additional_fields
     * @return $this
     */
    public function setAdditional_fields($additional_fields)
    {
        $this->additional_fields = $additional_fields;
        return $this;
    }

    /**
     * @return catalogProductAttributeFrontendLabelArray
     */
    public function getFrontend_label()
    {
        return $this->frontend_label;
    }

    /**
     * @param catalogProductAttributeFrontendLabelArray $frontend_label
     * @return $this
     */
    public function setFrontend_label($frontend_label)
    {
        $this->frontend_label = $frontend_label;
        return $this;
    }


}

