<?php

use SayaCloud\Api\Orders\OrderCheckout;
use SayaCloud\SayaCloud;

include '../../vendor/autoload.php';
include '../config.php';

try {
    $client = SayaCloud::client($config);

    $cart = [
        'cart_ids' => '2,3',
        'buyer_id' => 12,
    ];
    $new = new OrderCheckout($cart);

    $result = $client->request($new);
    var_dump($result);

} catch (Exception $e) {
    var_dump($e->getMessage());
}