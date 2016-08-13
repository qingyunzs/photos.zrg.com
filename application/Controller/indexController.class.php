<?php
/**
 * Index controller
 */
class indexController{
	public function __construct(){

	}
	// Home load
	public function index(){

		/*$indexModel = M('index');
		$data = $testModel->get();*/
		view::assign(array('site_url' => SITE_URL));
		view::display('index.html');
	}

	// login
	public function login(){
		global $smarty;
		$smarty->display('login.html');
	}
}
?>