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
		$this->member_mod=M('member');
	}

	public function index(){
		$this->member_list();
	}

	/**
	 * member list
	 * @return [type] [description]
	 */
	public function member_list(){
		view::display('member-list.html');
	}

	/**
	 * Member trash.
	 * @return [type] [description]
	 */
	public function member_trash(){
		view::display('member-trash.html');
	}

	/**
	 * Membel level.
	 * @return [type] [description]
	 */
	public function member_level(){
		view::display('member-level.html');
	}

	/**
	 * Member score.
	 * @return [type] [description]
	 */
	public function member_score(){
		view::display('member-score.html');
	}

	/**
	 * Member browse.
	 * @return [type] [description]
	 */
	public function member_record_browse(){
		view::display('member-browse.html');
	}

	/**
	 * Member download.
	 * @return [type] [description]
	 */
	public function member_record_download(){
		view::display('member-download.html');
	}

	/**
	 * Member share.
	 * @return [type] [description]
	 */
	public function member_record_share(){
		view::display('member-share.html');
	}
}
?>