<?php

use SayaCloud\Api\Items\ItemList;
use SayaCloud\SayaCloud;

include '../../vendor/autoload.php';
include '../config.php';

try {
    $client = SayaCloud::client($config);

    $list = new ItemList([]);

    $result = $client->request($list);
    print_r($result);

} catch (Exception $e) {
    var_dump($e->getMessage());
}