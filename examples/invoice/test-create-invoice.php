<?php

use SayaCloud\Api\Invoice\InvoiceNew;
use SayaCloud\SayaCloud;

include '../../vendor/autoload.php';
include '../config.php';

try {
    $client = SayaCloud::client($config);

    $data = [
        'payment_id'=>88,
        'buyer_id'=>2,
        'type' => 'VAT_special',
        'title' => '企业',
        'name' => '成都茵科美信技术有限公司',
        'bank_name' => '建设银行',
        'id_code' => '510JOPB8129LCR1688OKOK',
        'telephone' => '18702881376'
    ];
    $api = new InvoiceNew($data);

    $result = $client->request($api);
    var_dump($result);

} catch (Exception $e) {
    var_dump($e->getMessage());
}