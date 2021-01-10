<?php

use SayaCloud\Api\Wechat\WechatList;
use SayaCloud\Api\Wechat\WechatMessageTemplatesSync;
use SayaCloud\SayaCloud;

include '../../vendor/autoload.php';
include '../config.php';

try {
    $client = SayaCloud::client($config);

    $query = ['appid'=>'wxabf806baeab617c2'];
    $api = new WechatMessageTemplatesSync($query);

    $result = $client->request($api);
    var_dump($result);

} catch (Exception $e) {
    var_dump($e->getMessage());
}
