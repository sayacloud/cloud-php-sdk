<?php

use SayaCloud\Api\Wechat\WechatCustomMessageText;
use SayaCloud\SayaCloud;

include '../../vendor/autoload.php';
include '../config.php';

try {
    $client = SayaCloud::client($config);

    $query = [
        'appid'=>'wxc08a506d41afae18',
        'openid'=>'oe_U05uc1eg_8HLkPppSYKX02lQU',
        'content'=>'Hello world, this is text message from testing'
    ];
    $api = new WechatCustomMessageText($query);

    $result = $client->request($api);
    var_dump($result);

} catch (Exception $e) {
    var_dump($e->getMessage());
}
