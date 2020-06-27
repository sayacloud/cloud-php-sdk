<?php

namespace SayaCloud\Api\Withdraw;

use SayaCloud\Contract\RequestAbstract;
use SayaCloud\Lib\RequestMethod;

class WithdrawNew extends RequestAbstract
{
    protected $apiUri = '/withdraw/create';

    protected $requestMethod = RequestMethod::POST;

    /**
     * shop/user
     * @var string
     */
    protected $account_type;

    /**
     * 对应 shop /user id
     * @var int
     */
    protected $account_id;

    /**
     * 收款人用户ID
     * @var int
     */
    protected $user_id;

    /**
     * 提现金额
     * @var string
     */
    protected $withdraw_amount;

    /**
     * 收款账户
     * @var string
     */
    protected $receiving_account;

    /**
     * 收款账号/银行名称
     * @var string
     */
    protected $receiving_account_name;

    /**
     * 收款账户类型
     * @var string
     */
    protected $receiving_account_type;

    /**
     * 持卡人姓名
     * @var string
     */
    protected $receiving_holder_name;

    /**
     * @param string $account_type
     */
    public function setAccountType(string $account_type): void
    {
        $this->account_type = $account_type;
    }

    /**
     * @param int $account_id
     */
    public function setAccountId(int $account_id): void
    {
        $this->account_id = $account_id;
    }

    /**
     * @param int $user_id
     */
    public function setUserId(int $user_id): void
    {
        $this->user_id = $user_id;
    }

    /**
     * @param string $withdraw_amount
     */
    public function setWithdrawAmount(string $withdraw_amount): void
    {
        $this->withdraw_amount = $withdraw_amount;
    }

    /**
     * @param string $receiving_account
     */
    public function setReceivingAccount(string $receiving_account): void
    {
        $this->receiving_account = $receiving_account;
    }

    /**
     * @param string $receiving_account_name
     */
    public function setReceivingAccountName(string $receiving_account_name): void
    {
        $this->receiving_account_name = $receiving_account_name;
    }

    /**
     * @param string $receiving_account_type
     */
    public function setReceivingAccountType(string $receiving_account_type): void
    {
        $this->receiving_account_type = $receiving_account_type;
    }

    /**
     * @param string $receiving_holder_name
     */
    public function setReceivingHolderName(string $receiving_holder_name): void
    {
        $this->receiving_holder_name = $receiving_holder_name;
    }


}