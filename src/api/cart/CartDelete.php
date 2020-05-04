<?php

namespace SayaCloud\Api\Cart;

use SayaCloud\Contract\RequestAbstract;
use SayaCloud\Lib\RequestMethod;

class CartDelete extends RequestAbstract
{
    protected $apiUri = '/order/cart/delete';

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
}