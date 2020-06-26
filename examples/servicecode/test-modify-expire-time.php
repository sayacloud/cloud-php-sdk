<?php

use SayaCloud\Api\ServiceCode\ServiceCodeModify;
use SayaCloud\SayaCloud;

include '../../vendor/autoload.php';
include '../config.php';

try {
    $client = SayaCloud::client($config);

    $data = [
        'id' => 10,
        'active_time'=>'2020-06-20',
        'expire_time'=>'2020-10-21',
        'handler'=>'QD Seven'
    ];
    $api = new ServiceCodeModify($data);

    $result = $client->request($api);
    var_dump($result);

} catch (Exception $e) {
    var_dump($e->getMessage());
}