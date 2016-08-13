<?php
/**
* Model base class
*/
class Model
{
	function __construct()
	{
		$this->Model();
	}
	function Model(){
		//
	}

	/**
	 * 检查是否是超级管理员
	 * @param  [type] $id [description]
	 * @return [type]     [description]
	 */
	function check_is_superadmin($id){
		$query = "SELECT admin_name FROM ".DB_PREFIX.$this->_table_admin." WHERE 1 AND id='$id'";
		return db::findOne($query);
	}
}
?>