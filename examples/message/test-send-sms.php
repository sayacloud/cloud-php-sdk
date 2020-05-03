<?php

use SayaCloud\Exception\MessageException;
use SayaCloud\Messages\Messages;

include '../../vendor/autoload.php';
include '../config.php';

// 发送短信
try {
    $emailPackage = Messages::agent($config)->newSmsPackage();
    $emailPackage->setMobileNumber('18702881376');
    $emailPackage->setRegionCode('86');
    $emailPackage->setSmsVars(['code' => '882993']);
    $emailPackage->setSmsTemplateCode('SMS_2020041801');
    $result = Messages::sendMessage($emailPackage);
    var_dump($result);
} catch (MessageException $e) {
    echo $e->getMessage();
}