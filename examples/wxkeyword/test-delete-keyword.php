<?php

use SayaCloud\Api\WxKeyword\WxKeywordDelete;
use SayaCloud\SayaCloud;

include '../../vendor/autoload.php';
include '../config.php';

try {
    $client = SayaCloud::client($config);

    $delete = ['id' => 1];
    $api = new WxKeywordDelete($delete);

    $result = $client->request($api);
    var_dump($result);

} catch (Exception $e) {
    var_dump($e->getMessage());
}