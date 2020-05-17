<?php

use SayaCloud\Api\User\UserGroupNew;
use SayaCloud\SayaCloud;

include '../../vendor/autoload.php';
include '../config.php';

try {
    $client = SayaCloud::client($config);

    $data = [
        'project_id'=>1,
        'name'=>'新建分组',
        'description'=>'新分组说明',
        'rank'=>105
    ];
    $api = new UserGroupNew($data);

    $result = $client->request($api);
    var_dump($result);

} catch (Exception $e) {
    var_dump($e->getMessage());
}