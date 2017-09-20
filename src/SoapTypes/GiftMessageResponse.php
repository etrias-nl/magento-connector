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

use Phpro\SoapClient\Type\ResultInterface;

class GiftMessageResponse implements ResultInterface
{
    /**
     * @var string
     */
    protected $entityId = null;

    /**
     * @var bool
     */
    protected $result = null;

    /**
     * @var string
     */
    protected $error = null;

    /**
     * Constructor.
     *
     * @var string
     * @var bool   $result
     * @var string $error
     *
     * @param mixed $entityId
     * @param mixed $result
     * @param mixed $error
     */
    public function __construct($entityId, $result, $error)
    {
        $this->entityId = $entityId;
        $this->result = $result;
        $this->error = $error;
    }

    /**
     * @return string
     */
    public function getEntityId()
    {
        return $this->entityId;
    }

    /**
     * @param string $entityId
     *
     * @return $this
     */
    public function setEntityId($entityId)
    {
        $this->entityId = $entityId;

        return $this;
    }

    /**
     * @return bool
     */
    public function getResult()
    {
        return $this->result;
    }

    /**
     * @param bool $result
     *
     * @return $this
     */
    public function setResult($result)
    {
        $this->result = $result;

        return $this;
    }

    /**
     * @return string
     */
    public function getError()
    {
        return $this->error;
    }

    /**
     * @param string $error
     *
     * @return $this
     */
    public function setError($error)
    {
        $this->error = $error;

        return $this;
    }
}
