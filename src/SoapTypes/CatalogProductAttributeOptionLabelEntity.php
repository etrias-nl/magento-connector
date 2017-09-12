<?php

namespace Etrias\MagentoConnector\SoapTypes;

class CatalogProductAttributeOptionLabelEntity
{

    /**
     * @var ArrayOfString
     */
    protected $store_id = null;

    /**
     * @var string
     */
    protected $value = null;

    /**
     * Constructor
     *
     * @var ArrayOfString $store_id
     * @var string $value
     */
    public function __construct($store_id, $value)
    {
        $this->store_id = $store_id;
        $this->value = $value;
    }

    /**
     * @return ArrayOfString
     */
    public function getStore_id()
    {
        return $this->store_id;
    }

    /**
     * @param ArrayOfString $store_id
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

