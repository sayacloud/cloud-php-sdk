<?php

use SayaCloud\Api\Items\ItemSkuDelete;
use SayaCloud\SayaCloud;

include '../../vendor/autoload.php';
include '../config.php';

try {
    $client = SayaCloud::client($config);

    $sku_data = [
        'id'=>1
    ];

    $sku = new ItemSkuDelete($sku_data);

    $result = $client->request($sku);
    print_r($result);

} catch (Exception $e) {
    var_dump($e->getMessage());
}