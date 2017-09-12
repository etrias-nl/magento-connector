<?php
/**
 * Created by PhpStorm.
 * User: cprinse
 * Date: 4-9-17
 * Time: 15:55
 */

namespace Etrias\MagentoConnector\Services;


use Etrias\MagentoConnector\Client\MagentoClientInterface;
use Symfony\Component\Cache\Adapter\AdapterInterface;
use Symfony\Component\Cache\Adapter\NullAdapter;

class AuthenticationService
{
    const CACHE_KEY = 'Magento-session-id-84759b92-9793-11e7-abc4-cec278b6b50a';
    const CACHE_TTL = 60 * 15;

    /** @var MagentoClientInterface */
    protected $client;

    /** @var  string */
    private $username;

    /** @var  string */
    private $apiKey;

    /** @var  AdapterInterface */
    private $cacheAdapter;

    /** @var  integer */
    protected $cacheTtl;

    /** @var  string */
    protected $cacheKey;

    /**
     * AuthenticationService constructor.
     *
     * @param MagentoClientInterface $client
     * @param AdapterInterface|null $cacheAdapter
     * @param string $username
     * @param string $apiKey
     */
    public function __construct(
        MagentoClientInterface $client,
        $username,
        $apiKey,
        AdapterInterface $cacheAdapter = null
    ) {
        $this->client = $client;
        $this->username = $username;
        $this->apiKey = $apiKey;
        if ($cacheAdapter === null) {
            $this->cacheAdapter = new NullAdapter();
        } else {
            $this->cacheAdapter = $cacheAdapter;
        }

        $this->cacheTtl = self::CACHE_TTL;
        $this->cacheKey = self::CACHE_KEY;
    }

    /**
     * @return int
     */
    public function getCacheTtl()
    {
        return $this->cacheTtl;
    }

    /**
     * @param int $cacheTtl
     * @return AuthenticationService
     */
    public function setCacheTtl($cacheTtl)
    {
        $this->cacheTtl = $cacheTtl;

        return $this;
    }

    /**
     * @return string
     */
    public function getCacheKey()
    {
        return $this->cacheKey;
    }

    /**
     * @param string $cacheKey
     * @return AuthenticationService
     */
    public function setCacheKey($cacheKey)
    {
        $this->cacheKey = $cacheKey;

        return $this;
    }

    /**
     * @return string
     */
    public function getSessionId()
    {
        $cacheItem = $this->cacheAdapter->getItem($this->getCacheKey());
        if ($cacheItem->isHit()) {
            return $cacheItem->get();
        }

        $response = $this->client->login($this->username,  $this->apiKey);

        $cacheItem
            ->expiresAfter($this->getCacheTtl())
            ->set($response->getResult());

        $this->cacheAdapter->save($cacheItem);

        return $response->getResult();
    }

}
