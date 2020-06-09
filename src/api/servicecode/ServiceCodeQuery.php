<?php

namespace SayaCloud\Api\ServiceCode;

use SayaCloud\Contract\RequestAbstract;
use SayaCloud\Lib\RequestMethod;

class ServiceCodeQuery extends RequestAbstract
{
    protected $apiUri = '/service-code/query';

    protected $requestMethod = RequestMethod::GET;

    /**
     * @var string
     */
    protected $code;

    /**
     * @param string $code
     */
    public function setCode(string $code): void
    {
        $this->code = $code;
    }
}