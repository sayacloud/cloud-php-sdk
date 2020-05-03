<?php

use SayaCloud\Projects\Resource\ProjectNew;
use SayaCloud\SayaCloud;

include '../../vendor/autoload.php';
include '../config.php';

try {
    $client = SayaCloud::client($config);

    $newProject = new ProjectNew();
    $newProject->setProjectName('new project name');
    $newProject->setProjectDescription('this is a demo project');
    $newProject->setStatus('normal');

    $result = $client->request($newProject);
    var_dump($result);

} catch (Exception $e) {
    var_dump($e->getMessage());
}
