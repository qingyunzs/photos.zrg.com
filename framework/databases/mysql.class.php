<?php
/**
* mysql class
*/
class mysql{
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
		if (!($conn = mysql_connect($db_host,$db_user,$db_pwd))) { //mysql_connect连接数据库函数
			$this->err(mysql_error());
		}
		if (!mysql_select_db($db_name,$conn)) { //mysql_select_db选择库的函数
			$this->err(mysql_error());
		}
		mysql_query("set names".$db_charset); //使用mysql_query 设置编码,格式：mysql_query("set names utf8")
	}

	/**
	 * 直接执行sql语句
	 * @param  [type] $sql [description]
	 * @return [type]      [description]
	 */
	function query($sql){
		if(!($query = mysql_query($sql))){//使用mysql_query函数执行sql语句
			$this->err($sql."<br />".mysql_error());//mysql_error 报错
		}else{
			return $query;
		}
	}

	/**
	 * 列表
	 * @param  [type] $sql [description]
	 * @return [type]      [description]
	 */
	function findAll($query){
		while ($result = mysql_fetch_array($query,MYSQL_ASSOC)) {
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
		$result = mysql_fetch_array($query,MYSQL_ASSOC);
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
			$value = mysql_real_escape_string($value); //转义特殊字符
			$key_arr[] = "`".$key."`";
			$value_arr[] = "'".$value."'";
		}
		$keys = implode(",",$key_arr); //implode把数组元素组合为字符串：
		$values = implode(",",$value_arr);
		$sql = "INSERT INTO ".$table."(".$keys.") VALUES(".$values.")";
		$this->query($sql);
		return mysql_insert_id(); //mysql_insert_id() 函数返回上一步 INSERT 操作产生的 ID。
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
			$value = mysql_real_escape_string($value);
			$key_value_Arr = "`".$key."`='".$value."'";
		}
		$key_value_Arr = implode(",",$key_value_Arr);
		$sql = "UPDATE ".$table." SET ".$key_value_Arr." WHERE ".$where;
		$this->query($sql);
	}

	/**
	 * 删除数据
	 * @param  [type] $table [description]
	 * @param  [type] $where [description]
	 * @return [type]        [description]
	 */
	function del($table,$where){
		$sql = "DELETE FROM ".$table." WHERE ".$where;
		$this->query($sql);
	}
}
?>