<?php

use SayaCloud\Api\Cart\CartList;
use SayaCloud\Api\Cart\CartModify;
use SayaCloud\SayaCloud;

include '../../vendor/autoload.php';
include '../config.php';

try {
    $client = SayaCloud::client($config);

    $cart = [
        'buyer_id' => 12,
        'id' => 1,
        'quantity'=>3
    ];
    $new = new CartModify($cart);

    $result = $client->request($new);
    var_dump($result);

} catch (Exception $e) {
    var_dump($e->getMessage());
}