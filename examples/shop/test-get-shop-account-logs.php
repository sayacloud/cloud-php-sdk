<?php

use SayaCloud\Api\Shops\ShopAccountLogList;
use SayaCloud\SayaCloud;

include '../../vendor/autoload.php';
include '../config.php';

try {
    $client = SayaCloud::client($config);

    $filter = [
        'shop_id' => 1,
        'page' => 1,
        'limit' => 15
    ];
    $api = new ShopAccountLogList($filter);

    $result = $client->request($api);
    var_dump($result);

} catch (Exception $e) {
    var_dump($e->getMessage());
}