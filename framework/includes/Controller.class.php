<?php
/**
* Controller Base Class
*/
class Controller
{
	function __construct()
	{
		
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

	/**
	 * get menu tree
	 * @param [type]  $data [description]
	 * @param integer $pid  [description]
	 */
	protected function get_menu_tree($data,$pid=0){
		$tree=array();
		if (!empty($data) && is_array($data)) {
			foreach ($data as $key => $value) {
				if($value['menu_parent_id']==$pid){
					$children=$this->get_menu_tree($data,$value['menu_id']);
					if ($children) {
						$value['children']=$children;
					}
					$tree[]=$value;
					unset($value['menu_id']);
				}
			}
		}
		return $tree;
	}

	//获得指定文章分类的子分类组成的树形结构
	protected function cateTree($tmp,$pid=0,$level=0){
		$array=array();
		if(is_array($tmp)){
			foreach($tmp as $v){
				$v['level']=$level;
				$array[count($array)]=$v;
				$sub=$this->cateTree($v['id'],$level+1);
				if(is_array($sub))$array=array_merge($array,$sub);
			}
		}
		return $array;
	}
}
?>