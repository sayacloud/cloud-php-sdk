<?php

use SayaCloud\Projects\Resource\ProjectList;
use SayaCloud\SayaCloud;

include '../../vendor/autoload.php';
include '../config.php';

try {
    $client = SayaCloud::client($config);

    $listProject = new ProjectList();
    $listProject->setLimit(2);

    $result = $client->request($listProject);
    var_dump($result);

} catch (Exception $e) {
    var_dump($e->getMessage());
}