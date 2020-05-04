<?php

use SayaCloud\Api\Cart\CartList;
use SayaCloud\SayaCloud;

include '../../vendor/autoload.php';
include '../config.php';

try {
    $client = SayaCloud::client($config);

    $cart = [
        'buyer_id' => 12,
        'order_type' => 'points',
        'status' => 'in_cart',
        'limit'=>100
    ];
    $new = new CartList($cart);

    $result = $client->request($new);
    var_dump($result);

} catch (Exception $e) {
    var_dump($e->getMessage());
}