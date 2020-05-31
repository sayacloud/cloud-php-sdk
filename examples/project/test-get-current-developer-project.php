<?php

use SayaCloud\Api\Projects\ProjectOfDeveloper;
use SayaCloud\SayaCloud;

include '../../vendor/autoload.php';
include '../config.php';

try {
    $client = SayaCloud::client($config);

    $projectDetail = new ProjectOfDeveloper();

    $result = $client->request($projectDetail);
    var_dump($result);

} catch (Exception $e) {
    var_dump($e->getMessage());
}