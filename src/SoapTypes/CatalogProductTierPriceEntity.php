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

class CatalogProductTierPriceEntity
{
    /**
     * @var string
     */
    protected $customer_group_id = null;

    /**
     * @var string
     */
    protected $website = null;

    /**
     * @var int
     */
    protected $qty = null;

    /**
     * @var float
     */
    protected $price = null;

    /**
     * @return string
     */
    public function getCustomerGroupId()
    {
        return $this->customer_group_id;
    }

    /**
     * @param string $customer_group_id
     *
     * @return $this
     */
    public function setCustomerGroupId($customer_group_id)
    {
        $this->customer_group_id = $customer_group_id;

        return $this;
    }

    /**
     * @return string
     */
    public function getWebsite()
    {
        return $this->website;
    }

    /**
     * @param string $website
     *
     * @return $this
     */
    public function setWebsite($website)
    {
        $this->website = $website;

        return $this;
    }

    /**
     * @return int
     */
    public function getQty()
    {
        return $this->qty;
    }

    /**
     * @param int $qty
     *
     * @return $this
     */
    public function setQty($qty)
    {
        $this->qty = $qty;

        return $this;
    }

    /**
     * @return float
     */
    public function getPrice()
    {
        return $this->price;
    }

    /**
     * @param float $price
     *
     * @return $this
     */
    public function setPrice($price)
    {
        $this->price = $price;

        return $this;
    }
}
