jQuery(window).scroll(function () {
    var scroll_top =     jQuery(this).scrollTop();
    if (scroll_top >= 36) {
        jQuery("header").addClass("fixed");
        console.log('Fixed added');
    } else {
        jQuery("header").removeClass("fixed");
        console.log('Fixed removed');
    }
});
