<?php

use SayaCloud\Api\Orders\OrderDeliveryCancel;
use SayaCloud\SayaCloud;

include '../../vendor/autoload.php';
include '../config.php';

try {
    $client = SayaCloud::client($config);

    $filter = [
        'order_id' => 17,
        'handler' => 'QD Seven'
    ];
    $api = new OrderDeliveryCancel($filter);

    $result = $client->request($api);
    var_dump($result);

} catch (Exception $e) {
    var_dump($e->getMessage());
}