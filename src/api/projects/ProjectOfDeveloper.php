<?php

namespace SayaCloud\Api\Projects;

use SayaCloud\Contract\RequestAbstract;
use SayaCloud\Lib\RequestMethod;

class ProjectOfDeveloper extends RequestAbstract
{
    protected $apiUri = '/project/current/developer';

    protected $requestMethod = RequestMethod::GET;

}