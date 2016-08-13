<?php
/**
* Controller Base Class
*/
class Controller
{
	function __construct()
	{
		$this->Controller();
	}

	function Controller(){

	}

	/**
	 * show message
	 * @param  [type] $info [description]
	 * @param  [type] $url  [description]
	 * @return [type]       [description]
	 */
	protected function show_message($info, $url){
		echo "<script>alert('$info');window.location.href='$url'</script>";
		exit;
	}

	/**
	 * get ip
	 * @return [type] $cip [description]
	 */
	protected function get_ip(){
		if(!empty($_SERVER["HTTP_CLIENT_IP"])){
			$cip = $_SERVER["HTTP_CLIENT_IP"];
		}elseif(!empty($_SERVER["HTTP_X_FORWARDED_FOR"])){
			$cip = $_SERVER["HTTP_X_FORWARDED_FOR"];
		}elseif(!empty($_SERVER["REMOTE_ADDR"])){
			$cip = $_SERVER["REMOTE_ADDR"];
		}else{
			$cip = "无法获取到IP地址";
		}
		return $cip;
	}
}
?>