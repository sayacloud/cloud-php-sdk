<?php

namespace SayaCloud\Api\Payment;

use SayaCloud\Contract\RequestAbstract;
use SayaCloud\Lib\RequestMethod;

class PaymentConfirmReceive extends RequestAbstract
{
    protected $apiUri = '/payment/confirm/receive';

    protected $requestMethod = RequestMethod::POST;

    /**
     * @var int
     */
    protected $payment_id;

    /**
     * @param int $payment_id
     */
    public function setPaymentId(int $payment_id): void
    {
        $this->payment_id = $payment_id;
    }
}