(function($) {
    $(function() {
		
        $('.button-collapse').sideNav();
        $('.parallax').parallax();
        $(".dropdown-button").dropdown();
 
 $('.iframeWrapper').on('click', function(e) {
     e.preventDefault();
     alert('test');
   });       $(document).ready(function() {
            $('.collapsible').collapsible();
			('li.menu-item').addClass('waves-effect waves-light');
    }); // end of document ready
})(jQuery); // end of jQuery name space
