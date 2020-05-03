<?php

use SayaCloud\Api\Categories\CategoryDetail;
use SayaCloud\Api\Subcategories\SubcategoryDetail;
use SayaCloud\SayaCloud;

include '../../vendor/autoload.php';
include '../config.php';

try {
    $client = SayaCloud::client($config);

    $detail = new SubcategoryDetail(['id' => 1]);

    $result = $client->request($detail);
    var_dump($result);

} catch (Exception $e) {
    var_dump($e->getMessage());
}