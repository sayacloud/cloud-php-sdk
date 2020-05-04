<?php

namespace SayaCloud\Api\Cart;

use SayaCloud\Contract\RequestAbstract;
use SayaCloud\Lib\RequestMethod;

class CartAdd extends RequestAbstract
{
    protected $apiUri = '/order/cart/add';

    protected $requestMethod = RequestMethod::POST;

    /**
     * @var int
     */
    protected $item_id;

    /**
     * @var int
     */
    protected $sku_id;

    /**
     * @var int
     */
    protected $buyer_id;

    /**
     * enum = 'points','money'
     * @var string
     */
    protected $order_type;

    /**
     * 积分订单，只支持online
     * enum = 'online','offline','delivery'
     * @var string
     */
    protected $pay_method;

    /**
     * @var int
     */
    protected $quantity;

    /**
     * @var string
     */
    protected $user_name;

    /**
     * @var string
     */
    protected $user_tel;

    /**
     * @var string
     */
    protected $user_address;

    /**
     * @var string
     */
    protected $user_remark;

    /**
     * @var string
     */
    protected $created_by;

    /**
     * @var string
     */
    protected $province;

    /**
     * @var string
     */
    protected $city;

    /**
     * @var string
     */
    protected $district;
}