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

namespace Etrias\MagentoConnector\Services;

use Etrias\MagentoConnector\Adapter\AdapterInterface as MagentoAdapterInterface;
use Etrias\MagentoConnector\SoapTypes\CatalogProductCustomOptionToAdd;
use Etrias\MagentoConnector\SoapTypes\CatalogProductCustomOptionToUpdate;

class ProductOptionService
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

    public function getOptionTypes()
    {
        return $this->adapter->getProductOptionTypes($this->authenticationService->login());
    }

    public function getOptions(
        int $productId,
        int $storeViewId = null
    ) {
        return $this->adapter->getProductOptions($this->authenticationService->login(), (string) $productId, (string) $storeViewId);
    }

    /**
     * @param int                             $productId
     * @param CatalogProductCustomOptionToAdd $data
     * @param int|null                        $storeViewId
     *
     * @return bool
     */
    public function addProductOption(
        int $productId,
        CatalogProductCustomOptionToAdd $data,
        int $storeViewId = null
    ): bool {
        return $this->adapter->addProductOption($this->authenticationService->login(), (string) $productId, $data, (string) $storeViewId);
    }

    public function updateProductOption(
        int $optionId,
        CatalogProductCustomOptionToUpdate $data,
        int $storeView = null
    ): bool {
        return $this->adapter->updateProductOption($this->authenticationService->login(), (string) $optionId, $data, (string) $storeView);
    }

    public function removeProductOption(int $productId)
    {
        return $this->adapter->removeProductOption($this->authenticationService->login(), (string) $productId);
    }

    public function getInfo(int $optionId, int $storeView = null)
    {
        return $this->adapter->getProductOptionInfo($this->authenticationService->login(), (string) $optionId, (string) $storeView);
    }
}
