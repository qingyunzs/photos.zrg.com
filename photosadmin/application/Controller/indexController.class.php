<?php
/**
 * Index Controller
 */
class indexController extends Controller{
	public $auth;

	function __construct(){
		if(!(isset($_SESSION['auth']))&&(initialize::$method!='login')){
			$this->show_message('请登录后在操作！', 'index.php?controller=login&method=index');
		}else{
			$this->auth = isset($_SESSION['auth'])?$_SESSION['auth']:array();
		}
	}
	public function index(){
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