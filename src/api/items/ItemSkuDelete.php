<?php

namespace SayaCloud\Api\Items;

use SayaCloud\Contract\RequestAbstract;
use SayaCloud\Lib\RequestMethod;

class ItemSkuDelete extends RequestAbstract
{
    protected $apiUri = '/item/sku/delete';

    protected $requestMethod=RequestMethod::POST;

    /**
     * @var int
     */
    protected $id;

    /**
     * @param int $id
     */
    public function setId(int $id)
    {
        $this->id = $id;
    }

}