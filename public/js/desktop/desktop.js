$(document).ready(function() {
	$('header >menu .flex1col1 >div >h3 >a').each(function() {
		if(location.href==$(this).attr('href')){
			$(this).parents('div.flex1col1').addClass('active');
		}
	});
});