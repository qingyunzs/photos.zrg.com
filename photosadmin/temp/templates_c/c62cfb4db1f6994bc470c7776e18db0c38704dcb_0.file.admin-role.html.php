<?php
/* Smarty version 3.1.29, created on 2016-08-13 23:54:51
  from "D:\WWW\photos\photosadmin\templates\admin-role.html" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_57af42cba59a70_25786858',
  'file_dependency' => 
  array (
    'c62cfb4db1f6994bc470c7776e18db0c38704dcb' => 
    array (
      0 => 'D:\\WWW\\photos\\photosadmin\\templates\\admin-role.html',
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
function content_57af42cba59a70_25786858 ($_smarty_tpl) {
$_smarty_tpl->smarty->ext->_subtemplate->render($_smarty_tpl, "file:_header.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<title>角色管理</title>
</head>
<body>
	<nav class="breadcrumb"><i class="Hui-iconfont">&#xe67f;</i> 首页 <span class="c-gray en">&gt;</span> 管理员管理 <span class="c-gray en">&gt;</span> 角色管理 <a class="btn btn-success radius r mr-20" style="line-height:1.6em;margin-top:3px" href="javascript:location.replace(location.href);" title="刷新" ><i class="Hui-iconfont">&#xe68f;</i></a></nav>
	<div class="pd-20">
		<div class="cl pd-5 bg-1 bk-gray"> <span class="l"> <a href="javascript:;" onclick="datadel()" class="btn btn-danger radius"><i class="Hui-iconfont">&#xe6e2;</i> 批量删除</a> <a class="btn btn-primary radius" href="javascript:;" onclick="admin_role_add('添加角色','index.php?controller=admin&amp;method=admin_role_add','800','500')"><i class="Hui-iconfont">&#xe600;</i> 添加角色</a> </span> <span class="r">共有数据：<strong>54</strong> 条</span> </div>
		<table class="table table-border table-bordered table-hover table-bg">
			<thead>
				<tr>
					<th scope="col" colspan="6">角色管理</th>
				</tr>
				<tr class="text-c">
					<th width="25"><input type="checkbox" value="" name=""></th>
					<th width="40">ID</th>
					<th width="200">角色名</th>
					<th>用户列表</th>
					<th width="300">描述</th>
					<th width="70">操作</th>
				</tr>
			</thead>
			<tbody>
				<tr class="text-c">
					<td><input type="checkbox" value="" name=""></td>
					<td>1</td>
					<td>超级管理员</td>
					<td><a href="#">admin</a></td>
					<td>拥有至高无上的权利</td>
					<td class="f-14"><a title="编辑" href="javascript:;" onclick="admin_role_edit('角色编辑','admin-role-add.html','1')" style="text-decoration:none"><i class="Hui-iconfont">&#xe6df;</i></a> <a title="删除" href="javascript:;" onclick="admin_role_del(this,'1')" class="ml-5" style="text-decoration:none"><i class="Hui-iconfont">&#xe6e2;</i></a></td>
				</tr>
				<tr class="text-c">
					<td><input type="checkbox" value="" name=""></td>
					<td>2</td>
					<td>总编</td>
					<td><a href="#">张三</a></td>
					<td>具有添加、审核、发布、删除内容的权限</td>
					<td class="f-14"><a title="编辑" href="javascript:;" onclick="admin_role_edit('角色编辑','admin-role-add.html','2')" style="text-decoration:none"><i class="Hui-iconfont">&#xe6df;</i></a> <a title="删除" href="javascript:;" onclick="admin_role_del(this,'1')" class="ml-5" style="text-decoration:none"><i class="Hui-iconfont">&#xe6e2;</i></a></td>
				</tr>
				<tr class="text-c">
					<td><input type="checkbox" value="" name=""></td>
					<td>3</td>
					<td>栏目主辑</td>
					<td><a href="#">李四</a>，<a href="#">王五</a></td>
					<td>只对所在栏目具有添加、审核、发布、删除内容的权限</td>
					<td class="f-14"><a title="编辑" href="javascript:;" onclick="admin_role_edit('角色编辑','admin-role-add.html','3')" style="text-decoration:none"><i class="Hui-iconfont">&#xe6df;</i></a> <a title="删除" href="javascript:;" onclick="admin_role_del(this,'1')" class="ml-5" style="text-decoration:none"><i class="Hui-iconfont">&#xe6e2;</i></a></td>
				</tr>
				<tr class="text-c">
					<td><input type="checkbox" value="" name=""></td>
					<td>4</td>
					<td>栏目编辑</td>
					<td><a href="#">赵六</a>，<a href="#">钱七</a></td>
					<td>只对所在栏目具有添加、删除草稿等权利。</td>
					<td class="f-14"><a title="编辑" href="javascript:;" onclick="admin_role_edit('角色编辑','admin-role-add.html','4')" style="text-decoration:none"><i class="Hui-iconfont">&#xe6df;</i></a> <a title="删除" href="javascript:;" onclick="admin_role_del(this,'1')" class="ml-5" style="text-decoration:none"><i class="Hui-iconfont">&#xe6e2;</i></a></td>
				</tr>
			</tbody>
		</table>
	</div>
	<?php $_smarty_tpl->smarty->ext->_subtemplate->render($_smarty_tpl, "file:_footer.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

	<?php echo '<script'; ?>
 type="text/javascript" src="ADMIN_PUBLIC/lib/My97DatePicker/WdatePicker.js"><?php echo '</script'; ?>
>
	<?php echo '<script'; ?>
 type="text/javascript">
		/*管理员-角色-添加*/
		function admin_role_add(title,url,w,h){
			layer_show(title,url,w,h);
		}
		/*管理员-角色-编辑*/
		function admin_role_edit(title,url,id,w,h){
			layer_show(title,url,w,h);
		}
		/*管理员-角色-删除*/
		function admin_role_del(obj,id){
			layer.confirm('角色删除须谨慎，确认要删除吗？',function(index){
		//此处请求后台程序，下方是成功后的前台处理……
		$(obj).parents("tr").remove();
		layer.msg('已删除!',{icon:1,time:1000});
	});
		}
	<?php echo '</script'; ?>
>
</body>
</html><?php }
}
