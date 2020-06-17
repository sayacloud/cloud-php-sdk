<?php

namespace SayaCloud\Api\Refund;

use SayaCloud\Contract\RequestAbstract;
use SayaCloud\Lib\RequestMethod;

class RefundUpdate extends RequestAbstract
{

    protected $apiUri = '/refund/update';

    protected $requestMethod = RequestMethod::POST;

    /**
     * @var int
     */
    protected $id;

    /**
     * @var string
     */
    protected $refund_amount;

    /**
     * @var string
     */
    protected $handler;

    /**
     * @param int $id
     */
    public function setId(int $id): void
    {
        $this->id = $id;
    }

    /**
     * @param string $refund_amount
     */
    public function setRefundAmount(string $refund_amount): void
    {
        $this->refund_amount = $refund_amount;
    }

    /**
     * @param string $handler
     */
    public function setHandler(string $handler): void
    {
        $this->handler = $handler;
    }
}