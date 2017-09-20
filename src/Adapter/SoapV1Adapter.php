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

namespace Etrias\MagentoConnector\Adapter;

use Etrias\MagentoConnector\Client\MagentoClientInterface;
use Etrias\MagentoConnector\ExceptionMap;
use Etrias\MagentoConnector\Exceptions\MagentoSoapException;
use Phpro\SoapClient\Exception\SoapException;
use Phpro\SoapClient\Type\MixedResult;
use Phpro\SoapClient\Type\MultiArgumentRequest;
use Phpro\SoapClient\Type\RequestInterface;
use Phpro\SoapClient\Type\ResultInterface;
use SoapFault;

class SoapV1Adapter implements AdapterInterface
{
    /** @var MagentoClientInterface */
    protected $client;

    /** @var ExceptionMap */
    protected $exceptionMap;

    public function __construct(MagentoClientInterface $client, ExceptionMap $exceptionMap)
    {
        $this->client = $client;
        $this->exceptionMap = $exceptionMap;
    }

    /**
     * @param $functionName
     * @param RequestInterface $request
     *
     * @throws MagentoSoapException
     *
     * @return mixed
     */
    public function processRequest($functionName, RequestInterface $request)
    {
        try {
            $response = $this->client->call($functionName, $request);
        } catch (SoapException $exception) {
            $previous = $exception->getPrevious();
            if ($previous instanceof SoapFault) {
                $module = $this->exceptionMap->getModuleByMethodName($functionName);
                $exceptionName = $this->exceptionMap->getExceptionClassName($previous->faultcode, $module);

                /** @var MagentoSoapException $throwable */
                $throwable = new $exceptionName($previous->faultstring, $previous->faultcode, $exception);
                $throwable->setRequest($request);

                throw $throwable;
            }
            throw $exception;
        }

        return $this->processResponse($request, $response);
    }

    /**
     * @param RequestInterface $request
     * @param ResultInterface  $response
     *
     * @return mixed
     */
    public function processResponse(RequestInterface $request, ResultInterface $response)
    {
        /* @var MixedResult $response */
        return $response->getResult();
    }

    public function startSession(): string
    {
        $request = new MultiArgumentRequest([]);

        return $this->processRequest(__FUNCTION__, $request);
    }

    public function endSession(string $sessionId): bool
    {
        $request = new MultiArgumentRequest([$sessionId]);

        return $this->processRequest(__FUNCTION__, $request);
    }

    public function login(string $username, string $password): string
    {
        $request = new MultiArgumentRequest([$username, $password]);
        /* @var MixedResult $response */

        return $this->processRequest(__FUNCTION__, $request);
    }

    public function resources(string $sessionId): array
    {
        $request = new MultiArgumentRequest([$sessionId]);

        return $this->processRequest(__FUNCTION__, $request);
    }
}
