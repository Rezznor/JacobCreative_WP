jQuery(document).ready(function() {
    
    "use strict";
    
    var header = jQuery(".stickyHeader");

    jQuery(document).ready(function() {
        var scrollHeight = jQuery(window).scrollTop();
        
        if(header.data('headertype') === 'home') {
            console.log("Home Header");
            if (scrollHeight >= 70) {
                header.removeClass('bg-transparent text-gray-50').addClass('bg-white text-gray-900 drop-shadow-jcMenuScroll');
            } else {
                header.removeClass('bg-white text-gray-900 drop-shadow-jcMenuScroll').addClass('bg-transparent text-gray-50');
            }
        } else if(header.data('headertype') === 'secondary') {
            console.log("Secondary header");
            if (scrollHeight >= 70) {
                header.removeClass('bg-jcblue text-gray-50').addClass('bg-white text-gray-900 drop-shadow-jcMenuScroll');
            } else {
                header.removeClass('bg-white text-gray-900 drop-shadow-jcMenuScroll').addClass('bg-jcblue text-gray-50');
            }
        }
    });
    
    jQuery(window).scroll(function() {
        
        var scroll = jQuery(window).scrollTop();
        
        if(header.data('headertype') === 'home') {
            console.log("Home Header");
            if (scroll >= 70) {
                header.removeClass('bg-transparent text-gray-50').addClass('bg-white text-gray-900 drop-shadow-jcMenuScroll');
            } else {
                header.removeClass('bg-white text-gray-900 drop-shadow-jcMenuScroll').addClass('bg-transparent text-gray-50');
            }
        } else if(header.data('headertype') === 'secondary') {
            console.log("Secondary header");
            if (scroll >= 70) {
                header.removeClass('bg-jcblue text-gray-50').addClass('bg-white text-gray-900 drop-shadow-jcMenuScroll');
            } else {
                header.removeClass('bg-white text-gray-900 drop-shadow-jcMenuScroll').addClass('bg-jcblue text-gray-50');
            }
        }
        
    })
    
});