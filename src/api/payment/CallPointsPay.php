<?php

namespace SayaCloud\Api\Payment;

use SayaCloud\Contract\RequestAbstract;
use SayaCloud\Lib\RequestMethod;

/**
 * Class CallPointsPay
 * @package SayaCloud\Api\Payment
 */
class CallPointsPay extends RequestAbstract
{
    protected $apiUri = '/payment/points/pay';

    protected $requestMethod = RequestMethod::POST;

    /**
     * @var int
     */
    protected $payment_id;

    /**
     * @var int
     */
    protected $buyer_id;

    /**
     * @param int $payment_id
     */
    public function setPaymentId(int $payment_id): void
    {
        $this->payment_id = $payment_id;
    }

    /**
     * @param int $buyer_id
     */
    public function setBuyerId(int $buyer_id): void
    {
        $this->buyer_id = $buyer_id;
    }

}