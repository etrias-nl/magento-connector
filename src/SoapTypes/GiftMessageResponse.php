<?php

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
     * Constructor
     *
     * @var string $entityId
     * @var bool $result
     * @var string $error
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
     * @return $this
     */
    public function setError($error)
    {
        $this->error = $error;
        return $this;
    }


}

