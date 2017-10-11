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
     * @var string[]|null
     */
    protected $aliases = null;

    /**
     * Constructor.
     *
     * @var string
     * @var string   $path
     * @var string   $name
     * @var string[] $aliases
     *
     * @param mixed $title
     * @param mixed $path
     * @param mixed $name
     * @param mixed $aliases
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
     *
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
     *
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
     *
     * @return $this
     */
    public function setName($name)
    {
        $this->name = $name;

        return $this;
    }

    /**
     * @return string[]
     */
    public function getAliases()
    {
        return $this->aliases;
    }

    /**
     * @param string[] $aliases
     *
     * @return $this
     */
    public function setAliases($aliases)
    {
        $this->aliases = $aliases;

        return $this;
    }
}
