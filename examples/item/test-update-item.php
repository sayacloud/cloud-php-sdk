<?php

use SayaCloud\Api\Items\ItemUpdate;
use SayaCloud\SayaCloud;

include '../../vendor/autoload.php';
include '../config.php';

try {
    $client = SayaCloud::client($config);

    $item = [
        'id'=>1,
        'project_id'=>1,
        'shop_id'=>1,
        'name'=>'Items 1-aklds',
        'category_id'=>1,
        'subcategory_id'=>2,
        'status'=>'listed',
        'item_deal_type'=>'points'
    ];
    $update = new ItemUpdate($item);

    $result = $client->request($update);
    var_dump($result);

} catch (Exception $e) {
    var_dump($e->getMessage());
}