<?php

namespace SayaCloud\Api\Coupon;

use SayaCloud\Contract\RequestAbstract;
use SayaCloud\Lib\RequestMethod;

class CouponCreate extends RequestAbstract
{

    protected $apiUri = '/coupon/create';

    protected $requestMethod = RequestMethod::POST;

    /**
     * @var int
     */
    protected $project_id;

    /**
     * @var string
     */
    protected $application;

    /**
     * @var string
     */
    protected $type;

    /**
     * @var string
     */
    protected $cover;

    /**
     * @var float
     */
    protected $value;

    /**
     * @var string
     */
    protected $name;

    /**
     * @var string
     */
    protected $description;

    /**
     * @var int
     */
    protected $quantity;

    /**
     * @var int
     */
    protected $valid_days;

    /**
     * @var int
     */
    protected $expire_at;

    /**
     * @var string
     */
    protected $status;

    /**
     * @var string
     */
    protected $bind_goods_id;

    /**
     * @var int
     */
    protected $max_inactive_days;

    /**
     * @param int $project_id
     */
    public function setProjectId(int $project_id): void
    {
        $this->project_id = $project_id;
    }

    /**
     * @param string $application
     */
    public function setApplication(string $application): void
    {
        $this->application = $application;
    }

    /**
     * @param string $type
     */
    public function setType(string $type): void
    {
        $this->type = $type;
    }

    /**
     * @param string $cover
     */
    public function setCover(string $cover): void
    {
        $this->cover = $cover;
    }

    /**
     * @param float $value
     */
    public function setValue(float $value): void
    {
        $this->value = $value;
    }

    /**
     * @param string $name
     */
    public function setName(string $name): void
    {
        $this->name = $name;
    }

    /**
     * @param string $description
     */
    public function setDescription(string $description): void
    {
        $this->description = $description;
    }

    /**
     * @param int $quantity
     */
    public function setQuantity(int $quantity): void
    {
        $this->quantity = $quantity;
    }

    /**
     * @param int $valid_days
     */
    public function setValidDays(int $valid_days): void
    {
        $this->valid_days = $valid_days;
    }

    /**
     * @param int $expire_at
     */
    public function setExpireAt(int $expire_at): void
    {
        $this->expire_at = $expire_at;
    }

    /**
     * @param string $status
     */
    public function setStatus(string $status): void
    {
        $this->status = $status;
    }

    /**
     * @param string $bind_goods_id
     */
    public function setBindGoodsId(string $bind_goods_id): void
    {
        $this->bind_goods_id = $bind_goods_id;
    }

    /**
     * @param int $max_inactive_days
     */
    public function setMaxInactiveDays(int $max_inactive_days): void
    {
        $this->max_inactive_days = $max_inactive_days;
    }


}