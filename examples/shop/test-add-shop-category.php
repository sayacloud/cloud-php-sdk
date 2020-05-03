<?php

use SayaCloud\Api\Shops\ShopCategorySave;
use SayaCloud\SayaCloud;

include '../../vendor/autoload.php';
include '../config.php';

try {
    $client = SayaCloud::client($config);

    $category = [
        'shop_id' => 1,
        'category_id' => 1,
        'subcategories' => '1,2'
    ];
    $add = new ShopCategorySave($category);

    $result = $client->request($add);
    var_dump($result);

} catch (Exception $e) {
    var_dump($e->getMessage());
}