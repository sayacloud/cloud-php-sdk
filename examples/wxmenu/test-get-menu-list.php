<?php

use SayaCloud\Api\WxMenu\WxMenuList;
use SayaCloud\SayaCloud;

include '../../vendor/autoload.php';
include '../config.php';

try {
    $client = SayaCloud::client($config);

    $query = ['app_id' => 'wx01e1c1a868e4b6a1'];
    $api = new WxMenuList($query);

    $result = $client->request($api);
    var_dump($result);

} catch (Exception $e) {
    var_dump($e->getMessage());
}