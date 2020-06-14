<?php

namespace SayaCloud\Api\Orders;

use SayaCloud\Contract\RequestAbstract;
use SayaCloud\Lib\RequestMethod;

class OrderDelivery extends RequestAbstract
{
    protected $apiUri = '/order/delivery';

    protected $requestMethod = RequestMethod::POST;

    /**
     * @var string
     */
    protected $delivery_by;

    /**
     * 多个订单Id 英文逗号分隔
     * @var string
     */
    protected $order;

    /**
     * @var string
     */
    protected $ship_number;

    /**
     * @var string
     */
    protected $hip_company;

    /**
     * @param string $delivery_by
     */
    public function setDeliveryBy(string $delivery_by): void
    {
        $this->delivery_by = $delivery_by;
    }

    /**
     * @param string $order
     */
    public function setOrder(string $order): void
    {
        $this->order = $order;
    }

    /**
     * @param string $ship_number
     */
    public function setShipNumber(string $ship_number): void
    {
        $this->ship_number = $ship_number;
    }

    /**
     * @param string $hip_company
     */
    public function setHipCompany(string $hip_company): void
    {
        $this->hip_company = $hip_company;
    }

}