<?php
/**
* System Model Class
*/
class systemModel extends Model
{
	public $_table_menu='system_menu';

	
	function get_menu_info($menuname){
		$sql="SELECT id,menu_id,menu_parent_id,menu_name,menu_alias,menu_url,menu_icon,COUNT(menu_id) AS counts FROM ".DB_PREFIX.$this->_table_menu;
		if (!empty($menuname)) {
			$sql.=" WHERE menu_name like '".$menuname."' ";
		}
		$sql.=" GROUP BY menu_id";
		return db::findAll($sql);
	}
}
?>