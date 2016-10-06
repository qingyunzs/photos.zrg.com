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
	protected function check_is_superadmin($id){
		$query = "SELECT admin_name FROM ".DB_PREFIX.$this->_table_admin." WHERE 1 AND id in(".$id.")";
		return db::findOne($query);
	}

	protected function get_data_counts($sql,$isPage){
		$count=0;
		$s_sql="";
		if ($isPage) {
			$s_sql="SELECT COUNT(*) as count FROM (SELECT ".$sql.") AS temp";	
		}else{
			$s_sql="SELECT COUNT(*) as count FROM (".$sql.") AS temp";
		}
		$counts=db::findOne($s_sql);
		if ($counts>0) {
			$count=$counts;
		}
		return $count;
	}
}
?>