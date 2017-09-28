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

class CatalogAttributeEntity
{
    /**
     * @var int
     */
    protected $attribute_id = null;

    /**
     * @var string
     */
    protected $code = null;

    /**
     * @var string
     */
    protected $type = null;

    /**
     * @var string
     */
    protected $required = null;

    /**
     * @var string
     */
    protected $scope = null;

    /**
     * @return int
     */
    public function getAttributeId()
    {
        return $this->attribute_id;
    }

    /**
     * @param int $attribute_id
     *
     * @return $this
     */
    public function setAttributeId($attribute_id)
    {
        $this->attribute_id = $attribute_id;

        return $this;
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
    public function getType()
    {
        return $this->type;
    }

    /**
     * @param string $type
     *
     * @return $this
     */
    public function setType($type)
    {
        $this->type = $type;

        return $this;
    }

    /**
     * @return string
     */
    public function getRequired()
    {
        return $this->required;
    }

    /**
     * @param string $required
     *
     * @return $this
     */
    public function setRequired($required)
    {
        $this->required = $required;

        return $this;
    }

    /**
     * @return string
     */
    public function getScope()
    {
        return $this->scope;
    }

    /**
     * @param string $scope
     *
     * @return $this
     */
    public function setScope($scope)
    {
        $this->scope = $scope;

        return $this;
    }
}
