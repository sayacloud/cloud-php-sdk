<?php

namespace SayaCloud\Api\Subcategories;

use SayaCloud\Contract\RequestAbstract;
use SayaCloud\Lib\RequestMethod;

class SubcategoryNew extends RequestAbstract
{
    protected $apiUri = '/subcategory/create';

    protected $requestMethod = RequestMethod::POST;
    /**
     * @var int
     */
    protected $project_id;

    /**
     * @var int
     */
    protected $category_id;

    /**
     * @var string
     */
    protected $title;

    /**
     * @var string
     */
    protected $icon;

    /**
     * @var string
     */
    protected $description;

    /**
     * @var int
     */
    protected $rank;

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
     * @param string $title
     */
    public function setTitle(string $title)
    {
        $this->title = $title;
    }

    /**
     * @param string $icon
     */
    public function setIcon(string $icon)
    {
        $this->icon = $icon;
    }

    /**
     * @param string $description
     */
    public function setDescription(string $description)
    {
        $this->description = $description;
    }

    /**
     * @param int $rank
     */
    public function setRank(int $rank)
    {
        $this->rank = $rank;
    }
}