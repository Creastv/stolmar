jQuery(document).ready(function ($) {
    "use strict";

    let $container = $('body');

    $('#menu').slicknav({
        label: '',
        prependTo: '#header',
        'parentTag': 'p',
        'allowParentLinks': true,
        beforeOpen: function(e) {
            console.log(e);
            if(e.hasClass('slicknav_btn')){
                $container.addClass('slicknav_open');
            }
        },
        beforeClose: function(e) {
            console.log(e);
            if(e.hasClass('slicknav_btn')){
                $container.removeClass('slicknav_open');
            }
        }
    });

});
