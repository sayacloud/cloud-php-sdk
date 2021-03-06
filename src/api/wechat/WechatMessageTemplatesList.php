<?php

namespace SayaCloud\Api\Wechat;

use SayaCloud\Contract\RequestAbstract;
use SayaCloud\Lib\RequestMethod;

class WechatMessageTemplatesList extends RequestAbstract
{
    protected $apiUri = '/wechat-message-template/list';

    protected $requestMethod = RequestMethod::GET;

    /**
     * @var string
     */
    protected $appid;

    /**
     * @param string $appid
     */
    public function setAppid(string $appid): void
    {
        $this->appid = $appid;
    }
}