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

class CatalogCategoryTree
{
    /**
     * @var int
     */
    protected $category_id = null;

    /**
     * @var int
     */
    protected $parent_id = null;

    /**
     * @var string
     */
    protected $name = null;

    /**
     * @var int
     */
    protected $position = null;

    /**
     * @var int
     */
    protected $level = null;

    /**
     * @var ArrayOfCatalogCategoryEntities
     */
    protected $children = null;

    /**
     * Constructor.
     *
     * @var int
     * @var int                            $parent_id
     * @var string                         $name
     * @var int                            $position
     * @var int                            $level
     * @var ArrayOfCatalogCategoryEntities $children
     *
     * @param mixed $category_id
     * @param mixed $parent_id
     * @param mixed $name
     * @param mixed $position
     * @param mixed $level
     * @param mixed $children
     */
    public function __construct($category_id, $parent_id, $name, $position, $level, $children)
    {
        $this->category_id = $category_id;
        $this->parent_id = $parent_id;
        $this->name = $name;
        $this->position = $position;
        $this->level = $level;
        $this->children = $children;
    }

    /**
     * @return int
     */
    public function getCategory_id()
    {
        return $this->category_id;
    }

    /**
     * @param int $category_id
     *
     * @return $this
     */
    public function setCategory_id($category_id)
    {
        $this->category_id = $category_id;

        return $this;
    }

    /**
     * @return int
     */
    public function getParent_id()
    {
        return $this->parent_id;
    }

    /**
     * @param int $parent_id
     *
     * @return $this
     */
    public function setParent_id($parent_id)
    {
        $this->parent_id = $parent_id;

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
     * @return int
     */
    public function getPosition()
    {
        return $this->position;
    }

    /**
     * @param int $position
     *
     * @return $this
     */
    public function setPosition($position)
    {
        $this->position = $position;

        return $this;
    }

    /**
     * @return int
     */
    public function getLevel()
    {
        return $this->level;
    }

    /**
     * @param int $level
     *
     * @return $this
     */
    public function setLevel($level)
    {
        $this->level = $level;

        return $this;
    }

    /**
     * @return CatalogCategoryEntity[]
     */
    public function getChildren()
    {
        return $this->children;
    }

    /**
     * @param CatalogCategoryEntity[] $children
     *
     * @return $this
     */
    public function setChildren(array $children)
    {
        $this->children = $children;

        return $this;
    }
}
