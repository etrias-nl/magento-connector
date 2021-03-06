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

namespace Etrias\MagentoConnector\Services;

use BadMethodCallException;
use Etrias\MagentoConnector\Adapter\AdapterInterface as MagentoAdapterInterface;
use Symfony\Component\Cache\Adapter\AdapterInterface;
use Symfony\Component\Cache\Adapter\NullAdapter;

class AuthenticationService
{
    const CACHE_KEY = 'Magento-session-id-84759b92-9793-11e7-abc4-cec278b6b50a';
    const CACHE_TTL = 60 * 15;

    /** @var MagentoAdapterInterface */
    protected $adapter;

    /** @var int */
    protected $cacheTtl;

    /** @var string */
    protected $cacheKey;

    /** @var string */
    private $username;

    /** @var string */
    private $apiKey;

    /** @var AdapterInterface */
    private $cacheAdapter;

    /**
     * AuthenticationService constructor.
     *
     * @param MagentoAdapterInterface $adapter
     * @param string                  $username
     * @param string                  $apiKey
     * @param AdapterInterface|null   $cacheAdapter
     */
    public function __construct(
        MagentoAdapterInterface $adapter,
        $username,
        $apiKey,
        AdapterInterface $cacheAdapter = null
    ) {
        $this->adapter = $adapter;
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
     *
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
     *
     * @return AuthenticationService
     */
    public function setCacheKey($cacheKey)
    {
        $this->cacheKey = $cacheKey;

        return $this;
    }

    /**
     * @throws BadMethodCallException
     */
    public function startSession(): string
    {
        throw new BadMethodCallException('Please use the loginMethod');
    }

    /**
     * @return bool
     */
    public function endSession(): bool
    {
        $cacheItem = $this->cacheAdapter->getItem($this->getCacheKey());
        if ($cacheItem->isHit()) {
            $endSessionResult = $this->adapter->endSession($cacheItem->get());
            $this->cacheAdapter->deleteItem($cacheItem->getKey());

            return $endSessionResult;
        }

        return true;
    }

    /**
     * @param bool $force
     *
     * @return string SessionId
     */
    public function login(bool $force = false): string
    {
        $cacheItem = $this->cacheAdapter->getItem($this->getCacheKey());
        if ($cacheItem->isHit() && !$force) {
            return $cacheItem->get();
        }

        $response = $this->adapter->login($this->username, $this->apiKey);

        $cacheItem
            ->expiresAfter($this->getCacheTtl())
            ->set($response);

        $this->cacheAdapter->save($cacheItem);

        return $response;
    }
}
