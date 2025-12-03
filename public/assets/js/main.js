"use strict";

import 'bootstrap/dist/css/bootstrap.min.css';
import 'aos/dist/aos.css';

import 'bootstrap'; // JS Bootstrap
import AOS from 'aos';

/////////////////////////////
//------ NAV --------------//
////////////////////////////

(function($) {

// Sidebar full height
var fullHeight = function() {
    $('.js-fullheight').css('height', $(window).height());
    $(window).resize(function() {
        $('.js-fullheight').css('height', $(window).height());
    });
};
fullHeight();

// Toggle sidebar
$('#sidebarCollapse').on('click', function () {
    $('#sidebar').toggleClass('active');
});

})(jQuery);

/////////////////////////////
//--- Section : About -----//
////////////////////////////

document.addEventListener('DOMContentLoaded', () => {
// Initialiser AOS si ce n'est pas déjà fait

    if (typeof AOS !== 'undefined') {
        AOS.init({
            duration: 600, // durée des animations
            easing: 'ease-in-out',
            once: true,    // n'anime qu'une fois
            mirror: false
        });
    }
});
