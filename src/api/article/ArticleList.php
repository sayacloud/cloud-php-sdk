<?php

namespace SayaCloud\Api\Article;

use SayaCloud\Contract\RequestAbstract;
use SayaCloud\Lib\RequestMethod;

class ArticleCategoryList extends RequestAbstract
{
    protected $apiUri = '/article/list';

    protected $requestMethod = RequestMethod::GET;

    /**
     * @var string
     */
    protected $type = 'category';

    /**
     * @var int
     */
    protected $project_id;

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
    protected $limit = 1000;

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
}
