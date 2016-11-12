var date=new Date();

function setDefaultStartDate() {
	var start_date_str=date.getFullYear()+'-'+(date.getMonth()+1)+'-1';
	return start_date_str;
}

function setDefaultEndDate() {
	var end_date_str=date.getFullYear()+'-'+(date.getMonth()+1)+'-'+date.getDate();
	return end_date_str;
}
/**
 * [ajaxData 通过ajax传值]
 * @param  {[type]} type        [传输类型，如post]
 * @param  {[type]} dataType    [数据类型，如json]
 * @param  {[type]} data        [数据内容]
 * @param  {[type]} contentType [内容类型，如application/json charset=utf-8]
 * @param  {[type]} url         [url]
 * @return {[type]}             [description]
 */
 function ajaxData(type,dataType,data,contentType,url){	
 	$.ajax({
 		type:type,
 		data:data,
 		dataType:dataType,
 		contentType:contentType,
 		url:url,
 		beforeSend:function(){

 		},
 		success:function(data){
 			alert("suc");
 		},
		// error:function() {
		// 	alert("数据出现异常，请稍后再试！");
		// }
	});
 }

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
