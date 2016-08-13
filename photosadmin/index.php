<?php
define('ADMIN_ROOT', dirname(__FILE__));//仅在后台使用
define('ROOT_PATH', dirname(ADMIN_ROOT));
define('ADMIN_PUBLIC','admin_public/');

header("Content-type: text/html; charset=utf-8");
session_start();

//引入统一的配置文件
require_once(ROOT_PATH.'/config.php');
//引入函数文件
require_once('functions.php');
//引入框架初始化文件
require_once(ROOT_PATH.'/framework/initialize.class.php');

// 系统后台初始化
initialize::run($config);
/*$controllerAllow=array('index');
$methodAllow=array('index','login');
$controller=in_array($_GET['controller'],$controllerAllow)?daddslashes($_GET['controller']):'index';
$method=in_array($_GET['method'],$methodAllow)?daddslashes($_GET['method']):'index';

C($controller, $method);*/

?>