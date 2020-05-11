<?php

namespace SayaCloud\Api;

use SayaCloud\Contract\RequestAbstract;
use SayaCloud\Lib\RequestMethod;

class CityList extends RequestAbstract
{
    protected $apiUri = '/region/cities';

    protected $requestMethod = RequestMethod::GET;

    /**
     * @var int
     */
    protected $province_id;

    /**
     * @param int $province_id
     */
    public function setProvinceId(int $province_id)
    {
        $this->province_id = $province_id;
    }
}