<?php

namespace Etrias\MagentoConnector\SoapTypes;

class ShoppingCartTotalsEntity
{

    /**
     * @var string
     */
    protected $title = null;

    /**
     * @var float
     */
    protected $amount = null;

    /**
     * Constructor
     *
     * @var string $title
     * @var float $amount
     */
    public function __construct($title, $amount)
    {
        $this->title = $title;
        $this->amount = $amount;
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
     * @return $this
     */
    public function setTitle($title)
    {
        $this->title = $title;
        return $this;
    }

    /**
     * @return float
     */
    public function getAmount()
    {
        return $this->amount;
    }

    /**
     * @param float $amount
     * @return $this
     */
    public function setAmount($amount)
    {
        $this->amount = $amount;
        return $this;
    }


}

