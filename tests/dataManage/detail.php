<?php

/*****************************************************
 * 测试:数据管理详情
 *
 * 使用方法:
 * php detail.php
 * ***************************************************
 */


defined('BASICFINDER_ENV') or define('BASICFINDER_ENV', 'dev');

include __DIR__.'/../../autoload.php';

use BasicAiSaas\SaasApi;

$saasapi = new SaasApi();

$account = [
    'username' => 'shuaiqun@root.com',
    'password' => 'your password',
    'app_key' => 'pc-root',
    'app_version' => '1.0.0',
    'device_name' => 'Win32',
    'device_number' => '123456'
];
$result = $saasapi->site->login($account);

if (!empty($result['error']))
{
    var_dump($result);
    exit();
}
var_dump($result['data']);

$params = [
    "data_manage_id"=> 648
];
$detailResult = $saasapi->DataManage->detail($params);
var_dump($detailResult);


