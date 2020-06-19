<?php

use SayaCloud\Api\Withdraw\WithdrawConfirm;
use SayaCloud\SayaCloud;

include '../../vendor/autoload.php';
include '../config.php';

try {
    $client = SayaCloud::client($config);

    $data = [
        'id' => 4,
        'remark' => 'ok,start transfer the money from wechat',
        'handler' => 'QD T',
        'pay_method'=>'wx-balance'
    ];
    $api = new WithdrawConfirm($data);

    $result = $client->request($api);
    var_dump($result);

} catch (Exception $e) {
    var_dump($e->getMessage());
}