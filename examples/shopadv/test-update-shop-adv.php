<?php

use SayaCloud\Api\Adv\AdvUpdate;
use SayaCloud\SayaCloud;

include '../../vendor/autoload.php';
include '../config.php';

try {
    $client = SayaCloud::client($config);

    $update = [
        'id'=>1,
        'project_id'=>1,
        'position'=>'points_slider',
        'title'=>'广告图',
        'image_url'=>'/a.jpg',
        'link_url'=>'/myorders/list.html',
        'state'=>'disabled'
    ];
    $updateMenu = new AdvUpdate($update);

    $result = $client->request($updateMenu);
    var_dump($result);

} catch (Exception $e) {
    var_dump($e->getMessage());
}