<?php

namespace SayaCloud\Api\Items;

use SayaCloud\Contract\RequestAbstract;
use SayaCloud\Lib\RequestMethod;

class ItemServiceShops extends RequestAbstract
{
    protected $apiUri = '/item/service/shops';

    protected $requestMethod = RequestMethod::GET;

    /**
     * @var int
     */
    protected $item_id;

    /**
     * @param int $item_id
     */
    public function setItemId(int $item_id): void
    {
        $this->item_id = $item_id;
    }
}