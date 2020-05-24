<?php

namespace SayaCloud\Api\WxMenu;

use SayaCloud\Contract\RequestAbstract;
use SayaCloud\Lib\RequestMethod;

class WxMenuDelete extends RequestAbstract
{
    protected $apiUri = '/wechat-menu/delete';

    protected $requestMethod = RequestMethod::POST;

    /**
     * @var int
     */
    protected $id;

    /**
     * @param int $id
     */
    public function setId(int $id): void
    {
        $this->id = $id;
    }
}