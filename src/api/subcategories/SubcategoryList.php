<?php

namespace SayaCloud\Api\Subcategories;

use SayaCloud\Contract\RequestAbstract;

class SubcategoryList extends RequestAbstract
{
    protected $apiUri = '/subcategory/list';

    /**
     * @var int
     */
    protected $project_id;

    /**
     * @var int
     */
    protected $category_id;

    /**
     * @var int
     */
    protected $page = 1;

    /**
     * @var int
     */
    protected $limit = 100;

    /**
     * @param int $project_id
     */
    public function setProjectId(int $project_id)
    {
        $this->project_id = $project_id;
    }

    /**
     * @param int $category_id
     */
    public function setCategoryId(int $category_id)
    {
        $this->category_id = $category_id;
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