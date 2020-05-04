<?php

namespace SayaCloud\Api\Items;

use SayaCloud\Contract\RequestAbstract;
use SayaCloud\Lib\RequestMethod;

class ItemSkuNew extends RequestAbstract
{
    protected $apiUri = '/item/sku/create';

    protected $requestMethod = RequestMethod::POST;

    /**
     * @var int
     */
    protected $item_id;

    /**
     * @var int
     */
    protected $project_id;

    /**
     * @var string
     */
    protected $sku_name;

    /**
     * @var float
     */
    protected $cost_price;

    /**
     * @var float
     */
    protected $unit_price;

    /**
     * @var int
     */
    protected $quantity;

    /**
     * @var int
     */
    protected $virtual_visit;

    /**
     * @var int
     */
    protected $virtual_sold;

    /**
     * @param int $item_id
     */
    public function setItemId(int $item_id)
    {
        $this->item_id = $item_id;
    }

    /**
     * @param string $sku_name
     */
    public function setSkuName(string $sku_name)
    {
        $this->sku_name = $sku_name;
    }

    /**
     * @param int $quantity
     */
    public function setQuantity(int $quantity)
    {
        $this->quantity = $quantity;
    }

    /**
     * @param int $virtual_visit
     */
    public function setVirtualVisit(int $virtual_visit)
    {
        $this->virtual_visit = $virtual_visit;
    }

    /**
     * @param int $virtual_sold
     */
    public function setVirtualSold(int $virtual_sold)
    {
        $this->virtual_sold = $virtual_sold;
    }

    /**
     * @param float $cost_price
     */
    public function setCostPrice(float $cost_price)
    {
        $this->cost_price = $cost_price;
    }

    /**
     * @param float $unit_price
     */
    public function setUnitPrice(float $unit_price)
    {
        $this->unit_price = $unit_price;
    }
}