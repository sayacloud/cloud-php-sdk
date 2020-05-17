<?php

namespace SayaCloud\Api\WxUser;

use SayaCloud\Contract\RequestAbstract;
use SayaCloud\Lib\RequestMethod;

class UserWechatList extends RequestAbstract
{
    protected $apiUri = '/user-wechat/list';

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
     * @var int
     */
    protected $wx_appid;

    /**
     * @var int
     */
    protected $referrer_uid;

    /**
     * @var int
     */
    protected $user_id;

    /**
     * @var int
     */
    protected $page = 1;

    /**
     * @var int
     */
    protected $limit = 20;

    /**
     * @param string $apiUri
     */
    public function setApiUri(string $apiUri): void
    {
        $this->apiUri = $apiUri;
    }

    /**
     * @param string $requestMethod
     */
    public function setRequestMethod(string $requestMethod): void
    {
        $this->requestMethod = $requestMethod;
    }

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
     * @param int $wx_appid
     */
    public function setWxAppid(int $wx_appid): void
    {
        $this->wx_appid = $wx_appid;
    }

    /**
     * @param int $referrer_uid
     */
    public function setReferrerUid(int $referrer_uid): void
    {
        $this->referrer_uid = $referrer_uid;
    }

    /**
     * @param int $user_id
     */
    public function setUserId(int $user_id): void
    {
        $this->user_id = $user_id;
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
}
