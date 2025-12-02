"use strict";

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
