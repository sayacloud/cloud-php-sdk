<?php

namespace SayaCloud\Api\ServiceCode;

use SayaCloud\Contract\RequestAbstract;
use SayaCloud\Lib\RequestMethod;

class ServiceCodeModify extends RequestAbstract
{
    protected $apiUri = '/service-code/modify';

    protected $requestMethod = RequestMethod::POST;

    /**
     * @var int
     */
    protected $id;

    /**
     * @var string
     */
    protected $active_time;

    /**
     * @var string
     */
    protected $expire_time;

    /**
     * @var string
     */
    protected $handler;

    /**
     * @param int $id
     */
    public function setId(int $id): void
    {
        $this->id = $id;
    }

    /**
     * @param string $active_time
     */
    public function setActiveTime(string $active_time): void
    {
        $this->active_time = $active_time;
    }

    /**
     * @param string $expire_time
     */
    public function setExpireTime(string $expire_time): void
    {
        $this->expire_time = $expire_time;
    }

    /**
     * @param string $handler
     */
    public function setHandler(string $handler): void
    {
        $this->handler = $handler;
    }

}