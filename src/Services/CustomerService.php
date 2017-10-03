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

namespace Etrias\MagentoConnector\Services;

use Etrias\MagentoConnector\Adapter\AdapterInterface as MagentoAdapterInterface;
use Etrias\MagentoConnector\SoapTypes\CatalogInventoryStockItemEntity;
use Etrias\MagentoConnector\SoapTypes\CatalogInventoryStockItemUpdateEntity;
use Etrias\MagentoConnector\SoapTypes\CustomerAddressEntityCreate;
use Etrias\MagentoConnector\SoapTypes\CustomerAddressEntityItem;
use Etrias\MagentoConnector\SoapTypes\CustomerCustomerEntity;
use Etrias\MagentoConnector\SoapTypes\CustomerCustomerEntityToCreate;
use Etrias\MagentoConnector\SoapTypes\CustomerGroupEntity;

class CustomerService
{
    /** @var MagentoAdapterInterface */
    protected $adapter;

    /** @var AuthenticationService */
    protected $authenticationService;

    /**
     * AuthenticationService constructor.
     *
     * @param MagentoAdapterInterface $adapter
     * @param AuthenticationService   $authenticationService
     */
    public function __construct(
        MagentoAdapterInterface $adapter,
        AuthenticationService $authenticationService
    ) {
        $this->adapter = $adapter;
        $this->authenticationService = $authenticationService;
    }

    /**
     * @return CustomerGroupEntity[]
     */
    public function getCustomerGroups()
    {
        return $this->adapter->getCustomerGroups($this->authenticationService->login());
    }

    /**
     * @param CustomerCustomerEntityToCreate $data
     * @return int
     */
    public function createCustomer(CustomerCustomerEntityToCreate $data): int
    {
        return $this->adapter->createCustomer($this->authenticationService->login(), $data);
    }

    /**
     * @param int $customerId
     * @return bool
     */
    public function deleteCustomer(int $customerId): bool
    {
        return $this->adapter->deleteCustomer($this->authenticationService->login(), $customerId);
    }

    /**
     * @param int $customerId
     * @return CustomerCustomerEntity
     */
    public function getCustomerInfo(int $customerId): CustomerCustomerEntity
    {
        return $this->adapter->getCustomerInfo($this->authenticationService->login(), $customerId);
    }

    /**
     * @param array|null $filters
     * @return CustomerCustomerEntity[]
     */
    public function getCustomers(array $filters = null): array
    {
        return $this->adapter->getCustomers($this->authenticationService->login(), $filters);
    }

    /**
     * @param int $customerId
     * @param CustomerCustomerEntityToCreate $data
     * @return bool
     */
    public function updateCustomer(int $customerId, CustomerCustomerEntityToCreate $data): bool
    {
        return $this->adapter->updateCustomer($this->authenticationService->login(), $customerId, $data);
    }

    /**
     * @param int $customerId
     * @param CustomerAddressEntityCreate $data
     * @return int
     */
    public function createCustomerAddress(int $customerId, CustomerAddressEntityCreate $data): int
    {
        return $this->adapter->createCustomerAddress($this->authenticationService->login(), $customerId, $data);
    }

    /**
     * @param int $addressId
     * @return bool
     */
    public function deleteCustomerAddress(int $addressId): bool
    {
        return $this->adapter->deleteCustomerAddress($this->authenticationService->login(), $addressId);
    }

    /**
     * @param int $addressId
     * @return CustomerAddressEntityItem
     */
    public function getCustomerAddressInfo(int $addressId): CustomerAddressEntityItem
    {
        return $this->adapter->getCustomerAddressInfo($this->authenticationService->login(), $addressId);
    }

    /**
     * @param int $customerId
     * @return CustomerAddressEntityItem[]
     */
    public function getCustomerAddresses(int $customerId): array
    {
        return $this->adapter->getCustomerAddresses($this->authenticationService->login(), $customerId);
    }

    /**
     * @param int $addressId
     * @param CustomerAddressEntityCreate $data
     * @return bool
     */
    public function updateCustomerAddress(int $addressId, CustomerAddressEntityCreate $data): bool
    {
        return $this->adapter->updateCustomerAddress($this->authenticationService->login(), $addressId, $data);
    }

}
