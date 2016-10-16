<?php
/* Smarty version 3.1.29, created on 2016-10-07 15:48:02
  from "D:\WWW\photos\photosadmin\templates\admin-role.html" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_57f75332b285f3_22079578',
  'file_dependency' => 
  array (
    'c62cfb4db1f6994bc470c7776e18db0c38704dcb' => 
    array (
      0 => 'D:\\WWW\\photos\\photosadmin\\templates\\admin-role.html',
      1 => 1475670816,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:_header.html' => 1,
    'file:_footer.html' => 1,
  ),
),false)) {
function content_57f75332b285f3_22079578 ($_smarty_tpl) {
$_smarty_tpl->smarty->ext->_subtemplate->render($_smarty_tpl, "file:_header.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<title>角色管理</title>
</head>
<body>
	<nav class="breadcrumb"><i class="Hui-iconfont">&#xe67f;</i> 首页 <span class="c-gray en">&gt;</span> 管理员管理 <span class="c-gray en">&gt;</span> 角色管理 <a class="btn btn-success radius r mr-20" style="line-height:1.6em;margin-top:3px" href="javascript:location.replace(location.href);" title="刷新" ><i class="Hui-iconfont">&#xe68f;</i></a></nav>
	<div class="pd-20">
		<div class="cl pd-5 bg-1 bk-gray"> <span class="l"> <a href="javascript:;" onclick="multitude_role_del()" class="btn btn-danger radius"><i class="Hui-iconfont">&#xe6e2;</i> 批量删除</a> <a class="btn btn-primary radius" href="javascript:;" onclick="admin_role_add('添加角色','index.php?controller=admin&amp;method=admin_role_add','800','500')"><i class="Hui-iconfont">&#xe600;</i> 添加角色</a> </span> <span class="r">共有数据：<strong><?php echo $_smarty_tpl->tpl_vars['role_counts']->value;?>
</strong> 条</span> </div>
		<table class="table table-border table-bordered table-hover table-bg table-sort">
			<thead>
				<tr class="text-c">
					<th width="25"><input type="checkbox" value="" name=""></th>
					<th width="40" ">角色ID</th>
					<th width="80">角色名称</th>
					<th width="100">角色别名</th>
					<th width="150">权限列表</th>
					<th>描述</th>
					<th width="70">操作</th>
				</tr>
			</thead>
			<!-- <?php if ($_smarty_tpl->tpl_vars['roles']->value) {?> -->
			<!-- <?php
$_from = $_smarty_tpl->tpl_vars['roles']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$__foreach_role_0_saved_item = isset($_smarty_tpl->tpl_vars['role']) ? $_smarty_tpl->tpl_vars['role'] : false;
$_smarty_tpl->tpl_vars['role'] = new Smarty_Variable();
$_smarty_tpl->tpl_vars['role']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['role']->value) {
$_smarty_tpl->tpl_vars['role']->_loop = true;
$__foreach_role_0_saved_local_item = $_smarty_tpl->tpl_vars['role'];
?> -->
			<tbody>
				<tr class="text-c">
					<td><input type="checkbox" value="<?php echo $_smarty_tpl->tpl_vars['role']->value['id'];?>
" name="subChecked"></td>
					<th><?php echo $_smarty_tpl->tpl_vars['role']->value['role_id'];?>
</th>
					<td><?php echo $_smarty_tpl->tpl_vars['role']->value['role_name'];?>
</td>
					<td><?php echo $_smarty_tpl->tpl_vars['role']->value['role_alias'];?>
</td>
					<td><a href="#"></a></td>
					<td><?php echo $_smarty_tpl->tpl_vars['role']->value['description'];?>
</td>
					<td class="f-14"><a title="分配权限" href="javascript:;" onclick="set_role_permission('分配权限','index.php?controller=admin&amp;method=set_role_permission&amp;id=<?php echo $_smarty_tpl->tpl_vars['role']->value['id'];?>
','','')" style="text-decoration:none"><i class="Hui-iconfont">&#xe61d;</i></a>
						<a title="编辑" href="javascript:;" onclick="admin_role_edit('角色编辑','index.php?controller=admin&amp;method=admin_role_edit&amp;id=<?php echo $_smarty_tpl->tpl_vars['role']->value['id'];?>
','','')" style="text-decoration:none"><i class="Hui-iconfont">&#xe6df;</i></a>
						<a title="删除" href="javascript:;" onclick="admin_role_del(this,<?php echo $_smarty_tpl->tpl_vars['role']->value['id'];?>
)" class="ml-5" style="text-decoration:none"><i class="Hui-iconfont">&#xe6e2;</i></a>
					</td>
				</tr>
			</tbody>
			<!-- <?php
$_smarty_tpl->tpl_vars['role'] = $__foreach_role_0_saved_local_item;
}
if ($__foreach_role_0_saved_item) {
$_smarty_tpl->tpl_vars['role'] = $__foreach_role_0_saved_item;
}
?> -->
			<!-- <?php } else { ?> -->
			<tbody>
				<tr>
					<td colspan="11">没有找到任何数据</td>
				</tr>
			</tbody>
			<!-- <?php }?> -->
		</table>
	</div>
	<?php $_smarty_tpl->smarty->ext->_subtemplate->render($_smarty_tpl, "file:_footer.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

	<?php echo '<script'; ?>
 type="text/javascript" src="ADMIN_PUBLIC/lib/My97DatePicker/WdatePicker.js"><?php echo '</script'; ?>
>
	<!-- 加载admin-role.js -->
	<?php echo '<script'; ?>
 type="text/javascript" src="ADMIN_PUBLIC/js/admin-manage/admin-role.js"><?php echo '</script'; ?>
>
	<?php echo '<script'; ?>
 type="text/javascript" src="ADMIN_PUBLIC/lib/datatables/1.10.0/jquery.dataTables.min.js"><?php echo '</script'; ?>
>
	<?php echo '<script'; ?>
 type="text/javascript">

	<?php echo '</script'; ?>
>
</body>
</html><?php }
}
