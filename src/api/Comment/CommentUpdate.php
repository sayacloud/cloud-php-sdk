<?php

namespace SayaCloud\Api\Comment;

use SayaCloud\Contract\RequestAbstract;
use SayaCloud\Lib\RequestMethod;

class CommentUpdate extends RequestAbstract
{
    protected $apiUri = '/comment/update';

    protected $requestMethod = RequestMethod::POST;

    /**
     * @var int
     */
    protected $id;

    /**
     * @var string
     */
    protected $response;

    /**
     * @var string
     */
    protected $addition_comment;

    /**
     * @var int
     */
    protected $rating;

    /**
     * @param int $id
     */
    public function setId(int $id): void
    {
        $this->id = $id;
    }

    /**
     * @param string $response
     */
    public function setResponse(string $response): void
    {
        $this->response = $response;
    }

    /**
     * @param string $addition_comment
     */
    public function setAdditionComment(string $addition_comment): void
    {
        $this->addition_comment = $addition_comment;
    }

    /**
     * @param int $rating
     */
    public function setRating(int $rating): void
    {
        $this->rating = $rating;
    }
}