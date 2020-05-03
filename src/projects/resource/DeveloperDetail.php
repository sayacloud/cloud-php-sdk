<?php

namespace SayaCloud\Projects\Resource;

use SayaCloud\Contract\RequestAbstract;
use SayaCloud\Lib\RequestMethod;

class DeveloperDetail extends RequestAbstract
{
    protected $apiUri = '/developer/detail';

    protected $requestMethod = RequestMethod::GET;

    /**
     * @var int
     */
    protected $id;

    /**
     * @param int $id
     */
    public function setId(int $id)
    {
        $this->id = $id;
    }
}