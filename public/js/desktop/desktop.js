$(document).ready(function() {
	$('.home .row5 .flex1col1').hover(function() {
		var index = $(this).index();
		$(this).children('button').addClass('active');
		$(this).siblings('div').children('button').removeClass('active');
		$('.home .row6 .flex1col1').children('div').eq(index).addClass('active');
		$('.home .row6 .flex1col1').children('div').eq(index).siblings('div').removeClass('active');
		$('.home .row6 .flex1col2').children('div').eq(index).addClass('active');
		$('.home .row6 .flex1col2').children('div').eq(index).siblings('div').removeClass('active');
	}, function() {
		
	});
});
function open_tuvan(){
	window.open("http://swt.phongkham193.com/LR/Chatpre.aspx?id=MFI63108226&cid=1489654963660812714370&lng=en","_blank");
}