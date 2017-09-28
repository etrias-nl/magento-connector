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

class CatalogProductAttributeEntityToCreate
{
    const APPLY_TO_ALL = null;
    const APPLY_TO_SIMPLE = 'simple';
    const APPLY_TO_GROUPED = 'grouped';
    const APPLY_TO_CONFIGURABLE = 'configurable';
    const APPLY_TO_VIRTUAL = 'virtual';
    const APPLY_TO_BUNDLE = 'bundle';
    const APPLY_TO_DOWNLOADABLE = 'downloadable';
    const APPLY_TO_GIFTCARD = 'giftcard';

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
    protected $scope = Scope::GLOBAL;

    /**
     * @var string
     */
    protected $default_value = null;

    /**
     * @var int
     */
    protected $is_unique = false;

    /**
     * @var int
     */
    protected $is_required = false;

    /**
     * @var string[]
     */
    protected $apply_to = self::APPLY_TO_ALL;

    /**
     * @var int
     */
    protected $is_configurable = true;

    /**
     * @var int
     */
    protected $is_searchable = false;

    /**
     * @var int
     */
    protected $is_visible_in_advanced_search = false;

    /**
     * @var int
     */
    protected $is_comparable = false;

    /**
     * @var int
     */
    protected $is_used_for_promo_rules = false;

    /**
     * @var int
     */
    protected $is_visible_on_front = true;

    /**
     * @var int
     */
    protected $used_in_product_listing = false;

    /**
     * @var string[]
     */
    protected $additional_fields = null;

    /**
     * @var CatalogProductAttributeFrontendLabelEntity[]
     */
    protected $frontend_label = [];

    /**
     * Constructor.
     *
     * @var string
     * @var string                                       $frontend_input
     * @var CatalogProductAttributeFrontendLabelEntity[] $frontend_label
     *
     * @param string $attribute_code
     * @param string $frontend_input
     * @param array  $frontend_label
     */
    public function __construct(
        $attribute_code,
        $frontend_input,
        array $frontend_label
    ) {
        $this->attribute_code = $attribute_code;
        $this->frontend_input = $frontend_input;
        $this->frontend_label = $frontend_label;
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
    public function setUsedInProductListing($used_in_product_listing)
    {
        $this->used_in_product_listing = $used_in_product_listing;

        return $this;
    }

    /**
     * @return string[]
     */
    public function getAdditionalFields()
    {
        return $this->additional_fields;
    }

    /**
     * @param string[] $additional_fields
     *
     * @return $this
     */
    public function setAdditionalFields(array $additional_fields)
    {
        $this->additional_fields = $additional_fields;

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
    public function setFrontendLabel(array $frontend_label)
    {
        $this->frontend_label = $frontend_label;

        return $this;
    }
}
