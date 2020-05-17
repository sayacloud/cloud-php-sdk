<?php

use SayaCloud\Api\User\UserSubL1List;
use SayaCloud\Api\User\UserSubL2List;
use SayaCloud\SayaCloud;

include '../../vendor/autoload.php';
include '../config.php';

try {
    $client = SayaCloud::client($config);

    $filter = [
        'l2_uid' => 2,
        'page' => 1,
        'limit' => 20
    ];
    $api = new UserSubL2List($filter);

    $result = $client->request($api);
    var_dump($result);

} catch (Exception $e) {
    var_dump($e->getMessage());
}