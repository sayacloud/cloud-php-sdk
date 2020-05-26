<?php

namespace SayaCloud\Api\Login;

use SayaCloud\Contract\RequestAbstract;
use SayaCloud\Lib\RequestMethod;

class MobileSignIn extends RequestAbstract
{
    protected $apiUri = '/login/mobile';

    protected $requestMethod = RequestMethod::POST;

    /**
     * required, verified mobile
     * @var string
     */
    protected $mobile;

    /**
     * third session marked id
     * @var string
     */
    protected $login_key;

    /**
     * 用户邀请人ID
     * @var int
     */
    protected $referrer_uid;

    /**
     * @param string $mobile
     */
    public function setMobile(string $mobile): void
    {
        $this->mobile = $mobile;
    }

    /**
     * @param string $login_key
     */
    public function setLoginKey(string $login_key): void
    {
        $this->login_key = $login_key;
    }

    /**
     * @param int $referrer_uid
     */
    public function setReferrerUid(int $referrer_uid): void
    {
        $this->referrer_uid = $referrer_uid;
    }


}