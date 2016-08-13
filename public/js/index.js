/**
 * 导航点击事件
 * @param  {[type]}	[description]
 * @return {[type]} [description]
 */
$(document).ready(function(){
	//resume show
	$('#word').click(function(){
		$(".word-content").show();
		$(".swiper-container,.two-content,.three-content,.picture-word-content,.contact-content").hide(500);
	});
	//two col show
	$('.two-col').click(function(){
		$(".two-content").show();
		$(".swiper-container,.word-content,.three-content,.picture-word-content,.contact-content").hide(500);
	});
	//Three col show
	$('.three-col').click(function(){
		$(".three-content").show();
		$(".swiper-container,.word-content,.two-content,.picture-word-content,.contact-content").hide(500);
	});
	//picture word show
	$('.picture-word-wall').click(function(){
		$(".picture-word-content").show();
		$(".swiper-container,.word-content,.two-content,.three-content,.three-content,.contact-content").hide(500);
	});
	//contact show
	$('.contact').click(function(){
		$(".contact-content").show();
		$(".swiper-container,.word-content,.two-content,.three-content,.three-content,.picture-word-content").hide(500);
	});
});