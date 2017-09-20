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

class CatalogProductCreateEntity
{
    /**
     * @var string[]
     */
    protected $categories = [];

    /**
     * @var string[]
     */
    protected $websites = [];

    /**
     * @var string
     */
    protected $name = null;

    /**
     * @var string
     */
    protected $description = null;

    /**
     * @var string
     */
    protected $short_description = null;

    /**
     * @var string
     */
    protected $weight = null;

    /**
     * @var string
     */
    protected $status = null;

    /**
     * @var string
     */
    protected $url_key = null;

    /**
     * @var string
     */
    protected $url_path = null;

    /**
     * @var string
     */
    protected $visibility = null;

    /**
     * @var string[]
     */
    protected $category_ids = [];

    /**
     * @var string[]
     */
    protected $website_ids = [];

    /**
     * @var string
     */
    protected $has_options = null;

    /**
     * @var string
     */
    protected $gift_message_available = null;

    /**
     * @var string
     */
    protected $price = null;

    /**
     * @var string
     */
    protected $special_price = null;

    /**
     * @var string
     */
    protected $special_from_date = null;

    /**
     * @var string
     */
    protected $special_to_date = null;

    /**
     * @var string
     */
    protected $tax_class_id = null;

    /**
     * @var CatalogProductTierPriceEntity[]
     */
    protected $tier_price = null;

    /**
     * @var string
     */
    protected $meta_title = null;

    /**
     * @var string
     */
    protected $meta_keyword = null;

    /**
     * @var string
     */
    protected $meta_description = null;

    /**
     * @var string
     */
    protected $custom_design = null;

    /**
     * @var string
     */
    protected $custom_layout_update = null;

    /**
     * @var string
     */
    protected $options_container = null;

    /**
     * @var catalogProductAdditionalAttributesEntity
     */
    protected $additional_attributes = null;

    /**
     * @var DateTimeEntity
     */
    protected $stock_data = null;

    /**
     * @var string[]
     */
    protected $associated_skus = [];

    /**
     * @var string[]
     */
    protected $configurable_attributes = [];

    /**
     * @var array
     */
    protected $price_changes = null;

    /**
     * @return string[]
     */
    public function getCategories(): array
    {
        return $this->categories;
    }

    /**
     * @param string[] $categories
     *
     * @return $this
     */
    public function setCategories(array $categories)
    {
        $this->categories = $categories;

        return $this;
    }

    /**
     * @return string[]
     */
    public function getWebsites(): array
    {
        return $this->websites;
    }

