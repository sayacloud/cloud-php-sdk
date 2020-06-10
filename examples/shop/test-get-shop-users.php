<?php

use SayaCloud\Api\Shops\ShopUsers;
use SayaCloud\SayaCloud;

include '../../vendor/autoload.php';
include '../config.php';

try {
    $client = SayaCloud::client($config);

    $shop = [
        'shop_id' => 1,
    ];
    $api = new ShopUsers($shop);

    $result = $client->request($api);
    var_dump($result);

} catch (Exception $e) {
    var_dump($e->getMessage());
}