<?php

namespace Etrias\MagentoConnector\SoapTypes;

class Struct
{

    /**
     * @var <anyXML>
     */
    protected $any = null;

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
     * @var ID $id
     * @var anyURI $href
     */
    public function __construct($any, $id, $href)
    {
        $this->any = $any;
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

