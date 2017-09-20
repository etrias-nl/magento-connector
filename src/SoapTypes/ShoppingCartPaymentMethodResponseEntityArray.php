<?php

declare(strict_types = 1);

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

class ShoppingCartPaymentMethodResponseEntityArray
{
    /**
     * @var string
     */
    protected $code = null;

    /**
     * @var string
     */
    protected $title = null;

    /**
     * @var associativeArray
     */
    protected $cc_types = null;

    /**
     * Constructor.
     *
     * @var string
     * @var string           $title
     * @var associativeArray $cc_types
     *
     * @param mixed $code
     * @param mixed $title
     * @param mixed $cc_types
     */
    public function __construct($code, $title, $cc_types)
    {
        $this->code = $code;
        $this->title = $title;
        $this->cc_types = $cc_types;
    }

    /**
     * @return string
     */
    public function getCode()
    {
        return $this->code;
    }

    /**
     * @param string $code
     *
     * @return $this
     */
    public function setCode($code)
    {
        $this->code = $code;

        return $this;
    }

    /**
     * @return string
     */
    public function getTitle()
    {
        return $this->title;
    }

    /**
     * @param string $title
     *
     * @return $this
     */
    public function setTitle($title)
    {
        $this->title = $title;

        return $this;
    }

    /**
     * @return associativeArray
     */
    public function getCc_types()
    {
        return $this->cc_types;
    }

    /**
     * @param associativeArray $cc_types
     *
     * @return $this
     */
    public function setCc_types($cc_types)
    {
        $this->cc_types = $cc_types;

        return $this;
    }
}
