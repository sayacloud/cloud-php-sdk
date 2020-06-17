<?php

namespace SayaCloud\Api\Refund;

use SayaCloud\Contract\RequestAbstract;
use SayaCloud\Lib\RequestMethod;

class RefundList extends RequestAbstract
{
    protected $apiUri = '/refund/list';

    protected $requestMethod = RequestMethod::GET;

    /**
     * @var int
     */
    protected $project_id;

    /**
     * @var int
     */
    protected $buyer_id;

    /**
     * @var int
     */
    protected $order_id;

    /**
     * @var int
     */
    protected $payment_id;

    /**
     * @var int
     */
    protected $shop_id;

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
     * @param int $buyer_id
     */
    public function setBuyerId(int $buyer_id): void
    {
        $this->buyer_id = $buyer_id;
    }

    /**
     * @param int $order_id
     */
    public function setOrderId(int $order_id): void
    {
        $this->order_id = $order_id;
    }

    /**
     * @param int $payment_id
     */
    public function setPaymentId(int $payment_id): void
    {
        $this->payment_id = $payment_id;
    }

    /**
     * @param int $shop_id
     */
    public function setShopId(int $shop_id): void
    {
        $this->shop_id = $shop_id;
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