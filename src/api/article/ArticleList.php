<?php

namespace SayaCloud\Api\Article;

use SayaCloud\Contract\RequestAbstract;
use SayaCloud\Lib\RequestMethod;

class ArticleList extends RequestAbstract
{
    protected $apiUri = '/article/list';

    protected $requestMethod = RequestMethod::GET;

    /**
     * @var string
     */
    protected $type = 'article';

    /**
     * @var int
     */
    protected $project_id;

    /**
     * @var int
     */
    protected $parent_id;

    /**
     * @var string
     */
    protected $status;

    /**
     * @var int
     */
    protected $page = 1;

    /**
     * @var int
     */
    protected $limit = 15;

    /**
     * @param int $project_id
     */
    public function setProjectId(int $project_id): void
    {
        $this->project_id = $project_id;
    }

    /**
     * @param string $status
     */
    public function setStatus(string $status): void
    {
        $this->status = $status;
    }

    /**
     * @param int $parent_id
     */
    public function setParentId(int $parent_id): void
    {
        $this->parent_id = $parent_id;
    }
}
