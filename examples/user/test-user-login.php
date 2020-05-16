<?php

use SayaCloud\Api\User\UserLogin;
use SayaCloud\SayaCloud;

include '../../vendor/autoload.php';
include '../config.php';

try {
    $client = SayaCloud::client($config);

    $login = [
        'account'=>'18702881376',
        'password'=>12345
    ];
    $userLogin = new UserLogin($login);

    $result = $client->request($userLogin);
    var_dump($result);

} catch (Exception $e) {
    var_dump($e->getMessage());
}