<?php

use SayaCloud\Api\User\UserUpdate;
use SayaCloud\SayaCloud;

include '../../vendor/autoload.php';
include '../config.php';

try {
    $client = SayaCloud::client($config);

    $update = [
        'id'=>1,
        'name'=>'更新的名字'
    ];
    $api = new UserUpdate($update);

    $result = $client->request($api);
    var_dump($result);

} catch (Exception $e) {
    var_dump($e->getMessage());
}