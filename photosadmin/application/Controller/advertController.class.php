<?php
/**
* Advertise Manage.
* date:2016-10-07
*/
class advertController extends Controller
{
	private $advert_mod;

	function __construct()
	{
		# code...
	}
	public function index(){
		$this->advert_mod= M('advert');
	}
	/**
	 * Advertise list.
	 * @return [type] [description]
	 */
	public function advert_list(){
		view::display('advert-list.html');
	}
	/**
	 * Advertise category.
	 * @return [type] [description]
	 */
	public function advert_category(){
		view::display('advert-category.html');
	}
}
?>