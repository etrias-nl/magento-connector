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

namespace Tests\Etrias\MagentoConnector\Functional\Services;

use Etrias\MagentoConnector\Services\GeneralService;
use Etrias\MagentoConnector\SoapTypes\ApiEntity;
use Etrias\MagentoConnector\SoapTypes\ExistsFaltureEntity;
use Etrias\MagentoConnector\SoapTypes\MagentoInfoEntity;
use Etrias\MagentoConnector\SoapTypes\StoreEntity;

/**
 * @coversNothing
 */
class GeneralServiceTest extends AbstractServiceTest
{
    /**
     * @var GeneralService
     */
    protected $service;

    public function setUp()
    {
        parent::setUp();
        $this->service = new GeneralService($this->adapter, $this->authenticationService);
    }

    public function testGetResources()
    {
        $resources = $this->service->getResources();
        $this->assertInstanceOf(ApiEntity::class, reset($resources));
    }

    public function testGetGlobalFaults()
    {
        $faults = $this->service->getGlobalFaults();
        $this->assertInstanceOf(ExistsFaltureEntity::class, reset($faults));
    }

    public function testGetResourceFaults()
    {
        $faults = $this->service->getResourceFaults('catalog');
        $this->assertInstanceOf(ExistsFaltureEntity::class, reset($faults));
    }

    public function testGetStoreViews()
    {
        $storeViews = $this->service->getStoreViews();
        $this->assertInstanceOf(StoreEntity::class, reset($storeViews));
    }

    public function testGetMagentoInfo()
    {
        $magentoInfo = $this->service->getMagentoInfo();
        $this->assertInstanceOf(MagentoInfoEntity::class, $magentoInfo);
    }
}
