<?php

use SayaCloud\Api\Utils\QRCode;
use SayaCloud\SayaCloud;

include '../../vendor/autoload.php';
include '../config.php';

try {
    $client = SayaCloud::client($config);

    $qrcode = new QRCode();
    $qrcode->setString('http://www.baidu.com?keyword=123&name=cc');

    $result = $client->request($qrcode);
    var_dump($result);

} catch (Exception $e) {
    var_dump($e->getMessage());
}