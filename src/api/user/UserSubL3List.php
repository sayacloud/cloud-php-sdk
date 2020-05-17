<?php

namespace SayaCloud\Api\User;

use SayaCloud\Contract\RequestAbstract;
use SayaCloud\Lib\RequestMethod;

/**
 * 三级用户列表
 * Class UserSubL1List
 * @package SayaCloud\Api\User
 */
class UserSubL3List extends RequestAbstract
{
    protected $apiUri = '/user/l3/list';

    protected $requestMethod = RequestMethod::GET;

    /**
     * 用户的ID 查询该用户的L3用户列表
     * @var int
     */
    protected $l3_uid;

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
     * @param int $l3_uid
     */
    public function setL3Uid(int $l3_uid): void
    {
        $this->l3_uid = $l3_uid;
    }
}