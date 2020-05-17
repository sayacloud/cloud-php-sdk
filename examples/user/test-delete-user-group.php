<?php

use SayaCloud\Api\User\UserGroupDelete;
use SayaCloud\Api\User\UserGroupDetail;
use SayaCloud\SayaCloud;

include '../../vendor/autoload.php';
include '../config.php';

try {
    $client = SayaCloud::client($config);

    $filter = ['id'=>10];
    $api = new UserGroupDelete($filter);

    $result = $client->request($api);
    var_dump($result);

} catch (Exception $e) {
    var_dump($e->getMessage());
}