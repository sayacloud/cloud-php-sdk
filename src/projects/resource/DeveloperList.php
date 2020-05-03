<?php

namespace SayaCloud\Projects\Resource;

use SayaCloud\Contract\RequestAbstract;
use SayaCloud\Lib\RequestMethod;

class DeveloperList extends RequestAbstract
{
    protected $apiUri = '/developer/list';

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
     * enum = 'normal','disabled'
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
     * @param string $keyword
     */
    public function setKeyword(string $keyword)
    {
        $this->keyword = $keyword;
    }

    /**
     * @param int $project_id
     */
    public function setProjectId(int $project_id)
    {
        $this->project_id = $project_id;
    }

    /**
     * @param string $status
     */
    public function setStatus(string $status)
    {
        $this->status = $status;
    }

    /**
     * @param int $page
     */
    public function setPage(int $page)
    {
        $this->page = $page;
    }

    /**
     * @param int $limit
     */
    public function setLimit(int $limit)
    {
        $this->limit = $limit;
    }
}