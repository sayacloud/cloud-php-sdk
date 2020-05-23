<?php

namespace SayaCloud\Api\WxKeyword;

use SayaCloud\Contract\RequestAbstract;
use SayaCloud\Lib\RequestMethod;

class WxKeywordDelete extends RequestAbstract
{
    protected $apiUri = '/wechat-keyword/delete';

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