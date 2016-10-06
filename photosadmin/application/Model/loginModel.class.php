<?php
/**
* Login Model
*/
class loginModel
{
	public $_table = 'system_admin';

	function __construct()
	{
		# code...
	}

	/**
	 * checking username and password
	 * @param  [type] $username [description]
	 * @param  [type] $password [description]
	 * @return [type]           [description]
	 */
	function check_auth($username,$password){
		$auth = $this->find_by_username($username);
		if ((!empty($auth)) && $auth['is_delete']==1) {
			return "deleted";
		}else if ((!empty($auth)) && $auth['is_enable']==0) {
			return "disabled";
		}else if((!empty($auth)) && $auth['admin_pwd'] == md5($password)){
			return $auth;
		}else{
			return false;
		}
	}

	/**
	 * find user info by 'username'
	 * @param  [type] $username [description]
	 * @return [type]           [description]
	 */
	function find_by_username($username){
		$sql = 'SELECT role_id,admin_name,admin_pwd,sex,email,tel,is_enable,is_delete FROM '.'ph_'.$this->_table.' WHERE admin_name="'.$username.'"';
		return db::findOne($sql);
	}

	/**
	 * record login info
	 * @param  [type] $login_info [description]
	 * @return [type]             [description]
	 */
	function record_login_info($username,$login_info){
		$where = "admin_name = '$username'";
		return db::update($this->_table,$login_info,$where);
	}
}
?>