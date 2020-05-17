<?php

namespace SayaCloud\Api\User;

use SayaCloud\Contract\RequestAbstract;
use SayaCloud\Lib\RequestMethod;

class UserGroupList extends RequestAbstract
{
    protected $apiUri = '/user/user-group/list';

    protected $requestMethod = RequestMethod::GET;

    /**
     * @var int
     */
    protected $project_id;

    /**
     * @var string
     */
    protected $keyword;

    /**
     * @var int
     */
    protected $page = 1;

    /***
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
     * @param string $keyword
     */
    public function setKeyword(string $keyword): void
    {
        $this->keyword = $keyword;
    }

    /**
     * @param int $page
     */
    public function setPage(int $page): void
    {
        $this->page = $page;
    }

    /**
     * @param int $limit
     */
    public function setLimit(int $limit): void
    {
        $this->limit = $limit;
    }
}