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

class ShoppingCartLicenseEntity
{
    /**
     * @var string
     */
    protected $agreement_id = null;

    /**
     * @var string
     */
    protected $name = null;

    /**
     * @var string
     */
    protected $content = null;

    /**
     * @var int
     */
    protected $is_active = null;

    /**
     * @var int
     */
    protected $is_html = null;

    /**
     * @return string
     */
    public function getAgreementId()
    {
        return $this->agreement_id;
    }

    /**
     * @param string $agreement_id
     *
     * @return $this
     */
    public function setAgreementId($agreement_id)
    {
        $this->agreement_id = $agreement_id;

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

    /**
     * @return string
     */
    public function getContent()
    {
        return $this->content;
    }

    /**
     * @param string $content
     *
     * @return $this
     */
    public function setContent($content)
    {
        $this->content = $content;

        return $this;
    }

    /**
     * @return int
     */
    public function getIsActive()
    {
        return $this->is_active;
    }

    /**
     * @param int $is_active
     *
     * @return $this
     */
    public function setIsActive($is_active)
    {
        $this->is_active = $is_active;

        return $this;
    }

    /**
     * @return int
     */
    public function getIsHtml()
    {
        return $this->is_html;
    }

    /**
     * @param int $is_html
     *
     * @return $this
     */
    public function setIsHtml($is_html)
    {
        $this->is_html = $is_html;

        return $this;
    }
}
