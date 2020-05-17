<?php

use SayaCloud\Api\Levels\RewardLevelUpdate;
use SayaCloud\SayaCloud;

include '../../vendor/autoload.php';
include '../config.php';

try {
    $client = SayaCloud::client($config);

    $data = [
        'id' => 1,
        'title' => '认证会员',
        'discount' => 20,
        'l0_points' => '10%',
        'l0_points_name' => '会员积分奖励'
    ];
    $api = new RewardLevelUpdate($data);

    $result = $client->request($api);
    var_dump($result);

} catch (Exception $e) {
    var_dump($e->getMessage());
}