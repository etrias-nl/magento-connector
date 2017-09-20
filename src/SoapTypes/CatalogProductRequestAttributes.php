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

class CatalogProductRequestAttributes
{
    /**
     * @var string[]
     */
    protected $attributes = null;

    /**
     * @var string[]
     */
    protected $additional_attributes = null;

    /**
     * Constructor.
     *
     * @var string[]
     * @var string[] $additional_attributes
     *
     * @param mixed $attributes
     * @param mixed $additional_attributes
     */
    public function __construct($attributes, $additional_attributes)
    {
        $this->attributes = $attributes;
        $this->additional_attributes = $additional_attributes;
    }

    /**
     * @return string[]
     */
    public function getAttributes()
    {
        return $this->attributes;
    }

    /**
     * @param string[] $attributes
     *
     * @return $this
     */
    public function setAttributes($attributes)
    {
        $this->attributes = $attributes;

        return $this;
    }

    /**
     * @return string[]
     */
    public function getAdditional_attributes()
    {
        return $this->additional_attributes;
    }

    /**
     * @param string[] $additional_attributes
     *
     * @return $this
     */
    public function setAdditional_attributes($additional_attributes)
    {
        $this->additional_attributes = $additional_attributes;

        return $this;
    }
}
