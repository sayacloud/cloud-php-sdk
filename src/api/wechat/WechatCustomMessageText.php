<?php

namespace SayaCloud\Api\Wechat;

use SayaCloud\Contract\RequestAbstract;
use SayaCloud\Lib\RequestMethod;

class WechatCustomMessageText extends RequestAbstract
{
    protected $apiUri = '/wechat-message/send';

    protected $requestMethod = RequestMethod::POST;

    /**
     * @var string
     */
    protected $appid;

    /**
     * @var string
     */
    protected $openid;

    /**
     * @var string
     */
    protected $content;

    /**
     * @var string
     */
    protected $type = 'text';

    /**
     * @param string $appid
     */
    public function setAppid(string $appid): void
    {
        $this->appid = $appid;
    }

    /**
     * @param string $openid
     */
    public function setOpenid(string $openid): void
    {
        $this->openid = $openid;
    }

    /**
     * @param string $content
     */
    public function setContent(string $content): void
    {
        $this->content = $content;
    }
}
