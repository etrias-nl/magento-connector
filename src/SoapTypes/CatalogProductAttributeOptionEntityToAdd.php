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

class CatalogProductAttributeOptionEntityToAdd
{
    /**
     * @var catalogProductAttributeOptionLabelArray
     */
    protected $label = null;

    /**
     * @var int
     */
    protected $order = null;

    /**
     * @var int
     */
    protected $is_default = null;

    /**
     * Constructor.
     *
     * @var catalogProductAttributeOptionLabelArray
     * @var int                                     $order
     * @var int                                     $is_default
     *
     * @param mixed $label
     * @param mixed $order
     * @param mixed $is_default
     */
    public function __construct($label, $order, $is_default)
    {
        $this->label = $label;
        $this->order = $order;
        $this->is_default = $is_default;
    }

    /**
     * @return catalogProductAttributeOptionLabelArray
     */
    public function getLabel()
    {
        return $this->label;
    }

    /**
     * @param catalogProductAttributeOptionLabelArray $label
     *
     * @return $this
     */
    public function setLabel($label)
    {
        $this->label = $label;

        return $this;
    }

    /**
     * @return int
     */
    public function getOrder()
    {
        return $this->order;
    }

    /**
     * @param int $order
     *
     * @return $this
     */
    public function setOrder($order)
    {
        $this->order = $order;

        return $this;
    }

    /**
     * @return int
     */
    public function getIs_default()
    {
        return $this->is_default;
    }

    /**
     * @param int $is_default
     *
     * @return $this
     */
    public function setIs_default($is_default)
    {
        $this->is_default = $is_default;

        return $this;
    }
}
