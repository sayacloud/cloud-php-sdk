<?php

use SayaCloud\Messages\Exception\MessageException;
use SayaCloud\Messages\Messages;

include '../../vendor/autoload.php';
include '../config.php';

// 发送邮件
try {
    $emailPackage = Messages::agent($config)->newEmailPackage();
    $emailPackage->setTemplateCode('TestEmail');
    $emailPackage->setLanguage('en');
    $emailPackage->setTemplateVars(['user_name' => 'uName']);
    $emailPackage->setRecipients(['82294148@qq.com']);
    $result = Messages::sendMessage($emailPackage);
    var_dump($result);
    // 消息uuid，可用于查询发送结果
    $uuid = $emailPackage->getMessageUuid();
    var_dump($uuid);

} catch (MessageException $e) {
    echo $e->getMessage();
}