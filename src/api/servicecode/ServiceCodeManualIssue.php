<?php

namespace SayaCloud\Api\ServiceCode;

use SayaCloud\Contract\RequestAbstract;
use SayaCloud\Lib\RequestMethod;

/**
 * Class ServiceCodeManualIssue
 * @package SayaCloud\Api\ServiceCode
 */
class ServiceCodeManualIssue extends RequestAbstract
{

    protected $apiUri = '/service-code/manual-issue';

    protected $requestMethod = RequestMethod::POST;

    /**
     * @var int
     */
    protected $issue_quantity;

    /**
     * @var int
     */
    protected $buyer_id;

    /**
     * @var int
     */
    protected $sku_id;

    /**
     * @var string
     */
    protected $active_time;

    /**
     * @var string
     */
    protected $expire_time;

    /**
     * @param int $issue_quantity
     */
    public function setIssueQuantity(int $issue_quantity): void
    {
        $this->issue_quantity = $issue_quantity;
    }

    /**
     * @param int $buyer_id
     */
    public function setBuyerId(int $buyer_id): void
    {
        $this->buyer_id = $buyer_id;
    }

    /**
     * @param int $sku_id
     */
    public function setSkuId(int $sku_id): void
    {
        $this->sku_id = $sku_id;
    }

    /**
     * @param string $active_time
     */
    public function setActiveTime(string $active_time): void
    {
        $this->active_time = $active_time;
    }

    /**
     * @param string $expire_time
     */
    public function setExpireTime(string $expire_time): void
    {
        $this->expire_time = $expire_time;
    }

}