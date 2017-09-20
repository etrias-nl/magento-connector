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

class CatalogProductAdditionalAttributesEntity
{
    /**
     * @var associativeMultiArray
     */
    protected $multi_data = null;

    /**
     * @var associativeArray
     */
    protected $single_data = null;

    /**
     * Constructor.
     *
     * @var associativeMultiArray
     * @var associativeArray      $single_data
     *
     * @param mixed $multi_data
     * @param mixed $single_data
     */
    public function __construct($multi_data, $single_data)
    {
        $this->multi_data = $multi_data;
        $this->single_data = $single_data;
    }

    /**
     * @return associativeMultiArray
     */
    public function getMulti_data()
    {
        return $this->multi_data;
    }

    /**
     * @param associativeMultiArray $multi_data
     *
     * @return $this
     */
    public function setMulti_data($multi_data)
    {
        $this->multi_data = $multi_data;

        return $this;
    }

    /**
     * @return associativeArray
     */
    public function getSingle_data()
    {
        return $this->single_data;
    }

    /**
     * @param associativeArray $single_data
     *
     * @return $this
     */
    public function setSingle_data($single_data)
    {
        $this->single_data = $single_data;

        return $this;
    }
}
