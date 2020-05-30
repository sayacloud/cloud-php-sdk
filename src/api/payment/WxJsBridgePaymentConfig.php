<?php

namespace SayaCloud\Api\Payment;

use SayaCloud\Contract\RequestAbstract;
use SayaCloud\Lib\RequestMethod;

class WxJsBridgePaymentConfig extends RequestAbstract
{
    protected $apiUri = '/payment/wx/js-bridge';

    protected $requestMethod = RequestMethod::POST;

    /**
     * @var string
     */
    protected $payment_id;

    /**
     * @var string
     */
    protected $openid;

    /**
     * @param string $payment_id
     */
    public function setPaymentId(string $payment_id): void
    {
        $this->payment_id = $payment_id;
    }

    /**
     * @param string $openid
     */
    public function setOpenid(string $openid): void
    {
        $this->openid = $openid;
    }
}