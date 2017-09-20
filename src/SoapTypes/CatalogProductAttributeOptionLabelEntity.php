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

class CatalogProductAttributeOptionLabelEntity
{
    /**
     * @var string[]
     */
    protected $store_id = [];

    /**
     * @var string
     */
    protected $value = null;

    /**
     * Constructor.
     *
     * @var string[]
     * @var string   $value
     *
     * @param mixed $store_id
     * @param mixed $value
     */
    public function __construct(array $store_id, $value)
    {
        $this->store_id = $store_id;
        $this->value = $value;
    }

    /**
     * @return string[]
     */
    public function getStoreId()
    {
        return $this->store_id;
    }

    /**
     * @param string[] $store_id
     *
     * @return $this
     */
    public function setStoreId(array $store_id)
    {
        $this->store_id = $store_id;

        return $this;
    }

    /**
     * @return string
     */
    public function getValue()
    {
        return $this->value;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function setValue($value)
    {
        $this->value = $value;

        return $this;
    }
}
