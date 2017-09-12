<?php

namespace Etrias\MagentoConnector\SoapTypes;

class GiftMessageAssociativeProductsEntity
{

    /**
     * @var shoppingCartProductEntity
     */
    protected $product = null;

    /**
     * @var giftMessageEntity
     */
    protected $message = null;

    /**
     * Constructor
     *
     * @var shoppingCartProductEntity $product
     * @var giftMessageEntity $message
     */
    public function __construct($product, $message)
    {
        $this->product = $product;
        $this->message = $message;
    }

    /**
     * @return shoppingCartProductEntity
     */
    public function getProduct()
    {
        return $this->product;
    }

    /**
     * @param shoppingCartProductEntity $product
     * @return $this
     */
    public function setProduct($product)
    {
        $this->product = $product;
        return $this;
    }

    /**
     * @return giftMessageEntity
     */
    public function getMessage()
    {
        return $this->message;
    }

    /**
     * @param giftMessageEntity $message
     * @return $this
     */
    public function setMessage($message)
    {
        $this->message = $message;
        return $this;
    }


}

