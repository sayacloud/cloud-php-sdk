<?php

use SayaCloud\Api\Payment\CallPointsPay;
use SayaCloud\SayaCloud;

include '../../vendor/autoload.php';
include '../config.php';

try {
    $client = SayaCloud::client($config);

    $payment = [
        'payment_id' => 101,
        'buyer_id'=>2
    ];
    $api = new CallPointsPay($payment);

    $result = $client->request($api);
    var_dump($result);

} catch (Exception $e) {
    var_dump($e->getMessage());
}