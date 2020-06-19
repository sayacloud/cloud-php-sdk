<?php

namespace SayaCloud\Api\Withdraw;

use SayaCloud\Contract\RequestAbstract;
use SayaCloud\Lib\RequestMethod;

class WithdrawList extends RequestAbstract
{
    protected $apiUri = '/withdraw/list';

    protected $requestMethod = RequestMethod::GET;

    /**
     * @var int
     */
    protected $project_id;

    /**
     * pending/completed/refused
     * @var string
     */
    protected $state;

    /**
     * shop/user
     * @var string
     */
    protected $account_type;

    /**
     * @var int
     */
    protected $page = 1;

    /**
     * @var int
     */
    protected $size = 20;

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
     * @param int $project_id
     */
    public function setProjectId(int $project_id): void
    {
        $this->project_id = $project_id;
    }

    /**
     * @param string $state
     */
    public function setState(string $state): void
    {
        $this->state = $state;
    }

    /**
     * @param string $account_type
     */
    public function setAccountType(string $account_type): void
    {
        $this->account_type = $account_type;
    }


}