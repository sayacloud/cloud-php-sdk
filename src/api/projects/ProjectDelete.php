<?php

namespace SayaCloud\Api\Projects;

use SayaCloud\Contract\RequestAbstract;
use SayaCloud\Lib\RequestMethod;

class ProjectDelete extends RequestAbstract
{
    protected $apiUri = '/project/delete';

    protected $requestMethod = RequestMethod::POST;

    /**
     * @var int
     */
    protected $id;

    /**
     * @param int $id
     */
    public function setId(int $id)
    {
        $this->id = $id;
    }
}