<?php

use SayaCloud\Api\Comment\CommentDetail;
use SayaCloud\Api\Comment\CommentList;
use SayaCloud\SayaCloud;

include '../../vendor/autoload.php';
include '../config.php';

try {
    $client = SayaCloud::client($config);

    $filter = [
        'id' => 3,
    ];
    $api = new CommentDetail($filter);

    $result = $client->request($api);
    var_dump($result);

} catch (Exception $e) {
    var_dump($e->getMessage());
}