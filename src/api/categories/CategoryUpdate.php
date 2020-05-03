<?php

namespace SayaCloud\Api\Categories;

use SayaCloud\Contract\RequestAbstract;
use SayaCloud\Lib\RequestMethod;

class CategoryUpdate extends RequestAbstract
{
    protected $apiUri = '/category/update';

    protected $requestMethod = RequestMethod::POST;

    /**
     * @var int
     */
    protected $id;

    /**
     * max length 20
     * @var string
     */
    protected $title;

    /**
     * @var string
     */
    protected $icon;

    /**
     * @var float
     */
    protected $settlement_rate;

    /**
     * @var int
     */
    protected $rank;

    /**
     * @param int $id
     */
    public function setId(int $id)
    {
        $this->id = $id;
    }

    /**
     * @param string $title
     */
    public function setTitle(string $title)
    {
        $this->title = $title;
    }

    /**
     * @param string $icon
     */
    public function setIcon(string $icon)
    {
        $this->icon = $icon;
    }

    /**
     * @param float $settlement_rate
     */
    public function setSettlementRate(float $settlement_rate)
    {
        $this->settlement_rate = $settlement_rate;
    }

    /**
     * @param int $rank
     */
    public function setRank(int $rank)
    {
        $this->rank = $rank;
    }

}