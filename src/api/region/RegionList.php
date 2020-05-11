<?php

namespace SayaCloud\Api;

use SayaCloud\Contract\RequestAbstract;
use SayaCloud\Lib\RequestMethod;

class RegionList extends RequestAbstract
{
    protected $apiUri = '/region/list';

    protected $requestMethod = RequestMethod::GET;

}