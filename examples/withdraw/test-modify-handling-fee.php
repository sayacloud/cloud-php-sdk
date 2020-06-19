<?php

use SayaCloud\Api\Withdraw\WithdrawModify;
use SayaCloud\SayaCloud;

include '../../vendor/autoload.php';
include '../config.php';

try {
    $client = SayaCloud::client($config);

    $data = [
        'id' => 4,
        'handling_fee' => 0.3,
        'handler' => 'QD H'
    ];
    $api = new WithdrawModify($data);

    $result = $client->request($api);
    var_dump($result);

} catch (Exception $e) {
    var_dump($e->getMessage());
}