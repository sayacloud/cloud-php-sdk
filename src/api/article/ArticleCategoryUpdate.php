<?php

namespace SayaCloud\Api\Article;

use SayaCloud\Contract\RequestAbstract;
use SayaCloud\Lib\RequestMethod;

class ArticleCategoryUpdate extends RequestAbstract
{
    protected $apiUri = '/article/update';

    protected $requestMethod = RequestMethod::POST;

    /**
     * @var int
     */
    protected $id;

    /**
     * @var string
     */
    protected $type = 'category';

    /**
     * @var string
     */
    protected $title;

    /**
     * @var string
     */
    protected $cover;

    /**
     * @var string
     */
    protected $description;

    /**
     * @var int
     */
    protected $rank;

    /**
     * enum = display, hide
     * @var string
     */
    protected $status;

    /**
     * @param string $title
     */
    public function setTitle(string $title): void
    {
        $this->title = $title;
    }

    /**
     * @param string $cover
     */
    public function setCover(string $cover): void
    {
        $this->cover = $cover;
    }

    /**
     * @param string $description
     */
    public function setDescription(string $description): void
    {
        $this->description = $description;
    }

    /**
     * @param int $rank
     */
    public function setRank(int $rank): void
    {
        $this->rank = $rank;
    }

    /**
     * @param string $status
     */
    public function setStatus(string $status): void
    {
        $this->status = $status;
    }

    /**
     * @param int $id
     */
    public function setId(int $id): void
    {
        $this->id = $id;
    }

}