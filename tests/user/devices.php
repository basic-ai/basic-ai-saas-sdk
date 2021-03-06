<?php

/*****************************************************
 * 测试:获取到用户的使用设备信息列表
 *
 * 使用方法:
 * php devices.php
 * ***************************************************
 */


defined('BASICFINDER_ENV') or define('BASICFINDER_ENV', 'dev');

include __DIR__.'/../../autoload.php';

use BasicAiSaas\SaasApi;

$saasapi = new SaasApi();

$account = [
    'username' => 'your email',
    'password' => 'your password',
    'app_key' => 'pc-passport',
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
    "user_id" => 38028,
    "limit" => 5,
    "page" => 1
];
$devicesResult = $saasapi->user->devices($params);
var_dump($devicesResult);


