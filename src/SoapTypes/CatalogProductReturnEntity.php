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

class CatalogProductReturnEntity
{
    /**
     * @var string
     */
    protected $product_id = null;

    /**
     * @var string
     */
    protected $sku = null;

    /**
     * @var string
     */
    protected $set = null;

    /**
     * @var string
     */
    protected $type = null;

    /**
     * @var ArrayOfString
     */
    protected $categories = null;

    /**
     * @var ArrayOfString
     */
    protected $websites = null;

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
    protected $type_id = null;

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
     * @var catalogProductTierPriceEntity[]
     */
    protected $tier_price = [];

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
     * @var array
     */
    protected $additional_attributes = [];

    /**
     * @var string
     */
    protected $enable_googlecheckout = null;

    /**
     * Constructor.
     *
     * @var string
     * @var string                             $sku
     * @var string                             $set
     * @var string                             $type
     * @var string[]                      $categories
     * @var string[]                      $websites
     * @var string                             $created_at
     * @var string                             $updated_at
     * @var string                             $type_id
     * @var string                             $name
     * @var string                             $description
     * @var string                             $short_description
     * @var string                             $weight
     * @var string                             $status
     * @var string                             $url_key
     * @var string                             $url_path
     * @var string                             $visibility
     * @var string[]                      $category_ids
     * @var string[]                      $website_ids
     * @var string                             $has_options
     * @var string                             $gift_message_available
     * @var string                             $price
     * @var string                             $special_price
     * @var string                             $special_from_date
     * @var string                             $special_to_date
     * @var string                             $tax_class_id
     * @var catalogProductTierPriceEntity[]    $tier_price
     * @var string                             $meta_title
     * @var string                             $meta_keyword
     * @var string                             $meta_description
     * @var string                             $custom_design
     * @var string                             $custom_layout_update
     * @var string                             $options_container
     * @var array                   $additional_attributes
     * @var string                             $enable_googlecheckout
     *
     * @param mixed $product_id
     * @param mixed $sku
     * @param mixed $set
     * @param mixed $type
     * @param mixed $categories
     * @param mixed $websites
     * @param mixed $created_at
     * @param mixed $updated_at
     * @param mixed $type_id
     * @param mixed $name
     * @param mixed $description
     * @param mixed $short_description
     * @param mixed $weight
     * @param mixed $status
     * @param mixed $url_key
     * @param mixed $url_path
     * @param mixed $visibility
     * @param mixed $category_ids
     * @param mixed $website_ids
     * @param mixed $has_options
     * @param mixed $gift_message_available
     * @param mixed $price
     * @param mixed $special_price
     * @param mixed $special_from_date
     * @param mixed $special_to_date
     * @param mixed $tax_class_id
     * @param mixed $tier_price
     * @param mixed $meta_title
     * @param mixed $meta_keyword
     * @param mixed $meta_description
     * @param mixed $custom_design
     * @param mixed $custom_layout_update
     * @param mixed $options_container
     * @param mixed $additional_attributes
     * @param mixed $enable_googlecheckout
     */
    public function __construct($product_id, $sku, $set, $type, $categories, $websites, $created_at, $updated_at, $type_id, $name, $description, $short_description, $weight, $status, $url_key, $url_path, $visibility, $category_ids, $website_ids, $has_options, $gift_message_available, $price, $special_price, $special_from_date, $special_to_date, $tax_class_id, $tier_price, $meta_title, $meta_keyword, $meta_description, $custom_design, $custom_layout_update, $options_container, $additional_attributes, $enable_googlecheckout)
    {
        $this->product_id = $product_id;
        $this->sku = $sku;
        $this->set = $set;
        $this->type = $type;
        $this->categories = $categories;
        $this->websites = $websites;
        $this->created_at = $created_at;
        $this->updated_at = $updated_at;
        $this->type_id = $type_id;
        $this->name = $name;
        $this->description = $description;
        $this->short_description = $short_description;
        $this->weight = $weight;
        $this->status = $status;
        $this->url_key = $url_key;
        $this->url_path = $url_path;
        $this->visibility = $visibility;
        $this->category_ids = $category_ids;
        $this->website_ids = $website_ids;
        $this->has_options = $has_options;
        $this->gift_message_available = $gift_message_available;
        $this->price = $price;
        $this->special_price = $special_price;
        $this->special_from_date = $special_from_date;
        $this->special_to_date = $special_to_date;
        $this->tax_class_id = $tax_class_id;
        $this->tier_price = $tier_price;
        $this->meta_title = $meta_title;
        $this->meta_keyword = $meta_keyword;
        $this->meta_description = $meta_description;
        $this->custom_design = $custom_design;
        $this->custom_layout_update = $custom_layout_update;
        $this->options_container = $options_container;
        $this->additional_attributes = $additional_attributes;
        $this->enable_googlecheckout = $enable_googlecheckout;
    }

    /**
     * @return string
     */
    public function getProduct_id()
    {
        return $this->product_id;
    }

    /**
     * @param string $product_id
     *
     * @return $this
     */
    public function setProduct_id($product_id)
    {
        $this->product_id = $product_id;

        return $this;
    }

    /**
     * @return string
     */
    public function getSku()
    {
        return $this->sku;
    }

    /**
     * @param string $sku
     *
     * @return $this
     */
    public function setSku($sku)
    {
        $this->sku = $sku;

        return $this;
    }

    /**
     * @return string
     */
    public function getSet()
    {
        return $this->set;
    }

    /**
     * @param string $set
     *
     * @return $this
     */
    public function setSet($set)
    {
        $this->set = $set;

        return $this;
    }

    /**
     * @return string
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * @param string $type
     *
     * @return $this
     */
    public function setType($type)
    {
        $this->type = $type;

        return $this;
    }

    /**
     * @return ArrayOfString
     */
    public function getCategories()
    {
        return $this->categories;
    }

    /**
     * @param ArrayOfString $categories
     *
     * @return $this
     */
    public function setCategories($categories)
    {
        $this->categories = $categories;

        return $this;
    }

    /**
     * @return string[]
     */
    public function getWebsites()
    {
        return $this->websites;
    }

    /**
     * @param string[] $websites
     *
     * @return $this
     */
    public function setWebsites($websites)
    {
        $this->websites = $websites;

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
    public function getType_id()
    {
        return $this->type_id;
    }

    /**
     * @param string $type_id
     *
     * @return $this
     */
    public function setType_id($type_id)
    {
        $this->type_id = $type_id;

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
    public function setCategory_ids($category_ids)
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
    public function setWebsite_ids($website_ids)
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
    public function setTier_price($tier_price)
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
     * @return array
     */
    public function getAdditional_attributes()
    {
        return $this->additional_attributes;
    }

    /**
     * @param array $additional_attributes
     *
     * @return $this
     */
    public function setAdditional_attributes($additional_attributes)
    {
        $this->additional_attributes = $additional_attributes;

        return $this;
    }

    /**
     * @return string
     */
    public function getEnable_googlecheckout()
    {
        return $this->enable_googlecheckout;
    }

    /**
     * @param string $enable_googlecheckout
     *
     * @return $this
     */
    public function setEnable_googlecheckout($enable_googlecheckout)
    {
        $this->enable_googlecheckout = $enable_googlecheckout;

        return $this;
    }
}
