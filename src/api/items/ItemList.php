<?php

namespace SayaCloud\Api\Items;

use SayaCloud\Contract\RequestAbstract;
use SayaCloud\Lib\RequestMethod;

class ItemList extends RequestAbstract
{
    protected $apiUri = '/item/list';

    protected $requestMethod = RequestMethod::GET;

    /**
     * @var int
     */
    protected $project_id;

    /**
     * @var int
     */
    protected $shop_id;

    /**
     * @var int
     */
    protected $category_id;

    /**
     * @var int
     */
    protected $subcategory_id;

    /**
     * @var string
     */
    protected $keyword;

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
    public function setProjectId(int $project_id)
    {
        $this->project_id = $project_id;
    }

    /**
     * @param int $shop_id
     */
    public function setShopId(int $shop_id)
    {
        $this->shop_id = $shop_id;
    }

    /**
     * @param int $category_id
     */
    public function setCategoryId(int $category_id)
    {
        $this->category_id = $category_id;
    }

    /**
     * @param int $subcategory_id
     */
    public function setSubcategoryId(int $subcategory_id)
    {
        $this->subcategory_id = $subcategory_id;
    }

    /**
     * @param string $keyword
     */
    public function setKeyword(string $keyword)
    {
        $this->keyword = $keyword;
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
