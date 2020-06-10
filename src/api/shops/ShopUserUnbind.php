<?php

namespace SayaCloud\Api\Shops;

use SayaCloud\Contract\RequestAbstract;
use SayaCloud\Lib\RequestMethod;

class ShopUserUnbind extends RequestAbstract
{

    protected $apiUri = '/shop/user/unbind';

    protected $requestMethod = RequestMethod::POST;

    /**
     * @var int
     */
    protected $user_id;

    /**
     * @var int
     */
    protected $shop_id;

    /**
     * @param int $user_id
     */
    public function setUserId(int $user_id): void
    {
        $this->user_id = $user_id;
    }

    /**
     * @param int $shop_id
     */
    public function setShopId(int $shop_id): void
    {
        $this->shop_id = $shop_id;
    }


}