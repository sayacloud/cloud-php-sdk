<?php

use SayaCloud\Projects\Resource\DeveloperDetail;
use SayaCloud\SayaCloud;

include '../../vendor/autoload.php';
include '../config.php';

try {
    $client = SayaCloud::client($config);

    $detail = new DeveloperDetail(['id'=>3]);

    $result = $client->request($detail);
    var_dump($result);

} catch (Exception $e) {
    var_dump($e->getMessage());
}