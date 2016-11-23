<?php
/**
* Admin Model
*/
class adminModel extends Model
{
	//table name.
	public $_table_admin = 'system_admin';
	public $_table_role = 'system_roles';
	public $_table_node = 'system_node';

	function __construct()
	{
		# code...
	}

	/**
	 * Get admin list.
	 * @param  [type] $startDate [description]
	 * @param  [type] $endDate   [description]
	 * @param  [type] $adminName [description]
	 * @return [type]            [description]
	 */
	function get_admin_info($searchObj,$returninfo){
		$result="";
		$sql=" admin.*, roles.role_name, count(admin_name) AS counts,roles.role_alias FROM ".DB_PREFIX.$this->_table_admin." AS admin LEFT JOIN ".DB_PREFIX.$this->_table_role." AS roles ON admin.role_id = roles.role_id ";
		$sql.=" WHERE is_delete=0 ";
		if (!empty($searchObj->start_date)) {
			$sql.=" AND add_time >=".strtotime($searchObj->start_date);
		}
		if (!empty($searchObj->end_date)) {
			$endDate_add=strtotime($searchObj->end_date)+24*3600;
			$sql.=" AND add_time <=".$endDate_add;
		}
		if (!empty($searchObj->admin_name)) {
			$sql.=" AND admin_name like '%".$searchObj->admin_name."%'";
		}
		$sql.=" GROUP BY admin_name,role_alias";
		$sql.=" ORDER BY admin.add_time DESC";
		
		$returninfo->count=parent::get_data_counts($sql,true);

		$sql.=" LIMIT ".($searchObj->page_number-1)*$searchObj->page_size.",".$searchObj->page_size;
		$allSql=" SELECT ".$sql;
		$result = db::findAll($allSql);
		return $result;
	}

	/**
	 * Get admin info by id.
	 * @param  [type] $id [description]
	 * @return [type]     [description]
	 */
	function find_admin_by_id($id){
		$sql = "SELECT * FROM ".DB_PREFIX.$this->_table_admin." WHERE 1 AND id='$id' ORDER BY id";
		$result = db::findOne($sql);
		return $result;
	}

	/**
	 * Get admin-role list.
	 * @return [type] [description]
	 */
	function get_admin_role_list(){
		$sql = "SELECT role_id,role_name FROM ".DB_PREFIX.$this->_table_role;
		$result = db::findAll($sql);
		return $result;
	}

	/**
	 * Get role id
	 * @return [type] [description]
	 */
	function get_admin_role_id(){
		$sql="SELECT MAX(role_id) as role_id from ".DB_PREFIX.$this->_table_role;
		$result=db::findOne($sql);
		return $result;
	}

	/**
	 * Get role info by id.
	 * @param  [type] $id [description]
	 * @return [type]     [description]
	 */
	function find_role_by_id($id){
		$sql = "SELECT id,role_id,role_name,role_alias,description FROM ".DB_PREFIX.$this->_table_role." WHERE 1 AND id='$id' ORDER BY id";
		$result = db::findOne($sql);
		return $result;
	}

	/**
	 * Check if the admin already exists.
	 * @param  [type] $username [description]
	 * @return [type]           [description]
	 */
	function check_username($username){
		$sql = "SELECT count(*) as count FROM ".DB_PREFIX.$this->_table_admin." WHERE admin_name='$username'";
		$result = db::findOne($sql);
		if ($result['count']>0) {
			return false;
		}else{
			return true;
		}
	}

	/**
	 * Check if the role already exists.
	 * @param  [type] $rolename [description]
	 * @return [type]           [description]
	 */
	function check_role_exist($rolename){
		$sql = "SELECT count(*) as count FROM ".DB_PREFIX.$this->_table_role." WHERE role_name='$rolename'";
		$result = db::findOne($sql);
		if ($result['count']>0) {
			return false;
		}else{
			return true;
		}
	}

	/**
	 * Check if there is a user in a role
	 * @param  [type] $id [description]
	 * @return [type]         [description]
	 */
	function check_is_exist_children_user($id){
		$sql= "SELECT count(*) AS count FROM ".DB_PREFIX.$this->_table_admin." AS admin,".DB_PREFIX.$this->_table_role." AS role WHERE admin.role_id=role.role_id and role.id in (".$id.")";
		$result = db::findOne($sql);
		if ($result['count']>0) {
			return false;
		}else{
			return true;
		}
	}

	/**
	 * Add admin info
	 * @param [type] $admin_data [description]
	 */
	function add_admin_info($admin_datas){
		return db::insert($this->_table_admin,$admin_datas);
	}

	/**
	 * Update admin info
	 * @param  [type] $admin_data [description]
	 * @return [type]             [description]
	 */
	function update_admin_info($id,$admin_data){
		$where = " id = $id";
		return db::update($this->_table_admin,$admin_data,$where);
	}

	/**
	 * Check if it is super admin.
	 * @param  [type] $id [description]
	 * @return [type]     [description]
	 */
	function check_is_superadmin($id){
		// $query = "SELECT admin_name FROM ".DB_PREFIX.$this->_table_admin." WHERE 1 AND id='$id'";
		return parent::check_is_superadmin($id);
	}

	/**
	 * Block acount.
	 * @param  [type] $id [description]
	 * @return [type]     [description]
	 */
	function block_admin_user($id){
		$arr = array('is_enable' => 0);
		$where = "id = $id";
		return db::update($this->_table_admin,$arr,$where);
	}

	/**
	 * Unblock acount.
	 * @param  [type] $id [description]
	 * @return [type]     [description]
	 */
	function start_admin_user($id){
		$arr = array('is_enable' => 1);
		$where = "id = $id";
		return db::update($this->_table_admin,$arr,$where);
	}

