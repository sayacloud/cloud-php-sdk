<?php

namespace SayaCloud\Api\UserCoupon;

use SayaCloud\Contract\RequestAbstract;
use SayaCloud\Lib\RequestMethod;

class UserCouponList extends RequestAbstract
{
    protected $apiUri = '/user-coupon/list';

    protected $requestMethod = RequestMethod::GET;

    /**
     * @var int
     */
    protected $project_id;

    /**
     * @var string
     */
    protected $keyword;

    /**
     * @var string
     */
    protected $type;

    /**
     * @var string
     */
    protected $scope;

    /**
     * @var int
     */
    protected $user_id;

    /**
     * @var int
     */
    protected $shop_id;

    /**
     * @var int
     */
    protected $subcategory_id;

    /**
     * @var string
     */
    protected $state;

    /**
     * @var int
     */
    protected $order_id;

    /**
     * @var string
     */
    protected $coupon_origin;

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
     * @param string $keyword
     */
    public function setKeyword(string $keyword): void
    {
        $this->keyword = $keyword;
    }

    /**
     * @param string $type
     */
    public function setType(string $type): void
    {
        $this->type = $type;
    }

    /**
     * @param string $scope
     */
    public function setScope(string $scope): void
    {
        $this->scope = $scope;
    }

    /**
     * @param int $user_id
     */
    public function setUserId(int $user_id): void
    {
        $this->user_id = $user_id;
    }

    /**
     * @param int $shop_id
     */
    public function setShopId(int $shop_id): void
    {
        $this->shop_id = $shop_id;
    }

    /**
     * @param int $subcategory_id
     */
    public function setSubcategoryId(int $subcategory_id): void
    {
        $this->subcategory_id = $subcategory_id;
    }

    /**
     * @param string $state
     */
    public function setState(string $state): void
    {
        $this->state = $state;
    }

    /**
     * @param int $order_id
     */
    public function setOrderId(int $order_id): void
    {
        $this->order_id = $order_id;
    }

    /**
     * @param string $coupon_origin
     */
    public function setCouponOrigin(string $coupon_origin): void
    {
        $this->coupon_origin = $coupon_origin;
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