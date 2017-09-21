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
     * @var string[]
     */
    protected $aliases = null;

    /**
     * @var ApiMethodEntity[]
     */
    protected $methods = null;

    /**
     * Constructor.
     *
     * @var string
     * @var string            $name
     * @var string[]          $aliases
     * @var ApiMethodEntity[] $methods
     *
     * @param mixed $title
     * @param mixed $name
     * @param mixed $aliases
     * @param mixed $methods
     */
    public function __construct($title, $name, array $aliases, array $methods)
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
    public function setAliases(array $aliases)
    {
        $this->aliases = $aliases;

        return $this;
    }

    /**
     * @return ApiMethodEntity[]
     */
    public function getMethods()
    {
        return $this->methods;
    }

    /**
     * @param ApiMethodEntity[] $methods
     *
     * @return $this
     */
    public function setMethods(array $methods)
    {
        $this->methods = $methods;

        return $this;
    }
}
