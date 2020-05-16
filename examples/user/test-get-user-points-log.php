<?php

use SayaCloud\Api\User\UserPointsLog;
use SayaCloud\SayaCloud;

include '../../vendor/autoload.php';
include '../config.php';

try {
    $client = SayaCloud::client($config);

    $filter = [
        'user_id'=>1,
        'page'=>1,
        'limit'=>21
    ];
    $api = new UserPointsLog($filter);

    $result = $client->request($api);
    var_dump($result);

} catch (Exception $e) {
    var_dump($e->getMessage());
}