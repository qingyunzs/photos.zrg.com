<?php
/**
* Admin Model
*/
class adminModel extends Model
{
	public $_table_admin = 'system_admin';
	public $_table_role = 'system_roles';
	function __construct()
	{
		# code...
	}
	/**
	 * [获取管理员列表
	 * @param  [type] $startDate [description]
	 * @param  [type] $endDate   [description]
	 * @param  [type] $adminName [description]
	 * @return [type]            [description]
	 */
	function get_admin_info($startDate,$endDate,$adminName){
		$sql="SELECT admin.*, roles.role_name, count(admin_name) as counts,	roles.role_alias FROM ".DB_PREFIX.$this->_table_admin." AS admin LEFT JOIN ".DB_PREFIX.$this->_table_role." AS roles ON admin.role_id = roles.role_id ";
		$sql.=" WHERE 1 ";
		if (!empty($startDate)) {
			$sql.=" AND add_time >=".strtotime($startDate);
		}
		if (!empty($endDate)) {
			$endDate_add=strtotime($endDate)+24*3600;
			$sql.=" AND add_time <=".$endDate_add;
		}
		if (!empty($adminName)) {
			$sql.=" AND admin_name like '%".$adminName."%'";
		}
		$sql.=" GROUP BY admin_name,role_alias";
		$sql.=" ORDER BY admin.add_time DESC";
		$result = db::findAll($sql);
		return $result;
	}

	/**
	 * 通过id获取管理员信息
	 * @param  [type] $id [description]
	 * @return [type]     [description]
	 */
	function find_admin_by_id($id){
		$sql = "SELECT * FROM ".DB_PREFIX.$this->_table_admin." WHERE 1 AND id='$id' ORDER BY id";
		$result = db::findOne($sql);
		return $result;
	}

	/**
	 * 获取管理员角色列表
	 * @return [type] [description]
	 */
	function get_admin_role_list(){
		$sql = "SELECT role_id,role_name FROM ".DB_PREFIX.$this->_table_role;
		$result = db::findAll($sql);
		return $result;
	}

	/**
	 * 检查管理员是否存在
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
	 * 检查角色是否存在
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
	 * 检查某个角色下是否有用户
	 * @param  [type] $id [description]
	 * @return [type]         [description]
	 */
	function check_is_exist_children_user($id){
		$sql= "SELECT count(*) AS count FROM ".DB_PREFIX.$this->_table_admin." AS admin,".DB_PREFIX.$this->_table_role." AS role WHERE admin.role_id=role.role_id and role.id='$id'";
		$result = db::findOne($sql);
		if ($result['count']>0) {
			return false;
		}else{
			return true;
		}
	}

	/**
	 * 添加管理员信息
	 * @param [type] $admin_data [description]
	 */
	function add_admin_info($admin_datas){
		return db::insert($this->_table_admin,$admin_datas);
	}

	/**
	 * 更新管理员信息
	 * @param  [type] $admin_data [description]
	 * @return [type]             [description]
	 */
	function update_admin_info($id,$admin_data){
		$where = " id = $id";
		return db::update($this->_table_admin,$admin_data,$where);
	}

	/**
	 * 检查是否是超级管理员
	 * @param  [type] $id [description]
	 * @return [type]     [description]
	 */
	function check_is_superadmin($id){
		// $query = "SELECT admin_name FROM ".DB_PREFIX.$this->_table_admin." WHERE 1 AND id='$id'";
		return parent::check_is_superadmin($id);
	}

	/**
	 * 冻结管理员账户
	 * @param  [type] $id [description]
	 * @return [type]     [description]
	 */
	function block_admin_user($id){
		$arr = array('is_enable' => 0);
		$where = "id = $id";
		return db::update($this->_table_admin,$arr,$where);
	}

	/**
	 * 启用管理员账户
	 * @param  [type] $id [description]
	 * @return [type]     [description]
	 */
	function start_admin_user($id){
		$arr = array('is_enable' => 1);
		$where = "id = $id";
		return db::update($this->_table_admin,$arr,$where);
	}

	/**
	 * 删除管理员
	 * @param  [type] $id [description]
	 * @return [type]     [description]
	 */
	function delete_admin_user($id){
		$where = " id in (".$id.") ";
		return db::del($this->_table_admin,$where);
	}

	/**
	 * 获取后台角色信息
	 * @return [type] [description]
	 */
	function get_role_info(){
		$sql="SELECT id,role_id,role_name,role_alias,description FROM ".DB_PREFIX.$this->_table_role." ORDER BY role_id";
		$result = db::findAll($sql);
		return $result;
	}

	/**
	 * 添加角色
	 * @param [type] $admin_datas [description]
	 */
	function add_role_info($role_datas){
		return db::insert($this->_table_role,$role_datas);
	}

	/**
	 * 删除角色
	 * @param  [type] $id [description]
	 * @return [type]     [description]
	 */
	function delete_role_user($id){
		$where = " id in (".$id.") ";
		return db::del($this->_table_role,$where);
	}
}
?>