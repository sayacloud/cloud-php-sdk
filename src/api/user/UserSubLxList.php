<?php

namespace SayaCloud\Api\User;

use SayaCloud\Contract\RequestAbstract;
use SayaCloud\Lib\RequestMethod;

/**
 * 无限级用户列表
 * Class UserSubL1List
 * @package SayaCloud\Api\User
 */
class UserSubLxList extends RequestAbstract
{
    protected $apiUri = '/user/lx/list';

    protected $requestMethod = RequestMethod::GET;

    /**
     * 用户的ID 查询该用户的L3用户列表
     * @var int
     */
    protected $lx_uid;

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
    protected $limit = 25;

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

    /**
     * @param string $keyword
     */
    public function setKeyword(string $keyword): void
    {
        $this->keyword = $keyword;
    }

    /**
     * @param int $lx_uid
     */
    public function setLxUid(int $lx_uid): void
    {
        $this->lx_uid = $lx_uid;
    }
}