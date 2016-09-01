<?php
/**
 * Admin Controller
 */
class adminController extends Controller
{
	private $admin_mod;

	function __construct()
	{
		$this->admin_mod = M('admin');
	}

	//admin list
	public function index(){
		$this->admin_list();
	}

	//admin list
	public function admin_list(){
		$startDate = isset($_POST['datemin']) ? $_POST['datemin'] : "";
		$endDate   = isset($_POST['datemax']) ? $_POST['datemax'] : "";
		$adminName = isset($_POST['adminname']) ? $_POST['adminname'] : "";

		$admin_infos = $this->admin_mod->get_admin_info($startDate,$endDate,$adminName);
		$admin_info_counts=0;
		if ($admin_infos) {
			foreach ($admin_infos as $infos_value) {
				$admin_info_counts += $infos_value['counts'];
			}
		}
		view::assign(array('admin_info_counts'=>$admin_info_counts));
		view::assign(array('admin_infos'=>$admin_infos));	
		
		view::display('admin-list.html');
	}

	//admin add
	public function admin_add(){
		if (!IS_POST) {
			$roles = $this->admin_mod->get_admin_role_list();
			view::assign(array('roles'=>$roles));
			view::display('admin-add.html');
		}else{
			$admin_data = array(
				'admin_name' => trim($_POST['username']),
				'admin_pwd'  => md5(trim($_POST['password'])),
				'sex'        => $_POST['sex'],
				'tel'        => trim($_POST['tel']),
				'email'      => trim($_POST['email']),
				'role_id'    => $_POST['role'],
				'add_time'   => time(),
				'remark'     => $_POST['remark'],
				);
			$res = $this->admin_mod->check_username(trim($_POST['username']));
			if ($res) {
				$id=$this->admin_mod->add_admin_info($admin_data);
				if ($id) {
					exit(json_encode(array('info'=>'添加管理员成功。','status'=>'y')));
				}else{
					exit(json_encode(array('info'=>'添加管理员失败。','status'=>'n')));
				}
			}else{
				$this->show_message('管理员账户已存在！','index.php?controller=admin');
			}
		}
	}

	//admin block
	public function admin_block(){
		$id = $_GET['id'];
		$check_res = $this->admin_mod->check_is_superadmin($id);
		if ($check_res['admin_name'] == 'admin') {
			return false;
		}else{
			$res = $this->admin_mod->block_admin_user($id);
			return true;
		}
	}

	//admin unblock
	public function admin_start(){
		$id = $_GET['id'];
		$res = $this->admin_mod->start_admin_user($id);
		return $res;
	}

    //admin edit
	public function admin_edit(){
		if (!IS_POST) {
			$id = $_GET['id'];
			$admin_info = $this->admin_mod->find_admin_by_id($id);
			$roles = $this->admin_mod->get_admin_role_list();
			$role_list=array();
			foreach ($roles as $role) {
				$role_list[$role['role_id']]=$role['role_name'];
			}
			view::assign(array('roles'=>$role_list));
			view::assign(array('admin_info'=>$admin_info));
			view::display('admin-edit.html');
		}else{
			$id = $_POST['id'];
			$admin_data = array(
				'admin_name'       => trim($_POST['username']),
				'admin_pwd'        => md5(trim($_POST['password'])),
				'sex'              => $_POST['sex'],
				'tel'              => trim($_POST['tel']),
				'email'            => trim($_POST['email']),
				'role_id'          => $_POST['role'],
				'last_update_time' => time(),
				'remark'           => $_POST['remark'],
				);
			$res=$this->admin_mod->update_admin_info($id,$admin_data);
			if ($res) {
				exit(json_encode(array('info'=>'更新管理员信息成功。','status'=>'y')));
			}else{
				exit(json_encode(array('info'=>'更新管理员信息失败。','status'=>'n')));
			}
		}
	}

	//admin delete
	public function admin_del(){
		$id = $_GET['id'];
		$check_res = $this->admin_mod->check_is_superadmin($id);
		if ($check_res['admin_name'] == 'admin') {
			exit(json_encode(array('info' =>'超级管理员不能被删除！','status'=>'0')));
		}else{
			$res = $this->admin_mod->delete_admin_user($id);
			if ($res) {
				exit(json_encode(array('info' =>'删除成功！','status'=>'y')));
			}else{
				exit(json_encode(array('info' =>'删除失败！','status'=>'n')));
			}
		}
	}

	//admin role list
	public function admin_role(){
		$roles = $this->admin_mod->get_role_info();
		$role_counts=0;
		if ($roles) {
			foreach ($roles as $roles_value) {
				$role_counts += $roles_value['counts'];
			}
		}
		view::assign(array('role_counts'=>$role_counts));
		view::assign(array('roles'=>$roles));	
		view::display('admin-role.html');
	}

	//admin role add
	public function admin_role_add(){
		if (!IS_POST) {
			view::display('admin-role-add.html');
		}else{
			$role_data = array(
				'role_id'     => trim($_POST['roleid']),
				'role_name'   => trim($_POST['rolename']),
				'role_alias'  => trim($_POST['rolealias']),
				'description' => $_POST['description']
				);
			$res = $this->admin_mod->check_role_exist($_POST['rolename']);
			if ($res) {
				$id=$this->admin_mod->add_role_info($role_data);
				if ($id) {
					exit(json_encode(array('info'=>'添加角色成功。','status'=>'y')));
				}else{
					exit(json_encode(array('info'=>'添加角色失败。','status'=>'n')));
				}
			}else{
				$this->show_message('角色已存在！','index.php?controller=admin');
			}
		}
	}

	//admin role delete
	public function admin_role_del(){
		$id = $_GET['id'];
		$check_res = $this->admin_mod->check_is_exist_children_user($id);
		if ($check_res) {
			$res = $this->admin_mod->delete_role($id);
			if ($res) {
				exit(json_encode(array('info' =>'已成功删除该角色！','status'=>'y')));
			}else{
				exit(json_encode(array('info' =>'未能成功删除该角色，请稍后再试！','status'=>'n')));
			}
		}else{
			exit(json_encode(array('info' =>'该角色下存在用户，请先删除该角色下的用户！','status'=>'0')));
		}
	}

	//admin role edit
	public function admin_role_edit(){
		if (!IS_POST) {
			$id = $_GET['id'];
			$role_info = $this->admin_mod->find_role_by_id($id);
			view::assign(array('role_info'=>$role_info));
			view::display('admin-role-edit.html');
		}else{
			$id = $_POST['id'];
			$role_data = array(
				'role_id'     => trim($_POST['roleid']),
				'role_name'   => trim($_POST['rolename']),
				'role_alias'  => $_POST['rolealias'],
				'description' => trim($_POST['description'])
				);
			$res=$this->admin_mod->update_role_info($id,$role_data);
			if ($res) {
				exit(json_encode(array('info'=>'更新角色信息成功。','status'=>'y')));
			}else{
				exit(json_encode(array('info'=>'更新角色信息失败。','status'=>'n')));
			}
		}
	}

	//admin permission
	public function admin_permission(){
		view::display('admin-permission.html');
	}

	//admin permission add,edit
	public function admin_permission_add(){
		view::display('admin-permission-add.html');
	}

	//admin permission delete
	public function admin_permission_del(){
		
	}
}
?>