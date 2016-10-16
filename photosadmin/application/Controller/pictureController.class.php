<?php
/**
* Picture Manage.
* date:2016-10-07
*/
class pictureController extends Controller
{
	private $picture_mod;
	
	function __construct()
	{
		$this->picture_mod=M('picture');
	}

	public function index(){
		$this->picture_list();
	}

	/**
	 * Picture list.
	 * @return [type] [description]
	 */
	public function picture_list(){
		view::display('picture-list.html');
	}

	/**
	 * Picture category.
	 * @return [type] [description]
	 */
	public function picture_category(){
		view::display('picture-category.html');
	}
}
?>