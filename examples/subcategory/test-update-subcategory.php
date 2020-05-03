<?php

use SayaCloud\Api\Categories\CategoryUpdate;
use SayaCloud\Api\Subcategories\SubcategoryUpdate;
use SayaCloud\SayaCloud;

include '../../vendor/autoload.php';
include '../config.php';

try {
    $client = SayaCloud::client($config);

    $category = [
        'id'=>2,
        'rank'=>505
    ];
    $update = new SubcategoryUpdate($category);

    $result = $client->request($update);
    var_dump($result);

} catch (Exception $e) {
    var_dump($e->getMessage());
}