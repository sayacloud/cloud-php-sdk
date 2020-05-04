<?php

use SayaCloud\Api\Items\ItemSkuModify;
use SayaCloud\SayaCloud;

include '../../vendor/autoload.php';
include '../config.php';

try {
    $client = SayaCloud::client($config);

    $sku_data = [
        'id'=>3,
        'item_id'=>2,
        'quantity'=>10,
        'cost_price'=>1.2,
        'unit_price'=>1.89
    ];

    $sku = new ItemSkuModify($sku_data);

    $result = $client->request($sku);
    print_r($result);

} catch (Exception $e) {
    var_dump($e->getMessage());
}