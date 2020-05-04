<?php

use SayaCloud\Api\Items\ItemSkuNew;
use SayaCloud\SayaCloud;

include '../../vendor/autoload.php';
include '../config.php';

try {
    $client = SayaCloud::client($config);

    $sku_data = [
        'item_id'=>1,
        'sku_name'=>'促销（限量100)',
        'quantity'=>100
    ];

    $sku = new ItemSkuNew($sku_data);

    $result = $client->request($sku);
    print_r($result);

} catch (Exception $e) {
    var_dump($e->getMessage());
}