<?php
/* Smarty version 3.1.29, created on 2016-08-08 21:33:58
  from "D:\WWW\photos\photosadmin\templates\admin-role-add.html" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_57a88a465edbf2_08612908',
  'file_dependency' => 
  array (
    '5fd08fbe08bbbad8205e01b81fd96141f7755006' => 
    array (
      0 => 'D:\\WWW\\photos\\photosadmin\\templates\\admin-role-add.html',
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
function content_57a88a465edbf2_08612908 ($_smarty_tpl) {
$_smarty_tpl->smarty->ext->_subtemplate->render($_smarty_tpl, "file:_header.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<link href="ADMIN_PUBLIC/css/style.css" rel="stylesheet" type="text/css" />
<title>新建管理员角色</title>
</head>
<body>
	<div class="pd-20">
		<form action="" method="post" class="form form-horizontal" id="form-user-character-add">
			<div class="row cl">
				<label class="form-label col-2"><span class="c-red">*</span>角色名称：</label>
				<div class="formControls col-10">
					<input type="text" class="input-text" value="" placeholder="" id="user-name" name="user-name" datatype="*4-16" nullmsg="用户账户不能为空">
				</div>
			</div>
			<div class="row cl">
				<label class="form-label col-2">备注：</label>
				<div class="formControls col-10">
					<input type="text" class="input-text" value="" placeholder="" id="" name="">
				</div>
			</div>
			<div class="row cl">
				<label class="form-label col-2">网站角色：</label>
				<div class="formControls col-10">
					<dl class="permission-list">
						<dt><label><input type="checkbox" value="" name="user-Character-0" id="user-Character-0">资讯管理</label></dt>
						<dd>
							<dl class="cl permission-list2">
								<dt><label class=""><input type="checkbox" value="" name="user-Character-0-0" id="user-Character-0-0">文章管理</label></dt>
								<dd><label class=""><input type="checkbox" value="" name="user-Character-0-0-0" id="user-Character-0-0-0">添加</label>
									<label class=""><input type="checkbox" value="" name="user-Character-0-0-0" id="user-Character-0-0-1">修改</label>
									<label class=""><input type="checkbox" value="" name="user-Character-0-0-0" id="user-Character-0-0-2">删除</label>
									<label class=""><input type="checkbox" value="" name="user-Character-0-0-0" id="user-Character-0-0-3">查看</label>
									<label class=""><input type="checkbox" value="" name="user-Character-0-0-0" id="user-Character-0-0-4">审核</label>
									<label class="c-orange"><input type="checkbox" value="" name="user-Character-0-0-0" id="user-Character-0-0-5"> 只能操作自己发布的</label>
								</dd>
							</dl>
							<dl class="cl permission-list2">
								<dt><label class=""><input type="checkbox" value="" name="user-Character-0-1" id="user-Character-0-1">图片管理</label>
								</dt>
								<dd><label class=""><input type="checkbox" value="" name="user-Character-0-1-0" id="user-Character-0-1-0">添加</label>
									<label class=""><input type="checkbox" value="" name="user-Character-0-1-0" id="user-Character-0-1-1">修改</label>
									<label class=""><input type="checkbox" value="" name="user-Character-0-1-0" id="user-Character-0-1-2">删除</label>
									<label class=""><input type="checkbox" value="" name="user-Character-0-1-0" id="user-Character-0-1-3">查看</label>
									<label class=""><input type="checkbox" value="" name="user-Character-0-1-0" id="user-Character-0-1-4">审核</label>
									<label class="c-orange"><input type="checkbox" value="" name="user-Character-0-2-0" id="user-Character-0-2-5"> 只能操作自己发布的</label>
								</dd>
							</dl>
							<dl class="cl permission-list2">
								<dt><label class=""><input type="checkbox" value="" name="user-Character-0-1" id="user-Character-0-1">广告管理</label>
								</dt>
								<dd><label class=""><input type="checkbox" value="" name="user-Character-0-1-0" id="user-Character-0-1-0">添加</label>
									<label class=""><input type="checkbox" value="" name="user-Character-0-1-0" id="user-Character-0-1-1">修改</label>
									<label class=""><input type="checkbox" value="" name="user-Character-0-1-0" id="user-Character-0-1-2">删除</label>
									<label class=""><input type="checkbox" value="" name="user-Character-0-1-0" id="user-Character-0-1-3">查看</label>
									<label class=""><input type="checkbox" value="" name="user-Character-0-1-0" id="user-Character-0-1-4">审核</label>
									<label class="c-orange"><input type="checkbox" value="" name="user-Character-0-2-0" id="user-Character-0-2-5"> 只能操作自己发布的</label>
								</dd>
							</dl>
							<dl class="cl permission-list2">
								<dt><label class=""><input type="checkbox" value="" name="user-Character-0-1" id="user-Character-0-1">页面管理</label>
								</dt>
								<dd><label class=""><input type="checkbox" value="" name="user-Character-0-1-0" id="user-Character-0-1-0">添加</label>
									<label class=""><input type="checkbox" value="" name="user-Character-0-1-0" id="user-Character-0-1-1">修改</label>
									<label class=""><input type="checkbox" value="" name="user-Character-0-1-0" id="user-Character-0-1-2">删除</label>
									<label class=""><input type="checkbox" value="" name="user-Character-0-1-0" id="user-Character-0-1-3">查看</label>
									<label class=""><input type="checkbox" value="" name="user-Character-0-1-0" id="user-Character-0-1-4">审核</label>
									<label class="c-orange"><input type="checkbox" value="" name="user-Character-0-2-0" id="user-Character-0-2-5"> 只能操作自己发布的</label>
								</dd>
							</dl>
							<dl class="cl permission-list2">
								<dt><label class=""><input type="checkbox" value="" name="user-Character-0-1" id="user-Character-0-1">评论管理</label>
								</dt>
								<dd><label class=""><input type="checkbox" value="" name="user-Character-0-1-0" id="user-Character-0-1-0">添加</label>
									<label class=""><input type="checkbox" value="" name="user-Character-0-1-0" id="user-Character-0-1-1">修改</label>
									<label class=""><input type="checkbox" value="" name="user-Character-0-1-0" id="user-Character-0-1-2">删除</label>
									<label class=""><input type="checkbox" value="" name="user-Character-0-1-0" id="user-Character-0-1-3">查看</label>
									<label class=""><input type="checkbox" value="" name="user-Character-0-1-0" id="user-Character-0-1-4">审核</label>
									<label class="c-orange"><input type="checkbox" value="" name="user-Character-0-2-0" id="user-Character-0-2-5"> 只能操作自己发布的</label>
								</dd>
							</dl>
							<dl class="cl permission-list2">
								<dt><label class=""><input type="checkbox" value="" name="user-Character-1-0" id="user-Character-1-0">信息统计</label>
								</dt>
								<dd><label class=""><input type="checkbox" value="" name="user-Character-1-0-0" id="user-Character-1-0-0">添加</label>
									<label class=""><input type="checkbox" value="" name="user-Character-1-0-0" id="user-Character-1-0-1">修改</label>
									<label class=""><input type="checkbox" value="" name="user-Character-1-0-0" id="user-Character-1-0-2">删除</label>
									<label class=""><input type="checkbox" value="" name="user-Character-1-0-0" id="user-Character-1-0-3">查看</label>
									<label class=""><input type="checkbox" value="" name="user-Character-1-0-0" id="user-Character-1-0-4">审核</label>
								</dd>
							</dl>
						</dd>
					</dl>
					<dl class="permission-list">
						<dt><label><input type="checkbox" value="" name="user-Character-0" id="user-Character-1">用户控制中心</label>
						</dt>
						<dd>
							<dl class="cl permission-list2">
								<dt><label class=""><input type="checkbox" value="" name="user-Character-1-0" id="user-Character-1-0">会员管理</label>
								</dt>
								<dd><label class=""><input type="checkbox" value="" name="user-Character-1-0-0" id="user-Character-1-0-0">添加</label>
									<label class=""><input type="checkbox" value="" name="user-Character-1-0-0" id="user-Character-1-0-1">修改</label>
									<label class=""><input type="checkbox" value="" name="user-Character-1-0-0" id="user-Character-1-0-2">删除</label>
									<label class=""><input type="checkbox" value="" name="user-Character-1-0-0" id="user-Character-1-0-3">查看</label>
									<label class=""><input type="checkbox" value="" name="user-Character-1-0-0" id="user-Character-1-0-4">审核</label>
								</dd>
							</dl>
							<dl class="cl permission-list2">
								<dt><label class=""><input type="checkbox" value="" name="user-Character-1-0" id="user-Character-1-0">管理员管理</label>
								</dt>
								<dd><label class=""><input type="checkbox" value="" name="user-Character-1-0-0" id="user-Character-1-0-0">添加</label>
									<label class=""><input type="checkbox" value="" name="user-Character-1-0-0" id="user-Character-1-0-1">修改</label>
									<label class=""><input type="checkbox" value="" name="user-Character-1-0-0" id="user-Character-1-0-2">删除</label>
									<label class=""><input type="checkbox" value="" name="user-Character-1-0-0" id="user-Character-1-0-3">查看</label>
									<label class=""><input type="checkbox" value="" name="user-Character-1-0-0" id="user-Character-1-0-4">审核</label>
								</dd>
							</dl>
						</dd>
					</dl>
					<dl class="permission-list">
						<dt><label><input type="checkbox" value="" name="user-Character-0" id="user-Character-1">系统控制中心</label>
						</dt>
						<dd>
							<dl class="cl permission-list2">
								<dt><label class=""><input type="checkbox" value="" name="user-Character-1-0" id="user-Character-1-0">系统管理</label>
								</dt>
								<dd><label class=""><input type="checkbox" value="" name="user-Character-1-0-0" id="user-Character-1-0-0">添加</label>
									<label class=""><input type="checkbox" value="" name="user-Character-1-0-0" id="user-Character-1-0-1">修改</label>
									<label class=""><input type="checkbox" value="" name="user-Character-1-0-0" id="user-Character-1-0-2">删除</label>
									<label class=""><input type="checkbox" value="" name="user-Character-1-0-0" id="user-Character-1-0-3">查看</label>
									<label class=""><input type="checkbox" value="" name="user-Character-1-0-0" id="user-Character-1-0-4">审核</label>
								</dd>
							</dl>
						</dd>
					</dl>
					<dl class="permission-list">
						<dt><label><input type="checkbox" value="" name="user-Character-0" id="user-Character-1">财务结算中心</label>
						</dt>
						<dd>
							<dl class="cl permission-list2">
								<dt><label class=""><input type="checkbox" value="" name="user-Character-1-0" id="user-Character-1-0">财务管理</label>
								</dt>
								<dd><label class=""><input type="checkbox" value="" name="user-Character-1-0-0" id="user-Character-1-0-0">添加</label>
									<label class=""><input type="checkbox" value="" name="user-Character-1-0-0" id="user-Character-1-0-1">修改</label>
									<label class=""><input type="checkbox" value="" name="user-Character-1-0-0" id="user-Character-1-0-2">删除</label>
									<label class=""><input type="checkbox" value="" name="user-Character-1-0-0" id="user-Character-1-0-3">查看</label>
									<label class=""><input type="checkbox" value="" name="user-Character-1-0-0" id="user-Character-1-0-4">审核</label>
								</dd>
							</dl>
						</dd>
					</dl>
				</div>
			</div>
			<div class="row cl">
				<div class="col-10 col-offset-2">
					<button type="submit" class="btn btn-success radius" id="admin-role-save" name="admin-role-save"><i class="icon-ok"></i> 确定</button>
				</div>
			</div>
		</form>
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
>
		$(function(){
			$(".permission-list dt input:checkbox").click(function(){
				$(this).closest("dl").find("dd input:checkbox").prop("checked",$(this).prop("checked"));
			});
			$(".permission-list2 dd input:checkbox").click(function(){
				var l =$(this).parent().parent().find("input:checked").length;
				var l2=$(this).parents(".permission-list").find(".permission-list2 dd").find("input:checked").length;
				if($(this).prop("checked")){
					$(this).closest("dl").find("dt input:checkbox").prop("checked",true);
					$(this).parents(".permission-list").find("dt").first().find("input:checkbox").prop("checked",true);
				}
				else{
					if(l==0){
						$(this).closest("dl").find("dt input:checkbox").prop("checked",false);
					}
					if(l2==0){
						$(this).parents(".permission-list").find("dt").first().find("input:checkbox").prop("checked",false);
					}
				}
			});
		});
	<?php echo '</script'; ?>
>
</body>
</html><?php }
}
