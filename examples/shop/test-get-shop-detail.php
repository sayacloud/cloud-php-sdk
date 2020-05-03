<?php

use SayaCloud\Api\Shops\ShopDetail;
use SayaCloud\Api\Shops\ShopList;
use SayaCloud\SayaCloud;

include '../../vendor/autoload.php';
include '../config.php';

try {
    $client = SayaCloud::client($config);

    $detail = new ShopDetail(['id'=>1]);

    $result = $client->request($detail);
    var_dump($result);

} catch (Exception $e) {
    var_dump($e->getMessage());
}