<?php

namespace SayaCloud\Api\Subcategories;

use SayaCloud\Contract\RequestAbstract;

class SubcategoryDetail extends RequestAbstract
{
    protected $apiUri = '/subcategory/detail';

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