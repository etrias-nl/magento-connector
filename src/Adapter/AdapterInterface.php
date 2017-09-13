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

namespace Etrias\MagentoConnector\Adapter;

use Etrias\MagentoConnector\SoapTypes\ApiEntity;

interface AdapterInterface
{
    /**
     * @param string $username
     * @param string $password
     *
     * @return string SessionID
     */
    public function login(string $username, string $password): string;

    /**
     * @return string SessionId
     */
    public function startSession(): string;

    /**
     * @param string $sessionId
     *
     * @return bool
     */
    public function endSession(string $sessionId): bool;

    /**
     * @param string $sessionId
     *
     * @return ApiEntity[]
     */
    public function resources(string $sessionId): array;

    public function globalFaults(string $sessionId): array;

    public function resourceFaults(string $sessionId, string $resourceName): array;
}
