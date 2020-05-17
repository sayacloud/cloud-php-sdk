<?php

namespace SayaCloud\Api\Levels;

use SayaCloud\Contract\RequestAbstract;
use SayaCloud\Lib\RequestMethod;

class RewardLevelDelete extends RequestAbstract
{
    protected $apiUri = '/user/reward-level/delete';

    protected $requestMethod = RequestMethod::POST;

    /**
     * @var int
     */
    protected $id;

    /**
     * @param int $id
     */
    public function setId(int $id): void
    {
        $this->id = $id;
    }
}