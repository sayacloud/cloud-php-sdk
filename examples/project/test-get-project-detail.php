<?php

use SayaCloud\Api\Projects\ProjectDetail;
use SayaCloud\SayaCloud;

include '../../vendor/autoload.php';
include '../config.php';

try {
    $client = SayaCloud::client($config);

    $projectDetail = new ProjectDetail();
    $projectDetail->setId(3);

    $result = $client->request($projectDetail);
    var_dump($result);

} catch (Exception $e) {
    var_dump($e->getMessage());
}