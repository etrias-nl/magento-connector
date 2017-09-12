<?php

namespace Etrias\MagentoConnector\SoapTypes;

class HexBinary
{

    /**
     * @var hexBinary
     */
    protected $_ = null;

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
     * @var hexBinary $_
     * @var ID $id
     * @var anyURI $href
     */
    public function __construct($_, $id, $href)
    {
        $this->_ = $_;
        $this->id = $id;
        $this->href = $href;
    }

    /**
     * @return hexBinary
     */
    public function get_()
    {
        return $this->_;
    }

    /**
     * @param hexBinary $_
     * @return $this
     */
    public function set_($_)
    {
        $this->_ = $_;
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
