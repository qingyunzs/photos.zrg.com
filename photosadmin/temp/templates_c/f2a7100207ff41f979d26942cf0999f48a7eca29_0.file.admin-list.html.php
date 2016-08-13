<?php
/* Smarty version 3.1.29, created on 2016-08-08 21:51:33
  from "D:\WWW\photos\photosadmin\templates\admin-list.html" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_57a88e65e5f173_91807558',
  'file_dependency' => 
  array (
    'f2a7100207ff41f979d26942cf0999f48a7eca29' => 
    array (
      0 => 'D:\\WWW\\photos\\photosadmin\\templates\\admin-list.html',
      1 => 1470663266,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:_header.html' => 1,
    'file:_footer.html' => 1,
  ),
),false)) {
function content_57a88e65e5f173_91807558 ($_smarty_tpl) {
$_smarty_tpl->smarty->ext->_subtemplate->render($_smarty_tpl, "file:_header.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<link href="ADMIN_PUBLIC/css/style.css" rel="stylesheet" type="text/css" />
<title>管理员列表</title>
</head>
<body>
	<nav class="breadcrumb"><i class="Hui-iconfont">&#xe67f;</i> 首页 <span class="c-gray en">&gt;</span> 管理员管理 <span class="c-gray en">&gt;</span> 管理员列表 <a class="btn btn-success radius r mr-20" style="line-height:1.6em;margin-top:3px" href="javascript:location.replace(location.href);" title="刷新" ><i class="Hui-iconfont">&#xe68f;</i></a></nav>
	<div class="pd-20">
		<div class="text-c"> 日期范围：
			<input type="text" onfocus="WdatePicker({maxDate:'#F{$dp.$D(\'datemax\')||\'%y-%M-%d\'}'})" id="datemin" class="input-text Wdate" style="width:120px;">
			-
			<input type="text" onfocus="WdatePicker({minDate:'#F{$dp.$D(\'datemin\')}',maxDate:'%y-%M-%d'})" id="datemax" class="input-text Wdate" style="width:120px;">
			<input type="text" class="input-text" style="width:250px" placeholder="输入管理员名称" id="" name="">
			<button type="submit" class="btn btn-success" id="" name=""><i class="Hui-iconfont">&#xe665;</i> 搜用户</button>
		</div>
		<div class="cl pd-5 bg-1 bk-gray mt-20"> <span class="l"><a href="javascript:;" onclick="datadel()" class="btn btn-danger radius"><i class="Hui-iconfont">&#xe6e2;</i> 批量删除</a> <a href="javascript:;" onclick="admin_add('添加管理员','index.php?controller=admin&amp;method=admin_add','800','500')" class="btn btn-primary radius"><i class="Hui-iconfont">&#xe600;</i> 添加管理员</a></span> <span class="r">共有数据：<strong><?php echo $_smarty_tpl->tpl_vars['admin_info_counts']->value;?>
</strong> 条</span> </div>
		<table class="table table-border table-bordered table-bg">
			<thead>
				<tr>
					<th scope="col" colspan="9">员工列表</th>
				</tr>
				<tr class="text-c">
					<th width="80"><input type="checkbox" name="" value="">管理员ID</th>
					<th width="60">登录名</th>
					<th width="30">性别</th>
					<th width="80">手机</th>
					<th width="140">邮箱</th>
					<th width="80">角色</th>
					<th width="130">添加时间</th>
					<th width="130">最后登录时间</th>
					<th width="100">最后登录IP</th>
					<th width="50">状态</th>
					<th width="100">操作</th>
				</tr>
			</thead>
			<!-- <?php
$_from = $_smarty_tpl->tpl_vars['admin_infos']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$__foreach_infos_0_saved_item = isset($_smarty_tpl->tpl_vars['infos']) ? $_smarty_tpl->tpl_vars['infos'] : false;
$_smarty_tpl->tpl_vars['infos'] = new Smarty_Variable();
$_smarty_tpl->tpl_vars['infos']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['infos']->value) {
$_smarty_tpl->tpl_vars['infos']->_loop = true;
$__foreach_infos_0_saved_local_item = $_smarty_tpl->tpl_vars['infos'];
?> -->
			<tbody>
				<tr class="text-c">
					<td><input type="checkbox" value="<?php echo $_smarty_tpl->tpl_vars['infos']->value['id'];?>
" name=""><?php echo $_smarty_tpl->tpl_vars['infos']->value['id'];?>
</td>
					<td><?php echo $_smarty_tpl->tpl_vars['infos']->value['admin_name'];?>
</td>
					<td><?php echo $_smarty_tpl->tpl_vars['infos']->value['sex'];?>
</td>
					<td><?php echo $_smarty_tpl->tpl_vars['infos']->value['tel'];?>
</td>
					<td><?php echo $_smarty_tpl->tpl_vars['infos']->value['email'];?>
</td>
					<td><?php echo $_smarty_tpl->tpl_vars['infos']->value['role_name'];?>
</td>
					<td><?php echo date('Y-m-d H:i:s',$_smarty_tpl->tpl_vars['infos']->value['add_time']);?>
</td>
					<td><?php if ($_smarty_tpl->tpl_vars['infos']->value['last_login_time']) {
echo date('Y-m-d H:i:s',$_smarty_tpl->tpl_vars['infos']->value['last_login_time']);
} else { ?>从未登录<?php }?></td>
					<td><?php if ($_smarty_tpl->tpl_vars['infos']->value['last_ip']) {
echo $_smarty_tpl->tpl_vars['infos']->value['last_ip'];
} else { ?>从未登录<?php }?></td>
					<td class="td-status"><?php if ($_smarty_tpl->tpl_vars['infos']->value['is_enable'] == 1) {?><span class="label label-success radius">已启用</span><?php } elseif ($_smarty_tpl->tpl_vars['infos']->value['is_enable'] == 0) {?><span class="label label-defaunt radius">已冻结</span><?php }?></td>
					<td class="td-manage">
						<?php if ($_smarty_tpl->tpl_vars['infos']->value['is_enable'] == 1) {?><a style="text-decoration:none" onclick="admin_stop(this,<?php echo $_smarty_tpl->tpl_vars['infos']->value['id'];?>
)" href="javascript:;" title="冻结"><i class="Hui-iconfont">&#xe60e;</i></a><?php } elseif ($_smarty_tpl->tpl_vars['infos']->value['is_enable'] == 0) {?><a style="text-decoration:none" onclick="admin_start(this,<?php echo $_smarty_tpl->tpl_vars['infos']->value['id'];?>
)" href="javascript:;" title="启用"><i class="Hui-iconfont">&#xe605;</i></a><?php }?><a title="编辑" href="javascript:;" onclick="admin_edit('管理员编辑','index.php?controller=admin&amp;method=admin_edit&amp;id=<?php echo $_smarty_tpl->tpl_vars['infos']->value['id'];?>
','800','500')" class="ml-5" style="text-decoration:none"><i class="Hui-iconfont">&#xe6df;</i></a><a title="删除" href="javascript:;" onclick="admin_del(this,<?php echo $_smarty_tpl->tpl_vars['infos']->value['id'];?>
)" class="ml-5" style="text-decoration:none"><i class="Hui-iconfont">&#xe6e2;</i></a></td>
					</tr>
				</tbody>
				<!-- <?php
$_smarty_tpl->tpl_vars['infos'] = $__foreach_infos_0_saved_local_item;
}
if ($__foreach_infos_0_saved_item) {
$_smarty_tpl->tpl_vars['infos'] = $__foreach_infos_0_saved_item;
}
?> -->
			</table>
		</div>
		<?php $_smarty_tpl->smarty->ext->_subtemplate->render($_smarty_tpl, "file:_footer.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

		<?php echo '<script'; ?>
 type="text/javascript" src="ADMIN_PUBLIC/lib/laypage/1.2/laypage.js"><?php echo '</script'; ?>
>
		<?php echo '<script'; ?>
 type="text/javascript" src="ADMIN_PUBLIC/lib/My97DatePicker/WdatePicker.js"><?php echo '</script'; ?>
>
		<?php echo '<script'; ?>
 type="text/javascript">
	/*
	参数解释：
	title	标题
	url		请求的url
	id		需要操作的数据id
	w		弹出层宽度（缺省调默认值）
	h		弹出层高度（缺省调默认值）
	*/
	/*管理员-增加*/
	function admin_add(title,url,w,h){
		layer_show(title,url,w,h);
	}
	/*管理员-编辑*/
	function admin_edit(title,url,w,h){
		layer_show(title,url,w,h);
	}
	/*管理员-删除*/
	function admin_del(obj,id){
		layer.confirm('确认要删除吗？',function(index){
			//此处请求后台程序……
			$.ajax({
				url: 'index.php?controller=admin&method=admin_del',
				type: 'GET',
				dataType: 'json',
				data: {id: id},
				success:function(data){

				},
				error:function(data){

				}
			});

			//下方是成功后的前台处理……
			$(obj).parents("tr").remove();
			layer.msg('已删除!',{icon:1,time:1000});
		});
	}
	/*管理员-停用*/
	function admin_stop(obj,id){
		layer.confirm('确认要冻结吗？',function(index){
			//此处请求后台程序...
			$.ajax({
				url: 'index.php?controller=admin&method=admin_block',
				type: 'GET',
				dataType: 'json',
				data: {id: id},
				success: function(data){
				},
				error: function(){
				}
			});

			//下方是成功后的前台处理……
			$(obj).parents("tr").find(".td-manage").prepend('<a onClick="admin_start(this,id)" href="javascript:;" title="启用" style="text-decoration:none"><i class="Hui-iconfont">&#xe605;</i></a>');
			$(obj).remove();
			// $(obj).parents("tr").find(".td-status").html('<span class="label label-default radius">已禁用</span>');

			layer.msg('已冻结!',{icon: 5,time:1000}, function(){
				location.reload();
			});
		});
	}

	/*管理员-启用*/
	function admin_start(obj,id){
		layer.confirm('确认要启用吗？',function(index){
		//此处请求后台程序，下方是成功后的前台处理……
		$.ajax({
			url: 'index.php?controller=admin&method=admin_start',
			type: 'GET',
			dataType: 'json',
			data: {id: id},
			success: function(){
			},
			error: function(){
			}
		});

		$(obj).parents("tr").find(".td-manage").prepend('<a onClick="admin_stop(this,id)" href="javascript:;" title="冻结" style="text-decoration:none"><i class="Hui-iconfont">&#xe60e;</i></a>');
		// $(obj).parents("tr").find(".td-status").html('<span class="label label-success radius">已启用</span>');
		$(obj).remove();
		layer.msg('已启用!', {icon: 6,time:1000}, function(){
			location.reload();
		});
	});
	}
<?php echo '</script'; ?>
>
</body>
</html><?php }
}