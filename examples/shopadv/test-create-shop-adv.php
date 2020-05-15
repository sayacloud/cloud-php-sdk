<?php

use SayaCloud\Api\Adv\AdvNew;
use SayaCloud\SayaCloud;

include '../../vendor/autoload.php';
include '../config.php';

try {
    $client = SayaCloud::client($config);

    $new = [
        'project_id' => 1,
        'position' => 'shop_slider',
        'title' => '我的订单',
        'image_url' => '/a.jpg',
        'link_url' => '/myorders/list.html',
        'rank'=>10
    ];
    $newMenu = new AdvNew($new);

    $result = $client->request($newMenu);
    var_dump($result);

} catch (Exception $e) {
    var_dump($e->getMessage());
}