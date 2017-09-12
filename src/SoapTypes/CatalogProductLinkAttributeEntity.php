<?php

namespace Etrias\MagentoConnector\SoapTypes;

class CatalogProductLinkAttributeEntity
{

    /**
     * @var string
     */
    protected $code = null;

    /**
     * @var string
     */
    protected $type = null;

    /**
     * Constructor
     *
     * @var string $code
     * @var string $type
     */
    public function __construct($code, $type)
    {
        $this->code = $code;
        $this->type = $type;
    }

    /**
     * @return string
     */
    public function getCode()
    {
        return $this->code;
    }

    /**
     * @param string $code
     * @return $this
     */
    public function setCode($code)
    {
        $this->code = $code;
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


}

