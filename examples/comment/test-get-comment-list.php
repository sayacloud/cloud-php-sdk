<?php

use SayaCloud\Api\Comment\CommentList;
use SayaCloud\SayaCloud;

include '../../vendor/autoload.php';
include '../config.php';

try {
    $client = SayaCloud::client($config);

    $payment = [
        'item_id' => 1,
    ];
    $api = new CommentList($payment);

    $result = $client->request($api);
    var_dump($result);

} catch (Exception $e) {
    var_dump($e->getMessage());
}