<?php

use SayaCloud\Api\Cart\CartAdd;
use SayaCloud\SayaCloud;

include '../../vendor/autoload.php';
include '../config.php';

try {
    $client = SayaCloud::client($config);

    $cart = [
        'order_type'=>'points',
        'pay_method'=>'online',
        'item_id'=>1,
        'sku_id'=>2,
        'quantity'=>2,
        'buyer_id'=>12
    ];
    $new = new CartAdd($cart);

    $result = $client->request($new);
    var_dump($result);

} catch (Exception $e) {
    var_dump($e->getMessage());
}