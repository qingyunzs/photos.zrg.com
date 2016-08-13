<?php
define('PUBLIC','/public'); //加载js、css
header("Content-type: text/html; charset=utf-8");
session_start();

//引入smarty初始化配置文件
require_once('config.php');
//引入函数文件
require_once('functions.php');
//引入框架初始化文件
require_once('framework/initialize.class.php');
//初始化
initialize::run($config);
?>