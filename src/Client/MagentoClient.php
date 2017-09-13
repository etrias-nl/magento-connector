<?php
/**
 * Created by PhpStorm.
 * User: cprinse
 * Date: 4-9-17
 * Time: 12:12
 */

namespace Etrias\MagentoConnector\Client;


use Phpro\SoapClient\Client;
use Phpro\SoapClient\Exception\SoapException;
use Phpro\SoapClient\Type\RequestInterface;
use Phpro\SoapClient\Type\ResultInterface;

class MagentoClient extends Client implements MagentoClientInterface
{
    /**
     * @param string            $method
     * @param RequestInterface  $request
     *
     * @return ResultInterface
     * @throws SoapException
     */
    public function call($method, RequestInterface $request)
    {
        return parent::call($method, $request);
    }
}
