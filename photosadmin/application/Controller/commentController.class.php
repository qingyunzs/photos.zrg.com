<?php
/**
* Comment Manage.
* date:2016-10-07
*/
class commentController extends Controller
{
	private $comment_mod;	
	function __construct()
	{
		$this->comment_mod=M('comment');
	}
	public function index(){
		$this->comment_list();
	}
	/**
	 * Comment list.
	 * @return [type] [description]
	 */
	public function comment_list(){
		view::display('comment-list.html');
	}

	/**
	 * Feedback list.
	 * @return [type] [description]
	 */
	public function feedback(){
		view::display('feedback-list.html');
	}
}
?>