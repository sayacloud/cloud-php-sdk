<?php

use SayaCloud\Api\Wechat\WechatDelete;
use SayaCloud\Api\Wechat\WechatDetail;
use SayaCloud\SayaCloud;

include '../../vendor/autoload.php';
include '../config.php';

try {
    $client = SayaCloud::client($config);

    $query = ['id' => 4];
    $api = new WechatDetail($query);

    $result = $client->request($api);
    var_dump($result);

} catch (Exception $e) {
    var_dump($e->getMessage());
}

