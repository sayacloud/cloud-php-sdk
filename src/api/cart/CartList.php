<?php

namespace SayaCloud\Api\Cart;

use SayaCloud\Contract\RequestAbstract;
use SayaCloud\Lib\RequestMethod;

class CartList extends RequestAbstract
{

    protected $apiUri = '/order/list';

    protected $requestMethod = RequestMethod::GET;

    /**
     * @var int
     */
    protected $buyer_id;

    /**
     * @var string
     */
    protected $order_type;

    /**
     * @var string
     */
    protected $status = 'in_cart';

    /**
     * @param mixed $buyer_id
     */
    public function setBuyerId($buyer_id)
    {
        $this->buyer_id = $buyer_id;
    }

    /**
     * @param string $status
     */
    public function setStatus(string $status)
    {
        $this->status = $status;
    }

    /**
     * @param mixed $order_type
     */
    public function setOrderType($order_type)
    {
        $this->order_type = $order_type;
    }
}