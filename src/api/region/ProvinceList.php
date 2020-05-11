<?php

namespace SayaCloud\Api;

use SayaCloud\Contract\RequestAbstract;
use SayaCloud\Lib\RequestMethod;

class ProvinceList extends RequestAbstract
{
    protected $apiUri = '/region/provinces';

    protected $requestMethod = RequestMethod::GET;

    /**
     * @var int
     */
    protected $region_id;

    /**
     * @param int $region_id
     */
    public function setRegionId(int $region_id)
    {
        $this->region_id = $region_id;
    }
}