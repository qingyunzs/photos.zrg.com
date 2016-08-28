<?php
/* Smarty version 3.1.29, created on 2016-08-27 18:21:29
  from "D:\WWW\photos\photosadmin\templates\admin-edit.html" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_57c169a99b7607_58775397',
  'file_dependency' => 
  array (
    '15ca44b29d15977b703ca2199d9e8021117dd105' => 
    array (
      0 => 'D:\\WWW\\photos\\photosadmin\\templates\\admin-edit.html',
      1 => 1472293284,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:_header.html' => 1,
    'file:_footer.html' => 1,
  ),
),false)) {
function content_57c169a99b7607_58775397 ($_smarty_tpl) {
if (!is_callable('smarty_function_html_options')) require_once 'D:\\WWW\\photos\\framework\\libraries\\smarty\\plugins\\function.html_options.php';
$_smarty_tpl->smarty->ext->_subtemplate->render($_smarty_tpl, "file:_header.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<link href="ADMIN_PUBLIC/lib/icheck/icheck.css" rel="stylesheet" type="text/css" />
<title>编辑管理员</title>
</head>
<body>
	<div class="pd-20">
		<form action="" method="post" class="form form-horizontal" id="form-admin-edit">
			<div class="row cl">
				<label class="form-label col-3"><span class="c-red">*</span>管理员：</label>
				<div class="formControls col-5">
					<input type="text" class="input-text" value="<?php echo $_smarty_tpl->tpl_vars['admin_info']->value['admin_name'];?>
" placeholder="" id="user-name" name="username" datatype="s3-7" nullmsg="用户名不能为空">
				</div>
				<div class="col-4"> </div>
			</div>
			<div class="row cl">
				<label class="form-label col-3"><span class="c-red">*</span>初始密码：</label>
				<div class="formControls col-5">
					<input type="password" name="password" placeholder="密码" autocomplete="off" value="" class="input-text" datatype="*6-20" nullmsg="密码不能为空">
				</div>
				<div class="col-4"> </div>
			</div>
			<div class="row cl">
				<label class="form-label col-3"><span class="c-red">*</span>确认密码：</label>
				<div class="formControls col-5">
					<input type="password" placeholder="确认新密码" autocomplete="off" class="input-text Validform_error" errormsg="您两次输入的新密码不一致！" datatype="*" nullmsg="请再输入一次新密码！" recheck="password" id="password2" name="password2">
				</div>
				<div class="col-4"> </div>
			</div>
			<div class="row cl">
				<label class="form-label col-3"><span class="c-red">*</span>性别：</label>
				<div class="formControls col-5 skin-minimal">
					<div class="radio-box">
						<input type="radio" id="sex-1" name="sex" value="男" <?php if ($_smarty_tpl->tpl_vars['admin_info']->value['sex'] == '男') {?> checked="checked"<?php }?> datatype="*" nullmsg="请选择性别！" />
						<label for="sex-1">男</label>
					</div>
					<div class="radio-box">
						<input type="radio" id="sex-2" name="sex" value="女" <?php if ($_smarty_tpl->tpl_vars['admin_info']->value['sex'] == '女') {?> checked="checked"<?php }?> />
						<label for="sex-2">女</label>
					</div>
				</div>
				<div class="col-4"> </div>
			</div>
			<div class="row cl">
				<label class="form-label col-3"><span class="c-red">*</span>手机：</label>
				<div class="formControls col-5">
					<input type="text" class="input-text" value="<?php echo $_smarty_tpl->tpl_vars['admin_info']->value['tel'];?>
" placeholder="" id="user-tel" name="tel"  datatype="m" nullmsg="手机不能为空">
				</div>
				<div class="col-4"> </div>
			</div>
			<div class="row cl">
				<label class="form-label col-3"><span class="c-red">*</span>邮箱：</label>
				<div class="formControls col-5">
					<input type="text" class="input-text" placeholder="@" name="email" id="email" datatype="e" value="<?php echo $_smarty_tpl->tpl_vars['admin_info']->value['email'];?>
" nullmsg="请输入邮箱！">
				</div>
				<div class="col-4"> </div>
			</div>
			<div class="row cl">
				<label class="form-label col-3">角色：</label>
				<div class="formControls col-5"> <span class="select-box" style="width:150px;">
					<select class="select" name="role" size="1">
						<?php echo smarty_function_html_options(array('options'=>$_smarty_tpl->tpl_vars['roles']->value,'selected'=>$_smarty_tpl->tpl_vars['admin_info']->value['role_id']),$_smarty_tpl);?>

					</select>
				</span> </div>
			</div>
			<div class="row cl">
				<label class="form-label col-3">备注：</label>
				<div class="formControls col-5">
					<textarea name="remark" cols="" rows="" class="textarea"  placeholder="说点什么...100个字符以内" dragonfly="true" onKeyUp="textarealength(this,100)"><?php echo $_smarty_tpl->tpl_vars['admin_info']->value['remark'];?>
</textarea>
					<p class="textarea-numberbar"><em class="textarea-length">0</em>/100</p>
				</div>
				<div class="col-4"> </div>
			</div>
			<div class="row cl">
				<div class="col-9 col-offset-3">
					<input type="hidden" name="id" value="<?php echo $_smarty_tpl->tpl_vars['admin_info']->value['id'];?>
">
					<input class="btn btn-primary radius" name="submit" type="submit" value="&nbsp;&nbsp;提交&nbsp;&nbsp;">
				</div>
			</div>
		</form>
	</div>

	<?php $_smarty_tpl->smarty->ext->_subtemplate->render($_smarty_tpl, "file:_footer.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

	<?php echo '<script'; ?>
 type="text/javascript" src="ADMIN_PUBLIC/lib/icheck/jquery.icheck.min.js"><?php echo '</script'; ?>
>

	<?php echo '<script'; ?>
 type="text/javascript">
		$(function(){
			$('.skin-minimal input').iCheck({
				checkboxClass: 'icheckbox-blue',
				radioClass: 'iradio-blue',
				increaseArea: '20%'
			});

			$("#form-admin-edit").Validform({
				tiptype:2, //Enter tip.
				ajaxPost:true,
				callback:function(data){
					if (data.status=='y') {
						// data[0].submit();
						layer.msg(data.info, {icon:1,time:2000}, function(){
							parent.location.reload();
							var index = parent.layer.getFrameIndex(window.name);
							parent.$('.btn-refresh').click();
							parent.layer.close(index);
						});
					}else{
						layer.msg(data.info,{icon:2,time:2000}, function(){
							parent.location.reload();
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
