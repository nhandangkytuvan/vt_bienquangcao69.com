$(document).ready(function() {
	$('header >menu .flex1col1 >div >h3 >a').each(function() {
		if(location.href==$(this).attr('href')){
			$(this).parents('div.flex1col1').addClass('active');
		}
	});
	$('.post-comments .tabs-button-1 >div').click(function(event) {
		var index = $(this).index();
		$(this).addClass('active');
		$(this).siblings('div').removeClass('active');
		// 
		$('.post-comments .tabs-content-1 >div').eq(index).addClass('active');
		$('.post-comments .tabs-content-1 >div').eq(index).siblings('div').removeClass('active');
	});
});