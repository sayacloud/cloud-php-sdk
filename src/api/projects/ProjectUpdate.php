<?php

namespace SayaCloud\Api\Projects;

use SayaCloud\Contract\RequestAbstract;
use SayaCloud\Lib\RequestMethod;

class ProjectUpdate extends RequestAbstract
{
    protected $apiUri = '/project/update';

    protected $requestMethod = RequestMethod::POST;

    /**
     * required
     * @var int
     */
    protected $id;

    /**
     * @var string
     */
    protected $project_name;

    /**
     * @var string
     */
    protected $project_description;

    /**
     * @var string
     */
    protected $status;

    /**
     * @var string
     */
    protected $wechat_appid;

    /**
     * 封面图，LOGO
     * @var string
     */
    protected $cover;

    /**
     * @var int
     */
    protected $default_user_group;

    /**
     * @var int
     */
    protected $default_level_id;

    /**
     * @var int
     */
    protected $default_referrer_uid;

    /**
     * @var int
     */
    protected $article1_id;

    /**
     * @var int
     */
    protected $article2_id;

    /**
     * @var int
     */
    protected $article3_id;

    /**
     * @param int $article1_id
     */
    public function setArticle1Id(int $article1_id): void
    {
        $this->article1_id = $article1_id;
    }

    /**
     * @param int $article2_id
     */
    public function setArticle2Id(int $article2_id): void
    {
        $this->article2_id = $article2_id;
    }

    /**
     * @param int $article3_id
     */
    public function setArticle3Id(int $article3_id): void
    {
        $this->article3_id = $article3_id;
    }

    /**
     * @param string $cover
     */
    public function setCover(string $cover): void
    {
        $this->cover = $cover;
    }

    /**
     * @param int $default_user_group
     */
    public function setDefaultUserGroup(int $default_user_group): void
    {
        $this->default_user_group = $default_user_group;
    }

    /**
     * @param int $default_level_id
     */
    public function setDefaultLevelId(int $default_level_id): void
    {
        $this->default_level_id = $default_level_id;
    }

    /**
     * @param int $default_referrer_uid
     */
    public function setDefaultReferrerUid(int $default_referrer_uid): void
    {
        $this->default_referrer_uid = $default_referrer_uid;
    }

    /**
     * @param string $project_name
     */
    public function setProjectName(string $project_name)
    {
        $this->project_name = $project_name;
    }

    /**
     * @param string $project_description
     */
    public function setProjectDescription(string $project_description)
    {
        $this->project_description = $project_description;
    }

    /**
     * @param string $status
     */
    public function setStatus(string $status)
    {
        $this->status = $status;
    }

    /**
     * @param int $id
     */
    public function setId(int $id)
    {
        $this->id = $id;
    }

    /**
     * @param string $wechat_appid
     */
    public function setWechatAppid(string $wechat_appid): void
    {
        $this->wechat_appid = $wechat_appid;
    }

}