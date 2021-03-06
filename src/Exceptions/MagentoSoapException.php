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

namespace Etrias\MagentoConnector\Exceptions;

use Phpro\SoapClient\Type\RequestInterface;
use Phpro\SoapClient\Type\ResultInterface;

class MagentoSoapException extends MagentoConnectorException
{
    /** @var RequestInterface|null */
    protected $request = null;

    /** @var ResultInterface|null */
    protected $response = null;

    /**
     * @return null|RequestInterface
     */
    public function getRequest()
    {
        return $this->request;
    }

    /**
     * @param RequestInterface $request
     *
     * @return MagentoSoapException
     */
    public function setRequest($request)
    {
        $this->request = $request;

        return $this;
    }

    /**
     * @return null|ResultInterface
     */
    public function getResponse()
    {
        return $this->response;
    }

    /**
     * @param null|ResultInterface $response
     *
     * @return MagentoSoapException
     */
    public function setResponse($response)
    {
        $this->response = $response;

        return $this;
    }
}
