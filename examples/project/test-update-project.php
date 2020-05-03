<?php

use SayaCloud\Projects\Resource\ProjectDetail;
use SayaCloud\Projects\Resource\ProjectUpdate;
use SayaCloud\SayaCloud;

include '../../vendor/autoload.php';
include '../config.php';

try {
    $client = SayaCloud::client($config);

    // 传入需要修改的数据，id必填
    $project = [
        'id'=>3,
        'project_name'=>'updateName'
    ];
    $updateProject = new ProjectUpdate($project);
    // 可以再修改其他字段
    $updateProject->setProjectDescription('blabla desc');
    // 发送修改请求，不出异常，则表示成功
    $result = $client->request($updateProject);
    var_dump($result);

    // 查询修改后的数据
    $detail = new ProjectDetail(['id'=>3]);
    $result = $client->request($detail);
    var_dump($result);

} catch (Exception $e) {
    var_dump($e->getMessage());
}