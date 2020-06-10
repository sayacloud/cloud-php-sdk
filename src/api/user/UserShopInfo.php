<?php

namespace SayaCloud\Api\User;

use SayaCloud\Contract\RequestAbstract;
use SayaCloud\Lib\RequestMethod;

class UserShopInfo extends RequestAbstract
{
    protected $apiUri = '/user/shop/info';

    protected $requestMethod = RequestMethod::GET;

    /**
     * @var int
     */
    protected $user_id;

    /**
     * @param int $user_id
     */
    public function setUserId(int $user_id): void
    {
        $this->user_id = $user_id;
    }
}