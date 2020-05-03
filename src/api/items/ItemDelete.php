<?php

namespace SayaCloud\Api\Items;

use SayaCloud\Contract\RequestAbstract;
use SayaCloud\Lib\RequestMethod;

class ItemDelete extends RequestAbstract
{
    protected $apiUri = '/item/delete';

    protected $requestMethod = RequestMethod::POST;

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