<?php

use SayaCloud\Exception\MessageException;
use SayaCloud\Lib\ContentType;
use SayaCloud\Lib\RequestMethod;
use SayaCloud\Messages\Messages;

include '../../vendor/autoload.php';
include '../config.php';

// Url回调通知
try {
    $urlCallback = Messages::agent($config)->newUrlCallback();

    $urlCallback->setRequestUrl('http://www.ifsvc.cn/test-curl');
    $urlCallback->setContentType(ContentType::URLENCODE);
    $urlCallback->setRequestBody(['out_trade_id' => 123, 'random_key' => 'abc123']);
    $urlCallback->setRequestHeader(['Sign' => 'This is fake signature', 'Date-GMT' => 'Fri, 12 21 Fa,2020']);
    $urlCallback->setRequestMethod(RequestMethod::POST);
    $urlCallback->setSuccessResponse('success');
    $urlCallback->setRetryDelay([3, 5, 10, 20]);
    $urlCallback->setValidTime(30);// 设置消息有效时间（秒），该值不应小于delay中的最大值

    $urlCallback->setFeedbackUrl('http://blog.ifsvc.cn/test-curl'); // 执行结果反馈地址

    $result = Messages::sendMessage($urlCallback);
    var_dump($result);
} catch (MessageException $e) {
    echo $e->getMessage();
}