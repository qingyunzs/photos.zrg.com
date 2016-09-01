<?php
/**
 * Index Controller
 */
class indexController extends Controller{
	public $auth;
    private $index_mod;

	function __construct(){
		if(!(isset($_SESSION['auth']))&&(initialize::$method!='login')){
			$this->show_message('请登录后在操作！', 'index.php?controller=login&method=index');
		}else{
			$this->auth = isset($_SESSION['auth'])?$_SESSION['auth']:array();
		}
        $this->index_mod = M('index');
	}
	//load index page.
	public function index(){
        $menu_data=$this->index_mod->get_menus();
        //get menu tree
        $menuTree=parent::GetMenuTree($menu_data,0);
        echo "<pre>";
        print_r($menuTree);
        die;
        view::assign(array('menu_tree'=>$menuTree));
		view::assign(array('admin_url' => ADMIN_URL));
		view::display('index.html');
	}

	public function welcome(){
		$sys_info=$this->_get_system_info();
		view::assign(array('sys_info' => $sys_info));
		view::display('welcome.html');
	}

	private function _get_system_info(){
		$index_mod = M('index');
		return array(
			'server_addr'    => $_SERVER['SERVER_ADDR'],
			'server_port'    => $_SERVER['SERVER_PORT'],
			'server_os'      => PHP_OS,
			'apache_version' => $_SERVER['SERVER_SOFTWARE'],
			'document_root'  => $_SERVER['DOCUMENT_ROOT'],
			'mysql_version'  => $index_mod->get_mysql_version(),
			'php_version'    => PHP_VERSION,
			);
	}
}
?>