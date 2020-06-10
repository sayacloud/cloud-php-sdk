<?php

use SayaCloud\Api\Shops\ShopUserUnbind;
use SayaCloud\SayaCloud;

include '../../vendor/autoload.php';
include '../config.php';

try {
    $client = SayaCloud::client($config);

    $shop = [
        'shop_id' => 1,
        'user_id'=>2
    ];
    $api = new ShopUserUnbind($shop);

    $result = $client->request($api);
    var_dump($result);

} catch (Exception $e) {
    var_dump($e->getMessage());
}