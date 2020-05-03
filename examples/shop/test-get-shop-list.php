<?php

use SayaCloud\Api\Shops\ShopList;
use SayaCloud\Api\Shops\ShopNew;
use SayaCloud\SayaCloud;

include '../../vendor/autoload.php';
include '../config.php';

try {
    $client = SayaCloud::client($config);

    $shopList = new ShopList();

    $result = $client->request($shopList);
    var_dump($result);

} catch (Exception $e) {
    var_dump($e->getMessage());
}