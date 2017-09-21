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

class CatalogProductAttributeEntity
{
    /**
     * @var string
     */
    protected $attribute_id = null;

    /**
     * @var string
     */
    protected $attribute_code = null;

    /**
     * @var string
     */
    protected $frontend_input = null;

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
     * @var string[]
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
     * @var array
     */
    protected $additional_fields = null;

    /**
     * @var CatalogAttributeOptionEntity[]
     */
    protected $options = null;

    /**
     * @var CatalogProductAttributeFrontendLabelEntity[]
     */
    protected $frontend_label = null;

    /**
     * Constructor.
     *
     * @var string
     * @var string                                       $attribute_code
     * @var string                                       $frontend_input
     * @var string                                       $scope
     * @var string                                       $default_value
     * @var int                                          $is_unique
     * @var int                                          $is_required
     * @var string[]                                     $apply_to
     * @var int                                          $is_configurable
     * @var int                                          $is_searchable
     * @var int                                          $is_visible_in_advanced_search
     * @var int                                          $is_comparable
     * @var int                                          $is_used_for_promo_rules
     * @var int                                          $is_visible_on_front
     * @var int                                          $used_in_product_listing
     * @var array                                        $additional_fields
     * @var CatalogAttributeOptionEntity[]               $options
     * @var CatalogProductAttributeFrontendLabelEntity[] $frontend_label
     *
     * @param mixed $attribute_id
     * @param mixed $attribute_code
     * @param mixed $frontend_input
     * @param mixed $scope
     * @param mixed $default_value
     * @param mixed $is_unique
     * @param mixed $is_required
     * @param mixed $apply_to
     * @param mixed $is_configurable
     * @param mixed $is_searchable
     * @param mixed $is_visible_in_advanced_search
     * @param mixed $is_comparable
     * @param mixed $is_used_for_promo_rules
     * @param mixed $is_visible_on_front
     * @param mixed $used_in_product_listing
     * @param mixed $additional_fields
     * @param mixed $options
     * @param mixed $frontend_label
     */
    public function __construct($attribute_id, $attribute_code, $frontend_input, $frontend_label)
    {
        $this->attribute_id = $attribute_id;
        $this->attribute_code = $attribute_code;
        $this->frontend_input = $frontend_input;
        $this->frontend_label = $frontend_label;
    }

    /**
     * @return string
     */
    public function getAttributeId()
    {
        return $this->attribute_id;
    }

    /**
     * @param string $attribute_id
     *
     * @return $this
     */
    public function setAttributeId($attribute_id)
    {
        $this->attribute_id = $attribute_id;

        return $this;
    }

    /**
     * @return string
     */
    public function getAttributeCode()
    {
        return $this->attribute_code;
    }

    /**
     * @param string $attribute_code
     *
     * @return $this
     */
    public function setAttributeCode($attribute_code)
    {
        $this->attribute_code = $attribute_code;

        return $this;
    }

    /**
     * @return string
     */
    public function getFrontendInput()
    {
        return $this->frontend_input;
    }

