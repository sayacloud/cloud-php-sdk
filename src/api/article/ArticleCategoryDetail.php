<?php

namespace SayaCloud\Api\Article;

use SayaCloud\Contract\RequestAbstract;
use SayaCloud\Lib\RequestMethod;

class ArticleCategoryDetail extends RequestAbstract
{
    protected $apiUri = '/article/detail';

    protected $requestMethod = RequestMethod::GET;

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