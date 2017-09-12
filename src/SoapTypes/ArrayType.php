<?php

namespace Etrias\MagentoConnector\SoapTypes;

class ArrayType
{

    /**
     * @var <anyXML>
     */
    protected $any = null;

    /**
     * @var string
     */
    protected $arrayType = null;

    /**
     * @var arrayCoordinate
     */
    protected $offset = null;

    /**
     * @var ID
     */
    protected $id = null;

    /**
     * @var anyURI
     */
    protected $href = null;

    /**
     * Constructor
     *
     * @var <anyXML> $any
     * @var string $arrayType
     * @var arrayCoordinate $offset
     * @var ID $id
     * @var anyURI $href
     */
    public function __construct($any, $arrayType, $offset, $id, $href)
    {
        $this->any = $any;
        $this->arrayType = $arrayType;
        $this->offset = $offset;
        $this->id = $id;
        $this->href = $href;
    }

    /**
     * @return <anyXML>
     */
    public function getAny()
    {
        return $this->any;
    }

    /**
     * @param <anyXML> $any
     * @return $this
     */
    public function setAny($any)
    {
        $this->any = $any;
        return $this;
    }

    /**
     * @return string
     */
    public function getArrayType()
    {
        return $this->arrayType;
    }

    /**
     * @param string $arrayType
     * @return $this
     */
    public function setArrayType($arrayType)
    {
        $this->arrayType = $arrayType;
        return $this;
    }

    /**
     * @return arrayCoordinate
     */
    public function getOffset()
    {
        return $this->offset;
    }

    /**
     * @param arrayCoordinate $offset
     * @return $this
     */
    public function setOffset($offset)
    {
        $this->offset = $offset;
        return $this;
    }

    /**
     * @return ID
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param ID $id
     * @return $this
     */
    public function setId($id)
    {
        $this->id = $id;
        return $this;
    }

    /**
     * @return anyURI
     */
    public function getHref()
    {
        return $this->href;
    }

    /**
     * @param anyURI $href
     * @return $this
     */
    public function setHref($href)
    {
        $this->href = $href;
        return $this;
    }


}

