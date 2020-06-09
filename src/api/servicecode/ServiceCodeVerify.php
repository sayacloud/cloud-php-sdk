<?php

namespace SayaCloud\Api\ServiceCode;

use SayaCloud\Contract\RequestAbstract;
use SayaCloud\Lib\RequestMethod;

class ServiceCodeVerify extends RequestAbstract
{

    protected $apiUri = '/service-code/verification';

    protected $requestMethod = RequestMethod::POST;

    /**
     * @var int
     */
    protected $service_shop_id;

    /**
     * @var string
     */
    protected $code;

    /**
     * @param int $service_shop_id
     */
    public function setServiceShopId(int $service_shop_id): void
    {
        $this->service_shop_id = $service_shop_id;
    }

    /**
     * @param string $code
     */
    public function setCode(string $code): void
    {
        $this->code = $code;
    }

}