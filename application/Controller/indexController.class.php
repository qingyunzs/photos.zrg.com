<?php
/**
 * Index controller
 */
class indexController extends Controller{

	function __construct(){

	}
	// Home load
	public function index()
    {

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