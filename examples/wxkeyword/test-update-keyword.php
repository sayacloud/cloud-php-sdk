<?php

use SayaCloud\Api\WxKeyword\WxKeywordUpdate;
use SayaCloud\SayaCloud;

include '../../vendor/autoload.php';
include '../config.php';

try {
    $client = SayaCloud::client($config);

    $update = [
        'id'=>1,
        'project_id'=>1,
        'content'=>'update this content'
    ];
    $api = new WxKeywordUpdate($update);

    $result = $client->request($api);
    var_dump($result);

} catch (Exception $e) {
    var_dump($e->getMessage());
}