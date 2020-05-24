<?php

namespace SayaCloud\Api\WxMenu;

use SayaCloud\Contract\RequestAbstract;
use SayaCloud\Lib\RequestMethod;

class WxMenuNew extends RequestAbstract
{
    protected $apiUri = '/wechat-menu/create';

    protected $requestMethod = RequestMethod::POST;

    /**
     * @var string
     */
    protected $wechat_appid;

    /**
     * @var string
     */
    protected $name;

    /**
     * enum = click,view,miniprogram
     * @var string
     */
    protected $type;

    /**
     * @var string
     */
    protected $key;

    /**
     * @var string
     */
    protected $url;

    /**
     * @var string
     */
    protected $pagepath;

    /**
     * MiniProgram appid
     * @var string
     */
    protected $appid;

    /**
     * @var int
     */
    protected $sort;

    /**
     * i=in-use, 0=not-in-use
     * @var int
     */
    protected $is_show;

    /**
     * @param string $wechat_appid
     */
    public function setWechatAppid(string $wechat_appid): void
    {
        $this->wechat_appid = $wechat_appid;
    }

    /**
     * @param string $name
     */
    public function setName(string $name): void
    {
        $this->name = $name;
    }

    /**
     * @param string $type
     */
    public function setType(string $type): void
    {
        $this->type = $type;
    }

    /**
     * @param string $key
     */
    public function setKey(string $key): void
    {
        $this->key = $key;
    }

    /**
     * @param string $url
     */
    public function setUrl(string $url): void
    {
        $this->url = $url;
    }

    /**
     * @param string $pagepath
     */
    public function setPagepath(string $pagepath): void
    {
        $this->pagepath = $pagepath;
    }

    /**
     * @param string $appid
     */
    public function setAppid(string $appid): void
    {
        $this->appid = $appid;
    }

    /**
     * @param int $sort
     */
    public function setSort(int $sort): void
    {
        $this->sort = $sort;
    }

    /**
     * @param int $is_show
     */
    public function setIsShow(int $is_show): void
    {
        $this->is_show = $is_show;
    }


}