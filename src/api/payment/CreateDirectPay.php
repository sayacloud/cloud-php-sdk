<?php

namespace SayaCloud\Api\Payment;

use SayaCloud\Contract\RequestAbstract;
use SayaCloud\Lib\RequestMethod;

class CreateDirectPay extends RequestAbstract
{
    protected $apiUri = '/payment/direct/create';

    protected $requestMethod = RequestMethod::POST;

    /**
     * @var string
     */
    protected $pay_amount;

    /**
     * @param string $pay_amount
     */
    public function setPayAmount(string $pay_amount): void
    {
        $this->pay_amount = $pay_amount;
    }

}
