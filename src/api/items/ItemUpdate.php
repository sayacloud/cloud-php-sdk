<?php

namespace SayaCloud\Api\Items;

use SayaCloud\Contract\RequestAbstract;
use SayaCloud\Lib\RequestMethod;

class ItemUpdate extends RequestAbstract
{
    protected $requestMethod = RequestMethod::POST;

    protected $apiUri = '/item/update';

    /**
     * @var int
     */
    protected $id;

    /**
     * @var string
     */
    protected $name;

    /**
     * @var string
     */
    protected $icon;

    /**
     * @var array
     */
    protected $images = [];

    /**
     * @var string
     */
    protected $description;

    /**
     * @var string
     */
    protected $content;

    /**
     * @var string
     */
    protected $cost_price;

    /**
     * @var string
     */
    protected $unit_price;

    /**
     * @var int
     */
    protected $rank;

    /**
     * enum = 'listed','delisted'
     * @var string
     */
    protected $status;

    /**
     * enum = 'express','pin_code','none'
     * @var string
     */
    protected $ship_method;

    /**
     * @param int $id
     */
    public function setId(int $id)
    {
        $this->id = $id;
    }

    /**
     * @param string $name
     */
    public function setName(string $name)
    {
        $this->name = $name;
    }

    /**
     * @param string $icon
     */
    public function setIcon(string $icon)
    {
        $this->icon = $icon;
    }

    /**
     * @param array $images
     */
    public function setImages(array $images)
    {
        $this->images = $images;
    }

    /**
     * @param string $description
     */
    public function setDescription(string $description)
    {
        $this->description = $description;
    }

    /**
     * @param string $content
     */
    public function setContent(string $content)
    {
        $this->content = $content;
    }

    /**
     * @param string $cost_price
     */
    public function setCostPrice(string $cost_price)
    {
        $this->cost_price = $cost_price;
    }

    /**
     * @param string $unit_price
     */
    public function setUnitPrice(string $unit_price)
    {
        $this->unit_price = $unit_price;
    }

    /**
     * @param int $rank
     */
    public function setRank(int $rank)
    {
        $this->rank = $rank;
    }

    /**
     * @param string $status
     */
    public function setStatus(string $status)
    {
        $this->status = $status;
    }

    /**
     * @param string $ship_method
     */
    public function setShipMethod(string $ship_method)
    {
        $this->ship_method = $ship_method;
    }
}