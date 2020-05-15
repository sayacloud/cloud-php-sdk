<?php

use SayaCloud\Api\Adv\AdvDetail;
use SayaCloud\SayaCloud;

include '../../vendor/autoload.php';
include '../config.php';

try {
    $client = SayaCloud::client($config);

    $get = [
        'id'=>1
    ];
    $detail = new AdvDetail($get);

    $result = $client->request($detail);
    var_dump($result);

} catch (Exception $e) {
    var_dump($e->getMessage());
}