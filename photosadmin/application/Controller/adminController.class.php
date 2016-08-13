<?php
/**
 * Admin Controller
 */
class adminController extends Controller
{
	private $admin_mod;

	function __construct()
	{
		$this->adminController();
	}

	function adminController()
	{
		parent::Controller();
		$this->admin_mod = M('admin');
	}

	//admin list
	public function index(){
		$this->admin_list();
	}

	//admin list
	public function admin_list(){
		$admin_infos = $this->admin_mod->get_admin_info();
		$admin_info_counts = COUNT($admin_infos); //计算总条数

		view::assign(array('admin_info_counts'=>$admin_info_counts));
		view::assign(array('admin_infos'=>$admin_infos));
		view::display('admin-list.html');
	}

	//admin add,edit
	public function admin_add(){
		if (!IS_POST) {
			$roles = $this->admin_mod->get_admin_role_list();
			view::assign(array('roles'=>$roles));
			view::display('admin-add.html');
		}else{
			$admin_data = array(
				'admin_name'  => trim($_POST['username']),
				'admin_pwd'   => md5(trim($_POST['password'])),
				'sex'         => $_POST['sex'],
				'tel'         => trim($_POST['tel']),
				'email' => trim($_POST['email']),
				'role_id'     => $_POST['role'],
				'add_time'    => time(),
				'remark'      => $_POST['remark'],
				);
			$res = $this->admin_mod->check_username(trim($_POST['username']));
			if ($res) {
				$id=$this->admin_mod->add_admin_info($admin_data);
				if ($id) {
					echo json_encode('y');
				}else{
					echo json_encode('n');
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

	//admin start
	public function admin_start(){
		$id = $_GET['id'];
		$res = $this->admin_mod->start_admin_user($id);
		return $res;
	}

	public function admin_edit(){
		if (!IS_POST) {
			$id = $_GET['id'];
			$admin_info = $this->admin_mod->find_admin_by_id($id);
			$roles = $this->admin_mod->get_admin_role_list();

			view::assign(array('roles'=>$roles));
			view::assign(array('admin_info'=>$admin_info));
			view::display('admin-edit.html');
		}else{
			$id = $_POST['id'];
			$admin_data = array(
				'admin_namef'  => trim($_POST['username']),
				'admin_pwd'   => md5(trim($_POST['password'])),
				'sex'         => $_POST['sex'],
				'tel'         => trim($_POST['tel']),
				'email' => trim($_POST['email']),
				'role_id'     => $_POST['role'],
				'add_time'    => time(),
				'remark'      => $_POST['remark'],
				);
			try {
				$res_id = $this->admin_mod->update_admin_info($id,$admin_data);
				if ($res_id) {
					echo json_encode('y');
				}else{
					echo json_encode('n');
				}
			} catch (Exception $e) {
				$this->show_message('更新数据时出现异常','index.php?controller=admin');
			}
		}
	}

	//admin delete
	public function admin_del(){
		$id = $_GET['id'];
		$res = $this->admin_mod->delete_admin_user($id);
		return $res;
	}

	//admin role list
	public function admin_role(){
		view::display('admin-role.html');
	}

	//admin role add,edit
	public function admin_role_add(){
		view::display('admin-role-add.html');
	}

	//admin delete
	public function admin_role_del(){

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