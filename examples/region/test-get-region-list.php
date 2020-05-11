<?php

use SayaCloud\Api\RegionList;
use SayaCloud\SayaCloud;

include '../../vendor/autoload.php';
include '../config.php';

try {
    $client = SayaCloud::client($config);

    $list = new RegionList();

    $result = $client->request($list);
    var_dump($result);

} catch (Exception $e) {
    var_dump($e->getMessage());
}