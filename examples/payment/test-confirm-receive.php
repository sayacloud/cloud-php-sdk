<?php

use SayaCloud\Api\Payment\PaymentConfirmReceive;
use SayaCloud\SayaCloud;

include '../../vendor/autoload.php';
include '../config.php';

try {
    $client = SayaCloud::client($config);

    $payment = [
        'payment_id' => 88,
    ];
    $api = new PaymentConfirmReceive($payment);

    $result = $client->request($api);
    var_dump($result);

} catch (Exception $e) {
    var_dump($e->getMessage());
}