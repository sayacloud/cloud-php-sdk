<?php

use SayaCloud\Api\ServiceCode\ServiceCodeVerify;
use SayaCloud\SayaCloud;

include '../../vendor/autoload.php';
include '../config.php';

try {
    $client = SayaCloud::client($config);

    $filter = ['code' => '295EDBB3A3E53F90', 'service_shop_id' => 1];
    $api = new ServiceCodeVerify($filter);

    $result = $client->request($api);
    var_dump($result);

} catch (Exception $e) {
    var_dump($e->getMessage());
}