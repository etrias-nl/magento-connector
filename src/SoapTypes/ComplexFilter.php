<?php

namespace Etrias\MagentoConnector\SoapTypes;

class ComplexFilter
{

    /**
     * @var string
     */
    protected $key = null;

    /**
     * @var associativeEntity
     */
    protected $value = null;

    /**
     * Constructor
     *
     * @var string $key
     * @var associativeEntity $value
     */
    public function __construct($key, $value)
    {
        $this->key = $key;
        $this->value = $value;
    }

    /**
     * @return string
     */
    public function getKey()
    {
        return $this->key;
    }

    /**
     * @param string $key
     * @return $this
     */
    public function setKey($key)
    {
        $this->key = $key;
        return $this;
    }

    /**
     * @return associativeEntity
     */
    public function getValue()
    {
        return $this->value;
    }

    /**
     * @param associativeEntity $value
     * @return $this
     */
    public function setValue($value)
    {
        $this->value = $value;
        return $this;
    }


}

