<?php

namespace SayaCloud\Api\Shops;

use SayaCloud\Contract\RequestAbstract;
use SayaCloud\Lib\RequestMethod;

class ShopDelete extends RequestAbstract
{
    protected $apiUri = '/shop/delete';

    protected $requestMethod = RequestMethod::POST;

    /**
     * @var int
     */
    protected $id;

    /**
     * @param int $id
     */
    public function setId(int $id): void
    {
        $this->id = $id;
    }


}