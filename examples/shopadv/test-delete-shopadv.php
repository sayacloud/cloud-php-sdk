<?php

use SayaCloud\Api\Adv\AdvDelete;
use SayaCloud\SayaCloud;

include '../../vendor/autoload.php';
include '../config.php';

try {
    $client = SayaCloud::client($config);

    $deleteId = [
        'id'=>1
    ];
    $deleteMenu = new AdvDelete($deleteId);

    $result = $client->request($deleteMenu);
    var_dump($result);

} catch (Exception $e) {
    var_dump($e->getMessage());
}