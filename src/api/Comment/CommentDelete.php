<?php

namespace SayaCloud\Api\Comment;

use SayaCloud\Contract\RequestAbstract;
use SayaCloud\Lib\RequestMethod;

class CommentDelete extends RequestAbstract
{

    protected $apiUri = '/comment/delete';

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