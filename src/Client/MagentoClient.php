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

namespace Etrias\MagentoConnector\Client;

use Phpro\SoapClient\Client;
use Phpro\SoapClient\Exception\SoapException;
use Phpro\SoapClient\Type\RequestInterface;
use Phpro\SoapClient\Type\ResultInterface;

class MagentoClient extends Client implements MagentoClientInterface
{
    /**
     * @param string           $method
     * @param RequestInterface $request
     *
     * @throws SoapException
     *
     * @return ResultInterface
     */
    public function call($method, RequestInterface $request)
    {
        return parent::call($method, $request);
    }
}
