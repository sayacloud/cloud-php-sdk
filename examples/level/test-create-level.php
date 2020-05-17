<?php

use SayaCloud\Api\Levels\RewardLevelNew;
use SayaCloud\SayaCloud;

include '../../vendor/autoload.php';
include '../config.php';

try {
    $client = SayaCloud::client($config);

    $data = [
        'project_id'=>1,
        'title'=>'名称',
        'valid_days'=>70,
        'scope'=>'user'
    ];
    $api = new RewardLevelNew($data);

    $result = $client->request($api);
    var_dump($result);

} catch (Exception $e) {
    var_dump($e->getMessage());
}