<?php

namespace SayaCloud\Api\User;

use SayaCloud\Contract\RequestAbstract;
use SayaCloud\Lib\RequestMethod;

class UserUpdate extends RequestAbstract
{
    protected $apiUri = '/user/update';

    protected $requestMethod = RequestMethod::POST;

    /**
     * @var int
     */
    protected $id;

    /**
     * @var int
     */
    protected $group_id;

    /**
     * @var int
     */
    protected $level_id;

    /**
     * @var string
     */
    protected $mobile;

    /**
     * @var string
     */
    protected $headimgurl;

    /**
     * @var string
     */
    protected $nickname;

    /**
     * @var string
     */
    protected $name;

    /**
     * @var string
     */
    protected $password;

    /**
     * @var string
     */
    protected $status;

    /**
     * @var string
     */
    protected $remark;

    /**
     * @param int $id
     */
    public function setId(int $id): void
    {
        $this->id = $id;
    }

    /**
     * @param int $group_id
     */
    public function setGroupId(int $group_id): void
    {
        $this->group_id = $group_id;
    }

    /**
     * @param int $level_id
     */
    public function setLevelId(int $level_id): void
    {
        $this->level_id = $level_id;
    }

    /**
     * @param string $mobile
     */
    public function setMobile(string $mobile): void
    {
        $this->mobile = $mobile;
    }

    /**
     * @param string $nickname
     */
    public function setNickname(string $nickname): void
    {
        $this->nickname = $nickname;
    }

    /**
     * @param string $remark
     */
    public function setRemark(string $remark): void
    {
        $this->remark = $remark;
    }

    /**
     * @param string $name
     */
    public function setName(string $name): void
    {
        $this->name = $name;
    }

    /**
     * @param string $password
     */
    public function setPassword(string $password): void
    {
        $this->password = $password;
    }

    /**
     * @param string $status
     */
    public function setStatus(string $status): void
    {
        $this->status = $status;
    }

    /**
     * @param string $headimgurl
     */
    public function setHeadimgurl(string $headimgurl): void
    {
        $this->headimgurl = $headimgurl;
    }
}