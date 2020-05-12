<?php

use SayaCloud\Api\Utils\UploadFile;
use SayaCloud\SayaCloud;

include '../../vendor/autoload.php';
include '../config.php';

try {
    $client = SayaCloud::client($config);

    $file = './images/appstore.png';
    if (!file_exists($file)) {
        throw new Exception('File not exists');
    }

    $upload = new UploadFile();
//    $fp = fopen($file, 'rb');
//    $body = fread($fp, filesize($file));
    $upload->setMultipart(['name'=>'file','contents'=>file_get_contents($file),'filename'=>$file]);

    $result = $client->request($upload);
    var_dump($result);

} catch (Exception $e) {
    var_dump($e->getMessage());
}