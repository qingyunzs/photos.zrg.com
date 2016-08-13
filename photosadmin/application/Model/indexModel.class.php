<?php
/**
* 后台首页模型
*/
class indexModel
{
	/**
	 * 获取MySQL版本
	 * @return [type] [description]
	 */
	function get_mysql_version(){
		$sql = 'SELECT VERSION() AS version';
		return db::findOne($sql);
	}
}

?>