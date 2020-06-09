<?php

namespace SayaCloud\Api\ServiceCode;

use SayaCloud\Contract\RequestAbstract;
use SayaCloud\Lib\RequestMethod;

class ServiceCodeDetail extends RequestAbstract
{
    protected $apiUri = '/service-code/detail';

    protected $requestMethod = RequestMethod::GET;

    /**
     * @var int
     */
    protected $id;

    /**
     * @param int $id
     */
    public function setId(int $id): void
    {
        $this->id = $id;
    }
}