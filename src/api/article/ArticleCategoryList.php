<?php

namespace SayaCloud\Api\Article;

use SayaCloud\Contract\RequestAbstract;
use SayaCloud\Lib\RequestMethod;

class CategoryList extends RequestAbstract
{
    protected $apiUri = '/article/list';

    protected $requestMethod = RequestMethod::GET;

    /**
     * @var string
     */
    protected $type = 'category';

    /**
     * @var int
     */
    protected $project_id;

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
    protected $limit = 1000;
}