	/**
	 * Delete admin.
	 * @param  [type] $id [description]
	 * @return [type]     [description]
	 */
	function delete_admin_user($id){
		$arr = array('is_delete' => 1);
		$where = " id in (".$id.") ";
		return db::update($this->_table_admin,$arr,$where);
	}

	/**
	 * Get admin deleted.
	 * @return [type] [description]
	 */
	function get_deleted_admin_list($searchObj,$returninfo){
		$result="";
		$sql=" admin.*, roles.role_name, count(admin_name) AS counts, roles.role_alias FROM ".DB_PREFIX.$this->_table_admin." AS admin LEFT JOIN ".DB_PREFIX.$this->_table_role." AS roles ON admin.role_id = roles.role_id ";
		$sql.=" WHERE is_delete=1 ";
		if (!empty($searchObj->start_date)) {
			$sql.=" AND add_time >=".strtotime($searchObj->start_date);
		}
		if (!empty($searchObj->end_date)) {
			$endDate_add=strtotime($searchObj->end_date)+24*3600;
			$sql.=" AND add_time <=".$searchObj->end_date;
		}
		if (!empty($searchObj->admin_name)) {
			$sql.=" AND admin_name like '%".$searchObj->admin_name."%'";
		}
		$sql.=" GROUP BY admin_name,role_alias";
		$sql.=" ORDER BY admin.add_time DESC";
		
		$returninfo->count=parent::get_data_counts($sql,true);

		$sql.=" LIMIT ".($searchObj->page_number-1)*$searchObj->page_size.",".$searchObj->page_size;
		$allSql=" SELECT ".$sql;
		$result = db::findAll($allSql);
		return $result;
	}

	/**
	 * Delete forever.
	 * @param  [type] $id [description]
	 * @return [type]     [description]
	 */
	function forever_delete_admin_user($id){
		$where = " id in (".$id.") ";
		return db::del($this->_table_admin,$where);
	}

	/**
	 * Revoke delete.
	 * @param  [type] $id [description]
	 * @return [type]     [description]
	 */
	function revoke_delete_admin_user($id){
		$arr = array('is_delete' => 0);
		$where = " id in (".$id.") ";
		return db::update($this->_table_admin,$arr,$where);
	}

	/**
	 * Get role info.
	 * @return [type] [description]
	 */
	function get_role_info(){
		$sql="SELECT id,role_id,role_name,role_alias,description,COUNT(role_name) AS counts FROM ".DB_PREFIX.$this->_table_role." GROUP BY role_name ORDER BY role_id";
		$result = db::findAll($sql);
		return $result;
	}

	/**
	 * Add role.
	 * @param [type] $admin_datas [description]
	 */
	function add_role_info($role_datas){
		return db::insert($this->_table_role,$role_datas);
	}
	
	/**
	 * Update role.
	 * @param  [type] $id        [description]
	 * @param  [type] $role_data [description]
	 * @return [type]            [description]
	 */
	function update_role_info($id,$role_data){
		$where = " id = $id";
		return db::update($this->_table_role,$role_data,$where);
	}
	/**
	 * Delete role.
	 * @param  [type] $id [description]
	 * @return [type]     [description]
	 */
	function delete_role($id){
		$where = " id in (".$id.") ";
		return db::del($this->_table_role,$where);
	}
	/**
	 * Get node list.
	 * @param  [type] $node_name [description]
	 * @return [type]            [description]
	 */
	function get_node_list($searchObj,$returninfo){
		$sql=" id,node_code,parent_node_code,node_name,create_time,create_who,edit_time,edit_who,remarks FROM ".DB_PREFIX.$this->_table_node;
		if (!empty($searchObj->node_name)) {
			$sql.=" WHERE node_name like '%".$searchObj->node_name."%'";
		}
		$sql.=" GROUP BY id,node_code";
		
		$returninfo->count=parent::get_data_counts($sql,true);
		$sql.=" LIMIT ".($searchObj->page_number-1)*$searchObj->page_size.",".$searchObj->page_size;
		$allSql=" SELECT ".$sql;
		return db::findAll($allSql);
	}
	/**
	 * [get_node_data description]
	 * @return [type] [description]
	 */
	function get_node_data(){
		$sql="SELECT id,node_code,parent_node_code,node_name FROM ".DB_PREFIX.$this->_table_node;
		return db::findAll($sql);
	}
	/**
	 * Query node by node_code
	 * @param  [type] $nodeCode [description]
	 * @return [type]           [description]
	 */
	function get_node_root_data($nodeCode){
		$sql="SELECT id,node_code,parent_node_code,node_name FROM ".DB_PREFIX.$this->_table_node;
        $sql.=" WHERE node_code= '".$nodeCode."' ";
        return db::findOne($sql);
	}
	/**
	 * Get chilren node data.
	 * @param  [type] $nodeParentCode [description]
	 * @return [type]                 [description]
	 */
	function get_node_children_data($nodeParentCode){
        $sql="SELECT id,node_code,parent_node_code,node_name FROM ".DB_PREFIX.$this->_table_node;
        $sql.=" WHERE parent_node_code= '".$nodeParentCode."' ";
        return db::findAll($sql);
    }
    /**
     * Get maxt node value of module
     * @return [type] [description]
     */
    function get_max_node_code_value($module_name){
    	$sql="SELECT RIGHT(MAX(node_code),3) as max_value FROM ".DB_PREFIX.$this->_table_node;
    	$sql.=" WHERE node_code LIKE '%".$module_name."%'";
    	return db::findOne($sql);
    }
    /**
     * Add node info.
     * @param [type] $role_datas [description]
     */
    function add_node_info($node_datas){
		return db::insert($this->_table_node,$node_datas);
	}
}
?>
