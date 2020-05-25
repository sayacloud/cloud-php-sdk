<?php

use SayaCloud\Api\Article\ArticleCategoryNew;
use SayaCloud\SayaCloud;

include '../../vendor/autoload.php';
include '../config.php';

try {
    $client = SayaCloud::client($config);

    $data = [
        'project_id' => 1,
        'title' => '新闻'
    ];
    $api = new ArticleCategoryNew($data);

    $result = $client->request($api);
    var_dump($result);

} catch (Exception $e) {
    var_dump($e->getMessage());
}