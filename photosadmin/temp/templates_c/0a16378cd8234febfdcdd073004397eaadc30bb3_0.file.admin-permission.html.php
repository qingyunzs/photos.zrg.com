<?php
/* Smarty version 3.1.29, created on 2016-08-14 00:38:20
  from "D:\WWW\photos\photosadmin\templates\admin-permission.html" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_57af4cfc91e8d4_06581323',
  'file_dependency' => 
  array (
    '0a16378cd8234febfdcdd073004397eaadc30bb3' => 
    array (
      0 => 'D:\\WWW\\photos\\photosadmin\\templates\\admin-permission.html',
      1 => 1470409847,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:_header.html' => 1,
    'file:_footer.html' => 1,
  ),
),false)) {
function content_57af4cfc91e8d4_06581323 ($_smarty_tpl) {
$_smarty_tpl->smarty->ext->_subtemplate->render($_smarty_tpl, "file:_header.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<link href="ADMIN_PUBLIC/css/style.css" rel="stylesheet" type="text/css" />
<title>权限管理</title>
</head>
<body>
	<nav class="breadcrumb"><i class="Hui-iconfont">&#xe67f;</i> 首页 <span class="c-gray en">&gt;</span> 管理员管理 <span class="c-gray en">&gt;</span> 权限管理 <a class="btn btn-success radius r mr-20" style="line-height:1.6em;margin-top:3px" href="javascript:location.replace(location.href);" title="刷新" ><i class="Hui-iconfont">&#xe68f;</i></a></nav>
	<div class="pd-20">
		<div class="text-c">
			<form class="Huiform" method="post" action="" target="_self">
				<input type="text" class="input-text" style="width:250px" placeholder="权限名称" id="" name="">
				<button type="submit" class="btn btn-success" id="" name=""><i class="Hui-iconfont">&#xe665;</i> 搜权限节点</button>
			</form>
		</div>
		<div class="cl pd-5 bg-1 bk-gray mt-20"> <span class="l"><a href="javascript:;" onclick="datadel()" class="btn btn-danger radius"><i class="Hui-iconfont">&#xe6e2;</i> 批量删除</a> <a href="javascript:;" onclick="admin_permission_add('添加权限节点','admin-permission-add.html','800','350')" class="btn btn-primary radius"><i class="Hui-iconfont">&#xe600;</i> 添加权限节点</a></span> <span class="r">共有数据：<strong>54</strong> 条</span> </div>
		<table class="table table-border table-bordered table-bg">
			<thead>
				<tr>
					<th scope="col" colspan="7">权限节点</th>
				</tr>
				<tr class="text-c">
					<th width="25"><input type="checkbox" name="" value=""></th>
					<th width="40">ID</th>
					<th width="200">权限名称</th>
					<th>字段名</th>
					<th width="100">操作</th>
				</tr>
			</thead>
			<tbody>
				<tr class="text-c">
					<td><input type="checkbox" value="1" name=""></td>
					<td>1</td>
					<td>栏目添加</td>
					<td></td>
					<td><a title="编辑" href="javascript:;" onclick="admin_permission_edit('角色编辑','admin-permission-add.html','1','','310')" class="ml-5" style="text-decoration:none"><i class="Hui-iconfont">&#xe6df;</i></a> <a title="删除" href="javascript:;" onclick="admin_permission_del(this,'1')" class="ml-5" style="text-decoration:none"><i class="Hui-iconfont">&#xe6e2;</i></a></td>
				</tr>
			</tbody>
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
	/*管理员-权限-添加*/
	function admin_permission_add(title,url,w,h){
		layer_show(title,url,w,h);
	}
	/*管理员-权限-编辑*/
	function admin_permission_edit(title,url,id,w,h){
		layer_show(title,url,w,h);
	}

	/*管理员-权限-删除*/
	function admin_permission_del(obj,id){
		layer.confirm('角色删除须谨慎，确认要删除吗？',function(index){
			$(obj).parents("tr").remove();
			layer.msg('已删除!',{icon:1,time:1000});
		});
	}
<?php echo '</script'; ?>
>
</body>
</html><?php }
}
