<?php
/* Smarty version 3.1.29, created on 2016-10-07 15:48:01
  from "D:\WWW\photos\photosadmin\templates\admin-trash.html" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_57f75331a3d927_81299545',
  'file_dependency' => 
  array (
    'a9a20ba45488d4e756ee423eeb54f4d34b786208' => 
    array (
      0 => 'D:\\WWW\\photos\\photosadmin\\templates\\admin-trash.html',
      1 => 1475668191,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:_header.html' => 1,
    'file:_footer.html' => 1,
  ),
),false)) {
function content_57f75331a3d927_81299545 ($_smarty_tpl) {
$_smarty_tpl->smarty->ext->_subtemplate->render($_smarty_tpl, "file:_header.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<link href="ADMIN_PUBLIC/css/style.css" rel="stylesheet" type="text/css"/>
<title>管理员回收站</title>
</head>
<body>
    <nav class="breadcrumb"><i class="Hui-iconfont">&#xe67f;</i> 首页 <span class="c-gray en">&gt;</span> 管理员管理 <span
        class="c-gray en">&gt;</span> 管理员回收站 <a class="btn btn-success radius r mr-20"
        style="line-height:1.6em;margin-top:3px"
        href="javascript:location.replace(location.href);" title="刷新"><i
        class="Hui-iconfont">&#xe68f;</i></a>
    </nav>
    <div class="pd-20">
        <form action="index.php?controller=admin" method="post" id="search_conditions">
            <div class="text-c"> 日期范围：
                <input type="text" onfocus="WdatePicker({maxDate:'#F{$dp.$D(\'datemax\')||\'%y-%M-%d\'}'})" id="datemin"
                name="datemin" class="input-text Wdate" style="width:120px;">
                -
                <input type="text" onfocus="WdatePicker({minDate:'#F{$dp.$D(\'datemin\')}',maxDate:'%y-%M-%d'})"
                id="datemax" name="datemax" class="input-text Wdate" style="width:120px;">
                <input type="text" id="adminname" class="input-text" style="width:250px" placeholder="输入管理员名称"
                name="adminname">
                <button type="submit" class="btn btn-success" id="" name=""><i class="Hui-iconfont">&#xe665;</i> 搜索用戶
                </button>
            </div>
        </form>
        <div class="cl pd-5 bg-1 bk-gray mt-20"><span class="l"><a href="javascript:;" onclick="forever_multitude_data_del()" class="btn btn-danger radius"><i class="Hui-iconfont">&#xe6e2;</i> 永久刪除</a> <a href="javascript:;" onclick="revoke_delete()" class="btn btn-primary radius"><i class="Hui-iconfont">&#xe66b;</i> 撤销删除</a></span> <span class="r">共有数据：<strong><?php echo $_smarty_tpl->tpl_vars['admin_info_counts']->value;?>
</strong> 条</span>
        </div>
        <div>
            <table class="table table-border table-bordered table-bg table-sort">
                <thead>
                    <tr class="text-c">
                        <th width="10"><input type="checkbox" name="" value=""></th>
                        <th width="60">登录名</th>
                        <th width="30">性別</th>
                        <th width="80">手机</th>
                        <th width="140">邮箱</th>
                        <th width="80">角色</th>
                        <th width="130">添加时间</th>
                        <th width="130">最后登录时间</th>
                        <th width="100">最后登路IP</th>
                    </tr>
                </thead>
                <!-- <?php if ($_smarty_tpl->tpl_vars['deleted_admin_list']->value) {?> -->
                <!-- <?php
$_from = $_smarty_tpl->tpl_vars['deleted_admin_list']->value;
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
                <tbody id="admin_list">
                    <tr class="text-c">
                        <td><input type="checkbox" value="<?php echo $_smarty_tpl->tpl_vars['infos']->value['id'];?>
" name="subChecked"></td>
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
                    </tr>
                </tbody>
                <!-- <?php
$_smarty_tpl->tpl_vars['infos'] = $__foreach_infos_0_saved_local_item;
}
if ($__foreach_infos_0_saved_item) {
$_smarty_tpl->tpl_vars['infos'] = $__foreach_infos_0_saved_item;
}
?> -->
                <!-- <?php } else { ?> -->
                <tbody>
                    <tr>
                    <td colspan="11">沒有找到任何数据！</td>
                    </tr>
                </tbody>
                <!-- <?php }?> -->
            </table>
        </div>
    </div>
    <div id="page">
        <div style="float: left;margin: 0px 0px 20px 20px;">
            <span>当前&nbsp;&nbsp;<?php echo $_smarty_tpl->tpl_vars['curr_page']->value;?>
/<?php echo $_smarty_tpl->tpl_vars['total_page']->value;?>
&nbsp;&nbsp;页</span></span>
        </div>&nbsp;&nbsp;
        <div style="float: right;margin: 0px 20px 20px 0px;">
            <span><a href='index.php?controller=admin&amp;method=admin_trash&amp;curr_page=1'>首页</a></span>
            <!-- <?php if ($_smarty_tpl->tpl_vars['curr_page']->value > 1) {?> -->
            <span><a href='index.php?controller=admin&amp;method=admin_trash&amp;curr_page=<?php echo $_smarty_tpl->tpl_vars['curr_page']->value-1;?>
'>上一页</a></span>
            <!-- <?php }?> -->
            <!-- <?php if ($_smarty_tpl->tpl_vars['curr_page']->value < $_smarty_tpl->tpl_vars['total_page']->value) {?> -->
            <span><a href='index.php?controller=admin&amp;method=admin_trash&amp;curr_page=<?php echo $_smarty_tpl->tpl_vars['curr_page']->value+1;?>
'>下一页</a></span>
            <!-- <?php }?> -->
            <span><a href='index.php?controller=admin&amp;method=admin_trash&amp;curr_page=<?php echo $_smarty_tpl->tpl_vars['total_page']->value;?>
'>尾页</a></span>
        </div>
    </div>
    <?php $_smarty_tpl->smarty->ext->_subtemplate->render($_smarty_tpl, "file:_footer.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

    <!-- <?php echo '<script'; ?>
 type="text/javascript" src="ADMIN_PUBLIC/lib/laypage/1.2/laypage.js"><?php echo '</script'; ?>
>  -->
    <?php echo '<script'; ?>
 type="text/javascript" src="ADMIN_PUBLIC/lib/My97DatePicker/WdatePicker.js"><?php echo '</script'; ?>
> 
    <!-- 加载admin-list.js -->
    <?php echo '<script'; ?>
 type="text/javascript" src="ADMIN_PUBLIC/js/admin-manage/admin-list.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 type="text/javascript">
        $(function(){
            var DefaultStartDate=setDefaultStartDate();
            var DefaultEndDate=setDefaultEndDate();
            $("#datemin").attr({
                value:DefaultStartDate, 
            });
            $("#datemax").attr({
                value: DefaultEndDate, 
            });
        });
    <?php echo '</script'; ?>
>
</body>
</html><?php }
}
