/**
 * 参数解释：
 * title	标题
 * url		请求的url
 * id		需要操作的数据id
 * w		弹出层宽度（缺省调默认值）
 * h		弹出层高度（缺省调默认值）
 */
/* $(function(){
 	$("#search_conditions").submit(function () {
		var dateMin   = $("#datemin").val();
		var dateMax   = $("#datemax").val();
		var adminName = $("#adminname").val();

		var data        ='{"startDate":' + dateMin + ',"endDate":' + dateMax + ',"adminName":' + adminName+ '}';
		var	contentType ="application/json; charset=utf-8";
		var url         ='index.php?controller=admin&method=admin_list';
		//调用自定义函数
		ajaxData("POST","json",data,contentType,url);
 	});
 });*/
 /**
  * 批量删除
  * @return {[type]} [description]
  */
 function multitude_data_del(){
 	layer.confirm('确认要删除吗？',function(index){
 		layer.confirm('你正在删除多条数据，请再次确认!',function(index){
 			var str ="";
 			$('input:checkbox[name="subChecked"]:checked').each(function() {
 				str+=$(this).val()+",";
 			});
 			if (str=="") {
 				layer.msg("您没有选择任何数据！");
 				return;
 			}
 			var indexs=str.substring(str.length-1,-1);
 			$.ajax({
 				url: 'index.php?controller=admin&method=admin_del',
 				type: 'GET',
 				dataType: 'json',
 				data: {id: indexs},
 				success:function(data){
 					if (data.status=='y') {
 						layer.msg(data.info,{icon:1,time:2000},function(){
 							window.location.reload();
 						});
 					}else if(data.status=='0'){
 						layer.msg(data.info,{icon:5,time:2000},function(){
 							window.location.reload();
 						});
 					}
 				}
 			});
 		});
 	});
 }

 /*管理员-增加*/
 function admin_add(title,url,w,h){
 	layer_show(title,url,w,h);
 }
 
 /*管理员-编辑*/
 function admin_edit(title,url,w,h){
 	layer_show(title,url,w,h);
 }

 /*管理员-删除*/
 function admin_del(obj,id){
 	layer.confirm('确认要删除吗？',function(index){
		//此处请求后台程序……
		$.ajax({
			url: 'index.php?controller=admin&method=admin_del',
			type: 'GET',
			dataType: 'json',
			data: {id: id},
			success:function(data){
				if (data.status=='y') {
					layer.msg(data.info,{icon:1,time:2000},function(){
						window.location.reload();
					});
				}else if(data.status=='n'){
					layer.msg(data.info,{icon:5,time:2000},function(){
						window.location.reload();
					});
				}else{
					layer.msg(data.info,{icon:5,time:2000},function(){
						window.location.reload();
					});
				}
			}
		});
		//下方是成功后的前台处理……
		// $(obj).parents("tr").remove();
		// layer.msg('已删除!',{icon:1,time:1000});
	});
 }
 /*管理员-停用*/
 function admin_stop(obj,id){
 	layer.confirm('确认要冻结吗？',function(index){
		//此处请求后台程序...
		$.ajax({
			url: 'index.php?controller=admin&method=admin_block',
			type: 'GET',
			dataType: 'json',
			data: {id: id},
			success: function(data){
				
			}
		});

		//下方是成功后的前台处理……
		$(obj).parents("tr").find(".td-manage").prepend('<a onClick="admin_start(this,id)" href="javascript:;" title="启用" style="text-decoration:none"><i class="Hui-iconfont">&#xe605;</i></a>');
		$(obj).remove();
		// $(obj).parents("tr").find(".td-status").html('<span class="label label-default radius">已禁用</span>');	
		layer.msg('已冻结!',{icon: 1,time:1000}, function(){
			location.reload();
		});
	});
 }

 /*管理员-启用*/
 function admin_start(obj,id){
 	layer.confirm('确认要启用吗？',function(index){
		//此处请求后台程序，下方是成功后的前台处理……
		$.ajax({
			url: 'index.php?controller=admin&method=admin_start',
			type: 'GET',
			dataType: 'json',
			data: {id: id},
			success: function(){
			},
			error: function(){
			}
		});

		$(obj).parents("tr").find(".td-manage").prepend('<a onClick="admin_stop(this,id)" href="javascript:;" title="冻结" style="text-decoration:none"><i class="Hui-iconfont">&#xe60e;</i></a>');
		// $(obj).parents("tr").find(".td-status").html('<span class="label label-success radius">已启用</span>');
		$(obj).remove();
		layer.msg('已启用!', {icon: 6,time:1000}, function(){
			location.reload();
		});
	});
 }