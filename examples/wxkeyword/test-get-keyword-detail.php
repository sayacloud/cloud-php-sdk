<?php

use SayaCloud\Api\WxKeyword\WxKeywordDetail;
use SayaCloud\SayaCloud;

include '../../vendor/autoload.php';
include '../config.php';

try {
    $client = SayaCloud::client($config);

    $query = ['id'=>1];
    $api = new WxKeywordDetail($query);

    $result = $client->request($api);
    var_dump($result);

} catch (Exception $e) {
    var_dump($e->getMessage());
}