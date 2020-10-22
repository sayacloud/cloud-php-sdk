<?php

use SayaCloud\Api\Wechat\WechatCustomMessageNews;
use SayaCloud\SayaCloud;

include '../../vendor/autoload.php';
include '../config.php';

try {
    $client = SayaCloud::client($config);

    $query = [
        'appid'=>'wxc08a506d41afae18',
        'openid'=>'oe_U05uc1eg_8HLkPppSYKX02lQU',
        'title'=>'图文标题一个，测试一下,无图',
        'description'=>'描述一下这个图文信息，看一下显示效果如何',
        'url'=>'https://www.ifsvc.cn',
        'image'=>''
    ];
    $api = new WechatCustomMessageNews($query);

    $result = $client->request($api);
    var_dump($result);

} catch (Exception $e) {
    var_dump($e->getMessage());
}
