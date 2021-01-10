<?php

namespace SayaCloud\Api\Wechat;

use SayaCloud\Contract\RequestAbstract;
use SayaCloud\Lib\RequestMethod;

class WechatCustomMessageNews extends RequestAbstract
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
    protected $title;

    /**
     * @var string
     */
    protected $description;

    /**
     * @var string
     */
    protected $image;

    /**
     * @var $url
     */
    protected $url;

    /**
     * @var string
     */
    protected $type = 'news';

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
     * @param string $title
     */
    public function setTitle(string $title): void
    {
        $this->title = $title;
    }

    /**
     * @param string $description
     */
    public function setDescription(string $description): void
    {
        $this->description = $description;
    }

    /**
     * @param string $image
     */
    public function setImage(string $image): void
    {
        $this->image = $image;
    }

    /**
     * @param mixed $url
     */
    public function setUrl($url): void
    {
        $this->url = $url;
    }
}
