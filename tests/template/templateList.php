<?php

/*****************************************************
 * 测试:获取模板列表
 *
 * 使用方法:
 * php templateList.php
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
    "limit" => 5, //	    是	int	每页展示数据量
    "page" => 1,  //	    是	int	页数
];
$listResult = $saasapi->template->templateList($params);
var_dump($listResult);


