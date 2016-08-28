<?php
/**
* memberController.class.php
* date:2016-08-25
*/
class memberController extends Controller
{
	private $member_mod;
	function __construct()
	{
		$this->memberController;
	}

	function memberController(){
		parent::Controller();
		$this->$member_mod=M('member');
	}

	function index(){
		$this->member_list();
	}

	//member list
	function member_list(){
		view::display('member-list.html');
	}
}
?>