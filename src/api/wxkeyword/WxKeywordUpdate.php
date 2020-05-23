<?php

namespace SayaCloud\Api\WxKeyword;

use SayaCloud\Contract\RequestAbstract;
use SayaCloud\Lib\RequestMethod;

class WxKeywordUpdate extends RequestAbstract
{
    protected $apiUri = '/wechat-keyword/update';

    protected $requestMethod = RequestMethod::POST;

    /**
     * @var int
     */
    protected $id;

    /**
     * @var string
     */
    protected $keyword;

    /**
     * enum = text, image ,voice, video, news
     * @var string
     */
    protected $response_type;

    /**
     * @var string
     */
    protected $content;

    /**
     * @var string
     */
    protected $title;

    /**
     * @var string
     */
    protected $description;

    /**
     * @var string
     */
    protected $media_id;

    /**
     * @var string
     */
    protected $thumb_media_id;

    /**
     * @var string
     */
    protected $image;

    /**
     * @var string
     */
    protected $url;

    /**
     * enum = enabled, disabled
     * @var string
     */
    protected $status = 'enabled';


    /**
     * @param int $project_id
     */
    public function setProjectId(int $project_id): void
    {
        $this->project_id = $project_id;
    }

    /**
     * @param string $keyword
     */
    public function setKeyword(string $keyword): void
    {
        $this->keyword = $keyword;
    }

    /**
     * @param string $response_type
     */
    public function setResponseType(string $response_type): void
    {
        $this->response_type = $response_type;
    }

    /**
     * @param string $content
     */
    public function setContent(string $content): void
    {
        $this->content = $content;
    }

    /**
     * @param string $title
     */
    public function setTitle(string $title): void
    {
        $this->title = $title;
    }

    /**
     * @param string $description
     */
    public function setDescription(string $description): void
    {
        $this->description = $description;
    }

    /**
     * @param string $media_id
     */
    public function setMediaId(string $media_id): void
    {
        $this->media_id = $media_id;
    }

    /**
     * @param string $thumb_media_id
     */
    public function setThumbMediaId(string $thumb_media_id): void
    {
        $this->thumb_media_id = $thumb_media_id;
    }

    /**
     * @param string $image
     */
    public function setImage(string $image): void
    {
        $this->image = $image;
    }

    /**
     * @param string $url
     */
    public function setUrl(string $url): void
    {
        $this->url = $url;
    }

    /**
     * @param string $status
     */
    public function setStatus(string $status): void
    {
        $this->status = $status;
    }

    /**
     * @param int $id
     */
    public function setId(int $id): void
    {
        $this->id = $id;
    }

}