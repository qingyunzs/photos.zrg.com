<?php
/* Smarty version 3.1.29, created on 2016-08-28 12:00:50
  from "D:\WWW\photos\photosadmin\templates\admin-role-edit.html" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_57c261f28a29e1_50487818',
  'file_dependency' => 
  array (
    '572814ee0d4792bf84821fd5f19ccbb3f9006b59' => 
    array (
      0 => 'D:\\WWW\\photos\\photosadmin\\templates\\admin-role-edit.html',
      1 => 1472356845,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:_header.html' => 1,
    'file:_footer.html' => 1,
  ),
),false)) {
function content_57c261f28a29e1_50487818 ($_smarty_tpl) {
$_smarty_tpl->smarty->ext->_subtemplate->render($_smarty_tpl, "file:_header.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<link href="ADMIN_PUBLIC/css/style.css" rel="stylesheet" type="text/css" />
<link href="ADMIN_PUBLIC/lib/icheck/icheck.css" rel="stylesheet" type="text/css" />
<title>新建管理员角色</title>
</head>
<body>
	<div class="pd-20">
		<form action="" method="post" class="form form-horizontal" id="form-admin-role-edit">
			<div class="row cl">
				<label class="form-label col-2"><span class="c-red">*</span>角色ID：</label>
				<div class="formControls col-5">
					<input type="text" class="input-text" value="<?php echo $_smarty_tpl->tpl_vars['role_info']->value['role_id'];?>
" placeholder="请输入角色ID" id="roleid" name="roleid" datatype="n1-2" nullmsg="角色ID不能为空">
				</div>
				<div class="col-4"> </div>
			</div>
			<div class="row cl">
				<label class="form-label col-2"><span class="c-red">*</span>角色名称：</label>
				<div class="formControls col-5">
					<input type="text" class="input-text" value="<?php echo $_smarty_tpl->tpl_vars['role_info']->value['role_name'];?>
" placeholder="请输入角色名称" id="rolename" name="rolename" datatype="*1-16" nullmsg="角色名称不能为空">
				</div>
				<div class="col-4"> </div>
			</div>
			<div class="row cl">
				<label class="form-label col-2"><span class="c-red">*</span>角色别名：</label>
				<div class="formControls col-5">
					<input type="text" class="input-text" value="<?php echo $_smarty_tpl->tpl_vars['role_info']->value['role_alias'];?>
" placeholder="请输入角色别名(使用英文)" id="rolealias" name="rolealias" datatype="s1-20" nullmsg="角色名称不能为空" errorMsg>
				</div>
				<div class="col-4"> </div>
			</div>
			<div class="row cl">
				<label class="form-label col-2">描述：</label>
				<div class="formControls col-6">
					<textarea name="description" cols="" rows="" class="textarea"  placeholder="请在这里输入该角色的描述信息。" dragonfly="true" onKeyUp="textarealength(this,100)"><?php echo $_smarty_tpl->tpl_vars['role_info']->value['description'];?>
</textarea>
					<p class="textarea-numberbar"><em class="textarea-length">0</em>/100</p>
				</div>
				<div class="col-4"> </div>
			</div>
			<div class="row cl">
				<div class="col-10 col-offset-2">
					<input type="hidden" name="id" value="<?php echo $_smarty_tpl->tpl_vars['role_info']->value['id'];?>
">
					<button type="submit" class="btn btn-success radius" id="admin-role-save" name="admin-role-save"><i class="icon-ok"></i> 提交</button>
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

			// 初始化Validform，添加角色表单
			$("#form-admin-role-edit").Validform({
				tiptype:2, //input tip.
				ajaxPost:true,
				callback:function(data){
					if (data.status=='y') {
						layer.msg(data.info, {icon: 1,time:2000}, function(){
							parent.location.reload();//reload parent page.
							var index = parent.layer.getFrameIndex(window.name);
							parent.$('.btn-refresh').click();
							parent.layer.close(index);
						});
					}else{
						layer.msg(data.info,{icon:2,time:2000}, function(){
							parent.location.reload();//reload parent page.
							var index = parent.layer.getFrameIndex(window.name);
							parent.$('.btn-refresh').click();
							parent.layer.close(index);
						});
					}
				}
			});
		});
	<?php echo '</script'; ?>
>
</body>
</html><?php }
}
