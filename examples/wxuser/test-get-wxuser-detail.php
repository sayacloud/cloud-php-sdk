<?php

use SayaCloud\Api\WxUser\UserWechatDetail;
use SayaCloud\SayaCloud;

include '../../vendor/autoload.php';
include '../config.php';

try {
    $client = SayaCloud::client($config);

    $query = ['id' => 1];
    $api = new UserWechatDetail($query);

    $result = $client->request($api);
    var_dump($result);

} catch (Exception $e) {
    var_dump($e->getMessage());
}