    /**
     * @param string[] $websites
     *
     * @return $this
     */
    public function setWebsites(array $websites)
    {
        $this->websites = $websites;

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
    public function getShort_description()
    {
        return $this->short_description;
    }

    /**
     * @param string $short_description
     *
     * @return $this
     */
    public function setShort_description($short_description)
    {
        $this->short_description = $short_description;

        return $this;
    }

    /**
     * @return string
     */
    public function getWeight()
    {
        return $this->weight;
    }

    /**
     * @param string $weight
     *
     * @return $this
     */
    public function setWeight($weight)
    {
        $this->weight = $weight;

        return $this;
    }

    /**
     * @return string
     */
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * @param string $status
     *
     * @return $this
     */
    public function setStatus($status)
    {
        $this->status = $status;

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
     * @return string
     */
    public function getUrl_path()
    {
        return $this->url_path;
    }

    /**
     * @param string $url_path
     *
     * @return $this
     */
    public function setUrl_path($url_path)
    {
        $this->url_path = $url_path;

        return $this;
    }

    /**
     * @return string
     */
    public function getVisibility()
    {
        return $this->visibility;
    }

    /**
     * @param string $visibility
     *
     * @return $this
     */
    public function setVisibility($visibility)
    {
        $this->visibility = $visibility;

        return $this;
    }

    /**
     * @return string[]
     */
    public function getCategory_ids()
    {
        return $this->category_ids;
    }

    /**
     * @param string[] $category_ids
     *
     * @return $this
     */
    public function setCategory_ids(array $category_ids)
    {
        $this->category_ids = $category_ids;

        return $this;
    }

    /**
     * @return string[]
     */
    public function getWebsite_ids()
    {
        return $this->website_ids;
    }

    /**
     * @param string[] $website_ids
     *
     * @return $this
     */
    public function setWebsite_ids(array $website_ids)
    {
        $this->website_ids = $website_ids;

        return $this;
    }

    /**
     * @return string
     */
    public function getHas_options()
    {
        return $this->has_options;
    }

    /**
     * @param string $has_options
     *
     * @return $this
     */
    public function setHas_options($has_options)
    {
        $this->has_options = $has_options;

        return $this;
    }

    /**
     * @return string
     */
    public function getGift_message_available()
    {
        return $this->gift_message_available;
    }

    /**
     * @param string $gift_message_available
     *
     * @return $this
     */
    public function setGift_message_available($gift_message_available)
    {
        $this->gift_message_available = $gift_message_available;

        return $this;
    }

    /**
     * @return string
     */
    public function getPrice()
    {
        return $this->price;
    }

    /**
     * @param string $price
     *
     * @return $this
     */
    public function setPrice($price)
    {
        $this->price = $price;

        return $this;
    }

    /**
     * @return string
     */
    public function getSpecial_price()
    {
        return $this->special_price;
    }

    /**
     * @param string $special_price
     *
     * @return $this
     */
    public function setSpecial_price($special_price)
    {
        $this->special_price = $special_price;

        return $this;
    }

    /**
     * @return string
     */
    public function getSpecial_from_date()
    {
        return $this->special_from_date;
    }

    /**
     * @param string $special_from_date
     *
     * @return $this
     */
    public function setSpecial_from_date($special_from_date)
    {
        $this->special_from_date = $special_from_date;

        return $this;
    }

    /**
     * @return string
     */
    public function getSpecial_to_date()
    {
        return $this->special_to_date;
    }

    /**
     * @param string $special_to_date
     *
     * @return $this
     */
    public function setSpecial_to_date($special_to_date)
    {
        $this->special_to_date = $special_to_date;

        return $this;
    }

    /**
     * @return string
     */
    public function getTax_class_id()
    {
        return $this->tax_class_id;
    }

    /**
     * @param string $tax_class_id
     *
     * @return $this
     */
    public function setTax_class_id($tax_class_id)
    {
        $this->tax_class_id = $tax_class_id;

        return $this;
    }

    /**
     * @return catalogProductTierPriceEntity[]
     */
    public function getTier_price()
    {
        return $this->tier_price;
    }

    /**
     * @param catalogProductTierPriceEntity[] $tier_price
     *
     * @return $this
     */
    public function setTier_price(array $tier_price)
    {
        $this->tier_price = $tier_price;

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
    public function getMeta_keyword()
    {
        return $this->meta_keyword;
    }

    /**
     * @param string $meta_keyword
     *
     * @return $this
     */
    public function setMeta_keyword($meta_keyword)
    {
        $this->meta_keyword = $meta_keyword;

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
    public function getOptions_container()
    {
        return $this->options_container;
    }

    /**
     * @param string $options_container
     *
     * @return $this
     */
    public function setOptions_container($options_container)
    {
        $this->options_container = $options_container;

        return $this;
    }

    /**
     * @return catalogProductAdditionalAttributesEntity
     */
    public function getAdditional_attributes()
    {
        return $this->additional_attributes;
    }

    /**
     * @param catalogProductAdditionalAttributesEntity $additional_attributes
     *
     * @return $this
     */
    public function setAdditional_attributes($additional_attributes)
    {
        $this->additional_attributes = $additional_attributes;

        return $this;
    }

    /**
     * @return catalogInventoryStockItemUp\DateTimeEntity
     */
    public function getStock_data()
    {
        return $this->stock_data;
    }

    /**
     * @param catalogInventoryStockItemUp\DateTimeEntity $stock_data
     *
     * @return $this
     */
    public function setStock_data($stock_data)
    {
        $this->stock_data = $stock_data;

        return $this;
    }

    /**
     * @return string[]
     */
    public function getAssociated_skus()
    {
        return $this->associated_skus;
    }

    /**
     * @param string[] $associated_skus
     *
     * @return $this
     */
    public function setAssociated_skus(array $associated_skus)
    {
        $this->associated_skus = $associated_skus;

        return $this;
    }

    /**
     * @return string[]
     */
    public function getConfigurable_attributes()
    {
        return $this->configurable_attributes;
    }

    /**
     * @param string[] $configurable_attributes
     *
     * @return $this
     */
    public function setConfigurable_attributes(array $configurable_attributes)
    {
        $this->configurable_attributes = $configurable_attributes;

        return $this;
    }

    /**
     * @return array
     */
    public function getPrice_changes()
    {
        return $this->price_changes;
    }

    /**
     * @param array $price_changes
     *
     * @return $this
     */
    public function setPrice_changes(array $price_changes)
    {
        $this->price_changes = $price_changes;

        return $this;
    }
}
