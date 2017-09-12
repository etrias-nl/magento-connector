<?php

namespace Etrias\MagentoConnector\SoapTypes;

class ApiEntity
{

    /**
     * @var string
     */
    protected $title = null;

    /**
     * @var string
     */
    protected $name = null;

    /**
     * @var ArrayOfString
     */
    protected $aliases = null;

    /**
     * @var ArrayOfApiMethods
     */
    protected $methods = null;

    /**
     * Constructor
     *
     * @var string $title
     * @var string $name
     * @var ArrayOfString $aliases
     * @var ArrayOfApiMethods $methods
     */
    public function __construct($title, $name, $aliases, $methods)
    {
        $this->title = $title;
        $this->name = $name;
        $this->aliases = $aliases;
        $this->methods = $methods;
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

    /**
     * @return ArrayOfApiMethods
     */
    public function getMethods()
    {
        return $this->methods;
    }

    /**
     * @param ArrayOfApiMethods $methods
     * @return $this
     */
    public function setMethods($methods)
    {
        $this->methods = $methods;
        return $this;
    }


}

