<?php

namespace SayaCloud\Api\Subcategories;

use SayaCloud\Contract\RequestAbstract;
use SayaCloud\Lib\RequestMethod;

class SubcategoryDelete extends RequestAbstract
{
    protected $apiUri = '/subcategory/delete';

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