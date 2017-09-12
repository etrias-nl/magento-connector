<?php

namespace Etrias\MagentoConnector\SoapTypes;

class ExistsFaltureEntity
{

    /**
     * @var string
     */
    protected $code = null;

    /**
     * @var string
     */
    protected $message = null;

    /**
     * Constructor
     *
     * @var string $code
     * @var string $message
     */
    public function __construct($code, $message)
    {
        $this->code = $code;
        $this->message = $message;
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
    public function getMessage()
    {
        return $this->message;
    }

    /**
     * @param string $message
     * @return $this
     */
    public function setMessage($message)
    {
        $this->message = $message;
        return $this;
    }


}

