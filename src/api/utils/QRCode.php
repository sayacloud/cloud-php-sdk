<?php

namespace SayaCloud\Api\Utils;

use SayaCloud\Contract\RequestAbstract;
use SayaCloud\Lib\RequestMethod;

class QRCode extends RequestAbstract
{
    protected $requestMethod = RequestMethod::GET;

    protected $apiUri = '/qrcode/url';

    /**
     * 需要转换为QRCode的字符串
     * @var string
     */
    protected $string;

    /**
     * @param string $string
     */
    public function setString(string $string): void
    {
        $this->string = $string;
    }
}