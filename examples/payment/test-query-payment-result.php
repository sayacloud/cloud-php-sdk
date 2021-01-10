<?php

use SayaCloud\Api\Payment\QueryWxPaymentResult;
use SayaCloud\SayaCloud;

include '../../vendor/autoload.php';
include '../config.php';

try {
    $client = SayaCloud::client($config);

    $data = [
        'payment_id' => 408,
    ];
    $api = new QueryWxPaymentResult($data);

    $result = $client->request($api);
    var_dump($result);

} catch (Exception $e) {
    var_dump($e->getMessage());
}