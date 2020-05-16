<?php

namespace SayaCloud\Api\User;

use SayaCloud\Contract\RequestAbstract;
use SayaCloud\Lib\RequestMethod;

class UserLogin extends RequestAbstract
{
    protected $apiUri = '/user/login';

    protected $requestMethod = RequestMethod::POST;

    /**
     * @var string
     */
    protected $account;

    /**
     * @var string
     */
    protected $password;

    /**
     * @param string $account
     */
    public function setAccount(string $account): void
    {
        $this->account = $account;
    }

    /**
     * @param string $password
     */
    public function setPassword(string $password): void
    {
        $this->password = $password;
    }
}