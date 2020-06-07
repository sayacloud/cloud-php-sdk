<?php

namespace SayaCloud\Api\Invoice;

use SayaCloud\Contract\RequestAbstract;
use SayaCloud\Lib\RequestMethod;

class InvoiceDetail extends RequestAbstract
{

    protected $apiUri = '/invoice/detail';

    protected $requestMethod = RequestMethod::GET;

    /**
     * @var int
     */
    protected $id;

    /**
     * @param int $id
     */
    public function setId(int $id): void
    {
        $this->id = $id;
    }
}