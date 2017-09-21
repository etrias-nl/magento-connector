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
     * @var array
     */
    protected $multi_data = null;

    /**
     * @var array
     */
    protected $single_data = null;

    /**
     * @return array
     */
    public function getMultiData()
    {
        return $this->multi_data;
    }

    /**
     * @param array $multi_data
     *
     * @return $this
     */
    public function setMultiData(array $multi_data)
    {
        $this->multi_data = $multi_data;

        return $this;
    }

    /**
     * @return array
     */
    public function getSingleData()
    {
        return $this->single_data;
    }

    /**
     * @param array $single_data
     *
     * @return $this
     */
    public function setSingleData(array $single_data)
    {
        $this->single_data = $single_data;

        return $this;
    }
}
