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

class CatalogInventoryService
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
     * @param array $productIds
     *
     * @return CatalogInventoryStockItemEntity[]
     */
    public function getStockDataByProductId(array $productIds)
    {
        $stockItems = $this->adapter->getCatalogInventoryStockItems($this->authenticationService->login(), $productIds);

        $returnArray = [];

        foreach ($stockItems as $stockItem) {
            $returnArray[$stockItem->getProductId()] = $stockItem;
        }

        return $returnArray;
    }

    /**
     * @param int                                   $productId
     * @param CatalogInventoryStockItemUpdateEntity $data
     *
     * @return bool
     */
    public function updateStockDataByProductId(int $productId, CatalogInventoryStockItemUpdateEntity $data)
    {
        return $this->adapter->updateCatalogInventoryStockData($this->authenticationService->login(), (string) $productId, $data);
    }
}
