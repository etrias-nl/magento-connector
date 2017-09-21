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

class CatalogProductAttributeSetEntity
{
    /**
     * @var int
     */
    protected $set_id = null;

    /**
     * @var string
     */
    protected $name = null;

    /**
     * @return int
     */
    public function getSetId()
    {
        return $this->set_id;
    }

    /**
     * @param int $set_id
     *
     * @return $this
     */
    public function setSetId($set_id)
    {
        $this->set_id = $set_id;

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
