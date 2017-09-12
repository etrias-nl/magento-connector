<?php

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
     * Constructor
     *
     * @var int $set_id
     * @var string $name
     */
    public function __construct($set_id, $name)
    {
        $this->set_id = $set_id;
        $this->name = $name;
    }

    /**
     * @return int
     */
    public function getSet_id()
    {
        return $this->set_id;
    }

    /**
     * @param int $set_id
     * @return $this
     */
    public function setSet_id($set_id)
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
     * @return $this
     */
    public function setName($name)
    {
        $this->name = $name;
        return $this;
    }


}

