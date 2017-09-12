<?php

namespace Etrias\MagentoConnector\SoapTypes;

class CatalogProductAttributeFrontendLabelEntity
{

    /**
     * @var string
     */
    protected $store_id = null;

    /**
     * @var string
     */
    protected $label = null;

    /**
     * Constructor
     *
     * @var string $store_id
     * @var string $label
     */
    public function __construct($store_id, $label)
    {
        $this->store_id = $store_id;
        $this->label = $label;
    }

    /**
     * @return string
     */
    public function getStore_id()
    {
        return $this->store_id;
    }

    /**
     * @param string $store_id
     * @return $this
     */
    public function setStore_id($store_id)
    {
        $this->store_id = $store_id;
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

