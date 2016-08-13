<?php
/**
 * mysqli class
 */
class mysql_i{
	protected $conn;
	public $_prefix;

	/**
	 * 报错
	 * @param  [type] $error [description]
	 * @return [type]        [description]
	 */
	function err($error){
		die("您的操作有误，错误原因：".$error);
	}

	/**
	 * 连接数据库
	 * @param  [type] $config [description]
	 * @return [type]         [description]
	 */
	function connect($db_config){
		extract($db_config);

		$this->_prefix = $table_prefix;
		if (!defined('DB_PREFIX')) {
			define('DB_PREFIX', $table_prefix);
		}

		$conn = mysqli_connect($db_host,$db_user,$db_pwd,$db_name);
		$this->conn = $conn;
		if (!$conn) {
			$this->err("未能连接到数据库，请检查数据库是否正常开启!");
			mysqli_close($this->conn);
		}
		mysqli_set_charset($conn,$db_charset);
		// mysqli_set_query($conn,"set names".$db_charset); //使用mysql_query 设置编码,格式：mysql_query("set names utf8")
	}

	/**
	 * 直接执行sql语句
	 * @param  [type] $sql [description]
	 * @return [type]      [description]
	 */
	function query($sql){
		if(!($query = mysqli_query($this->conn,$sql))){//使用mysql_query函数执行sql语句
			$this->err($sql."<br />".mysqli_error($this->conn));//mysql_error 报错
		}else{
			return $query;
		}
	}

	/**
	 * 列表
	 * @param  [type] $query [description]
	 * @return [type]        [description]
	 */
	function findAll($query){
		// while ($result = mysqli_fetch_array($query,MYSQL_ASSOC)) {
		while ($result = mysqli_fetch_array($query)) {
			$list[] = $result;
		}
		return isset($list) ? $list : "";
	}

	/**
	 * 单条数据
	 * @param  [type] $query [description]
	 * @return [type]        [description]
	 */
	function findOne($query){
		// $result = mysqli_fetch_array($query,MYSQL_ASSOC);
		$result = mysqli_fetch_array($query);
		return $result;
	}

	/**
	 * 指定行的指定字段的值
	 * @param  [type] $query [description]
	 * @return [type]        [description]
	 */
	function findResult($query){
		$result = mysql_result($query,$row,$filed);
		return $result;
	}

	/**
	 * 添加数据
	 * @param  [type] $query [description]
	 * @return [type]        [description]
	 */
	function insert($table,$arr){
		foreach ($arr as $key => $value) {
			// $value = mysqli_real_escape_string($value,$this->conn); //转义特殊字符
			$key_arr[] = "`".$key."`";
			$value_arr[] = "'".$value."'";
		}
		$keys = implode(",",$key_arr); //implode把数组元素组合为字符串：
		$values = implode(",",$value_arr);
		$sql = "INSERT INTO ".$this->_prefix.$table."(".$keys.") VALUES(".$values.")";
		$this->query($sql);
		return mysqli_insert_id($this->conn); //mysql_insert_id() 函数返回上一步 INSERT 操作产生的 ID。
	}

	/**
	 * 更新数据
	 * @param  [type] $table [description]
	 * @param  [type] $arr   [description]
	 * @param  [type] $where [description]
	 * @return [type]        [description]
	 */
	function update($table,$arr,$where){
		foreach ($arr as $key => $value) {
			$value = mysqli_real_escape_string($this->conn,$value);
			$key_value_Arr[] = "`".$key."`='".$value."'";
		}
		$key_value_Arr = implode(",",$key_value_Arr);
		$sql = "UPDATE ".$this->_prefix.$table." SET ".$key_value_Arr." WHERE ".$where;
		$this->query($sql);
	}

	/**
	 * 删除数据
	 * @param  [type] $table [description]
	 * @param  [type] $where [description]
	 * @return [type]        [description]
	 */
	function del($table,$where){
		$sql = "DELETE FROM ".$this->_prefix.$table." WHERE ".$where;
		$this->query($sql);
	}
}
?>