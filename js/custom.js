jQuery(document).ready(function($) {
$('.button-collapse').sideNav({
    menuWidth: 240, // Default is 240
    edge: 'left', // Choose the horizontal origin
    closeOnClick: true // Closes side-nav on <a> clicks, useful for Angular/Meteor
});
$('li.menu-item').addClass('waves-effect waves-light');
$('.parallax').parallax();
$(".dropdown-button").dropdown();
$('.scrollspy').scrollSpy();
}); // end of document ready
})(jQuery); // end of jQuery name space