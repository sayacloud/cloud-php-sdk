<?php

use SayaCloud\Projects\Resource\DeveloperUpdate;
use SayaCloud\Projects\Resource\ProjectDelete;
use SayaCloud\SayaCloud;

include '../../vendor/autoload.php';
include '../config.php';

try {
    $client = SayaCloud::client($config);

    $developer = [
        'id'=>3,
        'name'=>'demo deveoper',
        'app_key'=>'Jkq9c91279z4X',
        'app_secret'=>'yes',
        'project_id'=>1
    ];
    $update = new DeveloperUpdate($developer);

    $result = $client->request($update);
    var_dump($result);

} catch (Exception $e) {
    var_dump($e->getMessage());
}