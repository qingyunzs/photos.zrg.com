//init admin_manage
var adminManage=new admin_manage();
/**
 * admin manage function
 * @return {[type]} [description]
 */
 function admin_manage(){
 	var _this=this;
	///---------------------------管理员列表
	/**
 	 * 批量删除(通用：管理员列表、管理员回收站、角色列表)
 	 * @return {[type]} [description]
 	 */
 	 _this.multitude_data_del=function(msg,url,type){
 	 	layer.confirm('确定要刪除吗？',function(index){
 	 		layer.confirm(msg,function(index){
 	 			var str ="";
 	 			$('input:checkbox[name="subChecked"]:checked').each(function() {
 	 				str+=$(this).val()+",";
 	 			});
 	 			if(str==""){
 	 				layer.msg("您没有选择任何数据！");
 	 				return;
 	 			}
 	 			var indexs=str.substring(str.length-1,-1);
 	 			$.ajax({
 	 				url: url,
 	 				type: type,
 	 				dataType: 'json',
 	 				data: {id: indexs},
 	 				success:function(data){
 	 					if (data.status=='y') { //success
 	 						layer.msg(data.info,{icon:1,time:2000},function(){
 	 							window.location.reload();
 	 						});
 	 					}else if(data.status=='n'){ //failed
 	 						layer.msg(data.info,{icon:5,time:2000},function(){
 	 							window.location.reload();
 	 						});
 	 					}else if(data.status=='0'){ //superadmin
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
 	 		});
 	 	});
 	 };

 	 /**
 	  * 管理员-增加
 	  * @param  {[type]} title [description]
 	  * @param  {[type]} url   [description]
 	  * @param  {[type]} w     [description]
 	  * @param  {[type]} h     [description]
 	  * @return {[type]}       [description]
 	  */
 	  _this.admin_add=function(title,url,w,h){
 	  	layer_show(title,url,w,h);
 	  };

 	 /**
 	  * 管理员-编辑
 	  * @param  {[type]} title [description]
 	  * @param  {[type]} url   [description]
 	  * @param  {[type]} w     [description]
 	  * @param  {[type]} h     [description]
 	  * @return {[type]}       [description]
 	  */
 	  _this.admin_edit=function(title,url,w,h){
 	  	layer_show(title,url,w,h);
 	  };

 	 /**
 	  * 管理员-删除
 	  * @param  {[type]} obj [description]
 	  * @param  {[type]} id  [description]
 	  * @return {[type]}     [description]
 	  */
 	  _this.admin_del=function(obj,id){
 	  	layer.confirm('确定要刪除吗？',function(index){
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
 	  };
 	 /**
 	  * 管理员-停用
 	  * @param  {[type]} obj [description]
 	  * @param  {[type]} id  [description]
 	  * @return {[type]}     [description]
 	  */
 	  _this.admin_stop=function(obj,id){
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
 	  };

 	/**
 	  * 管理员-启用
 	  * @param  {[type]} obj [description]
 	  * @param  {[type]} id  [description]
 	  * @return {[type]}     [description]
 	  */
 	  _this.admin_start=function(obj,id){
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
 	  };

	//-----------------------------管理员回收站
	//永久删除操作调用_this.multilate_data_del().

	/**
	 * 撤销删除
	 * @return {[type]} [description]
	 */
	 _this.revoke_delete=function(){
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
	 };

//-------------------角色管理
	/**
	 * 管理员-角色-添加
	 * @param  {[type]} title [description]
	 * @param  {[type]} url   [description]
	 * @param  {[type]} w     [description]
	 * @param  {[type]} h     [description]
	 * @return {[type]}       [description]
	 */
	 _this.admin_role_add=function(title,url,w,h){
	 	layer_show(title,url,w,h);
	 };
	/**
	 * 管理员-角色-编辑
	 * @param  {[type]} title [description] 
	 * @param  {[type]} url   [description]
	 * @param  {[type]} w     [宽度]
	 * @param  {[type]} h     [高度]
	 * @return {[type]}       [description]
	 */
	 _this.admin_role_edit=function(title,url,w,h){
	 	layer_show(title,url,w,h);
	 };
	 /**
	  * 为角色分配权限
	  * @param {[type]} title [description]
	  * @param {[type]} url   [description]
	  * @param {[type]} w     [description]
	  * @param {[type]} h     [description]
	  */
	 _this.set_role_permission=function(title,url,w,h){
	 	layer_show(title,url,w,h);
	 };
	/**
	 * 管理员-角色-删除
	 * @param  {[type]} obj [description]
	 * @param  {[type]} id  [description]
	 * @return {[type]}     [description]
	 */
	 _this.admin_role_del=function(obj,id){
	 	layer.confirm('角色删除须谨慎，确认要删除吗？',function(index){
	 		$.ajax({
	 			url: 'index.php?controller=admin&method=admin_role_del',
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
	 };

//--------------------权限管理
	_this.admin_node_add=function(){
		
	};

}
