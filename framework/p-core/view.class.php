<?php
/**
 * View Factory class
 */
class view{
	public static $view;

	public static function init($view_config){
		self::$view = new $view_config['view_type'];
		unset($view_config['view_type']);
		foreach ($view_config as $key => $value) {
			self::$view -> $key = $value;
		}
	}

	public static function assign($data){
		foreach ($data as $key => $value) {
			self::$view->assign($key,$value);
		}
	}

	public static function display($template){
		self::$view->display($template);
	}
}
?>