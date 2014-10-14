<html>
<head>
    <script src="//ajax.googleapis.com/ajax/libs/jquery/2.0.0/jquery.min.js"></script>
    <script>
    $(document).ready(function() {
	$.ajaxSetup({ cache: true });
        // Execute some code here
	$.getScript('//connect.facebook.net/zh_TW/all.js', function(){
	    FB.init({
		appId      : '1507049922866374',
		xfbml      : true,
		version    : 'v2.1'
	    });     

	    // ADD ADDITIONAL FACEBOOK CODE HERE
	    // Place following code after FB.init call.
	    function onLogin(response) {
		if (response.status == 'connected') {
		    FB.api('/me?fields=first_name', function(data) {
			var welcomeBlock = document.getElementById('fb-welcome');
			welcomeBlock.innerHTML = 'Hello, ' + data.first_name + '!';
		    });

		    var json = JSON.stringify(response);
		    $('#info').val(json);;
		}
	    }
	    //$('#loginbutton,#feedbutton').removeAttr('disabled');

	    FB.getLoginStatus(function(response) {
		if (response.status === 'connected') {
		    onLogin(response);
		}else{
		    FB.login(
		    // login 後，要執行的 function 
		    function(response){
			onLogin(response);
		    }, 
		    // login 後，要取得的權限
		    {scope: 'publish_actions'});
		}
	    });

        });
    });
    </script>
</head>
<body>
<h1 id="fb-welcome"></h1>
<div id="fb-root"></div>
<script>
/*
    window.fbAsyncInit = function() {
	FB.init({
	    appId      : '1507049922866374',
	    xfbml      : true,
	    version    : 'v2.1'
	});

	// ADD ADDITIONAL FACEBOOK CODE HERE
	// Place following code after FB.init call.
	function onLogin(response) {
	    if (response.status == 'connected') {
		FB.api('/me?fields=first_name', function(data) {
		    var welcomeBlock = document.getElementById('fb-welcome');
		    welcomeBlock.innerHTML = 'Hello, ' + data.first_name + '!';
		});
	    }
	}

	FB.getLoginStatus(function(response) {
	    if (response.status === 'connected') {
		onLogin(response);
	    }else{
		FB.login(
		// login 後，要執行的 function 
		function(response){
		    onLogin(response);
		}, 
		// login 後，要取得的權限
		{scope: 'publish_actions'});
	    }
	});

    };

  (function(d, s, id){
     var js, fjs = d.getElementsByTagName(s)[0];
     if (d.getElementById(id)) {return;}
     js = d.createElement(s); js.id = id;
     js.src = "//connect.facebook.net/zh_TW/sdk.js";
     fjs.parentNode.insertBefore(js, fjs);
   }(document, 'script', 'facebook-jssdk'));
*/
</script>

add jQuery to app;
<!--div
  class="fb-like"
  data-send="true"
  data-width="450"
  data-show-faces="true">
</div-->

<textarea id='info'></textarea>


</body>
</html>
