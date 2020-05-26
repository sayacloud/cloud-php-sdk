<?php

namespace SayaCloud\Api\Login;

use SayaCloud\Contract\RequestAbstract;
use SayaCloud\Lib\RequestMethod;

class BindWechat extends RequestAbstract
{
    protected $apiUri = '/login/bind-wx';

    protected $requestMethod = RequestMethod::POST;

    /**
     * @var string
     */
    protected $login_key;

    /**
     * @param string $login_key
     */
    public function setLoginKey(string $login_key): void
    {
        $this->login_key = $login_key;
    }
}