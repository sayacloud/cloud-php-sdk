<?php

use SayaCloud\Api\Items\ItemDetail;
use SayaCloud\SayaCloud;

include '../../vendor/autoload.php';
include '../config.php';

try {
    $client = SayaCloud::client($config);

    $detail = new ItemDetail(['id'=>1]);

    $result = $client->request($detail);
    print_r($result);

} catch (Exception $e) {
    var_dump($e->getMessage());
}