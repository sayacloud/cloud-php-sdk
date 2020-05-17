<?php

use SayaCloud\Api\User\UserGroupList;
use SayaCloud\SayaCloud;

include '../../vendor/autoload.php';
include '../config.php';

try {
    $client = SayaCloud::client($config);

    $filter = ['limit'=>1000];
    $list = new UserGroupList($filter);

    $result = $client->request($list);
    var_dump($result);

} catch (Exception $e) {
    var_dump($e->getMessage());
}