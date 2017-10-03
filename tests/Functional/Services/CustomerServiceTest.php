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

namespace Tests\Etrias\MagentoConnector\Functional\Services;

use Etrias\MagentoConnector\Services\CustomerService;
use Etrias\MagentoConnector\Services\InvoiceService;
use Etrias\MagentoConnector\Services\OrderService;
use Etrias\MagentoConnector\SoapTypes\CustomerAddressEntityCreate;
use Etrias\MagentoConnector\SoapTypes\CustomerAddressEntityItem;
use Etrias\MagentoConnector\SoapTypes\CustomerCustomerEntity;
use Etrias\MagentoConnector\SoapTypes\CustomerCustomerEntityToCreate;
use Etrias\MagentoConnector\SoapTypes\CustomerGroupEntity;
use Etrias\MagentoConnector\SoapTypes\OrderItemIdQty;
use Etrias\MagentoConnector\SoapTypes\SalesOrderInvoiceEntity;

/**
 * @coversNothing
 */
class CustomerServiceTest extends AbstractServiceTest
{
    use RandomizeTrait;

    /**
     * @var CustomerService
     */
    protected $service;

    public function setUp()
    {
        parent::setUp();
        $this->service = new CustomerService($this->adapter, $this->authenticationService);
        $this->customerService = $this->service;
    }

    public function testGetCustomerGroups()
    {
        $customerGroups = $this->service->getCustomerGroups();

        $this->assertInstanceOf(CustomerGroupEntity::class, reset($customerGroups));
    }

    public function testCreateAndDeleteCustomer()
    {
        $customer = new CustomerCustomerEntityToCreate(
            $this->getFaker()->firstName,
            $this->getFaker()->lastName,
            $this->getFaker()->email
        );

        $customerId = $this->service->createCustomer($customer);

        $this->assertTrue(is_numeric($customerId));

        $this->assertTrue(
            $this->service->deleteCustomer($customerId)
        );
    }

    public function testGetCustomerInfo()
    {
        $customer = $this->service->getCustomerInfo(2);

        $this->assertInstanceOf(CustomerCustomerEntity::class, $customer);
    }

    public function testGetCustomers()
    {
        $customers = $this->service->getCustomers();
        $this->assertTrue(is_array($customers));

        $this->assertInstanceOf(CustomerCustomerEntity::class, reset($customers));
    }

    public function testUpdateCustomer()
    {
        $customer = new CustomerCustomerEntityToCreate(
            $this->getFaker()->firstName,
            $this->getFaker()->lastName,
            $this->getFaker()->email
        );

        $customerId = $this->service->createCustomer($customer);

        $newCustomer = new CustomerCustomerEntityToCreate(
            $this->getFaker()->firstName,
            $this->getFaker()->lastName,
            $this->getFaker()->email
        );

        $this->assertTrue(
            $this->service->updateCustomer($customerId, $newCustomer)
        );
    }

    public function testCreateAndDeleteCustomerAddress()
    {
        $customer = $this->getRandomCustomer();
        $customerAddress = new CustomerAddressEntityCreate(
            $this->getFaker()->firstName,
            $this->getFaker()->lastName,
            [$this->getFaker()->streetAddress],
            $this->getFaker()->city,
            $this->getFaker()->postcode,
            'NL'
        );

        $customerAddressId = $this->service->createCustomerAddress($customer->getCustomerId(), $customerAddress);

        $this->assertTrue(is_numeric($customerAddressId));

        $this->assertTrue(
            $this->service->deleteCustomerAddress($customerAddressId)
        );
    }

    public function testGetCustomerAddressInfo()
    {
        $customer = $this->getRandomCustomer();
        $customerAddress = new CustomerAddressEntityCreate(
            $this->getFaker()->firstName,
            $this->getFaker()->lastName,
            [$this->getFaker()->streetAddress],
            $this->getFaker()->city,
            $this->getFaker()->postcode,
            'NL'
        );

        $customerAddressId = $this->service->createCustomerAddress($customer->getCustomerId(), $customerAddress);

        $this->assertTrue(is_numeric($customerAddressId));
    }

    public function testGetCustomerAddresses()
    {
        $customer = $this->getRandomCustomer();
        $customerAddress = new CustomerAddressEntityCreate(
            $this->getFaker()->firstName,
            $this->getFaker()->lastName,
            [$this->getFaker()->streetAddress],
            $this->getFaker()->city,
            $this->getFaker()->postcode,
            'NL'
        );

        $this->service->createCustomerAddress($customer->getCustomerId(), $customerAddress);

        $addresses  = $this->service->getCustomerAddresses($customer->getCustomerId());

        $this->assertInstanceOf(CustomerAddressEntityItem::class, reset($addresses));
    }

    public function testUpdateCustomerAddress()
    {
        $customer = $this->getRandomCustomer();
        $addresses  = $this->service->getCustomerAddresses($customer->getCustomerId());
        $address = reset($addresses);

        $newCustomerAddress = new CustomerAddressEntityCreate(
            $this->getFaker()->firstName,
            $this->getFaker()->lastName,
            [$this->getFaker()->streetAddress],
            $this->getFaker()->city,
            $this->getFaker()->postcode,
            'NL'
        );

        $this->assertTrue(
            $this->service->updateCustomerAddress($address->getCustomerAddressId(), $newCustomerAddress)
        );
    }
}
