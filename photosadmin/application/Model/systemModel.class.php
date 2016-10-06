<?php
/**
* System Model Class
*/
class systemModel extends Model
{
	public $_table_menu='system_menu';

	
	function get_menu_info($searchObj,$returninfo){
		$sql=" id,menu_id,menu_parent_id,menu_name,menu_alias,menu_url,menu_icon,sort FROM ".DB_PREFIX.$this->_table_menu;
		if (!empty($searchObj->menu_name)) {
			$sql.=" WHERE menu_name like '".$searchObj->menu_name."' ";
		}
		$sql.=" GROUP BY menu_id";

		$returninfo->count=parent::get_data_counts($sql,true);
		$sql.=" LIMIT ".($searchObj->page_number-1)*$searchObj->page_size.",".$searchObj->page_size;
		$allSql=" SELECT ".$sql;
		return db::findAll($allSql);
	}
}
?>