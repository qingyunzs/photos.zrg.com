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
		$returninfo=new ReturnInfo();

		$menu_name = isset($_POST['menuname']) ? $_POST['menuname'] : "";
		$curr_page = empty($_REQUEST['curr_page']) ? 1 : $_REQUEST['curr_page'];
		$page_size   = empty($_REQUEST['curr_size']) ? 10 : $_REQUEST['curr_size'];

		$searchObj=(object)array(
			'menu_name'   =>$menu_name,
			'page_number' =>$curr_page,
			'page_size'   =>$page_size
			);

		$menu_data=$this->system_mod->get_menu_list($searchObj,$returninfo);
		$menu_counts=$returninfo->count['count'];
		$total_page=ceil($menu_counts/$page_size); // 如果有余，向上取整

		view::assign(array('curr_page'=>$curr_page));
		view::assign(array('total_page'=>$total_page));
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