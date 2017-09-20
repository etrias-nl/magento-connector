<?php

declare(strict_types = 1);

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
     * @var string[]
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
     * Constructor.
     *
     * @var catalogProductImageFileEntity
     * @var string                        $label
     * @var string                        $position
     * @var string[]                      $types
     * @var string                        $exclude
     * @var string                        $remove
     *
     * @param CatalogProductImageFileEntity $file
     */
    public function __construct(CatalogProductImageFileEntity $file)
    {
        $this->file = $file;
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
    public function getRemove()
    {
        return $this->remove;
    }

    /**
     * @param string $remove
     *
     * @return $this
     */
    public function setRemove($remove)
    {
        $this->remove = $remove;

        return $this;
    }
}
