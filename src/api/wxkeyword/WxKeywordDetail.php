<?php

namespace SayaCloud\Api\WxKeyword;

use SayaCloud\Contract\RequestAbstract;
use SayaCloud\Lib\RequestMethod;

class WxKeywordDetail extends RequestAbstract
{
    protected $apiUri = '/wechat-keyword/detail';

    protected $requestMethod = RequestMethod::GET;

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
