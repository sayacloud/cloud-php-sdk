<?php

namespace SayaCloud\Api\Wechat;

use SayaCloud\Contract\RequestAbstract;
use SayaCloud\Lib\RequestMethod;

class WechatList extends RequestAbstract
{
    protected $apiUri = '/wechat/list';

    protected $requestMethod = RequestMethod::GET;

    /**
     * @var string
     */
    protected $service_type;

    /**
     * @var string
     */
    protected $verify_type;

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
    protected $limit = 20;

    /**
     * @param string $service_type
     */
    public function setServiceType(string $service_type): void
    {
        $this->service_type = $service_type;
    }

    /**
     * @param string $verify_type
     */
    public function setVerifyType(string $verify_type): void
    {
        $this->verify_type = $verify_type;
    }

    /**
     * @param string $keyword
     */
    public function setKeyword(string $keyword): void
    {
        $this->keyword = $keyword;
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