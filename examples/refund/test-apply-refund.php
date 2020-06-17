<?php

use SayaCloud\Api\Refund\RefundApply;
use SayaCloud\SayaCloud;

include '../../vendor/autoload.php';
include '../config.php';

try {
    $client = SayaCloud::client($config);

    $data = [
        'order_id' => 98,
        'refund_reason' => '测试',
        'refund_amount' => 0.1,
        'handler' => 'QD Seven'
    ];
    $api = new RefundApply($data);

    $result = $client->request($api);
    var_dump($result);

} catch (Exception $e) {
    var_dump($e->getMessage());
}