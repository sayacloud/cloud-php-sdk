<?php

use SayaCloud\Api\Items\ItemNew;
use SayaCloud\SayaCloud;

include '../../vendor/autoload.php';
include '../config.php';

try {
    $client = SayaCloud::client($config);

    $item = [
        'project_id'=>1,
        'shop_id'=>1,
        'name'=>'Items 2',
        'category_id'=>1,
        'subcategory_id'=>2,
        'item_deal_type'=>'points'
    ];
    $new = new ItemNew($item);

    $result = $client->request($new);
    var_dump($result);

} catch (Exception $e) {
    var_dump($e->getMessage());
}