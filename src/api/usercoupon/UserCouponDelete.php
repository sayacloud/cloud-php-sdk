<?php

namespace SayaCloud\Api\UserCoupon;

use SayaCloud\Contract\RequestAbstract;
use SayaCloud\Lib\RequestMethod;

/**
 * Class UserCouponDelete
 * @package SayaCloud\Api\UserCoupon
 */
class UserCouponDelete extends RequestAbstract
{

    protected $apiUri = '/user-coupon/delete';

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