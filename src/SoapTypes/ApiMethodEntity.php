<?php

namespace Etrias\MagentoConnector\SoapTypes;

class ApiMethodEntity
{

    /**
     * @var string
     */
    protected $title = null;

    /**
     * @var string
     */
    protected $path = null;

    /**
     * @var string
     */
    protected $name = null;

    /**
     * @var ArrayOfString
     */
    protected $aliases = null;

    /**
     * Constructor
     *
     * @var string $title
     * @var string $path
     * @var string $name
     * @var ArrayOfString $aliases
     */
    public function __construct($title, $path, $name, $aliases)
    {
        $this->title = $title;
        $this->path = $path;
        $this->name = $name;
        $this->aliases = $aliases;
    }

    /**
     * @return string
     */
    public function getTitle()
    {
        return $this->title;
    }

    /**
     * @param string $title
     * @return $this
     */
    public function setTitle($title)
    {
        $this->title = $title;
        return $this;
    }

    /**
     * @return string
     */
    public function getPath()
    {
        return $this->path;
    }

    /**
     * @param string $path
     * @return $this
     */
    public function setPath($path)
    {
        $this->path = $path;
        return $this;
    }

    /**
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @param string $name
     * @return $this
     */
    public function setName($name)
    {
        $this->name = $name;
        return $this;
    }

    /**
     * @return ArrayOfString
     */
    public function getAliases()
    {
        return $this->aliases;
    }

    /**
     * @param ArrayOfString $aliases
     * @return $this
     */
    public function setAliases($aliases)
    {
        $this->aliases = $aliases;
        return $this;
    }


}

