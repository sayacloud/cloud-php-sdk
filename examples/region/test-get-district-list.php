<?php

use SayaCloud\Api\DistrictList;
use SayaCloud\SayaCloud;

include '../../vendor/autoload.php';
include '../config.php';

try {
    $client = SayaCloud::client($config);

    $filter = [
        'city_id'=>236
    ];
    $list = new DistrictList($filter);

    $result = $client->request($list);
    var_dump($result);

} catch (Exception $e) {
    var_dump($e->getMessage());
}