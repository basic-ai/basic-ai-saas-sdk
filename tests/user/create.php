<?php

/*****************************************************
 * 测试:创建用户
 *
 * 使用方法:
 * php create.php
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
    "email" => "your email",
    "password" => 'your password',
    "roles" => 'team_worker',
    "type" => 2,
    "site_id" => 363,
    "team_id" => 1421
];
$createResult = $saasapi->user->create($params);
var_dump($createResult);


