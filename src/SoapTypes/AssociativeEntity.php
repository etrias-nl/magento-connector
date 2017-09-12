<?php

namespace Etrias\MagentoConnector\SoapTypes;

class AssociativeEntity
{

    /**
     * @var string
     */
    protected $key = null;

    /**
     * @var string
     */
    protected $value = null;

    /**
     * Constructor
     *
     * @var string $key
     * @var string $value
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

