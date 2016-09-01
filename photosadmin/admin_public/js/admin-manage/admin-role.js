/**
 * 批量删除角色
 * @return {[type]} [description]
 */
function multitude_role_del(){
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
			alert(indexs);
			$.ajax({
				url: 'index.php?controller=admin&method=admin_role_del',
				type: 'GET',
				dataType: 'json',
				data: {id: indexs},
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
		});
	});
}

/**
 * 管理员-角色-添加
 * @param  {[type]} title [description]
 * @param  {[type]} url   [description]
 * @param  {[type]} w     [description]
 * @param  {[type]} h     [description]
 * @return {[type]}       [description]
 */
function admin_role_add(title,url,w,h){
	layer_show(title,url,w,h);
}
/**
 * 管理员-角色-编辑
 * @param  {[type]} title [description]
 * @param  {[type]} url   [description]
 * @param  {[type]} w     [宽度]
 * @param  {[type]} h     [高度]
 * @return {[type]}       [description]
 */
function admin_role_edit(title,url,w,h){
	layer_show(title,url,w,h);
}
/*管理员-角色-删除*/
function admin_role_del(obj,id){
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
				}else if(data.status=='0'){
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