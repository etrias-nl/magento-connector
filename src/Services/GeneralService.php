<?php
/**
 * Created by PhpStorm.
 * User: cprinse
 * Date: 4-9-17
 * Time: 15:55
 */

namespace Etrias\MagentoConnector\Services;


use BadMethodCallException;
use Etrias\MagentoConnector\Adapter\AdapterInterface as MagentoAdapterInterface;
use Symfony\Component\Cache\Adapter\AdapterInterface;
use Symfony\Component\Cache\Adapter\NullAdapter;

class GeneralService
{
    /** @var MagentoAdapterInterface  */
    protected $adapter;

    /** @var AuthenticationService  */
    protected $authenticationService;

    /**
     * AuthenticationService constructor.
     *
     * @param MagentoAdapterInterface $adapter
     * @param AuthenticationService $authenticationService
     */
    public function __construct(
        MagentoAdapterInterface $adapter,
        AuthenticationService $authenticationService
    ) {
        $this->adapter = $adapter;
        $this->authenticationService = $authenticationService;
    }


    public function getResources() :array
    {
        return $this->adapter->resources($this->authenticationService->login());
    }

    public function getGlobalFaults() :array
    {
        return $this->adapter->globalFaults($this->authenticationService->login());
    }

    public function getResourceFaults(string $resourceName) :array
    {
        return $this->adapter->globalFaults($this->authenticationService->login(), $resourceName);
    }

}
