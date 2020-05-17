<?php

namespace SayaCloud\Api\User;

use SayaCloud\Contract\RequestAbstract;
use SayaCloud\Lib\RequestMethod;

class UserGroupDetail extends RequestAbstract
{
    protected $apiUri = '/user/user-group/detail';

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