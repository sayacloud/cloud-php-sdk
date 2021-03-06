<?php

use SayaCloud\Api\Logs\LogsList;
use SayaCloud\SayaCloud;

include '../../vendor/autoload.php';
include '../config.php';

try {
    $client = SayaCloud::client($config);

    $filter = [
        'page' => 1,
        'size' => 30,
        'resource' => 'items',
        'relative_id' => 1
    ];
    $resourceLogs = new LogsList($filter);

    $result = $client->request($resourceLogs);
    var_dump($result);

} catch (Exception $e) {
    var_dump($e->getMessage());
}