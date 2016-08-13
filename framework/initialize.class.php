<?php
$currentdir = dirname(__FILE__);
include_once($currentdir.'/include.list.php');
foreach ($paths as $path) {
	include_once($currentdir.'/'.$path);
}

date_default_timezone_set('Asia/Shanghai'); //setting time zone

define('SITE_URL','http://'.$_SERVER['HTTP_HOST']);
define('ADMIN_URL','http://'.$_SERVER['HTTP_HOST'].'/photosadmin');
/* 判断请求方式 */
define('IS_POST', (strtoupper($_SERVER['REQUEST_METHOD']) == 'POST'));

/**
 * Initialization class
 */
class initialize{
	public static $controller;
	public static $method;
	private static $config;

	private static function init_db(){
		db::init(self::$config['db_config']);
	}

	private static function init_view(){
		view::init(self::$config['view_config']);
	}

	private static function init_controllor(){
		self::$controller = isset($_GET['controller']) ? daddslashes($_GET['controller']) : 'index';
	}

	private static function init_method(){
		self::$method = isset($_GET['method']) ? daddslashes($_GET['method']) : 'index';
	}

	public static function run($config){
		self::$config = $config;
		self::init_db();
		self::init_view();
		self::init_controllor();
		self::init_method();
		C(self::$controller,self::$method);
	}
}
?>