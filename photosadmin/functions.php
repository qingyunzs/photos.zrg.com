<?php
/**
 * [C description]
 * @param [type] $controller_name [description]
 * @param [type] $method          [description]
 */
function C($controller, $method){
	require_once('application/Controller/'.$controller.'Controller.class.php');
	eval('$obj = new '.$controller.'Controller();$obj->'.$method.'();');
}
/**
 * [M description]
 * @param [type] $model [description]
 */
function M($model){
	require_once('application/Model/'.$model.'Model.class.php');
		//$testModel = new testModel();
	eval('$obj = new '.$model.'Model();');
	return $obj;
}
/**
 * [V description]
 * @param [type] $view [description]
 */
function V($view){
	require_once('application/View/'.$view.'View.class.php');
		//$testView = new testView();
	eval('$obj = new '.$view.'View();');
	return $obj;
}
/**
 * [ORG description]
 * @param [type] $path   [description]
 * @param [type] $name   [description]
 * @param array  $params [description]
 */
function ORG($path, $name, $params=array()){
	require_once(ROOT_PATH.'/framework/libraries/'.$path.$name.'.class.php');
		//eval('$obj = new '.$name.'();');
	$obj = new $name();
	if(!empty($params)){
		foreach($params as $key=>$value){
				//eval('$obj->'.$key.' = \''.$value.'\';');
			$obj->$key = $value;
		}
	}
	return $obj;
}

/**
 * [daddslashes description]
 * @param  [type] $str [description]
 * @return [type]      [description]
 */
function daddslashes($str){
	return (!get_magic_quotes_gpc())?addslashes($str):$str;
}
?>