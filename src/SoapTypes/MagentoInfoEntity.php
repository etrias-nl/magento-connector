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
     * Constructor.
     *
     * @var string
     * @var string $magento_edition
     *
     * @param mixed $magento_version
     * @param mixed $magento_edition
     */
    public function __construct($magento_version, $magento_edition)
    {
        $this->magento_version = $magento_version;
        $this->magento_edition = $magento_edition;
    }

    /**
     * @return string
     */
    public function getMagentoVersion()
    {
        return $this->magento_version;
    }

    /**
     * @param string $magento_version
     *
     * @return $this
     */
    public function setMagentoVersion($magento_version)
    {
        $this->magento_version = $magento_version;

        return $this;
    }

    /**
     * @return string
     */
    public function getMagentoEdition()
    {
        return $this->magento_edition;
    }

    /**
     * @param string $magento_edition
     *
     * @return $this
     */
    public function setMagentoEdition($magento_edition)
    {
        $this->magento_edition = $magento_edition;

        return $this;
    }
}
