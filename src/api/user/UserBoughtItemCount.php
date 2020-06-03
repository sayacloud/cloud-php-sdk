<?php

namespace SayaCloud\Api\User;

use SayaCloud\Contract\RequestAbstract;
use SayaCloud\Lib\RequestMethod;

/**
 * 查询用户已购买产品数量
 * Class UserBoughtItemCount
 * @package SayaCloud\Api\Orders
 */
class UserBoughtItemCount extends RequestAbstract
{
    protected $apiUri = '/user/bought/item/count';

    protected $requestMethod = RequestMethod::GET;

    /**
     * required
     * @var int
     */
    protected $user_id;

    /**
     * required
     * @var int
     */
    protected $item_id;

    /**
     * Optional
     * @var int
     */
    protected $sku_id;

    /**
     * @param int $user_id
     */
    public function setUserId(int $user_id): void
    {
        $this->user_id = $user_id;
    }

    /**
     * @param int $item_id
     */
    public function setItemId(int $item_id): void
    {
        $this->item_id = $item_id;
    }

    /**
     * @param int $sku_id
     */
    public function setSkuId(int $sku_id): void
    {
        $this->sku_id = $sku_id;
    }


}