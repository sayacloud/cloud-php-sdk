<?php

use SayaCloud\Api\Shops\ShopCategoryDelete;
use SayaCloud\SayaCloud;

include '../../vendor/autoload.php';
include '../config.php';

try {
    $client = SayaCloud::client($config);

    $delete = new ShopCategoryDelete(['shop_id'=>1,'category_id'=>1]);

    $result = $client->request($delete);
    var_dump($result);

} catch (Exception $e) {
    var_dump($e->getMessage());
}