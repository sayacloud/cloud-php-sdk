<?php

namespace SayaCloud\Projects\Resource;

use SayaCloud\Contract\RequestAbstract;
use SayaCloud\Lib\RequestMethod;

class ProjectNew extends RequestAbstract
{
    protected $apiUri = '/project/create';

    protected $requestMethod = RequestMethod::POST;

    /**
     * @var string
     */
    protected $project_name;

    /**
     * @var string
     */
    protected $project_description;

    /**
     * enum = normal,close,develop
     * @var string
     */
    protected $status;

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

}