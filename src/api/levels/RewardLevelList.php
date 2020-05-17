<?php

namespace SayaCloud\Api\Levels;

use SayaCloud\Contract\RequestAbstract;
use SayaCloud\Lib\RequestMethod;

class RewardLevelList extends RequestAbstract
{
    protected $apiUri = '/user/reward-level/list';

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
     * enum = user, item
     * @var string
     */
    protected $scope;

    /**
     * @var int
     */
    protected $page = 1;

    /**
     * @var int
     */
    protected $limit = 1000;

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
     * @param string $scope
     */
    public function setScope(string $scope): void
    {
        $this->scope = $scope;
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