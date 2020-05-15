<?php

namespace SayaCloud\Api\Adv;

use SayaCloud\Contract\RequestAbstract;
use SayaCloud\Lib\RequestMethod;

class ShopMenuList extends RequestAbstract
{
    protected $apiUri = '/store-menu/list';

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
     * @var string
     */
    protected $position;

    /**
     * @var string
     */
    protected $state;

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
     * @param string $position
     */
    public function setPosition(string $position): void
    {
        $this->position = $position;
    }

    /**
     * @param string $state
     */
    public function setState(string $state): void
    {
        $this->state = $state;
    }
}