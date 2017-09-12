<?php

namespace Etrias\MagentoConnector\SoapTypes;

class MagentoInfoEntity
{

    /**
     * @var string
     */
    protected $magento_version = null;

    /**
     * @var string
     */
    protected $magento_edition = null;

    /**
     * Constructor
     *
     * @var string $magento_version
     * @var string $magento_edition
     */
    public function __construct($magento_version, $magento_edition)
    {
        $this->magento_version = $magento_version;
        $this->magento_edition = $magento_edition;
    }

    /**
     * @return string
     */
    public function getMagento_version()
    {
        return $this->magento_version;
    }

    /**
     * @param string $magento_version
     * @return $this
     */
    public function setMagento_version($magento_version)
    {
        $this->magento_version = $magento_version;
        return $this;
    }

    /**
     * @return string
     */
    public function getMagento_edition()
    {
        return $this->magento_edition;
    }

    /**
     * @param string $magento_edition
     * @return $this
     */
    public function setMagento_edition($magento_edition)
    {
        $this->magento_edition = $magento_edition;
        return $this;
    }


}

