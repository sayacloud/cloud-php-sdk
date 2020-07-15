<?php

namespace SayaCloud\Api\UserCoupon;

use SayaCloud\Contract\RequestAbstract;
use SayaCloud\Lib\RequestMethod;

/**
 * Class UserCouponUpdate
 * @package SayaCloud\Api\UserCoupon
 */
class UserCouponUpdate extends RequestAbstract
{
    protected $apiUri = '/user-coupon/update';

    protected $requestMethod = RequestMethod::POST;

    /**
     * @var int
     */
    protected $id;

    /**
     * @var int
     */
    protected $project_id;

    /**
     * @var int
     */
    protected $user_id;

    /**
     * @var int
     */
    protected $tpl_coupon_id;

    /**
     * @var string
     */
    protected $scope;

    /**
     * @var int
     */
    protected $subcategory_id;

    /**
     * @var int
     */
    protected $shop_id;

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
    protected $get_time;

    /**
     * @var string
     */
    protected $bind_goods_id;

    /**
     * @var string
     */
    protected $state;

    /**
     * @var int
     */
    protected $expire_time;

    /**
     * @var string
     */
    protected $remark;

    /**
     * @var int
     */
    protected $create_time;

    /**
     * @var int
     */
    protected $update_time;

    /**
     * @var int
     */
    protected $deleted;

    /**
     * @var int
     */
    protected $use_time;

    /**
     * @var int
     */
    protected $order_id;

    /**
     * @var int
     */
    protected $parent_id;

    /**
     * @var string
     */
    protected $coupon_origin;

    /**
     * @var int
     */
    protected $inactive_deadline;

    /**
     * @var int
     */
    protected $active_by_uid;

    /**
     * @param int $id
     */
    public function setId(int $id): void
    {
        $this->id = $id;
    }

    /**
     * @param int $project_id
     */
    public function setProjectId(int $project_id): void
    {
        $this->project_id = $project_id;
    }

    /**
     * @param int $user_id
     */
    public function setUserId(int $user_id): void
    {
        $this->user_id = $user_id;
    }

    /**
     * @param int $tpl_coupon_id
     */
    public function setTplCouponId(int $tpl_coupon_id): void
    {
        $this->tpl_coupon_id = $tpl_coupon_id;
    }

    /**
     * @param string $scope
     */
    public function setScope(string $scope): void
    {
        $this->scope = $scope;
    }

    /**
     * @param int $subcategory_id
     */
    public function setSubcategoryId(int $subcategory_id): void
    {
        $this->subcategory_id = $subcategory_id;
    }

    /**
     * @param int $shop_id
     */
    public function setShopId(int $shop_id): void
    {
        $this->shop_id = $shop_id;
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
     * @param int $get_time
     */
    public function setGetTime(int $get_time): void
    {
        $this->get_time = $get_time;
    }

    /**
     * @param string $bind_goods_id
     */
    public function setBindGoodsId(string $bind_goods_id): void
    {
        $this->bind_goods_id = $bind_goods_id;
    }

    /**
     * @param string $state
     */
    public function setState(string $state): void
    {
        $this->state = $state;
    }

    /**
     * @param int $expire_time
     */
    public function setExpireTime(int $expire_time): void
    {
        $this->expire_time = $expire_time;
    }

    /**
     * @param string $remark
     */
    public function setRemark(string $remark): void
    {
        $this->remark = $remark;
    }

    /**
     * @param int $create_time
     */
    public function setCreateTime(int $create_time): void
    {
        $this->create_time = $create_time;
    }

    /**
     * @param int $update_time
     */
    public function setUpdateTime(int $update_time): void
    {
        $this->update_time = $update_time;
    }

    /**
     * @param int $deleted
     */
    public function setDeleted(int $deleted): void
    {
        $this->deleted = $deleted;
    }

    /**
     * @param int $use_time
     */
    public function setUseTime(int $use_time): void
    {
        $this->use_time = $use_time;
    }

    /**
     * @param int $order_id
     */
    public function setOrderId(int $order_id): void
    {
        $this->order_id = $order_id;
    }

    /**
     * @param int $parent_id
     */
    public function setParentId(int $parent_id): void
    {
        $this->parent_id = $parent_id;
    }

    /**
     * @param string $coupon_origin
     */
    public function setCouponOrigin(string $coupon_origin): void
    {
        $this->coupon_origin = $coupon_origin;
    }

    /**
     * @param int $inactive_deadline
     */
    public function setInactiveDeadline(int $inactive_deadline): void
    {
        $this->inactive_deadline = $inactive_deadline;
    }

    /**
     * @param int $active_by_uid
     */
    public function setActiveByUid(int $active_by_uid): void
    {
        $this->active_by_uid = $active_by_uid;
    }


}