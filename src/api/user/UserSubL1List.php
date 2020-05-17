<?php

namespace SayaCloud\Api\User;

use SayaCloud\Contract\RequestAbstract;
use SayaCloud\Lib\RequestMethod;

/**
 * 一级用户列表
 * Class UserSubL1List
 * @package SayaCloud\Api\User
 */
class UserSubL1List extends RequestAbstract
{
    protected $apiUri = '/user/l1/list';

    protected $requestMethod = RequestMethod::GET;

    /**
     * @var int
     */
    protected $referrer_id;

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
     * @param int $referrer_id
     */
    public function setReferrerId(int $referrer_id): void
    {
        $this->referrer_id = $referrer_id;
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

    /**
     * @param string $keyword
     */
    public function setKeyword(string $keyword): void
    {
        $this->keyword = $keyword;
    }
}