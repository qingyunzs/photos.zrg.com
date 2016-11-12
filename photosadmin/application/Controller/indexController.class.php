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
	/**
	 * load index page.
	 * @return [type] [description]
	 */
	public function index(){
		//获取数据
		$menuData=$this->index_mod->get_menu_data();
		//获取栏目树
		$menuTree=$this->_init_menu_tree(@$treeList,0,0,$menuData);

		view::assign(array('menu_tree'=>$menuTree['children']));
		view::assign(array('admin_url' => ADMIN_URL));
		view::display('index.html');
	}

	/**
	 * Welcome page.
	 * @return [type] [description]
	 */
	public function welcome(){
		$sys_info=$this->_get_system_info();
		view::assign(array('sys_info' => $sys_info));
		view::display('welcome.html');
	}

	/**
	 * Init menu tree.
	 * @param  [type] $treeList [description]
	 * @param  [type] $parentId [description]
	 * @param  [type] $rootId   [description]
	 * @param  [type] $menuData [description]
	 * @return [type]           [description]
	 */
	private function _init_menu_tree($treeList,$parentId,$rootId,$menuData){
		if (isset($rootId)) {
			//通过rootId查询到对应栏目信息
			$rootData=$this->index_mod->get_menu_root_data($rootId);
			//将获取到的数据赋值到$treeList中
			$treeList=$rootData;
			//调用递归方法获取子节点(子栏目)信息
			@$treeList['children']=$this->_get_sub_menu_tree($treeList['children'],$parentId,$menuData);
			return $treeList;
		}
	}
	/**
	 * Get sub menu tree.
	 * @param  [type] $treeList [description]
	 * @param  [type] $parentId [menu_parent_id]
	 * @param  [type] $menuData [data]
	 * @return [type]           [description]
	 */
	private function _get_sub_menu_tree($treeList,$parentId,$menuData){
		$tempArr=array();
		//通过parentId获取子节点（子栏目）信息
		$subNodeData=$this->index_mod->get_menu_children_data($parentId);
		if (!empty($subNodeData) && is_array($subNodeData)) {
			foreach ($subNodeData as $key => $value) {
				$tempArr=array(
					'menu_id'=>$value['menu_id'],
					'menu_parent_id'=>$value['menu_parent_id'],
					'menu_name'=>$value['menu_name'],
					'menu_alias'=>$value['menu_alias'],
					'menu_icon'=>$value['menu_icon'],
					'menu_url'=>$value['menu_url'],
					'children'=>''
					);
				//递归调用
				$tempArr['children']=$this->_get_sub_menu_tree($tempArr['children'],$value['menu_id'],$menuData);
				//将每一条信息赋值到$treeList中，注意该语句放于最后。
				$treeList[]=$tempArr;
			}
		}
		return $treeList;
	}

	/**
	 * Get system info.
	 * @return [type] [description]
	 */
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