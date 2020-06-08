<?php

namespace SayaCloud\Api\Comment;

use SayaCloud\Contract\RequestAbstract;
use SayaCloud\Lib\RequestMethod;

class CommentDetail extends RequestAbstract
{
    protected $apiUri = '/comment/detail';

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