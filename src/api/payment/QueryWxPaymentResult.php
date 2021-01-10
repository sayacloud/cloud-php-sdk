<?php

namespace SayaCloud\Api\Payment;

use SayaCloud\Contract\RequestAbstract;
use SayaCloud\Lib\RequestMethod;

/**
 * Class QueryWxPaymentResult
 * @package SayaCloud\Api\Payment
 */
class QueryWxPaymentResult extends RequestAbstract
{
    protected $apiUri = '/payment/wx/query-payment';

    protected $requestMethod = RequestMethod::GET;

    /**
     * @var string
     */
    protected $payment_id;

    /**
     * @param string $payment_id
     */
    public function setPaymentId(string $payment_id): void
    {
        $this->payment_id = $payment_id;
    }
}