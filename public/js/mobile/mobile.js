$(document).ready(function() {
    $('div#menu-sp,div#menu-item,div#menu-tuvan').popup({
        transition: 'all 0.3s'
    });
    //
    $("a[href='#top']").click(function() {
        $("html, body").animate({ scrollTop: 0 }, "slow");
        return false;
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