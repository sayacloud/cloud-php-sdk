<?php

use SayaCloud\Api\Cart\CartDelete;
use SayaCloud\Api\Cart\CartList;
use SayaCloud\SayaCloud;

include '../../vendor/autoload.php';
include '../config.php';

try {
    $client = SayaCloud::client($config);

    $cart = [
        'id' => 1,
        'buyer_id' => 12,
    ];
    $new = new CartDelete($cart);

    $result = $client->request($new);
    var_dump($result);

} catch (Exception $e) {
    var_dump($e->getMessage());
}