<?php

namespace SayaCloud\Api\Shops;

use SayaCloud\Contract\RequestAbstract;
use SayaCloud\Lib\RequestMethod;

class ShopUserBind extends RequestAbstract
{
    protected $apiUri = '/shop/user/bind';

    protected $requestMethod = RequestMethod::POST;

    /**
     * @var int
     */
    protected $shop_id;

    /**
     * @var int
     */
    protected $user_id;

    /**
     * Enum=admin,staff
     * @var string
     */
    protected $role='admin';

    /**
     * @param int $shop_id
     */
    public function setShopId(int $shop_id): void
    {
        $this->shop_id = $shop_id;
    }

    /**
     * @param int $user_id
     */
    public function setUserId(int $user_id): void
    {
        $this->user_id = $user_id;
    }

    /**
     * @param string $role
     */
    public function setRole(string $role): void
    {
        $this->role = $role;
    }


}