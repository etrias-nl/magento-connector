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

use Etrias\MagentoConnector\Services\CatalogInventoryService;
use Etrias\MagentoConnector\SoapTypes\CatalogInventoryStockItemEntity;
use Etrias\MagentoConnector\SoapTypes\CatalogInventoryStockItemUpdateEntity;

/**
 * @coversNothing
 */
class CatalogInventoryServiceTest extends AbstractServiceTest
{
    /**
     * @var CatalogInventoryService
     */
    protected $service;

    public function setUp()
    {
        parent::setUp();
        $this->service = new CatalogInventoryService($this->adapter, $this->authenticationService);
    }

    public function testGetStockDataByProductId()
    {
        $productId = 2631;
        $stockData = $this->service->getStockDataByProductId([$productId]);

        $keys = array_keys($stockData);
        $this->assertSame($productId, reset($keys));
        $this->assertInstanceOf(CatalogInventoryStockItemEntity::class, reset($stockData));
    }

    public function testUpdateStockDataByProductId()
    {
        $productId = 2631;

        $this->assertTrue(
            $this->service->updateStockDataByProductId($productId,
                (new CatalogInventoryStockItemUpdateEntity())
                ->setIsInStock(true)
            )
        );
    }
}
