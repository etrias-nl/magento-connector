<?php
/**
 * Created by PhpStorm.
 * User: cprinse
 * Date: 13-9-17
 * Time: 11:39
 */

namespace Etrias\MagentoConnector\Adapter;


use Etrias\MagentoConnector\SoapTypes\ApiEntity;
use Phpro\SoapClient\Type\MixedResult;

interface AdapterInterface
{
    /**
     * @param string $username
     * @param string $password
     * @return string SessionID
     */
    public function login(string $username, string $password) :string;

    /**
     * @return string SessionId
     */
    public function startSession() :string;

    /**
     * @param string $sessionId
     * @return bool
     */
    public function endSession(string $sessionId) :bool;

    /**
     * @param string $sessionId
     * @return ApiEntity[]
     */
    public function resources(string $sessionId) :array;


    public function globalFaults(string $sessionId) :array;

    public function resourceFaults(string $sessionId, string $resourceName) :array;
}
