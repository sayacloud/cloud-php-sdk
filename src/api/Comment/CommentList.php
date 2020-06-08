<?php

namespace SayaCloud\Api\Comment;

use SayaCloud\Contract\RequestAbstract;
use SayaCloud\Lib\RequestMethod;

class CommentList extends RequestAbstract
{

    protected $apiUri = '/comment/list';

    protected $requestMethod = RequestMethod::GET;

    /**
     * @var int
     */
    protected $item_id;

    /**
     * @var int
     */
    protected $shop_id;

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
    protected $subcategory_id;

    /**
     * @var
     */
    protected $sku_id;

    /**
     * @var string
     */
    protected $keyword;

    /**
     * @var int
     */
    protected $page = 1;

    /**
     * @var int
     */
    protected $limit = 20;

    /**
     * @param int $item_id
     */
    public function setItemId(int $item_id): void
    {
        $this->item_id = $item_id;
    }

    /**
     * @param int $shop_id
     */
    public function setShopId(int $shop_id): void
    {
        $this->shop_id = $shop_id;
    }

    /**
     * @param int $project_id
     */
    public function setProjectId(int $project_id): void
    {
        $this->project_id = $project_id;
    }

    /**
     * @param int $category_id
     */
    public function setCategoryId(int $category_id): void
    {
        $this->category_id = $category_id;
    }

    /**
     * @param int $subcategory_id
     */
    public function setSubcategoryId(int $subcategory_id): void
    {
        $this->subcategory_id = $subcategory_id;
    }

    /**
     * @param mixed $sku_id
     */
    public function setSkuId($sku_id): void
    {
        $this->sku_id = $sku_id;
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