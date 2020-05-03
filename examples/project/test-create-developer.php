<?php

use SayaCloud\Projects\Resource\DeveloperNew;
use SayaCloud\Projects\Resource\ProjectNew;
use SayaCloud\SayaCloud;

include '../../vendor/autoload.php';
include '../config.php';

try {
    $client = SayaCloud::client($config);

    $developer = [
        'project_id'=>1,
        'name'=>'MafuStore',
        'app_key'=>'Jkq9c91279X',
        'app_secret'=>'jaj90qncaiodsu2349achaosdlfasd'
    ];
    $newDeveloper = new DeveloperNew($developer);

    $result = $client->request($newDeveloper);
    var_dump($result);

} catch (Exception $e) {
    var_dump($e->getMessage());
}
