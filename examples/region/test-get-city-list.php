<?php

use SayaCloud\Api\CityList;
use SayaCloud\SayaCloud;

include '../../vendor/autoload.php';
include '../config.php';

try {
    $client = SayaCloud::client($config);

    $filter = [
        'province_id'=>23
    ];
    $list = new CityList($filter);

    $result = $client->request($list);
    var_dump($result);

} catch (Exception $e) {
    var_dump($e->getMessage());
}