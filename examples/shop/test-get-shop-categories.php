<?php


use SayaCloud\Api\Shops\ShopCategories;
use SayaCloud\SayaCloud;

include '../../vendor/autoload.php';
include '../config.php';

try {
    $client = SayaCloud::client($config);

    $categories = new ShopCategories(['shop_id'=>1]);

    $result = $client->request($categories);
    var_dump($result);

} catch (Exception $e) {
    var_dump($e->getMessage());
}