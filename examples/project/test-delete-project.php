<?php

use SayaCloud\Api\Projects\ProjectDelete;
use SayaCloud\SayaCloud;

include '../../vendor/autoload.php';
include '../config.php';

try {
    $client = SayaCloud::client($config);

    $deleteProject = new ProjectDelete();
    $deleteProject->setId(2);

    $result = $client->request($deleteProject);
    var_dump($result);

} catch (Exception $e) {
    var_dump($e->getMessage());
}