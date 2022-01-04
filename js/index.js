jQuery(document).ready(function() {
    
    "use strict";
    
    var header = jQuery(".stickyHeader");
    jQuery(window).scroll(function() {
        
        var scroll = jQuery(window).scrollTop();
        
        if (scroll >= 70) {
            header.removeClass('bg-transparent text-gray-50').addClass('bg-white text-gray-900 shadow-jcMenuScroll');
        } else {
            header.removeClass('bg-white text-gray-900 shadow-jcMenuScroll').addClass('bg-transparent text-gray-50');
        }
        
    })
    
});