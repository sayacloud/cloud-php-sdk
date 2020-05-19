<?php

namespace SayaCloud\Api\Shops;

use SayaCloud\Contract\RequestAbstract;
use SayaCloud\Lib\RequestMethod;

class ShopDetail extends RequestAbstract
{
    protected $apiUri = '/shop/detail';

    protected $requestMethod = RequestMethod::GET;

    /**
     * @var int
     */
    protected $id;

    /**
     * 返回详情中是否包启店铺账户认息/余额/积分
     * enum = 1 / 0， 1=需要返回
     * @var int
     */
    protected $include_account;

    /**
     * @param int $id
     */
    public function setId(int $id)
    {
        $this->id = $id;
    }

    /**
     * @param int $include_account
     */
    public function setIncludeAccount(int $include_account): void
    {
        $this->include_account = $include_account;
    }
}