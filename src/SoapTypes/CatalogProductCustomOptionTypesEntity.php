<?php

namespace Etrias\MagentoConnector\SoapTypes;

class CatalogProductCustomOptionTypesEntity
{

    /**
     * @var string
     */
    protected $label = null;

    /**
     * @var string
     */
    protected $value = null;

    /**
     * Constructor
     *
     * @var string $label
     * @var string $value
     */
    public function __construct($label, $value)
    {
        $this->label = $label;
        $this->value = $value;
    }

    /**
     * @return string
     */
    public function getLabel()
    {
        return $this->label;
    }

    /**
     * @param string $label
     * @return $this
     */
    public function setLabel($label)
    {
        $this->label = $label;
        return $this;
    }

    /**
     * @return string
     */
    public function getValue()
    {
        return $this->value;
    }

    /**
     * @param string $value
     * @return $this
     */
    public function setValue($value)
    {
        $this->value = $value;
        return $this;
    }


}

