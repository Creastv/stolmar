jQuery(document).ready(function ($) {
    "use strict";
    let flag = false;
    $('.header__navigation--hamburger').click(function(){
        $('body').toggleClass('open');
        $('.header__navigation--overlay').toggleClass('open');
         $('.header__navigation--hamburger').toggleClass('open');
        console.log(flag)
        if(flag){
             $('.header__navigation--hamburger span').text('Menu');
            flag = false;
        } else {
            $('.header__navigation--hamburger span').text('Zamknij');
            flag = true;
        }
    });

    $('.header__navigation--close').click(function(){
        $('body, .header__navigation--overlay').removeClass('open');
    });

    $(window).on('scroll load', function() {
        var totalScroll = $(window).scrollTop();
        var headerHeight = 10;
        if (totalScroll >= headerHeight) {
            $('#header').addClass('sticky');
        } else {
            $('#header').removeClass('sticky');
        }
    });

    $('.timeline').hide();
    $('.timeline.t1').show();
    $('#select-step').on("change",function () {
        $('.timeline').hide();
        $('.t'+$(this).val()).show();
    }).val(1);


    $('a[href*="#"], area[href*="#"]')
        .not('[href="#"]')
        .not('[href="#0"]')
        .click(function(event) {
            if (
                location.pathname.replace(/^\//, '') == this.pathname.replace(/^\//, '')
                &&
                location.hostname == this.hostname
            ) {
                var target = $(this.hash);
                target = target.length ? target : $('[name=' + this.hash.slice(1) + ']');
                if (target.length) {
                    event.preventDefault();
                    $('html, body').animate({
                        scrollTop: target.offset().top - 76
                    }, 1000, function() {
                        var $target = $(target);
                        $target.focus();
                        if ($target.is(":focus")) {
                            return false;
                        } else {
                            $target.attr('tabindex','-1');
                            $target.focus();
                        }
                    });
                }
            }
        });

});

AOS.init();