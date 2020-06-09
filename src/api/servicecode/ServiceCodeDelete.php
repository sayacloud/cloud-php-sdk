<?php

namespace SayaCloud\Api\ServiceCode;

use SayaCloud\Contract\RequestAbstract;
use SayaCloud\Lib\RequestMethod;

class ServiceCodeDelete extends RequestAbstract
{

    protected $apiUri = '/service-code/delete';

    protected $requestMethod = RequestMethod::POST;

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