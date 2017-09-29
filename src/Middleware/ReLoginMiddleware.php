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

namespace Etrias\MagentoConnector\Middleware;

use DOMDocument;
use Etrias\MagentoConnector\Exceptions\NoSoapFaultException;
use Etrias\MagentoConnector\Services\AuthenticationService;
use GuzzleHttp\Psr7;
use Phpro\SoapClient\Middleware\Middleware;
use Psr\Http\Message\RequestInterface;
use Psr\Http\Message\ResponseInterface;

class ReLoginMiddleware extends Middleware
{
    const FAULT_CODE_SESSION_EXPIRED = 5;

    /** @var AuthenticationService */
    protected $authenticationService;

    /** @var RequestInterface|null */
    private $lastRequest;

    /** @var callable */
    private $nextHandler;

    /** @var array */
    private $options;

    /** @var bool */
    private $reLoginInProcess = false;

    public function setAuthenticationService(AuthenticationService $authenticationService)
    {
        $this->authenticationService = $authenticationService;
    }

    /**
     * @return string
     */
    public function getName(): string
    {
        return 'relogin_middleware';
    }

    /**
     * {@inheritdoc}
     */
    public function beforeRequest(callable $handler, RequestInterface $request, array $options)
    {
        if ($this->reLoginInProcess === false) {
            $this->lastRequest = $request;
            $this->nextHandler = $handler;
            $this->options = $options;
        }

        return $handler($request, $options);
    }

    /**
     * {@inheritdoc}
     */
    public function afterResponse(ResponseInterface $response): ResponseInterface
    {
        try {
            if ($this->getSoapFaultCode($response) === static::FAULT_CODE_SESSION_EXPIRED) {
                $this->reLoginInProcess = true;
                $newSessionId = $this->authenticationService->login(true);

                $newRequest = $this->replaceSessionIdInRequest($this->lastRequest, $newSessionId);

                $this->reLoginInProcess = false;

                return call_user_func($this->nextHandler, $newRequest, $this->options);
            }
        } catch (NoSoapFaultException $e) {
            return $response;
        }

        return $response;
    }

    /**
     * @param ResponseInterface $response
     *
     * @throws NoSoapFaultException
     *
     * @return int
     */
    private function getSoapFaultCode(ResponseInterface $response): int
    {
        $content = (string) $response->getBody();
        if ($response->getBody()->isSeekable()) {
            $response->getBody()->seek(0);
        }

        $xml = simplexml_load_string($content);
        $xml->registerXPathNamespace('SOAP-ENV', 'http://schemas.xmlsoap.org/soap/envelope/');
        $faultCodes = $xml->xpath('//SOAP-ENV:Body/SOAP-ENV:Fault[1]/faultcode');

        if (count($faultCodes) === 0) {
            throw new NoSoapFaultException();
        }

        return (int) $faultCodes[0];
    }

    /**
     * @param RequestInterface $request
     * @param string           $sessionId
     *
     * @return RequestInterface
     */
    private function replaceSessionIdInRequest(RequestInterface $request, string $sessionId): RequestInterface
    {
        $content = (string) $request->getBody();
        if ($request->getBody()->isSeekable()) {
            $request->getBody()->seek(0);
        }

        $doc = new DOMDocument();
        $doc->loadXML($content);

        foreach ($doc->getElementsByTagName('sessionId') as $node) {
            $node->nodeValue = $sessionId;
        }

        return $request->withBody(Psr7\stream_for($doc->saveXML()));
    }
}
