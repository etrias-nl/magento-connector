<?php

namespace Etrias\MagentoConnector\SoapTypes;

class CatalogProductImageFileEntity
{

    /**
     * @var string
     */
    protected $content = null;

    /**
     * @var string
     */
    protected $mime = null;

    /**
     * @var string
     */
    protected $name = null;

    /**
     * Constructor
     *
     * @var string $content
     * @var string $mime
     * @var string $name
     */
    public function __construct($content, $mime, $name)
    {
        $this->content = $content;
        $this->mime = $mime;
        $this->name = $name;
    }

    /**
     * @return string
     */
    public function getContent()
    {
        return $this->content;
    }

    /**
     * @param string $content
     * @return $this
     */
    public function setContent($content)
    {
        $this->content = $content;
        return $this;
    }

    /**
     * @return string
     */
    public function getMime()
    {
        return $this->mime;
    }

    /**
     * @param string $mime
     * @return $this
     */
    public function setMime($mime)
    {
        $this->mime = $mime;
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


}

