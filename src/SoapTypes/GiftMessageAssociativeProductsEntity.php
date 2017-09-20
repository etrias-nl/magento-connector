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
     * Constructor.
     *
     * @var shoppingCartProductEntity
     * @var giftMessageEntity         $message
     *
     * @param mixed $product
     * @param mixed $message
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
     *
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
     *
     * @return $this
     */
    public function setMessage($message)
    {
        $this->message = $message;

        return $this;
    }
}
