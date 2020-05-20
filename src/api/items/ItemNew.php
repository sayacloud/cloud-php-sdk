<?php

namespace SayaCloud\Api\Items;

use SayaCloud\Contract\RequestAbstract;
use SayaCloud\Lib\RequestMethod;

class ItemNew extends RequestAbstract
{
    protected $requestMethod = RequestMethod::POST;

    protected $apiUri = '/item/create';

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
    protected $category_id;

    /**
     * @var int
     */
    protected $subcategory_id;

    /**
     * @var string
     */
    protected $name;

    /**
     * @var string
     */
    protected $icon;

    /**
     * @var string
     */
    protected $images;

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
    protected $origin_price;

    /**
     * @var string
     */
    protected $unit_price;

    /**
     * @var int
     */
    protected $rank = 100;

    /**
     * enum = 'listed','delisted'
     * @var string
     */
    protected $status = 'delisted';

    /**
     * enum = 'express','pin_code','none'
     * @var string
     */
    protected $ship_method = 'express';

    /**
     * enum = 'money','points'
     * @var string
     */
    protected $item_deal_type = 'money';

    /**
     * @param int $project_id
     */
    public function setProjectId(int $project_id)
    {
        $this->project_id = $project_id;
    }

    /**
     * @param int $shop_id
     */
    public function setShopId(int $shop_id)
    {
        $this->shop_id = $shop_id;
    }

    /**
     * @param int $category_id
     */
    public function setCategoryId(int $category_id)
    {
        $this->category_id = $category_id;
    }

    /**
     * @param int $subcategory_id
     */
    public function setSubcategoryId(int $subcategory_id)
    {
        $this->subcategory_id = $subcategory_id;
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
     * @param string $images
     */
    public function setImages(string $images)
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

    /**
     * @param string $origin_price
     */
    public function setOriginPrice(string $origin_price)
    {
        $this->origin_price = $origin_price;
    }

    /**
     * @param string $item_deal_type
     */
    public function setItemDealType(string $item_deal_type)
    {
        $this->item_deal_type = $item_deal_type;
    }
}