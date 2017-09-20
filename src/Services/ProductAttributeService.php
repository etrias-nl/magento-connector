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
use Etrias\MagentoConnector\SoapTypes\CatalogAttributeEntity;
use Etrias\MagentoConnector\SoapTypes\CatalogProductAttributeEntityToCreate;
use Etrias\MagentoConnector\SoapTypes\CatalogProductAttributeOptionEntityToAdd;

class ProductAttributeService
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

    public function getCurrentStoreView()
    {
        return $this->adapter->getCurrentStoreView($this->authenticationService->login());
    }

    public function setCurrentStoreView(int $storeView): int
    {
        return $this->adapter->setCurrentStoreView($this->authenticationService->login(), $storeView);
    }

    /**
     * @param int $attributeSetId
     *
     * @return CatalogAttributeEntity[]
     */
    public function getAttributeList(int $attributeSetId): array
    {
        return $this->adapter->getAttributeList($this->authenticationService->login(), $attributeSetId);
    }

    public function getAttributeInfoById(int $attributeId)
    {
        return $this->adapter->getAttributeInfo($this->authenticationService->login(), (string) $attributeId);
    }

    public function getAttributeOptions(int $attributeId, int $storeView = null)
    {
        return $this->adapter->getProductAttributeOptions($this->authenticationService->login(), $attributeId, $storeView);
    }

    public function addAttributeOption(int $attributeId, CatalogProductAttributeOptionEntityToAdd $data)
    {
        return $this->adapter->addAttributeOption($this->authenticationService->login(), $attributeId, $data);
    }

    public function removeAttributeOption(int $attributeId, int $optionId)
    {
        return $this->adapter->removeAttributeOption($this->authenticationService->login(), (string) $attributeId, (string) $optionId);
    }

    public function createAttribute(CatalogProductAttributeEntityToCreate $data)
    {
        return $this->adapter->createAttribute($this->authenticationService->login(), $data);
    }

    public function updateAttribute(int $attributeId, CatalogProductAttributeEntityToCreate $data)
    {
        return $this->adapter->updateAttribute($this->authenticationService->login(), $attributeId, $data);
    }

    public function removeAttributeById(int $attributeId)
    {
        return $this->adapter->removeAttribute($this->authenticationService->login(), (string) $attributeId);
    }

    public function getAttributeTypes()
    {
        return $this->adapter->getAttributeTypes($this->authenticationService->login());
    }
}
