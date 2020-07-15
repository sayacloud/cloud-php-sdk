<?php

namespace SayaCloud\Api\UserCoupon;

use SayaCloud\Contract\RequestAbstract;
use SayaCloud\Lib\RequestMethod;

/**
 * Class UserCouponDetail
 * @package SayaCloud\Api\UserCoupon
 */
class UserCouponDetail extends RequestAbstract
{

    protected $apiUri = '/user-coupon/detail';

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