<?php

namespace SayaCloud\Api\Shops;

use SayaCloud\Contract\RequestAbstract;
use SayaCloud\Lib\RequestMethod;

/**
 * 获取店铺下的产品类别
 * Class ShopCategories
 * @package SayaCloud\Api\Shops
 */
class ShopCategories extends RequestAbstract
{
    protected $apiUri = '/shop/categories';

    protected $requestMethod = RequestMethod::GET;

    /**
     * @var int
     */
    protected $shop_id;

    /**
     * @param int $shop_id
     */
    public function setShopId(int $shop_id)
    {
        $this->shop_id = $shop_id;
    }
}