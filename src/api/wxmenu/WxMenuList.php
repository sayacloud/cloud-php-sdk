<?php

namespace SayaCloud\Api\WxMenu;

use SayaCloud\Contract\RequestAbstract;
use SayaCloud\Lib\RequestMethod;

class WxMenuList extends RequestAbstract
{
    protected $apiUri = '/wechat-menu/list';

    protected $requestMethod = RequestMethod::GET;

    /**
     * required
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