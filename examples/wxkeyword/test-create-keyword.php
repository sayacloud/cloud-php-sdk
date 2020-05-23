<?php

use SayaCloud\Api\WxKeyword\WxKeywordNew;
use SayaCloud\SayaCloud;

include '../../vendor/autoload.php';
include '../config.php';

try {
    $client = SayaCloud::client($config);

    $new = [
        'project_id' => 1,
        'keyword' => 'subscribe',
        'response_type' => 'text',
        'content' => 'Hello this is subscribe response'
    ];
    $api = new WxKeywordNew($new);

    $result = $client->request($api);
    var_dump($result);

} catch (Exception $e) {
    var_dump($e->getMessage());
}