<?php

namespace SayaCloud\Api\Login;

use SayaCloud\Contract\RequestAbstract;
use SayaCloud\Lib\RequestMethod;

class LoginUser extends RequestAbstract
{
    protected $apiUri = '/login/user';

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