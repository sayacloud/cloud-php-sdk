<?php

use SayaCloud\Api\Shops\ShopNew;
use SayaCloud\Api\Shops\ShopUpdate;
use SayaCloud\SayaCloud;

include '../../vendor/autoload.php';
include '../config.php';

try {
    $client = SayaCloud::client($config);

    $shop = [
        'id'=>1,
        'project_id'=>1,
        'shop_name'=>'中勘马孚1号店',
        'address'=>'成都金牛区'
    ];
    $update = new ShopUpdate($shop);

    $result = $client->request($update);
    var_dump($result);

} catch (Exception $e) {
    var_dump($e->getMessage());
}