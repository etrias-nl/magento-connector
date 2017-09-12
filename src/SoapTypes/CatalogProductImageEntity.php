<?php

namespace Etrias\MagentoConnector\SoapTypes;

class CatalogProductImageEntity
{

    /**
     * @var string
     */
    protected $file = null;

    /**
     * @var string
     */
    protected $label = null;

    /**
     * @var string
     */
    protected $position = null;

    /**
     * @var string
     */
    protected $exclude = null;

    /**
     * @var string
     */
    protected $url = null;

    /**
     * @var ArrayOfString
     */
    protected $types = null;

    /**
     * Constructor
     *
     * @var string $file
     * @var string $label
     * @var string $position
     * @var string $exclude
     * @var string $url
     * @var ArrayOfString $types
     */
    public function __construct($file, $label, $position, $exclude, $url, $types)
    {
        $this->file = $file;
        $this->label = $label;
        $this->position = $position;
        $this->exclude = $exclude;
        $this->url = $url;
        $this->types = $types;
    }

    /**
     * @return string
     */
    public function getFile()
    {
        return $this->file;
    }

    /**
     * @param string $file
     * @return $this
     */
    public function setFile($file)
    {
        $this->file = $file;
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

    /**
     * @return string
     */
    public function getPosition()
    {
        return $this->position;
    }

    /**
     * @param string $position
     * @return $this
     */
    public function setPosition($position)
    {
        $this->position = $position;
        return $this;
    }

    /**
     * @return string
     */
    public function getExclude()
    {
        return $this->exclude;
    }

    /**
     * @param string $exclude
     * @return $this
     */
    public function setExclude($exclude)
    {
        $this->exclude = $exclude;
        return $this;
    }

    /**
     * @return string
     */
    public function getUrl()
    {
        return $this->url;
    }

    /**
     * @param string $url
     * @return $this
     */
    public function setUrl($url)
    {
        $this->url = $url;
        return $this;
    }

    /**
     * @return ArrayOfString
     */
    public function getTypes()
    {
        return $this->types;
    }

    /**
     * @param ArrayOfString $types
     * @return $this
     */
    public function setTypes($types)
    {
        $this->types = $types;
        return $this;
    }


}

