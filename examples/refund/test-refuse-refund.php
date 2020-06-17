<?php

use SayaCloud\Api\Refund\RefundRefuse;
use SayaCloud\SayaCloud;

include '../../vendor/autoload.php';
include '../config.php';

try {
    $client = SayaCloud::client($config);

    $data = [
        'id' => 1,
        'reason' => 'test refuse this refund'
    ];
    $api = new RefundRefuse($data);

    $result = $client->request($api);
    var_dump($result);

} catch (Exception $e) {
    var_dump($e->getMessage());
}