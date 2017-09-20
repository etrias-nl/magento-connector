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

class DirectoryRegionEntity
{
    /**
     * @var string
     */
    protected $region_id = null;

    /**
     * @var string
     */
    protected $code = null;

    /**
     * @var string
     */
    protected $name = null;

    /**
     * Constructor.
     *
     * @var string
     * @var string $code
     * @var string $name
     *
     * @param mixed $region_id
     * @param mixed $code
     * @param mixed $name
     */
    public function __construct($region_id, $code, $name)
    {
        $this->region_id = $region_id;
        $this->code = $code;
        $this->name = $name;
    }

    /**
     * @return string
     */
    public function getRegion_id()
    {
        return $this->region_id;
    }

    /**
     * @param string $region_id
     *
     * @return $this
     */
    public function setRegion_id($region_id)
    {
        $this->region_id = $region_id;

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
}
