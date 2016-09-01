<?php
/* Smarty version 3.1.29, created on 2016-09-01 22:09:17
  from "D:\WWW\photos\photosadmin\templates\system-menu.html" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_57c8368de00a64_25769478',
  'file_dependency' => 
  array (
    '433a81384d40c4e60353b025fb82724d55628ab2' => 
    array (
      0 => 'D:\\WWW\\photos\\photosadmin\\templates\\system-menu.html',
      1 => 1472738955,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:_header.html' => 1,
    'file:_footer.html' => 1,
  ),
),false)) {
function content_57c8368de00a64_25769478 ($_smarty_tpl) {
$_smarty_tpl->smarty->ext->_subtemplate->render($_smarty_tpl, "file:_header.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<title>栏目管理</title>
</head>
<body>
	<nav class="breadcrumb"><i class="Hui-iconfont">&#xe67f;</i> 首页 <span class="c-gray en">&gt;</span> 系统管理 <span class="c-gray en">&gt;</span> 栏目管理 <a class="btn btn-success radius r mr-20" style="line-height:1.6em;margin-top:3px" href="javascript:location.replace(location.href);" title="刷新" ><i class="Hui-iconfont">&#xe68f;</i></a></nav>
	<div class="pd-20 text-c">
		<form action="index.php?controller=system&amp;method=system_menu_manage" method="post">
			<div class="text-c">
			<input type="text" name="menuname" id="" placeholder="栏目名称" style="width:250px" class="input-text">
				<button name="" id="" class="btn btn-success" type="submit"><i class="Hui-iconfont">&#xe665;</i> 搜索</button>
			</div>
		</form>
		<div class="cl pd-5 bg-1 bk-gray mt-20"> <span class="l"><a href="javascript:;" onclick="datadel()" class="btn btn-danger radius"><i class="Hui-iconfont">&#xe6e2;</i> 批量删除</a> <a class="btn btn-primary radius" onclick="system_menu_add('添加栏目','index.php?controller=system&amp;method=system_menu_add')" href="javascript:;"><i class="Hui-iconfont">&#xe600;</i> 添加栏目</a></span> <span class="r">共有数据：<strong><?php echo $_smarty_tpl->tpl_vars['menu_counts']->value;?>
</strong> 条</span> </div>
		<div class="mt-20">
			<table class="table table-border table-bordered table-hover table-bg table-sort">
				<thead>
					<tr class="text-c">
						<th width="25"><input type="checkbox" name="" value=""></th>
						<th width="80">ID</th>
						<th width="80">父节点(PID)</th>
						<th width="150">栏目名称</th>
						<th width="100">栏目别名</th>
						<th>栏目URL</th>
						<th width="100">操作</th>
					</tr>
				</thead>
				<!-- <?php if ($_smarty_tpl->tpl_vars['menu_datas']->value) {?> -->
				<!-- <?php
$_from = $_smarty_tpl->tpl_vars['menu_datas']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$__foreach_menus_0_saved_item = isset($_smarty_tpl->tpl_vars['menus']) ? $_smarty_tpl->tpl_vars['menus'] : false;
$_smarty_tpl->tpl_vars['menus'] = new Smarty_Variable();
$_smarty_tpl->tpl_vars['menus']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['menus']->value) {
$_smarty_tpl->tpl_vars['menus']->_loop = true;
$__foreach_menus_0_saved_local_item = $_smarty_tpl->tpl_vars['menus'];
?> -->
				<tbody>
					<tr class="text-c">
						<td><input type="checkbox" name="subChecked" value="<?php echo $_smarty_tpl->tpl_vars['menus']->value['id'];?>
"></td>
						<td><?php echo $_smarty_tpl->tpl_vars['menus']->value['menu_id'];?>
</td>
						<td><?php echo $_smarty_tpl->tpl_vars['menus']->value['menu_parent_id'];?>
</td>
						<td class="text-l"><?php echo $_smarty_tpl->tpl_vars['menus']->value['menu_name'];?>
</td>
						<td><?php echo $_smarty_tpl->tpl_vars['menus']->value['menu_alias'];?>
</td>
						<td><?php if ($_smarty_tpl->tpl_vars['menus']->value['menu_parent_id']) {
echo $_smarty_tpl->tpl_vars['menus']->value['menu_url'];
}?></td>
						<td class="f-14"><a title="编辑" href="javascript:;" onclick="system_category_edit('栏目编辑','system-category-add.html','1','700','480')" style="text-decoration:none"><i class="Hui-iconfont">&#xe6df;</i></a> <a title="删除" href="javascript:;" onclick="article_category_del(this,'1')" class="ml-5" style="text-decoration:none"><i class="Hui-iconfont">&#xe6e2;</i></a></td>
					</tr>
				</tbody>
				<!-- <?php
$_smarty_tpl->tpl_vars['menus'] = $__foreach_menus_0_saved_local_item;
}
if ($__foreach_menus_0_saved_item) {
$_smarty_tpl->tpl_vars['menus'] = $__foreach_menus_0_saved_item;
}
?> -->
				<!-- <?php } else { ?> -->
				<tbody>
					<tr>
						<td colspan="7">没有找到任何数据</td>
					</tr>
				</tbody>
				<!-- <?php }?> -->
			</table>
		</div>
	</div>
	<?php $_smarty_tpl->smarty->ext->_subtemplate->render($_smarty_tpl, "file:_footer.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

	<?php echo '<script'; ?>
 type="text/javascript" src="ADMIN_PUBLIC/lib/datatables/1.10.0/jquery.dataTables.min.js"><?php echo '</script'; ?>
> 
	<?php echo '<script'; ?>
 type="text/javascript">
		/*$('.table-sort').dataTable({
		"aaSorting": [[ 1, "desc" ]],//默认第几个排序
		"bStateSave": true,//状态保存
		"aoColumnDefs": [//{"bVisible": false, "aTargets": [ 3 ]} //控制列的隐藏显示
	  	{"orderable":false,"aTargets":[0,4]}// 制定列不参与排序
	  	]
	  });*/
	  /*系统-栏目-添加*/
	  function system_menu_add(title,url,w,h){
	  	layer_show(title,url,w,h);
	  }
	  /*系统-栏目-编辑*/
	  function system_menu_edit(title,url,id,w,h){
	  	layer_show(title,url,w,h);
	  }
	  /*系统-栏目-删除*/
	  function system_menu_del(obj,id){
	  	layer.confirm('确认要删除吗？',function(index){
	  		$(obj).parents("tr").remove();
	  		layer.msg('已删除!',{icon:1,time:1000});
	  	});
	  }
	<?php echo '</script'; ?>
>
</body>
</html><?php }
}