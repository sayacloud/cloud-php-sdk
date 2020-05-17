<?php

namespace SayaCloud\Api\WxUser;

use SayaCloud\Contract\RequestAbstract;
use SayaCloud\Lib\RequestMethod;

class UserWechatUpdate extends RequestAbstract
{
    protected $apiUri = '/user-wechat/update';

    protected $requestMethod = RequestMethod::POST;

    /**
     * @var int
     */
    protected $id;

    /**
     * @var int
     */
    protected $user_id;

    /**
     * @var int
     */
    protected $referrer_uid;

    /**
     * @param int $user_id
     */
    public function setUserId(int $user_id): void
    {
        $this->user_id = $user_id;
    }

    /**
     * @param int $id
     */
    public function setId(int $id): void
    {
        $this->id = $id;
    }

    /**
     * @param int $referrer_uid
     */
    public function setReferrerUid(int $referrer_uid): void
    {
        $this->referrer_uid = $referrer_uid;
    }
}