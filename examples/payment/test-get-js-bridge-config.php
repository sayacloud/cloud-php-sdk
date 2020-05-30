<?php

use SayaCloud\Api\Payment\WxJsBridgePaymentConfig;
use SayaCloud\SayaCloud;

include '../../vendor/autoload.php';
include '../config.php';

try {
    $client = SayaCloud::client($config);

    $payment = [
        'payment_id' => 2,
        'openid' => 'op-1lwEQmtMfnGthsUL5K3PuoSQ0'
    ];
    $api = new WxJsBridgePaymentConfig($payment);

    $result = $client->request($api);
    var_dump($result);

} catch (Exception $e) {
    var_dump($e->getMessage());
}
