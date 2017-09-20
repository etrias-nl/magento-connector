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

class CustomerGroupEntity
{
    /**
     * @var int
     */
    protected $customer_group_id = null;

    /**
     * @var string
     */
    protected $customer_group_code = null;

    /**
     * Constructor.
     *
     * @var int
     * @var string $customer_group_code
     *
     * @param mixed $customer_group_id
     * @param mixed $customer_group_code
     */
    public function __construct($customer_group_id, $customer_group_code)
    {
        $this->customer_group_id = $customer_group_id;
        $this->customer_group_code = $customer_group_code;
    }

    /**
     * @return int
     */
    public function getCustomer_group_id()
    {
        return $this->customer_group_id;
    }

    /**
     * @param int $customer_group_id
     *
     * @return $this
     */
    public function setCustomer_group_id($customer_group_id)
    {
        $this->customer_group_id = $customer_group_id;

        return $this;
    }

    /**
     * @return string
     */
    public function getCustomer_group_code()
    {
        return $this->customer_group_code;
    }

    /**
     * @param string $customer_group_code
     *
     * @return $this
     */
    public function setCustomer_group_code($customer_group_code)
    {
        $this->customer_group_code = $customer_group_code;

        return $this;
    }
}
