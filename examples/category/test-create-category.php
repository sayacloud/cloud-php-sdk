<?php

use SayaCloud\Api\Categories\CategoryNew;
use SayaCloud\Api\Developers\DeveloperNew;
use SayaCloud\SayaCloud;

include '../../vendor/autoload.php';
include '../config.php';

try {
    $client = SayaCloud::client($config);

    $category = [
        'project_id'=>1,
        'title'=>'一类服务',
        'rank'=>12,
        'settlement_rate'=>70.00
    ];
    $new = new CategoryNew($category);

    $result = $client->request($new);
    var_dump($result);

} catch (Exception $e) {
    var_dump($e->getMessage());
}