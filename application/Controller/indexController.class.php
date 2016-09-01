<?php
/**
 * Index controller
 */
class indexController extends Controller{
    private $index_mod;

	function __construct(){
        $this->index_mod = M('index');
	}
	// Home load
	public function index(){

		view::assign(array('site_url' => SITE_URL));
		view::display('index.html');

	// login
	public function login(){
		global $smarty;
		$smarty->display('login.html');
	}
}
?>