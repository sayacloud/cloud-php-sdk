<?php

namespace SayaCloud\Api\Shops;

use SayaCloud\Contract\RequestAbstract;
use SayaCloud\Lib\RequestMethod;

class ShopCategorySave extends RequestAbstract
{
    protected $apiUri = '/shop/category/save';

    protected $requestMethod = RequestMethod::POST;

    /**
     * @var int
     */
    protected $shop_id;

    /**
     * @var int
     */
    protected $category_id;

    /**
     * @var string
     */
    protected $subcategories;

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
     * @param string $subcategories
     */
    public function setSubcategories(string $subcategories)
    {
        $this->subcategories = $subcategories;
    }
}