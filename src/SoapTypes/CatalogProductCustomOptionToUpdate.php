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

class CatalogProductCustomOptionToUpdate
{
    /**
     * @var string
     */
    protected $title = null;

    /**
     * @var string
     */
    protected $type = null;

    /**
     * @var string
     */
    protected $sort_order = null;

    /**
     * @var int
     */
    protected $is_require = 0;

    /**
     * @var catalogProductCustomOptionAdditionalFieldsArray
     */
    protected $additional_fields = null;

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
    public function getType()
    {
        return $this->type;
    }

    /**
     * @param string $type
     *
     * @return $this
     */
    public function setType($type)
    {
        $this->type = $type;

        return $this;
    }

    /**
     * @return string
     */
    public function getSortOrder()
    {
        return $this->sort_order;
    }

    /**
     * @param string $sort_order
     *
     * @return $this
     */
    public function setSortOrder($sort_order)
    {
        $this->sort_order = $sort_order;

        return $this;
    }

    /**
     * @return int
     */
    public function getIsRequire()
    {
        return $this->is_require;
    }

    /**
     * @param int $is_require
     *
     * @return $this
     */
    public function setIsRequire($is_require)
    {
        $this->is_require = $is_require;

        return $this;
    }

    /**
     * @return catalogProductCustomOptionAdditionalFieldsArray
     */
    public function getAdditionalFields()
    {
        return $this->additional_fields;
    }

    /**
     * @param catalogProductCustomOptionAdditionalFieldsArray $additional_fields
     *
     * @return $this
     */
    public function setAdditionalFields(array $additional_fields)
    {
        $this->additional_fields = $additional_fields;

        return $this;
    }
}
