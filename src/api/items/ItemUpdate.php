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
     * 多个地址，逗号拼接
     * @var string
     */
    protected $images = '';

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
     * enum = 'money', 'points'
     * @var string
     */
    protected $item_deal_type;

    /**
     * 如果是发核销码，设置核核码生效时间
     * @var string
     */
    protected $code_active_time;

    /**
     * 如果是发核销码，设置核核码失效时间
     * @var string
     */
    protected $code_expire_time;

    /**
     * 下单必填字段
     * @var string
     */
    protected $require_field;

    /**
     * 适用门店，服务码可用的门店，多个ID用英文逗号分隔
     * @var string
     */
    protected $bind_shops;

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

    /**
     * @param string $item_deal_type
     */
    public function setItemDealType(string $item_deal_type)
    {
        $this->item_deal_type = $item_deal_type;
    }

    /**
     * @param string $code_active_time
     */
    public function setCodeActiveTime(string $code_active_time): void
    {
        $this->code_active_time = $code_active_time;
    }

    /**
     * @param string $code_expire_time
     */
    public function setCodeExpireTime(string $code_expire_time): void
    {
        $this->code_expire_time = $code_expire_time;
    }

    /**
     * @param string $require_field
     */
    public function setRequireField(string $require_field): void
    {
        $this->require_field = $require_field;
    }

    /**
     * @param string $bind_shops
     */
    public function setBindShops(string $bind_shops): void
    {
        $this->bind_shops = $bind_shops;
    }
}