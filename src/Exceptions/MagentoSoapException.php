<?php

/*
 * This file is part of PHP CS Fixer.
 *
 * (c) Fabien Potencier <fabien@symfony.com>
 *     Dariusz Rumiński <dariusz.ruminski@gmail.com>
 *
 * This source file is subject to the MIT license that is bundled
 * with this source code in the file LICENSE.
 */

namespace Etrias\EwarelConnector\Exceptions;

use Exception;
use Phpro\SoapClient\Type\RequestInterface;
use Phpro\SoapClient\Type\ResultInterface;

class EwarehousingException extends Exception
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
     * @param null|RequestInterface $request
     *
     * @return EwarehousingException
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
     * @return EwarehousingException
     */
    public function setResponse($response)
    {
        $this->response = $response;

        return $this;
    }
}
