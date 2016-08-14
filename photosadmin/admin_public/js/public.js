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