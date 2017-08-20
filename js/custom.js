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

// FACEBOOK
window.fbAsyncInit = function() {
    FB.init({
        appId: "<?php echo $FBAPPID; ?>"
        cookie: true, // enable cookies to allow the server to access session
        xfbml: true, // parse social plugins on this page
        version: 'v2.9' // use graph api version 2.8
    });
    (function(d, s, id) {
        var js, fjs = d.getElementsByTagName(s)[0];
        if (d.getElementById(id)) { return; }
        js = d.createElement(s);
        js.id = id;
        js.src = "//connect.facebook.net/en_US/sdk.js";
        fjs.parentNode.insertBefore(js, fjs);
    }(document, 'script', 'facebook-jssdk'));
    // This is called with the results from FB.getLoginStatus().
    function statusChangeCallback(response) {
        console.log('statusChangeCallback');
        console.log(response);

        if (response.status === 'connected') {
            // Logged into your app and Facebook.
            testAPI();
        } else {
            // The person is not logged into your app or we are unable to tell.
            document.getElementById('status').innerHTML = 'Please log ' +
                'into this app.';
        }
    }

    function checkLoginState() {
        FB.getLoginStatus(function(response) {
            statusChangeCallback(response);
        });
    }
    FB.getLoginStatus(function(response) {
        statusChangeCallback(response);
        if (response.status === 'connected') {
            var accessToken = response.authResponse.accessToken;
        }
    });
};

function testAPI() {
    console.log('Welcome!  Fetching your information.... ');
    FB.api('/me', function(response) {
        console.log('Successful login for: ' + response.name);
        document.getElementById('status').innerHTML =
            'Thanks for logging in, ' + response.name + '!';
    });
}

// GOOGL 

(function(i, s, o, g, r, a, m) {
    i['GoogleAnalyticsObject'] = r;
    i[r] = i[r] || function() {
        (i[r].q = i[r].q || []).push(arguments)
    }, i[r].l = 1 * new Date();
    a = s.createElement(o),
        m = s.getElementsByTagName(o)[0];
    a.async = 1;
    a.src = g;
    m.parentNode.insertBefore(a, m)
})(window, document, 'script', 'https://www.google-analytics.com/analytics.js', 'ga');
ga('create', '<?php echo $UA; ?>', 'auto');
//ga('require', '');
ga('send', 'pageview');

(adsbygoogle = window.adsbygoogle || []).push({
    google_ad_client: "ca-pub-4943462589133750",
    enable_page_level_ads: true
});

// TWITTER

(function(d, s, id) {
    var js, fjs = d.getElementsByTagName(s)[0],
        p = /^http:/.test(d.location) ? 'http' : 'https';
    if (!d.getElementById(id)) {
        js = d.createElement(s);
        js.id = id;
        js.src = p + '://platform.twitter.com/widgets.js';
        fjs.parentNode.insertBefore(js, fjs);
    }
})(document, 'script', 'twitter-wjs');