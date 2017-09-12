<?php

namespace Etrias\MagentoConnector\SoapTypes;

class CatalogProductTypeEntity
{

    /**
     * @var string
     */
    protected $type = null;

    /**
     * @var string
     */
    protected $label = null;

    /**
     * Constructor
     *
     * @var string $type
     * @var string $label
     */
    public function __construct($type, $label)
    {
        $this->type = $type;
        $this->label = $label;
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


}

