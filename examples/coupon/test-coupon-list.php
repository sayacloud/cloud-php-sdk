<?php

use SayaCloud\Api\Coupon\CouponList;
use SayaCloud\SayaCloud;

include '../../vendor/autoload.php';
include '../config.php';

try {
    $client = SayaCloud::client($config);

    $list = new CouponList([]);

    $result = $client->request($list);
    print_r($result);

} catch (Exception $e) {
    var_dump($e->getMessage());
}