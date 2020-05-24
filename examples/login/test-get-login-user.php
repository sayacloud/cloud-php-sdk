<?php

use SayaCloud\Api\Login\LoginUser;
use SayaCloud\SayaCloud;

try {
    $client = SayaCloud::client($config);

    $query = ['login_key' => 'hlalldawxasf01e1c1asdfadsfa868e4b6a1'];
    $api = new LoginUser($query);

    $result = $client->request($api);
    var_dump($result);

} catch (Exception $e) {
    var_dump($e->getMessage());
}