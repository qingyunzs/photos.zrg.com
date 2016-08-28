<?php
/* Smarty version 3.1.29, created on 2016-08-15 22:51:11
  from "D:\WWW\photos\photosadmin\templates\login.html" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_57b1d6df4a8944_98307787',
  'file_dependency' => 
  array (
    '9575116205bb154f1de8c575e510b44f8040236d' => 
    array (
      0 => 'D:\\WWW\\photos\\photosadmin\\templates\\login.html',
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
function content_57b1d6df4a8944_98307787 ($_smarty_tpl) {
$_smarty_tpl->smarty->ext->_subtemplate->render($_smarty_tpl, "file:_header.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<link href="ADMIN_PUBLIC/css/H-ui.login.css" rel="stylesheet" type="text/css" />
<link href="ADMIN_PUBLIC/css/style.css" rel="stylesheet" type="text/css" />
<title>後台登錄</title>
<meta name="keywords" content="後台登錄">
<meta name="description" content="後台登錄。">
</head>
<body>
  <input type="hidden" id="TenantId" name="TenantId" value="" />
  <div class="header"></div>
  <div class="loginWraper">
    <div id="loginform" class="loginBox">
      <form class="form form-horizontal" action="index.php?controller=login&amp;method=index" method="post">
        <div class="row cl">
          <label class="form-label col-3"><i class="Hui-iconfont">&#xe60d;</i></label>
          <div class="formControls col-8">
            <input id="" name="username" type="text" placeholder="賬戶" class="input-text size-L">
          </div>
        </div>
        <div class="row cl">
          <label class="form-label col-3"><i class="Hui-iconfont">&#xe60e;</i></label>
          <div class="formControls col-8">
            <input id="" name="password" type="password" placeholder="密碼" class="input-text size-L">
          </div>
        </div>
        <div class="row cl">
          <div class="formControls col-8 col-offset-3">
            <input class="input-text size-L" id="code_gg" name="verify" type="text" placeholder="驗證碼" onblur="if(this.value==''){this.value='驗證碼'}" onclick="if(this.value=='驗證碼'){this.value='';}" value="驗證碼" style="width:150px;"><img src="index.php?controller=login&amp;method=verify" id="getcode_gg" title="看不清，点击换一张" align="absmiddle">
            <!-- <a id="kanbuq" href="javascript:;">看不清，換一張</a> --> </div>
          </div>
          <div class="row">
            <div class="formControls col-8 col-offset-3">
              <label for="online">
                <input type="checkbox" name="online" id="online" value="">
                使我保持登錄狀態</label>
              </div>
            </div>
            <div class="row">
              <div class="formControls col-8 col-offset-3">
                <input name="submit" id="chk_gg" type="submit" class="btn btn-success radius size-L" value="&nbsp;登&nbsp;&nbsp;&nbsp;&nbsp;錄&nbsp;">
                <input name="cancel" type="reset" class="btn btn-default radius size-L" value="&nbsp;取&nbsp;&nbsp;&nbsp;&nbsp;消&nbsp;">
              </div>
            </div>
          </form>
        </div>
      </div>
      <div class="footer">Copyright by zrg</div>
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
      <?php echo '<script'; ?>
 type="text/javascript">
        $(function(){
          // Click load verify
          $("#getcode_gg").click(function(){
            $(this).attr("src",'index.php?controller=login&method=verify&id=' + Math.random());
          });
          //
          /*$("#chk_gg").click(function(){
            var code_gg = $("#code_gg").val();
            $.post("index.php?controller=login&method=check_verify&",{code:code_gg},function(msg){
              if(msg==1){
                location.href="index.php?controller=login&method=index";
              }else{
                alert("验证码错误！");
              }
            });
          });*/
        });
      <?php echo '</script'; ?>
>
    </body>
    </html><?php }
}
