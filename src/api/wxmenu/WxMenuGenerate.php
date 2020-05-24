<?php

namespace SayaCloud\Api\WxMenu;

use SayaCloud\Contract\RequestAbstract;
use SayaCloud\Lib\RequestMethod;

class WxMenuGenerate extends RequestAbstract
{
    protected $apiUri = '/wechat-menu/generate';

    protected $requestMethod = RequestMethod::POST;

    /**
     * @var string
     */
    protected $app_id;

    /**
     * @param string $app_id
     */
    public function setAppId(string $app_id): void
    {
        $this->app_id = $app_id;
    }
}