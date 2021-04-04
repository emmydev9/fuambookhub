$(function() {
    $(window).on('scroll', function() {
        var scroll = $(window).scrollTop();
        if(scroll >= 50) {
            $('.hamburger').addClass('whenscrolled');
            $('nav').addClass('stickyadd');
            $('nav').removeClass('stick');
            $('.sub-nav1').addClass('whenscrolled');
        }
        else{
        $('.hamburger').removeClass('whenscrolled');
        $('.sub-nav1').removeClass('whenscrolled');
        $('nav').removeClass('stickyadd');
        $('nav').addClass('stick');
        }
    })
    $(".navbar-nav a[href^='#']").on('click', function(event) {
        event.preventDefault();
        $('html, body').animate({
            scrollTop:$(this.hash).offset().top
        }, 1000);
    })
    $('#signin-btn').on('click', function(e) {
        e.preventDefault();
        $(e.currentTarget).closest('ul').hide();
        $('form#signin').fadeIn('fast');
    })
    $('.catalogue').on('click', function(e) {
        $('form#search').hide();
    })
});