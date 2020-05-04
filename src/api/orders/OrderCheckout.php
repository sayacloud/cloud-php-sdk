<?php

namespace SayaCloud\Api\Orders;

use SayaCloud\Contract\RequestAbstract;
use SayaCloud\Lib\RequestMethod;

class OrderCheckout extends RequestAbstract
{
    protected $apiUri = '/order/cart/checkout';

    protected $requestMethod = RequestMethod::POST;

    /**
     * 多个ID用英文逗号拼接
     * @var string
     */
    protected $cart_ids;

    /**
     * @var int
     */
    protected $buyer_id;

    /**
     * @param string $cart_ids
     */
    public function setCartIds(string $cart_ids)
    {
        $this->cart_ids = $cart_ids;
    }

    /**
     * @param int $buyer_id
     */
    public function setBuyerId(int $buyer_id)
    {
        $this->buyer_id = $buyer_id;
    }
}