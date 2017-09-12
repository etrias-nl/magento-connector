<?php

namespace Etrias\MagentoConnector\SoapTypes;

class CatalogProductCustomOptionToAdd
{

    /**
     * @var string
     */
    protected $title = null;

    /**
     * @var string
     */
    protected $type = null;

    /**
     * @var string
     */
    protected $sort_order = null;

    /**
     * @var int
     */
    protected $is_require = null;

    /**
     * @var catalogProductCustomOptionAdditionalFieldsArray
     */
    protected $additional_fields = null;

    /**
     * Constructor
     *
     * @var string $title
     * @var string $type
     * @var string $sort_order
     * @var int $is_require
     * @var catalogProductCustomOptionAdditionalFieldsArray $additional_fields
     */
    public function __construct($title, $type, $sort_order, $is_require, $additional_fields)
    {
        $this->title = $title;
        $this->type = $type;
        $this->sort_order = $sort_order;
        $this->is_require = $is_require;
        $this->additional_fields = $additional_fields;
    }

    /**
     * @return string
     */
    public function getTitle()
    {
        return $this->title;
    }

    /**
     * @param string $title
     * @return $this
     */
    public function setTitle($title)
    {
        $this->title = $title;
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
     * @return $this
     */
    public function setType($type)
    {
        $this->type = $type;
        return $this;
    }

    /**
     * @return string
     */
    public function getSort_order()
    {
        return $this->sort_order;
    }

    /**
     * @param string $sort_order
     * @return $this
     */
    public function setSort_order($sort_order)
    {
        $this->sort_order = $sort_order;
        return $this;
    }

    /**
     * @return int
     */
    public function getIs_require()
    {
        return $this->is_require;
    }

    /**
     * @param int $is_require
     * @return $this
     */
    public function setIs_require($is_require)
    {
        $this->is_require = $is_require;
        return $this;
    }

    /**
     * @return catalogProductCustomOptionAdditionalFieldsArray
     */
    public function getAdditional_fields()
    {
        return $this->additional_fields;
    }

    /**
     * @param catalogProductCustomOptionAdditionalFieldsArray $additional_fields
     * @return $this
     */
    public function setAdditional_fields($additional_fields)
    {
        $this->additional_fields = $additional_fields;
        return $this;
    }


}

