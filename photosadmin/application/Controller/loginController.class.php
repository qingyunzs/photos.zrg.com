<?php
/**
* Login Controller
*/
class loginController extends Controller
{
	function __construct()
	{
		$this->login_mod = M('login');
	}

	// login
	public function index(){
		if (!isset($_POST['submit'])) {
			view::display('login.html');
		}else{
			if ($this->check_verify()) {
				$this->check_login();
			}else{
				view::display('login.html');
			}
		}
	}

	/**
	 * login out
	 * @return [type] [description]
	 */
	public function logout(){
		unset($_SESSION['auth']);
		$this->show_message('注销成功！', 'index.php?controller=login&method=index');
	}

	/**
	 * include verify
	 * @return [type] [description]
	 */
	public function verify(){
		$verify_code = new verify_code();
		$check_code = $verify_code->make_rand(4);
		$_SESSION['verify_code']=strtolower($check_code);
		$s=$verify_code->getAuthImage($check_code);
	}

	/**
	 * check verify code
	 * @return [type] [description]
	 */
	private function check_verify(){
		$code = trim($_POST['verify']);
		if (strtolower($code) == $_SESSION['verify_code']) {
			return true;
		}else{
			return false;
		}
	}

	/**
	 * check username and password
	 * @return [type] [description]
	 */
	private function check_login(){
		if(empty($_POST['username'])||empty($_POST['password'])){
			$this->show_message('登录失败！请检查用户名或密码是否有误', 'index.php?controller=login&method=index');
		}
		$username = daddslashes($_POST['username']);
		$password = daddslashes($_POST['password']);
		$auth = $this->login_mod->check_auth($username, $password);
		if ($auth=="deleted") {
			$this->show_message('您的账户不存在！', 'index.php?controller=login&method=index');
		}else if ($auth=="disabled") {
			$this->show_message('您的账户已经被冻结！', 'index.php?controller=login&method=index');
		}else if($auth!=false){
			$_SESSION['auth'] = $auth; //记录登陆状态
			$login_info = array(
				'last_login_time' => time(),
				'last_ip' => parent::get_ip(),
				);
			$this->login_mod->record_login_info($username,$login_info);// 记录登陆信息
			$this->show_message('登录成功！', 'index.php?controller=index&method=index');
		}else{
			$this->show_message('登录失败！用户名或密码错误！', 'index.php?controller=login&method=index');
		}
	}
}

?>