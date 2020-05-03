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

}