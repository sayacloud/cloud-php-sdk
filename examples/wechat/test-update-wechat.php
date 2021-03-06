<?php

use SayaCloud\Api\Wechat\WechatUpdate;
use SayaCloud\SayaCloud;

include '../../vendor/autoload.php';
include '../config.php';

try {
    $client = SayaCloud::client($config);

    $update = [
        'id' => 4,
        'mch_id' => 1232
    ];
    $api = new WechatUpdate($update);

    $result = $client->request($api);
    var_dump($result);

} catch (Exception $e) {
    var_dump($e->getMessage());
}
