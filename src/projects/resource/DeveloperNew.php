<?php

namespace SayaCloud\Projects\Resource;

use SayaCloud\Contract\RequestAbstract;
use SayaCloud\Lib\RequestMethod;

class DeveloperNew extends RequestAbstract
{
    protected $apiUri = '/developer/create';

    protected $requestMethod = RequestMethod::POST;

    /**
     * @var string
     */
    protected $name;

    /**
     * required
     * @var int
     */
    protected $project_id;

    /**
     * @var string
     */
    protected $description;

    /**
     * @var string
     */
    protected $app_key;

    /**
     * @var string
     */
    protected $app_secret;

    /**
     * enum = 'normal','disabled'
     * @var string
     */
    protected $status;

    /**
     * enum = 'project','global'
     * @var string
     */
    protected $scope;

    /**
     * @param string $name
     */
    public function setName(string $name)
    {
        $this->name = $name;
    }

    /**
     * @param int $project_id
     */
    public function setProjectId(int $project_id)
    {
        $this->project_id = $project_id;
    }

    /**
     * @param string $description
     */
    public function setDescription(string $description)
    {
        $this->description = $description;
    }

    /**
     * @param string $app_key
     */
    public function setAppKey(string $app_key)
    {
        $this->app_key = $app_key;
    }

    /**
     * @param string $app_secret
     */
    public function setAppSecret(string $app_secret)
    {
        $this->app_secret = $app_secret;
    }

    /**
     * @param string $status
     */
    public function setStatus(string $status)
    {
        $this->status = $status;
    }

    /**
     * @param string $scope
     */
    public function setScope(string $scope)
    {
        $this->scope = $scope;
    }
}