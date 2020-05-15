<?php

namespace SayaCloud\Api\Logs;

use SayaCloud\Contract\RequestAbstract;
use SayaCloud\Lib\RequestMethod;

class LogsList extends RequestAbstract
{
    protected $apiUri = '/logs/list';

    protected $requestMethod = RequestMethod::GET;

    /**
     * @var int
     */
    protected $page = 1;

    /**
     * @var int
     */
    protected $size = 20;

    /**
     * @var string
     */
    protected $resource;

    /**
     * @var int
     */
    protected $relative_id;

    /**
     * @var string
     */
    protected $level;

    /**
     * @param int $page
     */
    public function setPage(int $page): void
    {
        $this->page = $page;
    }

    /**
     * @param int $size
     */
    public function setSize(int $size): void
    {
        $this->size = $size;
    }

    /**
     * @param string $resource
     */
    public function setResource(string $resource): void
    {
        $this->resource = $resource;
    }

    /**
     * @param int $relative_id
     */
    public function setRelativeId(int $relative_id): void
    {
        $this->relative_id = $relative_id;
    }

    /**
     * @param string $level
     */
    public function setLevel(string $level): void
    {
        $this->level = $level;
    }
}