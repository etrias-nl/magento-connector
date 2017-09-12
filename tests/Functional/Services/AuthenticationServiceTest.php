<?php

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

use Etrias\MagentoConnector\Services\AuthenticationService;

/**
 * @coversNothing
 */
class AuthenticationServiceTest extends AbstractServiceTest
{
    /**
     * @var AuthenticationService
     */
    protected $authenticationService;

    public function setUp()
    {
        parent::setUp();
        $this->authenticationService = new AuthenticationService($this->soapClient, getenv('APIUSER'), getenv('APIKEY'));
    }


    public function testLogin()
    {
        $sessionId = $this->authenticationService->getSessionId();
        $this->assertEquals(32, strlen($sessionId));
    }
}
