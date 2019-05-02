$(window).scroll(function() {
    if ($(this).scrollTop() > 1){
        $('header').addClass("sticky-header");
    }
    else{
        $('header').removeClass("sticky-header");
    }
});