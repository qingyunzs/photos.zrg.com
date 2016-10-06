/**
 * 获取分页条
 * @return {[type]} [description]
 */
 function _get_page_bar(){
	//页码大于最大页数
	if(curPage>totalPage) curPage=totalPage;
	//页码小于1
	if(curPage<1) curPage=1;
	pageStr = "<span>共"+total+"条</span><span>"+curPage+"/"+totalPage+"</span>";

	//如果是第一页
	if(curPage==1){
		pageStr += "<span>首页</span><span>上一页</span>";
	}else{
		pageStr += "<span><a href='javascript:void(0)' rel='1'>首页</a></span><span><a href='javascript:void(0)' rel='"+(curPage-1)+"'>上一页</a></span>";
	}

	//如果是最后页
	if(curPage>=totalPage){
		pageStr += "<span>下一页</span><span>尾页</span>";
	}else{
		pageStr += "<span><a href='javascript:void(0)' rel='"+(parseInt(curPage)+1)+"'>下一页</a></span><span><a href='javascript:void(0)' rel='"+totalPage+"'>尾页</a></span>";
	}

	$("#page").html(pageStr);
}
/**
 * 批量删除
 * @return {[type]} [description]
 */
 function multitude_data_del(){
 	layer.confirm('确定要刪除吗？',function(index){
 		layer.confirm('您正在刪除多条数据，请再次确认！',function(index){
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

/**
 * 永久删除
 * @return {[type]} [description]
 */
function forever_multitude_data_del(){
 	layer.confirm('确定要刪除吗？',function(index){
 		layer.confirm('您正在执行永久删除操作，请再次确认！',function(index){
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
 				url: 'index.php?controller=admin&method=forever_delete_admin',
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

/**
 * 撤销删除
 * @return {[type]} [description]
 */
 function revoke_delete(){
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
 		url: 'index.php?controller=admin&method=revoke_delete_admin',
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
 	layer.confirm('確定要刪除嗎？',function(index){
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
 	layer.confirm('確定要凍結嗎？',function(index){
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
 	layer.confirm('確定要啟用嗎？',function(index){
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
		layer.msg('已啟用！', {icon: 6,time:1000}, function(){
			location.reload();
		});
	});
 }