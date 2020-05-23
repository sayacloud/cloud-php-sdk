<?php

namespace SayaCloud\Api\WxKeyword;

use SayaCloud\Contract\RequestAbstract;
use SayaCloud\Lib\RequestMethod;

class WxKeywordList extends RequestAbstract
{
    protected $apiUri = '/wechat-keyword/list';

    protected $requestMethod = RequestMethod::GET;

    /**
     * @var int
     */
    protected $project_id;

    /**
     * enum = text, image, voice , video, news
     * @var string
     */
    protected $response_type;

    /**
     * enum = enabled, disabled
     * @var string
     */
    protected $status;

    /**
     * @var string
     */
    protected $keyword;


    /**
     * @param int $project_id
     */
    public function setProjectId(int $project_id): void
    {
        $this->project_id = $project_id;
    }

    /**
     * @param string $response_type
     */
    public function setResponseType(string $response_type): void
    {
        $this->response_type = $response_type;
    }

    /**
     * @param string $status
     */
    public function setStatus(string $status): void
    {
        $this->status = $status;
    }

    /**
     * @param string $keyword
     */
    public function setKeyword(string $keyword): void
    {
        $this->keyword = $keyword;
    }
}
