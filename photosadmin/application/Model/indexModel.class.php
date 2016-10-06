<?php
/**
* 后台首页模型
*/
class indexModel
{
    private $_table_menu='system_menu';

    /**
	 * Get MySQL version.
	 * @return [type] [description]
	 */
	function get_mysql_version(){
		$sql = 'SELECT VERSION() AS version';
		return db::findOne($sql);
	}

    /**
     * Get menu data.
     * @return mixed
     */
    function get_menu_data(){
        $sql="SELECT id,menu_id,menu_parent_id,menu_name,menu_alias,menu_url,menu_icon FROM ".DB_PREFIX.$this->_table_menu;
        $sql.=" GROUP BY menu_id";
        return db::findAll($sql);
    }

    /**
     * Query menu by menu_id
     * @param [type] $menuId [description]
     */
    function get_menu_root_data($menuId){
        $sql="SELECT id,menu_id,menu_parent_id,menu_name,menu_alias,menu_url,menu_icon FROM ".DB_PREFIX.$this->_table_menu;
        $sql.=" WHERE menu_id= '".$menuId."' ";
        return db::findOne($sql);
    }

    /**
     * Query menu by menu_parent_id
     * @param [type] $menuParentId [description]
     */
    function get_menu_children_data($menuParentId){
        $sql="SELECT id,menu_id,menu_parent_id,menu_name,menu_alias,menu_url,menu_icon FROM ".DB_PREFIX.$this->_table_menu;
        $sql.=" WHERE menu_parent_id= '".$menuParentId."' ";
        $sql.=" ORDER BY sort";
        return db::findAll($sql);
    }
}

?>