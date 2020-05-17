<?php

namespace SayaCloud\Api\User;

use SayaCloud\Contract\RequestAbstract;
use SayaCloud\Lib\RequestMethod;

class UserGroupNew extends RequestAbstract
{
    protected $apiUri = '/user/user-group/create';

    protected $requestMethod = RequestMethod::POST;

    /**
     * @var int
     */
    protected $project_id;

    /**
     * @var string
     */
    protected $name;

    /**
     * @var int
     */
    protected $rank;

    /**
     * @var string
     */
    protected $description;

    /**
     * @param int $project_id
     */
    public function setProjectId(int $project_id): void
    {
        $this->project_id = $project_id;
    }

    /**
     * @param string $name
     */
    public function setName(string $name): void
    {
        $this->name = $name;
    }

    /**
     * @param int $rank
     */
    public function setRank(int $rank): void
    {
        $this->rank = $rank;
    }

    /**
     * @param string $description
     */
    public function setDescription(string $description): void
    {
        $this->description = $description;
    }
}