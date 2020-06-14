<?php

use SayaCloud\Api\Orders\OrderDelivery;
use SayaCloud\SayaCloud;

include '../../vendor/autoload.php';
include '../config.php';

// 购物车商品结算
try {
    $client = SayaCloud::client($config);

    $delivery = [
        'delivery_by' => 'wen sir',
        'order' => 91,
        'ship_number'=>'8382878323',
        'ship_company'=>'韵达'
    ];
    $new = new OrderDelivery($delivery);

    $result = $client->request($new);
    var_dump($result);

} catch (Exception $e) {
    var_dump($e->getMessage());
}