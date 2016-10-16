<?php
/**
* Article Manage.
* date:2016-10-07
*/
class articleController extends Controller
{
	private $article_mod;
	
	function __construct()
	{
		$this->article_mod=M('article');
	}

	public function index(){
		$this->article_list();
	}

	/**
	 * Article list.
	 * @return [type] [description]
	 */
	public function article_list(){
		view::display('article-list.html');
	}
}
?>