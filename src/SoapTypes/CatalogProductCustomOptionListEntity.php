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

class CatalogProductCustomOptionListEntity
{
    /**
     * @var string
     */
    protected $option_id = null;

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
    protected $is_require = null;

    /**
     * Constructor.
     *
     * @var string
     * @var string $title
     * @var string $type
     * @var string $sort_order
     * @var int    $is_require
     *
     * @param mixed $option_id
     * @param mixed $title
     * @param mixed $type
     * @param mixed $sort_order
     * @param mixed $is_require
     */
    public function __construct($option_id, $title, $type, $sort_order, $is_require)
    {
        $this->option_id = $option_id;
        $this->title = $title;
        $this->type = $type;
        $this->sort_order = $sort_order;
        $this->is_require = $is_require;
    }

    /**
     * @return int
     */
    public function getOptionId()
    {
        return (int) $this->option_id;
    }

    /**
     * @param int $option_id
     *
     * @return $this
     */
    public function setOptionId(int $option_id)
    {
        $this->option_id = $option_id;

        return $this;
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
}
