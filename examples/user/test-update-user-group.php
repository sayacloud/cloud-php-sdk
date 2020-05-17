<?php

use SayaCloud\Api\User\UserGroupDetail;
use SayaCloud\Api\User\UserGroupUpdate;
use SayaCloud\SayaCloud;

include '../../vendor/autoload.php';
include '../config.php';

try {
    $client = SayaCloud::client($config);

    $data = [
        'id'=>10,
        'name'=>'修改名称'
    ];
    $api = new UserGroupUpdate($data);

    $result = $client->request($api);
    var_dump($result);

} catch (Exception $e) {
    var_dump($e->getMessage());
}