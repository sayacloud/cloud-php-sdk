<?php

namespace SayaCloud\Api\Categories;

use SayaCloud\Contract\RequestAbstract;
use SayaCloud\Lib\RequestMethod;

class CategoryList extends RequestAbstract
{
    protected $apiUri = '/category/list';

    protected $requestMethod = RequestMethod::GET;

    /**
     * @var int
     */
    protected $project_id;

    protected $page = 1;

    protected $size = 15;

    /**
     * @param int $project_id
     */
    public function setProjectId(int $project_id)
    {
        $this->project_id = $project_id;
    }

    /**
     * @param int $page
     */
    public function setPage(int $page)
    {
        $this->page = $page;
    }

    /**
     * @param int $size
     */
    public function setSize(int $size)
    {
        $this->size = $size;
    }
}