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
use Etrias\MagentoConnector\SoapTypes\MagentoInfoEntity;

class GeneralService
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

    public function getResources(): array
    {
        return $this->adapter->resources($this->authenticationService->login());
    }

    public function getGlobalFaults(): array
    {
        return $this->adapter->globalFaults($this->authenticationService->login());
    }

    public function getResourceFaults(string $resourceName): array
    {
        return $this->adapter->resourceFaults($this->authenticationService->login(), $resourceName);
    }

    public function getStoreViews(): array
    {
        return $this->adapter->getStoreList($this->authenticationService->login());
    }

    public function getMagentoInfo(): MagentoInfoEntity
    {
        return $this->adapter->getMagentoInfo($this->authenticationService->login());
    }
}
