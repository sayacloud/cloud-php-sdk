<?php

use SayaCloud\Api\User\UserNew;
use SayaCloud\SayaCloud;

include '../../vendor/autoload.php';
include '../config.php';

try {
    $client = SayaCloud::client($config);

    $user = [
        'project_id'=>1,
        'group_id'=>1,
        'nickname'=>'New6cdq',
        'name'=>'姓名',
        'password'=>123456,
        'mobile'=>15680731293,
        'referrer_id'=>12
    ];
    $createUser = new UserNew($user);

    $result = $client->request($createUser);
    var_dump($result);

} catch (Exception $e) {
    var_dump($e->getMessage());
}