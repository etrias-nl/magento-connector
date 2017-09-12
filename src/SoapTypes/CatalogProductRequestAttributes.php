<?php

namespace Etrias\MagentoConnector\SoapTypes;

class CatalogProductRequestAttributes
{

    /**
     * @var ArrayOfString
     */
    protected $attributes = null;

    /**
     * @var ArrayOfString
     */
    protected $additional_attributes = null;

    /**
     * Constructor
     *
     * @var ArrayOfString $attributes
     * @var ArrayOfString $additional_attributes
     */
    public function __construct($attributes, $additional_attributes)
    {
        $this->attributes = $attributes;
        $this->additional_attributes = $additional_attributes;
    }

    /**
     * @return ArrayOfString
     */
    public function getAttributes()
    {
        return $this->attributes;
    }

    /**
     * @param ArrayOfString $attributes
     * @return $this
     */
    public function setAttributes($attributes)
    {
        $this->attributes = $attributes;
        return $this;
    }

    /**
     * @return ArrayOfString
     */
    public function getAdditional_attributes()
    {
        return $this->additional_attributes;
    }

    /**
     * @param ArrayOfString $additional_attributes
     * @return $this
     */
    public function setAdditional_attributes($additional_attributes)
    {
        $this->additional_attributes = $additional_attributes;
        return $this;
    }


}

