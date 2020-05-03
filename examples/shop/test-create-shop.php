<?php

use SayaCloud\Api\Shops\ShopNew;
use SayaCloud\SayaCloud;

include '../../vendor/autoload.php';
include '../config.php';

try {
    $client = SayaCloud::client($config);

    $shop = [
        'project_id'=>1,
        'shop_name'=>'中勘马孚1号店'
    ];
    $new = new ShopNew($shop);

    $result = $client->request($new);
    var_dump($result);

} catch (Exception $e) {
    var_dump($e->getMessage());
}