<?php

namespace SayaCloud\Api\User;

use SayaCloud\Contract\RequestAbstract;
use SayaCloud\Lib\RequestMethod;

class UserList extends RequestAbstract
{
    protected $apiUri = '/user/list';

    protected $requestMethod = RequestMethod::GET;

    /**
     * @var string
     */
    protected $keyword;

    /**
     * @var int
     */
    protected $project_id;

    /**
     * @var int
     */
    protected $group_id;

    /**
     * @var int
     */
    protected $level_id;

    /**
     * enum = normal,suspended
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
    protected $limit = 20;

    /**
     * @param string $keyword
     */
    public function setKeyword(string $keyword): void
    {
        $this->keyword = $keyword;
    }

    /**
     * @param int $project_id
     */
    public function setProjectId(int $project_id): void
    {
        $this->project_id = $project_id;
    }

    /**
     * @param int $group_id
     */
    public function setGroupId(int $group_id): void
    {
        $this->group_id = $group_id;
    }

    /**
     * @param int $level_id
     */
    public function setLevelId(int $level_id): void
    {
        $this->level_id = $level_id;
    }

    /**
     * @param string $status
     */
    public function setStatus(string $status): void
    {
        $this->status = $status;
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