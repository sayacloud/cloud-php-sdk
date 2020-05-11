<?php

namespace SayaCloud\Api;

use SayaCloud\Contract\RequestAbstract;
use SayaCloud\Lib\RequestMethod;

class DistrictList extends RequestAbstract
{
    protected $apiUri = '/region/districts';

    protected $requestMethod = RequestMethod::GET;

    /**
     * @var int
     */
    protected $city_id;

    /**
     * @param int $city_id
     */
    public function setCityId(int $city_id)
    {
        $this->city_id = $city_id;
    }
}