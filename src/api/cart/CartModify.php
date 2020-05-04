<?php

namespace SayaCloud\Api\Cart;

use SayaCloud\Contract\RequestAbstract;
use SayaCloud\Lib\RequestMethod;

class CartModify extends RequestAbstract
{
    protected $apiUri = '/order/cart/modify';

    protected $requestMethod = RequestMethod::POST;

    /**
     * @var int
     */
    protected $id;

    /**
     * @var int
     */
    protected $buyer_id;

    /**
     * @var int
     */
    protected $quantity;

    /**
     * @param int $id
     */
    public function setId(int $id)
    {
        $this->id = $id;
    }

    /**
     * @param int $buyer_id
     */
    public function setBuyerId(int $buyer_id)
    {
        $this->buyer_id = $buyer_id;
    }

    /**
     * @param int $quantity
     */
    public function setQuantity(int $quantity)
    {
        $this->quantity = $quantity;
    }
}