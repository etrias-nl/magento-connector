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
use SoapClient;
use SoapFault;
use Symfony\Component\EventDispatcher\EventDispatcherInterface;

class MagentoClient extends Client implements MagentoClientInterface
{

    /**
     * @var ExceptionMap
     */
    protected $exceptionMap;

    public function __construct(
        SoapClient $soapClient,
        EventDispatcherInterface $dispatcher,
        ExceptionMap $exceptionMap
    )
    {
        parent::__construct($soapClient, $dispatcher);
        $this->exceptionMap = $exceptionMap;
    }

    public function processRequest($functionName, RequestInterface $request)
    {
        try {
            $response = $this->call($functionName, $request);
        } catch (SoapException $exception) {
            $previous = $exception->getPrevious();
            if ($previous instanceof SoapFault) {
                $module = $this->exceptionMap->getModuleByMethodName($functionName);
                $exceptionName = $this->exceptionMap->getExceptionClassName($previous->faultcode, $module);

                /** @var MagentoSoapException $throwable */
                $throwable = new $exceptionName($previous->faultstring, $previous->faultcode, $exception);
            }
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
