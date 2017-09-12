<?php

namespace Etrias\MagentoConnector\SoapTypes;

class CatalogProductAttributeMediaTypeEntity
{

    /**
     * @var string
     */
    protected $code = null;

    /**
     * @var string
     */
    protected $scope = null;

    /**
     * Constructor
     *
     * @var string $code
     * @var string $scope
     */
    public function __construct($code, $scope)
    {
        $this->code = $code;
        $this->scope = $scope;
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
    public function getScope()
    {
        return $this->scope;
    }

    /**
     * @param string $scope
     * @return $this
     */
    public function setScope($scope)
    {
        $this->scope = $scope;
        return $this;
    }


}

