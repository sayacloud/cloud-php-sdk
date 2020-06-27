<?php

namespace SayaCloud\Api\Withdraw;

use SayaCloud\Contract\RequestAbstract;
use SayaCloud\Lib\RequestMethod;

class WithdrawModify extends RequestAbstract
{
    protected $apiUri = '/withdraw/modify';

    protected $requestMethod = RequestMethod::POST;

    /**
     * @var int
     */
    protected $id;

    /**
     * @var string
     */
    protected $handling_fee;

    /**
     * @param int $id
     */
    public function setId(int $id): void
    {
        $this->id = $id;
    }

    /**
     * @param string $handling_fee
     */
    public function setHandlingFee(string $handling_fee): void
    {
        $this->handling_fee = $handling_fee;
    }

}