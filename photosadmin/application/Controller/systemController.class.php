<?php
/**
* System manage
*/
class systemController extends Controller
{
	private $system_mod;

	function __construct()
	{
		$this->system_mod = M('system');
	}

	public function index(){
		$this->system_setting();
	}

	//system setting
	public function system_setting(){
		View::display('system-setting.html');
	}

	//menu list
	public function system_menu_manage(){
		$menuname = isset($_POST['menuname']) ? $_POST['menuname'] : "";
		$menu_data=$this->system_mod->get_menu_info($menuname);
		$admin_counts=0;
		if ($menu_data) {
			foreach ($menu_data as $menus_value) {
				$menu_counts += $menus_value['counts'];
			}
		}
		View::assign(array('menu_counts'=>$menu_counts));
		View::assign(array('menu_datas'=>$menu_data));
		View::display('system-menu.html');
	}

	//menu add
	public function system_menu_add(){
		View::display('system-menu-add.html');
	}
}
?>