<?php

namespace SayaCloud\Api\Article;

use SayaCloud\Contract\RequestAbstract;
use SayaCloud\Lib\RequestMethod;

class ArticleNew extends RequestAbstract
{
    protected $apiUri = '/article/create';

    protected $requestMethod = RequestMethod::POST;

    /**
     * @var int
     */
    protected $project_id;

    /**
     * @var string
     */
    protected $type = 'article';

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
     * @var string
     */
    protected $content;

    /**
     * @var string
     */
    protected $author;

    /**
     * @var string
     */
    protected $origin_link;

    /**
     * @var int
     */
    protected $parent_id;

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
     * @param string $content
     */
    public function setContent(string $content): void
    {
        $this->content = $content;
    }

    /**
     * @param string $author
     */
    public function setAuthor(string $author): void
    {
        $this->author = $author;
    }

    /**
     * @param string $origin_link
     */
    public function setOriginLink(string $origin_link): void
    {
        $this->origin_link = $origin_link;
    }

    /**
     * @param int $parent_id
     */
    public function setParentId(int $parent_id): void
    {
        $this->parent_id = $parent_id;
    }

    /**
     * @param int $project_id
     */
    public function setProjectId(int $project_id): void
    {
        $this->project_id = $project_id;
    }

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

}