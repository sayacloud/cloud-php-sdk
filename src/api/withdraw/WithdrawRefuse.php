<?php

namespace SayaCloud\Api\Withdraw;

use SayaCloud\Contract\RequestAbstract;
use SayaCloud\Lib\RequestMethod;

class WithdrawRefuse extends RequestAbstract
{
    protected $apiUri = '/withdraw/refuse';

    protected $requestMethod = RequestMethod::POST;

    /**
     * @var int
     */
    protected $id;

    /**
     * @var string
     */
    protected $refuse_reason;

    /**
     * @param int $id
     */
    public function setId(int $id): void
    {
        $this->id = $id;
    }

    /**
     * @param string $refuse_reason
     */
    public function setRefuseReason(string $refuse_reason): void
    {
        $this->refuse_reason = $refuse_reason;
    }


}