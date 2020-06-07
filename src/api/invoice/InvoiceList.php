<?php

namespace SayaCloud\Api\Invoice;

use SayaCloud\Contract\RequestAbstract;
use SayaCloud\Lib\RequestMethod;

class InvoiceList extends RequestAbstract
{
    protected $apiUri = '/invoice/list';

    protected $requestMethod = RequestMethod::GET;

    /**
     * @var int
     */
    protected $project_id;

    /**
     * @var int
     */
    protected $payment_id;

    /**
     * @var string
     */
    protected $keyword;

    /**
     * @var string
     */
    protected $state;

    /**
     * @var int
     */
    protected $page = 1;

    /**
     * @var int
     */
    protected $limit = 20;

    /**
     * @param int $project_id
     */
    public function setProjectId(int $project_id): void
    {
        $this->project_id = $project_id;
    }

    /**
     * @param int $payment_id
     */
    public function setPaymentId(int $payment_id): void
    {
        $this->payment_id = $payment_id;
    }

    /**
     * @param string $keyword
     */
    public function setKeyword(string $keyword): void
    {
        $this->keyword = $keyword;
    }

    /**
     * @param string $state
     */
    public function setState(string $state): void
    {
        $this->state = $state;
    }

    /**
     * @param int $page
     */
    public function setPage(int $page): void
    {
        $this->page = $page;
    }

    /**
     * @param int $limit
     */
    public function setLimit(int $limit): void
    {
        $this->limit = $limit;
    }


}