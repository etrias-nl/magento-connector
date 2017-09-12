<?php

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
     * Constructor
     *
     * @var catalogProductAttributeOptionLabelArray $label
     * @var int $order
     * @var int $is_default
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
     * @return $this
     */
    public function setIs_default($is_default)
    {
        $this->is_default = $is_default;
        return $this;
    }


}

