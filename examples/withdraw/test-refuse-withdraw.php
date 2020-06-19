<?php

use SayaCloud\Api\Withdraw\WithdrawRefuse;
use SayaCloud\SayaCloud;

include '../../vendor/autoload.php';
include '../config.php';

try {
    $client = SayaCloud::client($config);

    $data = [
        'id' => 1,
        'refuse_reason'=>'test refuse and return to balance',
        'handler'=>'QD R'
    ];
    $api = new WithdrawRefuse($data);

    $result = $client->request($api);
    var_dump($result);

} catch (Exception $e) {
    var_dump($e->getMessage());
}