<?php

use SayaCloud\Api\Adv\ShopMenuNew;
use SayaCloud\SayaCloud;

include '../../vendor/autoload.php';
include '../config.php';

try {
    $client = SayaCloud::client($config);

    $new = [
        'project_id'=>1,
        'position'=>'default',
        'menu'=>'我的订单',
        'icon'=>'/a.jpg',
        'link'=>'/myorders/list.html',
    ];
    $newMenu = new ShopMenuNew($new);

    $result = $client->request($newMenu);
    var_dump($result);

} catch (Exception $e) {
    var_dump($e->getMessage());
}