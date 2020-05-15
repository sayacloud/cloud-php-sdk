<?php

use SayaCloud\Api\Adv\ShopMenuNew;
use SayaCloud\Api\Adv\ShopMenuUpdate;
use SayaCloud\SayaCloud;

include '../../vendor/autoload.php';
include '../config.php';

try {
    $client = SayaCloud::client($config);

    $update = [
        'id'=>1,
        'project_id'=>1,
        'position'=>'default',
        'menu'=>'我的订单2',
        'icon'=>'/a.jpg',
        'link'=>'/myorders/list.html',
        'state'=>'disabled'
    ];
    $updateMenu = new ShopMenuUpdate($update);

    $result = $client->request($updateMenu);
    var_dump($result);

} catch (Exception $e) {
    var_dump($e->getMessage());
}