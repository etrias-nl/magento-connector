<?php

declare(strict_types=1);

/*
 * This file is part of PHP CS Fixer.
 *
 * (c) Fabien Potencier <fabien@symfony.com>
 *     Dariusz Rumiński <dariusz.ruminski@gmail.com>
 *
 * This source file is subject to the MIT license that is bundled
 * with this source code in the file LICENSE.
 */

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
     * @var string[]
     */
    protected $types = null;

    /**
     * Constructor.
     *
     * @var string
     * @var string   $label
     * @var string   $position
     * @var string   $exclude
     * @var string   $url
     * @var string[] $types
     *
     * @param mixed $file
     * @param mixed $label
     * @param mixed $position
     * @param mixed $exclude
     * @param mixed $url
     * @param mixed $types
     */
    public function __construct($file, $label, $position, $exclude, $url, array $types)
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
     *
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
     *
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
     *
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
     *
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
     *
     * @return $this
     */
    public function setUrl($url)
    {
        $this->url = $url;

        return $this;
    }

    /**
     * @return string[]
     */
    public function getTypes()
    {
        return $this->types;
    }

    /**
     * @param string[] $types
     *
     * @return $this
     */
    public function setTypes($types)
    {
        $this->types = $types;

        return $this;
    }
}
