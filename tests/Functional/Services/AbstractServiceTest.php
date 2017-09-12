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

use Etrias\MagentoConnector\Client\MagentoClient;
use Etrias\MagentoConnector\Client\MagentoClientInterface;
use Etrias\MagentoConnector\Services\AuthenticationService;
use GuzzleHttp\Client;
use Phpro\SoapClient\ClientBuilder;
use Phpro\SoapClient\ClientFactory;
use Phpro\SoapClient\Soap\Handler\GuzzleHandle;
use Phpro\SoapClient\Wsdl\Provider\GuzzleWsdlProvider;
use PHPUnit\Framework\TestCase;

abstract class AbstractServiceTest extends TestCase
{
    /** @var MagentoClientInterface */
    protected $soapClient;

    /** @var AuthenticationService */
    protected $authenticationService;

    public function setUp()
    {
        $guzzleClient = new Client([
            'verify' => false
        ]);

        $clientFactory = new ClientFactory(MagentoClient::class);
        $soapOptions = [
            'cache_wsdl' => WSDL_CACHE_DISK,
            'trace' => true,
            'stream_context' => [
                'ssl' => [
                    'verify_peer'       => false
                ]
            ]
        ];

        $clientBuilder = new ClientBuilder($clientFactory, getenv('WSDL'), $soapOptions);
        $clientBuilder->withClassMaps(require __DIR__.'/../../../src/ClassMapCollection.php');
        $clientBuilder->withWsdlProvider(GuzzleWsdlProvider::createForClient($guzzleClient));
        $clientBuilder->withHandler(GuzzleHandle::createForClient($guzzleClient));

        $this->soapClient = $clientBuilder->build();

        $this->authenticationService = new AuthenticationService($this->soapClient, getenv('APIUSER'), getenv('APIKEY'));
    }
}
