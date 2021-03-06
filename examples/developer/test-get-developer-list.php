<?php

use SayaCloud\Api\Developers\DeveloperList;
use SayaCloud\SayaCloud;

include '../../vendor/autoload.php';
include '../config.php';

try {
    $client = SayaCloud::client($config);

    $listDeveloper = new DeveloperList();
    $listDeveloper->setLimit(2);

    $result = $client->request($listDeveloper);
    var_dump($result);

} catch (Exception $e) {
    var_dump($e->getMessage());
}