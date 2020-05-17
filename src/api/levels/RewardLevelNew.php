<?php

namespace SayaCloud\Api\Levels;

use SayaCloud\Contract\RequestAbstract;
use SayaCloud\Lib\RequestMethod;

class RewardLevelNew extends RequestAbstract
{
    protected $apiUri = '/user/reward-level/create';

    protected $requestMethod = RequestMethod::POST;

    /**
     * @var int
     */
    protected $project_id;

    /**
     * @var string
     */
    protected $title;

    /**
     * @var string
     */
    protected $icon;

    /**
     * @var int
     */
    protected $valid_days;

    /**
     * @var string
     */
    protected $scope;

    /**
     * @var int
     */
    protected $rank;

    /**
     * @var string
     */
    protected $discount;

    /**
     * @var string
     */
    protected $l0_cash;

    /**
     * @var string
     */
    protected $l0_cash_name;

    /**
     * @var string
     */
    protected $l0_points;

    /**
     * @var string
     */
    protected $l0_points_name;

    /**
     * @var string
     */
    protected $l1_cash;

    /**
     * @var string
     */
    protected $l1_cash_name;

    /**
     * @var string
     */
    protected $l1_points;

    /**
     * @var string
     */
    protected $l1_points_name;

    /**
     * @var string
     */
    protected $l2_cash;

    /**
     * @var string
     */
    protected $l2_cash_name;

    /**
     * @var string
     */
    protected $l2_points;

    /**
     * @var string
     */
    protected $l2_points_name;

    /**
     * @var string
     */
    protected $l3_cash;

    /**
     * @var string
     */
    protected $l3_cash_name;

    /**
     * @var string
     */
    protected $l3_points;

    /**
     * @var string
     */
    protected $l3_points_name;

    /**
     * @var string
     */
    protected $lx_cash;

    /**
     * @var string
     */
    protected $lx_cash_name;

    /**
     * @var string
     */
    protected $lx_points;

    /**
     * @var string
     */
    protected $lx_points_name;

    /**
     * enum = enabled, disabled
     * @var string
     */
    protected $lx_status = 'disabled';

    /**
     * @var string
     */
    protected $global_cash;

    /**
     * @var string
     */
    protected $global_cash_name;

    /**
     * @var string
     */
    protected $global_points;

    /**
     * @var string
     */
    protected $global_points_name;

    /**
     * @param int $project_id
     */
    public function setProjectId(int $project_id): void
    {
        $this->project_id = $project_id;
    }

    /**
     * @param string $title
     */
    public function setTitle(string $title): void
    {
        $this->title = $title;
    }

    /**
     * @param string $icon
     */
    public function setIcon(string $icon): void
    {
        $this->icon = $icon;
    }

    /**
     * @param int $valid_days
     */
    public function setValidDays(int $valid_days): void
    {
        $this->valid_days = $valid_days;
    }

    /**
     * @param string $scope
     */
    public function setScope(string $scope): void
    {
        $this->scope = $scope;
    }

    /**
     * @param int $rank
     */
    public function setRank(int $rank): void
    {
        $this->rank = $rank;
    }

    /**
     * @param string $discount
     */
    public function setDiscount(string $discount): void
    {
        $this->discount = $discount;
    }

    /**
     * @param string $l0_cash
     */
    public function setL0Cash(string $l0_cash): void
    {
        $this->l0_cash = $l0_cash;
    }

    /**
     * @param string $l0_cash_name
     */
    public function setL0CashName(string $l0_cash_name): void
    {
        $this->l0_cash_name = $l0_cash_name;
    }

    /**
     * @param string $l0_points
     */
    public function setL0Points(string $l0_points): void
    {
        $this->l0_points = $l0_points;
    }

    /**
     * @param string $l0_points_name
     */
    public function setL0PointsName(string $l0_points_name): void
    {
        $this->l0_points_name = $l0_points_name;
    }

    /**
     * @param string $l1_cash
     */
    public function setL1Cash(string $l1_cash): void
    {
        $this->l1_cash = $l1_cash;
    }

    /**
     * @param string $l1_cash_name
     */
    public function setL1CashName(string $l1_cash_name): void
    {
        $this->l1_cash_name = $l1_cash_name;
    }

    /**
     * @param string $l1_points
     */
    public function setL1Points(string $l1_points): void
    {
        $this->l1_points = $l1_points;
    }

    /**
     * @param string $l1_points_name
     */
    public function setL1PointsName(string $l1_points_name): void
    {
        $this->l1_points_name = $l1_points_name;
    }

    /**
     * @param string $l2_cash
     */
    public function setL2Cash(string $l2_cash): void
    {
        $this->l2_cash = $l2_cash;
    }

    /**
     * @param string $l2_cash_name
     */
    public function setL2CashName(string $l2_cash_name): void
    {
        $this->l2_cash_name = $l2_cash_name;
    }

    /**
     * @param string $l2_points
     */
    public function setL2Points(string $l2_points): void
    {
        $this->l2_points = $l2_points;
    }

    /**
     * @param string $l2_points_name
     */
    public function setL2PointsName(string $l2_points_name): void
    {
        $this->l2_points_name = $l2_points_name;
    }

    /**
     * @param string $l3_cash
     */
    public function setL3Cash(string $l3_cash): void
    {
        $this->l3_cash = $l3_cash;
    }

    /**
     * @param string $l3_cash_name
     */
    public function setL3CashName(string $l3_cash_name): void
    {
        $this->l3_cash_name = $l3_cash_name;
    }

    /**
     * @param string $l3_points
     */
    public function setL3Points(string $l3_points): void
    {
        $this->l3_points = $l3_points;
    }

    /**
     * @param string $l3_points_name
     */
    public function setL3PointsName(string $l3_points_name): void
    {
        $this->l3_points_name = $l3_points_name;
    }

    /**
     * @param string $lx_cash
     */
    public function setLxCash(string $lx_cash): void
    {
        $this->lx_cash = $lx_cash;
    }

    /**
     * @param string $lx_cash_name
     */
    public function setLxCashName(string $lx_cash_name): void
    {
        $this->lx_cash_name = $lx_cash_name;
    }

    /**
     * @param string $lx_points
     */
    public function setLxPoints(string $lx_points): void
    {
        $this->lx_points = $lx_points;
    }

    /**
     * @param string $global_points_name
     */
    public function setGlobalPointsName(string $global_points_name): void
    {
        $this->global_points_name = $global_points_name;
    }

    /**
     * @param string $global_points
     */
    public function setGlobalPoints(string $global_points): void
    {
        $this->global_points = $global_points;
    }

    /**
     * @param string $global_cash_name
     */
    public function setGlobalCashName(string $global_cash_name): void
    {
        $this->global_cash_name = $global_cash_name;
    }

    /**
     * @param string $global_cash
     */
    public function setGlobalCash(string $global_cash): void
    {
        $this->global_cash = $global_cash;
    }

    /**
     * @param string $lx_points_name
     */
    public function setLxPointsName(string $lx_points_name): void
    {
        $this->lx_points_name = $lx_points_name;
    }

    /**
     * @param string $lx_status
     */
    public function setLxStatus(string $lx_status): void
    {
        $this->lx_status = $lx_status;
    }
}