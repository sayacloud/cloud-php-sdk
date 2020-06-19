<?php

use SayaCloud\Api\Withdraw\WithdrawNew;
use SayaCloud\SayaCloud;

include '../../vendor/autoload.php';
include '../config.php';

try {
    $client = SayaCloud::client($config);

    $data = [
        'account_type' => 'user',
        'account_id' => 2,
        'withdraw_amount' => 1,
        'user_id' => 2,
        'handler' => 'QD',
        'receiving_account' => 'op-1lwIICD_U3NeJ7JYT62NjSnbk',
        'receiving_account_name' => '微信钱包',
        'receiving_holder_name' => '温启东',
        'receiving_account_type' => '微信'
    ];
    $api = new WithdrawNew($data);

    $result = $client->request($api);
    var_dump($result);

} catch (Exception $e) {
    var_dump($e->getMessage());
}