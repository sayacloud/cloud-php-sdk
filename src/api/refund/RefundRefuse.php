<?php

namespace SayaCloud\Api\Refund;

use SayaCloud\Contract\RequestAbstract;
use SayaCloud\Lib\RequestMethod;

class RefundRefuse extends RequestAbstract
{
    protected $apiUri = '/refund/refuse';

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