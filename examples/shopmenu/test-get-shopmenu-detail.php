<?php

use SayaCloud\Api\Adv\ShopMenuDetail;
use SayaCloud\Api\Adv\ShopMenuNew;
use SayaCloud\SayaCloud;

include '../../vendor/autoload.php';
include '../config.php';

try {
    $client = SayaCloud::client($config);

    $get = [
        'id'=>1
    ];
    $detail = new ShopMenuDetail($get);

    $result = $client->request($detail);
    var_dump($result);

} catch (Exception $e) {
    var_dump($e->getMessage());
}