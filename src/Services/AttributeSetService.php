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
use Etrias\MagentoConnector\SoapTypes\CatalogProductAttributeSetEntity;

class AttributeSetService
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
     * @return CatalogProductAttributeSetEntity[]
     */
    public function getAttributeSetList(): array
    {
        return $this->adapter->getAttributeSetList($this->authenticationService->login());
    }

    public function createAttributeSet(string $attributeSetName, int $skeletonSetId): int
    {
        return $this->adapter->createAttributeSet($this->authenticationService->login(), $attributeSetName, (string) $skeletonSetId);
    }

    public function removeAttributeSet(int $attributeSetId, bool $forceProductsRemove = false)
    {
        return $this->adapter->removeAttributeSet($this->authenticationService->login(), (string) $attributeSetId, $forceProductsRemove);
    }

    public function addAttributeToSet(int $attributeId, int $attributeSetId, int $attributeGroupId = null, int $sortOrder = null)
    {
        return $this->adapter->addAttributeToSet($this->authenticationService->login(), (string) $attributeId, (string) $attributeSetId, (string) $attributeGroupId, $sortOrder);
    }

    public function removeAttributeFromSet(int $attributeId, int $attributeSetId)
    {
        return $this->adapter->removeAttributeFromSet($this->authenticationService->login(), (string) $attributeId, (string) $attributeSetId);
    }

    public function addAttributeGroup(int $attributeSetId, string $groupName)
    {
        return $this->adapter->addAttributeGroup($this->authenticationService->login(), (string) $attributeSetId, $groupName);
    }

    public function removeAttributeGroup(int $attributeGroupId)
    {
        return $this->adapter->removeAttributeGroup($this->authenticationService->login(), (string) $attributeGroupId);
    }

    public function renameAttributeGroup(int $attributeGroupId, string $groupName)
    {
        return $this->adapter->renameAttributeGroup($this->authenticationService->login(), (string) $attributeGroupId, $groupName);
    }
}
