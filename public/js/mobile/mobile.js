$(document).ready(function() {
    $('div#menu-sp,div#menu-item,div#menu-tuvan').popup({
        transition: 'all 0.3s'
    });
    //
    $("a[href='#top']").click(function() {
        $("html, body").animate({ scrollTop: 0 }, "slow");
        return false;
    });
});