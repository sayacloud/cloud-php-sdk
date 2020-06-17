<?php

namespace SayaCloud\Api\Refund;

use SayaCloud\Contract\RequestAbstract;
use SayaCloud\Lib\RequestMethod;

class RefundApply extends RequestAbstract
{
    protected $apiUri = '/refund/create';

    protected $requestMethod = RequestMethod::POST;

    /**
     * @var int
     */
    protected $order_id;

    /**
     * @var string
     */
    protected $refund_amount;

    /**
     * @var string
     */
    protected $refund_reason;

    /**
     * @var
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
     * @param string $refund_amount
     */
    public function setRefundAmount(string $refund_amount): void
    {
        $this->refund_amount = $refund_amount;
    }

    /**
     * @param string $refund_reason
     */
    public function setRefundReason(string $refund_reason): void
    {
        $this->refund_reason = $refund_reason;
    }

    /**
     * @param mixed $handler
     */
    public function setHandler($handler): void
    {
        $this->handler = $handler;
    }

}