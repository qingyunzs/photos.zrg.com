<?php
$config = array(
	'view_config' => array(
			'view_type'       => 'Smarty',
			'left_delimiter'  => '{#', //自定义边界符
			'right_delimiter' => '#}',
			'template_dir'    => 'templates',
			'compile_dir'     => 'temp/templates_c',
			'cache_dir'       => 'temp/cache',
			'config_dir'      => 'configs'
			),
	'db_config' => array(
		'db_type'      => 'mysql_i', //mysql表示<=php5.4；mysqli表示>=php5.5
		'db_host'      => 'localhost', //主机地址
		'db_user'      => 'root', //用户名
		'db_pwd'       => 'root' , //密码
		'db_name'      => 'photos', //数据库名称
		'table_prefix' => 'ph_', //表前缀
		'db_charset'   => 'utf8' //编码
		)
	);
	?>