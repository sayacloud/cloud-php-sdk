<?php

namespace SayaCloud\Api\Payment;

use SayaCloud\Contract\RequestAbstract;
use SayaCloud\Lib\RequestMethod;

/**
 * Class PaymentList
 * @package SayaCloud\Api\Payment
 */
class PaymentList extends RequestAbstract
{

    protected $apiUri = '/payment/list';

    protected $requestMethod = RequestMethod::GET;

    /**
     * @var int
     */
    protected $page = 1;

    /**
     * @var int
     */
    protected $limit = 20;

    /**
     * @var int
     */
    protected $project_id;

    /**
     * @var int
     */
    protected $shop_id;

    /**
     * @var int
     */
    protected $buyer_id;

    /**
     * @var string
     */
    protected $pay_method;

    /**
     * @var string
     */
    protected $pay_type;

    /**
     * @var int
     */
    protected $bank_id;

    /**
     * @var string
     */
    protected $state;

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

    /**
     * @param int $project_id
     */
    public function setProjectId(int $project_id): void
    {
        $this->project_id = $project_id;
    }

    /**
     * @param int $shop_id
     */
    public function setShopId(int $shop_id): void
    {
        $this->shop_id = $shop_id;
    }

    /**
     * @param int $buyer_id
     */
    public function setBuyerId(int $buyer_id): void
    {
        $this->buyer_id = $buyer_id;
    }

    /**
     * @param string $pay_method
     */
    public function setPayMethod(string $pay_method): void
    {
        $this->pay_method = $pay_method;
    }

    /**
     * @param string $pay_type
     */
    public function setPayType(string $pay_type): void
    {
        $this->pay_type = $pay_type;
    }

    /**
     * @param int $bank_id
     */
    public function setBankId(int $bank_id): void
    {
        $this->bank_id = $bank_id;
    }

    /**
     * @param string $state
     */
    public function setState(string $state): void
    {
        $this->state = $state;
    }


}