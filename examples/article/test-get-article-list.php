<?php

use SayaCloud\Api\Article\ArticleCategoryList;
use SayaCloud\SayaCloud;

include '../../vendor/autoload.php';
include '../config.php';

try {
    $client = SayaCloud::client($config);

    $data = [
        'project_id' => 1,
    ];
    $api = new ArticleCategoryList($data);

    $result = $client->request($api);
    var_dump($result);

} catch (Exception $e) {
    var_dump($e->getMessage());
}