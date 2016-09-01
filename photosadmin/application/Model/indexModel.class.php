<?php
/**
* 后台首页模型
*/
class indexModel
{
    private $_table_menu='system_menu';

    /**
	 * 获取MySQL版本
	 * @return [type] [description]
	 */
	function get_mysql_version(){
		$sql = 'SELECT VERSION() AS version';
		return db::findOne($sql);
	}

    /**
     * get menus
     * @return mixed
     */
    function get_menus(){
        $sql="SELECT id,menu_id,menu_parent_id,menu_name,menu_alias,menu_url,menu_icon FROM ".DB_PREFIX.$this->_table_menu;
        $sql.=" GROUP BY menu_id";
        return db::findAll($sql);
    }
}

?>