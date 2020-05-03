<?php

use SayaCloud\Api\Categories\CategoryUpdate;
use SayaCloud\SayaCloud;

include '../../vendor/autoload.php';
include '../config.php';

try {
    $client = SayaCloud::client($config);

    $category = [
        'id'=>1,
        'project_id'=>1,
        'rank'=>50
    ];
    $update = new CategoryUpdate($category);

    $result = $client->request($update);
    var_dump($result);

} catch (Exception $e) {
    var_dump($e->getMessage());
}