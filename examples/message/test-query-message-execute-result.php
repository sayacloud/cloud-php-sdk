<?php

use SayaCloud\Messages\Exception\MessageException;
use SayaCloud\Messages\Messages;

include '../../vendor/autoload.php';
include '../config.php';

// 查询消息执行结果
try {
    $query = Messages::agent($config)->newMessageQuery();

    // 消息的uuid，在创建消息的时候,消息提交成功后，前端可以从package中获取关保存
    $query->setMessageUuid('97eabab2-8503-11ea-b1bf-186590e05cbb');

    $result = Messages::sendQuery($query);

    print_r($result);

} catch (MessageException $e) {
    var_dump($e->getMessage());
} catch (\Exception $e) {
    var_dump($e->getMessage());
}