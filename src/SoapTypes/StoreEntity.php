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

class StoreEntity
{
    /**
     * @var int
     */
    protected $store_id = null;

    /**
     * @var string
     */
    protected $code = null;

    /**
     * @var int
     */
    protected $website_id = null;

    /**
     * @var int
     */
    protected $group_id = null;

    /**
     * @var string
     */
    protected $name = null;

    /**
     * @var int
     */
    protected $sort_order = null;

    /**
     * @var int
     */
    protected $is_active = null;

    /**
     * Constructor.
     *
     * @var int
     * @var string $code
     * @var int    $website_id
     * @var int    $group_id
     * @var string $name
     * @var int    $sort_order
     * @var int    $is_active
     *
     * @param mixed $store_id
     * @param mixed $code
     * @param mixed $website_id
     * @param mixed $group_id
     * @param mixed $name
     * @param mixed $sort_order
     * @param mixed $is_active
     */
    public function __construct($store_id, $code, $website_id, $group_id, $name, $sort_order, $is_active)
    {
        $this->store_id = $store_id;
        $this->code = $code;
        $this->website_id = $website_id;
        $this->group_id = $group_id;
        $this->name = $name;
        $this->sort_order = $sort_order;
        $this->is_active = $is_active;
    }

    /**
     * @return int
     */
    public function getStore_id()
    {
        return $this->store_id;
    }

    /**
     * @param int $store_id
     *
     * @return $this
     */
    public function setStore_id($store_id)
    {
        $this->store_id = $store_id;

        return $this;
    }

    /**
     * @return string
     */
    public function getCode()
    {
        return $this->code;
    }

    /**
     * @param string $code
     *
     * @return $this
     */
    public function setCode($code)
    {
        $this->code = $code;

        return $this;
    }

    /**
     * @return int
     */
    public function getWebsite_id()
    {
        return $this->website_id;
    }

    /**
     * @param int $website_id
     *
     * @return $this
     */
    public function setWebsite_id($website_id)
    {
        $this->website_id = $website_id;

        return $this;
    }

    /**
     * @return int
     */
    public function getGroup_id()
    {
        return $this->group_id;
    }

    /**
     * @param int $group_id
     *
     * @return $this
     */
    public function setGroup_id($group_id)
    {
        $this->group_id = $group_id;

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
    public function getSort_order()
    {
        return $this->sort_order;
    }

    /**
     * @param int $sort_order
     *
     * @return $this
     */
    public function setSort_order($sort_order)
    {
        $this->sort_order = $sort_order;

        return $this;
    }

    /**
     * @return int
     */
    public function getIs_active()
    {
        return $this->is_active;
    }

    /**
     * @param int $is_active
     *
     * @return $this
     */
    public function setIs_active($is_active)
    {
        $this->is_active = $is_active;

        return $this;
    }
}
