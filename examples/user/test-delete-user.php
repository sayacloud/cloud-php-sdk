<?php

use SayaCloud\Api\User\UserDelete;
use SayaCloud\SayaCloud;

include '../../vendor/autoload.php';
include '../config.php';

try {
    $client = SayaCloud::client($config);

    $filter = ['id' => 1];
    $api = new UserDelete($filter);

    $result = $client->request($api);
    var_dump($result);

} catch (Exception $e) {
    var_dump($e->getMessage());
}