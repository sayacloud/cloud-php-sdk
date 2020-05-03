<?php

use SayaCloud\Api\Categories\CategoryNew;
use SayaCloud\Api\Developers\DeveloperNew;
use SayaCloud\Api\Subcategories\SubcategoryNew;
use SayaCloud\SayaCloud;

include '../../vendor/autoload.php';
include '../config.php';

try {
    $client = SayaCloud::client($config);

    $category = [
        'project_id'=>1,
        'category_id'=>1,
        'title'=>'保险',
        'rank'=>12,
        'settlement_rate'=>70.00
    ];
    $new = new SubcategoryNew($category);

    $result = $client->request($new);
    var_dump($result);

} catch (Exception $e) {
    var_dump($e->getMessage());
}