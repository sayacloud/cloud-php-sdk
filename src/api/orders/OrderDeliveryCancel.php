<?php

namespace SayaCloud\Api\Orders;

use SayaCloud\Contract\RequestAbstract;
use SayaCloud\Lib\RequestMethod;

class OrderDeliveryCancel extends RequestAbstract
{
    protected $apiUri = '/order/delivery/cancel';

    protected $requestMethod = RequestMethod::POST;

    /**
     * @var int
     */
    protected $order_id;

    /**
     * @var string
     */
    protected $handler;

    /**
     * @param int $order_id
     */
    public function setOrderId(int $order_id): void
    {
        $this->order_id = $order_id;
    }

    /**
     * @param string $handler
     */
    public function setHandler(string $handler): void
    {
        $this->handler = $handler;
    }

}