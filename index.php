<html>
<head>
</head>
<body>
<h1 id="fb-welcome"></h1>
<div id="fb-root"></div>
<script>
window.fbAsyncInit = function() {
    FB.init({
      appId      : '1507049922866374',
      xfbml      : true,
      version    : 'v2.1'
    });
  };

    // ADD ADDITIONAL FACEBOOK CODE HERE
    // Place following code after FB.init call.
    /*
    function onLogin(response) {
      if (response.status == 'connected') {
	FB.api('/me?fields=first_name', function(data) {
	  var welcomeBlock = document.getElementById('fb-welcome');
	  welcomeBlock.innerHTML = 'Hello, ' + data.first_name + '!';
	});
      }
    }

    FB.getLoginStatus(function(response) {
      // Check login status on load, and if the user is
      // already logged in, go directly to the welcome message.
      if (response.status == 'connected') {
	onLogin(response);
      } else {
	// Otherwise, show Login dialog first.
	FB.login(function(response) {
	  onLogin(response);
	}, {scope: 'user_friends, email'});
      }
      });

   */

  (function(d, s, id){
     var js, fjs = d.getElementsByTagName(s)[0];
     if (d.getElementById(id)) {return;}
     js = d.createElement(s); js.id = id;
     //js.src = "//connect.facebook.net/zh_TW/sdk.js";
     js.src = "//connect.facebook.net/zh_TW/debug.js";
     fjs.parentNode.insertBefore(js, fjs);
   }(document, 'script', 'facebook-jssdk'));
</script>

<?php
  echo 'Hello, world! deployed from github 6';
?>
<div
  class="fb-like"
  data-send="true"
  data-width="450"
  data-show-faces="true">
</div>

</body>
</html>
