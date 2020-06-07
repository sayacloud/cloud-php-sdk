<?php

use SayaCloud\Api\Payment\PaymentCommentNew;
use SayaCloud\SayaCloud;

include '../../vendor/autoload.php';
include '../config.php';

try {
    $client = SayaCloud::client($config);

    $payment = [
        'payment_id' => 88,
        'comment'=>'很不错，5星好评',
        'rating'=>5
    ];
    $api = new PaymentCommentNew($payment);

    $result = $client->request($api);
    var_dump($result);

} catch (Exception $e) {
    var_dump($e->getMessage());
}