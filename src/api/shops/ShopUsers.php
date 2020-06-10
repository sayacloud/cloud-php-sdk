<?php

namespace SayaCloud\Api\Shops;

use SayaCloud\Contract\RequestAbstract;
use SayaCloud\Lib\RequestMethod;

class ShopUsers extends RequestAbstract
{

    protected $apiUri = '/shop/user/list';

    protected $requestMethod = RequestMethod::GET;

    /**
     * @var int
     */
    protected $shop_id;

    /**
     * @param int $shop_id
     */
    public function setShopId(int $shop_id): void
    {
        $this->shop_id = $shop_id;
    }

}