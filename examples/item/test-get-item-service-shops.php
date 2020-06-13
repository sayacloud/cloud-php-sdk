<?php

use SayaCloud\Api\Items\ItemServiceShops;
use SayaCloud\SayaCloud;

include '../../vendor/autoload.php';
include '../config.php';

try {
    $client = SayaCloud::client($config);

    $query = [
        'item_id' => 12,
    ];

    $sku = new ItemServiceShops($query);

    $result = $client->request($sku);
    print_r($result);

} catch (Exception $e) {
    var_dump($e->getMessage());
}