<?php
/**
* Model base class
*/
class Model
{
	public $_table_menu = 'system_menu';
	function __construct()
	{

	}

	/**
	 * Check superadmin
	 * @param  [type] $id [description]
	 * @return [type]     [description]
	 */
	function check_is_superadmin($id){
		$query = "SELECT admin_name FROM ".DB_PREFIX.$this->_table_admin." WHERE 1 AND id in(".$id.")";
		return db::findOne($query);
	}
}
?>