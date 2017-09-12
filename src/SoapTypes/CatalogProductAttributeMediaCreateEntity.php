<?php

namespace Etrias\MagentoConnector\SoapTypes;

class CatalogProductAttributeMediaCreateEntity
{

    /**
     * @var catalogProductImageFileEntity
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
     * @var ArrayOfString
     */
    protected $types = null;

    /**
     * @var string
     */
    protected $exclude = null;

    /**
     * @var string
     */
    protected $remove = null;

    /**
     * Constructor
     *
     * @var catalogProductImageFileEntity $file
     * @var string $label
     * @var string $position
     * @var ArrayOfString $types
     * @var string $exclude
     * @var string $remove
     */
    public function __construct($file, $label, $position, $types, $exclude, $remove)
    {
        $this->file = $file;
        $this->label = $label;
        $this->position = $position;
        $this->types = $types;
        $this->exclude = $exclude;
        $this->remove = $remove;
    }

    /**
     * @return catalogProductImageFileEntity
     */
    public function getFile()
    {
        return $this->file;
    }

    /**
     * @param catalogProductImageFileEntity $file
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
    public function getRemove()
    {
        return $this->remove;
    }

    /**
     * @param string $remove
     * @return $this
     */
    public function setRemove($remove)
    {
        $this->remove = $remove;
        return $this;
    }


}

