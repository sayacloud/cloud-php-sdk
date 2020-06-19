<?php

namespace SayaCloud\Api\Withdraw;

use SayaCloud\Contract\RequestAbstract;
use SayaCloud\Lib\RequestMethod;

class WithdrawConfirm extends RequestAbstract
{
    protected $apiUri = '/withdraw/confirm';

    protected $requestMethod = RequestMethod::POST;

    /**
     * @var int
     */
    protected $id;

    /**
     * @var string
     */
    protected $remark;

    /**
     * @var string
     */
    protected $pay_method;

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
     * @param string $remark
     */
    public function setRemark(string $remark): void
    {
        $this->remark = $remark;
    }

    /**
     * @param string $pay_method
     */
    public function setPayMethod(string $pay_method): void
    {
        $this->pay_method = $pay_method;
    }

    /**
     * @param string $handler
     */
    public function setHandler(string $handler): void
    {
        $this->handler = $handler;
    }


}