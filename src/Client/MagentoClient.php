<?php
/**
 * Created by PhpStorm.
 * User: cprinse
 * Date: 4-9-17
 * Time: 12:12
 */

namespace Etrias\MagentoConnector\Client;


use Etrias\MagentoConnector\ExceptionMap;
use Etrias\MagentoConnector\Exceptions\MagentoSoapException;
use Phpro\SoapClient\Client;
use Phpro\SoapClient\Exception\SoapException;
use Phpro\SoapClient\Type\MixedResult;
use Phpro\SoapClient\Type\MultiArgumentRequest;
use Phpro\SoapClient\Type\RequestInterface;
use Phpro\SoapClient\Type\ResultInterface;
use SoapFault;

class MagentoClient extends Client implements MagentoClientInterface
{
    public function processRequest($functionName, RequestInterface $request)
    {
        try {
            $response = $this->call($functionName, $request);
        } catch (SoapException $exception) {
            $previous = $exception->getPrevious();
            if ($previous instanceof SoapFault) {
                $code = $previous->faultcode;
                $exceptionName = ExceptionMap::getException($previous->faultcode);
            }

            /** @var MagentoSoapException $throwable */
            $throwable = new $exceptionName($previous->faultstring, $previous->faultcode, $exception);
            $throwable->setRequest($request);

            throw $throwable;
        }

        return $this->processResponse($request, $response);
    }

    public function processResponse(RequestInterface $request, ResultInterface $response)
    {

        return $response;

    }

    public function login($username, $password)
    {
        $request = new MultiArgumentRequest([$username, $password]);

        return $this->processRequest(__FUNCTION__, $request);
    }
}
