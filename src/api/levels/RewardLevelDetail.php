<?php

namespace SayaCloud\Api\Levels;

use SayaCloud\Contract\RequestAbstract;
use SayaCloud\Lib\RequestMethod;

class RewardLevelDetail extends RequestAbstract
{
    protected $apiUri = '/user/reward-level/detail';

    protected $requestMethod = RequestMethod::GET;

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