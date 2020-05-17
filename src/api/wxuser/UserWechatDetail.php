<?php

namespace SayaCloud\Api\WxUser;

use SayaCloud\Contract\RequestAbstract;
use SayaCloud\Lib\RequestMethod;

class UserWechatDetail extends RequestAbstract
{
    protected $apiUri = '/user-wechat/detail';

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