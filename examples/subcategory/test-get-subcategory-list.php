<?php

use SayaCloud\Api\Categories\CategoryList;
use SayaCloud\Api\Subcategories\SubcategoryList;
use SayaCloud\SayaCloud;

include '../../vendor/autoload.php';
include '../config.php';

try {
    $client = SayaCloud::client($config);

    $list = new SubcategoryList(['project_id' => 1, 'category_id' => 1]);

    $result = $client->request($list);
    var_dump($result);

} catch (Exception $e) {
    var_dump($e->getMessage());
}