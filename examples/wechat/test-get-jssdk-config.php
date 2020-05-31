<?php

use SayaCloud\Api\Wechat\JsSDKConfig;
use SayaCloud\SayaCloud;

include '../../vendor/autoload.php';
include '../config.php';

try {
    $client = SayaCloud::client($config);

    $params = [
        'url' => 'http://mafuboss.ifsvc.cn/a/b/c.html',
    ];
    $api = new JsSDKConfig($params);

    $result = $client->request($api);
    var_dump($result);

} catch (Exception $e) {
    var_dump($e->getMessage());
}