    /**
     * @param string $frontend_input
     *
     * @return $this
     */
    public function setFrontendInput($frontend_input)
    {
        $this->frontend_input = $frontend_input;

        return $this;
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
     *
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
    public function getDefaultValue()
    {
        return $this->default_value;
    }

    /**
     * @param string $default_value
     *
     * @return $this
     */
    public function setDefaultValue($default_value)
    {
        $this->default_value = $default_value;

        return $this;
    }

    /**
     * @return int
     */
    public function getIsUnique()
    {
        return $this->is_unique;
    }

    /**
     * @param int $is_unique
     *
     * @return $this
     */
    public function setIsUnique($is_unique)
    {
        $this->is_unique = $is_unique;

        return $this;
    }

    /**
     * @return int
     */
    public function getIsRequired()
    {
        return $this->is_required;
    }

    /**
     * @param int $is_required
     *
     * @return $this
     */
    public function setIsRequired($is_required)
    {
        $this->is_required = $is_required;

        return $this;
    }

    /**
     * @return string[]
     */
    public function getApplyTo()
    {
        return $this->apply_to;
    }

    /**
     * @param string[] $apply_to
     *
     * @return $this
     */
    public function setApplyTo($apply_to)
    {
        $this->apply_to = $apply_to;

        return $this;
    }

    /**
     * @return int
     */
    public function getIsConfigurable()
    {
        return $this->is_configurable;
    }

    /**
     * @param int $is_configurable
     *
     * @return $this
     */
    public function setIsConfigurable($is_configurable)
    {
        $this->is_configurable = $is_configurable;

        return $this;
    }

    /**
     * @return int
     */
    public function getIsSearchable()
    {
        return $this->is_searchable;
    }

    /**
     * @param int $is_searchable
     *
     * @return $this
     */
    public function setIsSearchable($is_searchable)
    {
        $this->is_searchable = $is_searchable;

        return $this;
    }

    /**
     * @return int
     */
    public function getIsVisibleInAdvancedSearch()
    {
        return $this->is_visible_in_advanced_search;
    }

    /**
     * @param int $is_visible_in_advanced_search
     *
     * @return $this
     */
    public function setIsVisibleInAdvancedSearch($is_visible_in_advanced_search)
    {
        $this->is_visible_in_advanced_search = $is_visible_in_advanced_search;

        return $this;
    }

    /**
     * @return int
     */
    public function getIsComparable()
    {
        return $this->is_comparable;
    }

    /**
     * @param int $is_comparable
     *
     * @return $this
     */
    public function setIsComparable($is_comparable)
    {
        $this->is_comparable = $is_comparable;

        return $this;
    }

    /**
     * @return int
     */
    public function getIsUsedForPromoRules()
    {
        return $this->is_used_for_promo_rules;
    }

    /**
     * @param int $is_used_for_promo_rules
     *
     * @return $this
     */
    public function setIsUsedForPromoRules($is_used_for_promo_rules)
    {
        $this->is_used_for_promo_rules = $is_used_for_promo_rules;

        return $this;
    }

    /**
     * @return int
     */
    public function getIsVisibleOnFront()
    {
        return $this->is_visible_on_front;
    }

    /**
     * @param int $is_visible_on_front
     *
     * @return $this
     */
    public function setIsVisibleOnFront($is_visible_on_front)
    {
        $this->is_visible_on_front = $is_visible_on_front;

        return $this;
    }

    /**
     * @return int
     */
    public function getUsedInProductListing()
    {
        return $this->used_in_product_listing;
    }

    /**
     * @param int $used_in_product_listing
     *
     * @return $this
     */
    public function setUsedIProductListing($used_in_product_listing)
    {
        $this->used_in_product_listing = $used_in_product_listing;

        return $this;
    }

    /**
     * @return array
     */
    public function getAdditionalFields()
    {
        return $this->additional_fields;
    }

    /**
     * @param array $additional_fields
     *
     * @return $this
     */
    public function setAdditionalFields($additional_fields)
    {
        $this->additional_fields = $additional_fields;

        return $this;
    }

    /**
     * @return CatalogAttributeOptionEntity[]
     */
    public function getOptions()
    {
        return $this->options;
    }

    /**
     * @param CatalogAttributeOptionEntity[] $options
     *
     * @return $this
     */
    public function setOptions($options)
    {
        $this->options = $options;

        return $this;
    }

    /**
     * @return CatalogProductAttributeFrontendLabelEntity[]
     */
    public function getFrontendLabel()
    {
        return $this->frontend_label;
    }

    /**
     * @param CatalogProductAttributeFrontendLabelEntity[] $frontend_label
     *
     * @return $this
     */
    public function setFrontendLabel($frontend_label)
    {
        $this->frontend_label = $frontend_label;

        return $this;
    }
}
