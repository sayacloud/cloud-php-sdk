<?php

use SayaCloud\Api\Payment\CreateDirectPay;
use SayaCloud\SayaCloud;

include '../../vendor/autoload.php';
include '../config.php';

try {
    $client = SayaCloud::client($config);

    $payment = [
        'pay_amount' => 0.88,
    ];
    $api = new CreateDirectPay($payment);

    $result = $client->request($api);
    var_dump($result);

} catch (Exception $e) {
    var_dump($e->getMessage());
}
