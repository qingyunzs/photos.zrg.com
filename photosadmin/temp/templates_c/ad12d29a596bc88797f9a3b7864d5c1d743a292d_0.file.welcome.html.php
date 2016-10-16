<?php
/* Smarty version 3.1.29, created on 2016-10-07 11:01:40
  from "D:\WWW\photos\photosadmin\templates\welcome.html" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_57f71014634d12_13856417',
  'file_dependency' => 
  array (
    'ad12d29a596bc88797f9a3b7864d5c1d743a292d' => 
    array (
      0 => 'D:\\WWW\\photos\\photosadmin\\templates\\welcome.html',
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
function content_57f71014634d12_13856417 ($_smarty_tpl) {
$_smarty_tpl->smarty->ext->_subtemplate->render($_smarty_tpl, "file:_header.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<title>我的桌面</title>
</head>
<body>
  <div class="pd-20" style="padding-top:20px;">
    <p class="f-20 text-success">图库管理平台 <span class="f-14">v1.0</span></p>
    <p>登录次数：18 </p>
    <p>上次登录IP：222.35.131.79.1  上次登录时间：2014-6-14 11:19:55</p>
    <table class="table table-border table-bordered table-bg">
      <thead>
        <tr>
          <th colspan="7" scope="col">信息统计</th>
        </tr>
        <tr class="text-c">
          <th>统计</th>
          <th>资讯库</th>
          <th>图片库</th>
          <th>产品库</th>
          <th>用户</th>
          <th>管理员</th>
        </tr>
      </thead>
      <tbody>
        <tr class="text-c">
          <td>总数</td>
          <td>92</td>
          <td>9</td>
          <td>0</td>
          <td>8</td>
          <td>20</td>
        </tr>
        <tr class="text-c">
          <td>今日</td>
          <td>0</td>
          <td>0</td>
          <td>0</td>
          <td>0</td>
          <td>0</td>
        </tr>
        <tr class="text-c">
          <td>昨日</td>
          <td>0</td>
          <td>0</td>
          <td>0</td>
          <td>0</td>
          <td>0</td>
        </tr>
        <tr class="text-c">
          <td>本周</td>
          <td>2</td>
          <td>0</td>
          <td>0</td>
          <td>0</td>
          <td>0</td>
        </tr>
        <tr class="text-c">
          <td>本月</td>
          <td>2</td>
          <td>0</td>
          <td>0</td>
          <td>0</td>
          <td>0</td>
        </tr>
      </tbody>
    </table>
    <table class="table table-border table-bordered table-bg mt-20">
      <thead>
        <tr>
          <th colspan="4" scope="col">服务器信息</th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <td>服务器IP地址 </td>
          <td><?php echo $_smarty_tpl->tpl_vars['sys_info']->value['server_addr'];?>
</td>
          <td>服务器端口 </td>
          <td><?php echo $_smarty_tpl->tpl_vars['sys_info']->value['server_port'];?>
</td>
        </tr>
        <tr>
          <td>服务器操作系统 </td>
          <td><?php echo $_smarty_tpl->tpl_vars['sys_info']->value['server_os'];?>
</td>
          <td>服务器当前时间 </td>
          <td></td>
        </tr>
        <tr>
          <td>服务器Apache版本 </td>
          <td><?php echo $_smarty_tpl->tpl_vars['sys_info']->value['apache_version'];?>
</td>
          <td>站点目录 </td>
          <td><?php echo $_smarty_tpl->tpl_vars['sys_info']->value['document_root'];?>
</td>
        </tr>
        <tr>
          <td>数据库及其版本 </td>
          <td>mysql <?php echo $_smarty_tpl->tpl_vars['sys_info']->value['mysql_version']['version'];?>
</td>
          <td>平台语言及其版本 </td>
          <td>PHP <?php echo $_smarty_tpl->tpl_vars['sys_info']->value['php_version'];?>
</td>
        </tr>
        <tr>
          <td>CPU 类型及其数量 </td>
          <td></td>
          <td>虚拟内存 </td>
          <td></td>
        </tr>
        <tr>
          <td>当前程序占用内存 </td>
          <td></td>
          <td>Apache所占内存 </td>
          <td></td>
        </tr>
        <tr>
        </tr>
      </tbody>
    </table>
  </div>
  <footer class="footer">
  <p>感谢你使用<br>Copyright &copy;2015 All Rights Reserved.<br>
      本后台系统由<a href="http://zrg044.icoc.cc/" target="_blank" title="">ZRG</a>提供技术支持</p>
    </footer>
    <!-- <?php echo '<script'; ?>
 type="text/javascript" src="public/lib/jquery/1.9.1/jquery.min.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 type="text/javascript" src="public/js/H-ui.js"><?php echo '</script'; ?>
> -->
    <?php $_smarty_tpl->smarty->ext->_subtemplate->render($_smarty_tpl, "file:_footer.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

    <?php echo '<script'; ?>
>
      var _hmt = _hmt || [];
      (function() {
        var hm = document.createElement("script");
        hm.src = "//hm.baidu.com/hm.js?080836300300be57b7f34f4b3e97d911";
        var s = document.getElementsByTagName("script")[0]; 
        s.parentNode.insertBefore(hm, s);
      })();
      var _bdhmProtocol = (("https:" == document.location.protocol) ? " https://" : " http://");
      document.write(unescape("%3Cscript src='" + _bdhmProtocol + "hm.baidu.com/h.js%3F080836300300be57b7f34f4b3e97d911' type='text/javascript'%3E%3C/script%3E"));
    <?php echo '</script'; ?>
>
  </body>
  </html><?php }
}
