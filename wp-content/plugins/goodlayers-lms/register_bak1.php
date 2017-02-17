<?php 
	get_header(); 
?>
<div id="primary" class="content-area gdlr-lms-primary-wrapper">
<div id="content" class="site-content" role="main">
<head>
<meta name="google-signin-client_id" content="271056358943-k6nssqk3jeie86od97c4hanbhpt4j1jp.apps.googleusercontent.com">
<style>
a[data-original-title="Facebook"] {
    background-color: #005992;
}
a#cs-social-login {
    border-radius: 2px;
	width: 270px;
    height: 40px;
    line-height: 36px;
    float: none;
    color: #ffffff !important;
    text-align: center;
    display: block;
    font-size: 13px;
    margin: 0 0 10px;
    position: relative;
}
a#cs-social-login i {
    color: #fff;
    font-size: 14px;
    margin: 0;
    height: 100%;
    width: 40px;
    background-color: rgba(0,0,0,0.2);
    float: left;
    padding: 13px 0px 0px 0px;
    color: #fff !important;
}
h2 {
	color: #000;
	font-weight: normal;
}
.container .radio ul{
  list-style: none;
  height: 100%;
  width: 100%;
  margin: 0;
  padding: 0;
}
.radio ul li{
  color: #333;
  display: block;
  position: relative;
  float: left;
  width: 100%;
  height: 30px;
}
.radio ul li input[type=radio]{
  position: absolute;
  visibility: hidden;
}
.radio ul li label{
  display: block;
  position: relative;
  font-weight: 300;
  font-size: 1.1em;
  padding: 21px 25px 25px 50px;
  margin: 10px auto;
  height: 30px;
  z-index: 9;
  -webkit-transition: all 0.25s linear;
}
.radio ul li:hover label{
	color: #5ab14d;
}
.radio ul li .check{
	display: block;
	position: absolute;
	border: 3px solid #333;
	border-radius: 100%;
	height: 20px;
	width: 20px;
	top: 34px;
	left: 20px;
	z-index: 5;
	transition: border .25s linear;
	-webkit-transition: border .25s linear;
}
.radio ul li:hover .check {
  border: 3px solid #5ab14d;
}
.radio ul li .check::before {
	display: block;
	position: absolute;
	content: '';
	border-radius: 100%;
	height: 10px;
	width: 10px;
	top: 2px;
	left: 2px;
	margin: auto;
	transition: background 0.25s linear;
	-webkit-transition: background 0.25s linear;
}

input[type=radio]:checked ~ .check {
  border: 3px solid #5ab14d;
}

input[type=radio]:checked ~ .check::before{
  background: #5ab14d;
}

input[type=radio]:checked ~ label{
  color: #5ab14d;
}

</style>
</head>
<body><!--student','entreprise_partner','independent_partner','knowledge_partner-->
	<div class="radio" style="width:; margin: 100px 40% 30px; float: left;">
		<ul>
		  <li>
			<input type="radio" class="select_role" id="f-option" name="selector" value="aspirant">
			<label for="f-option">Aspirant</label>
			
			<div class="check"></div>
		  </li>
		  
		  <li>
			<input type="radio" class="select_role" id="s-option" name="selector" value="entreprise_partner">
			<label for="s-option">Entreprise Partner</label>
			
			<div class="check"><div class="inside"></div></div>
		  </li>
		  
		  <li class="select_role">
			<input type="radio" id="t-option" name="selector" value="independent_partner">
			<label for="t-option">Independent Partner</label>
			
			<div class="check"><div class="inside"></div></div>
		  </li>
				
		  <li>
			<input type="radio" class="select_role" id="p-option" name="selector" value="knowledge_partner">
			<label for="p-option">Knowledge Partner</label>
			
			<div class="check"><div class="inside"></div></div>
		  </li>
		</ul>
	</div>
	<div style="width: 100%; margin: 20px 40% 0; float: left;">
		<div class="g-signin2" data-onsuccess="onSignIn" data-width="270" data-height="40" data-theme="dark" data-longtitle="true" style="float: left; margin-right: 50px; background-color: #D70D38;"></div>
    </div>
	<div style="width: 100%; margin: 20px 40%; float: left;">
		<div id="fb-root"></div>
		<a href="javascript:void(0);" onClick="fb_login();" title="Facebook" id="cs-social-login" data-original-title="Facebook" class="social_login_login_facebook"><i class="fa fa-facebook"></i>Sign in With Facebook</a>	
	</div>
    <!--FB Data:--><textarea id="fb_userdata" style="display:none;"></textarea> <!--<br>-->
   <!-- Gmail Data:--><textarea id="gmail_userdata" style="display:;"></textarea> 
<!-- Mainly scripts -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
<script src="framework\javascript\bootstrap.min.js"></script>
<script src="https://apis.google.com/js/client:platform.js?onload=YOUR_RENDER_FUNCTION"></script>
<script>
	function onSignIn(googleUser) {
	  var profile = googleUser.getBasicProfile();
	  console.log('ID: ' + profile.getId()); // Do not send to your backend! Use an ID token instead.
	  console.log('Name: ' + profile.getName());
	  console.log('Image URL: ' + profile.getImageUrl());
	  console.log('Email: ' + profile.getEmail()); // This is null if the 'email' scope is not present.
	  document.getElementById("gmail_userdata").value="Email :"+profile.getEmail()+" Name: "+profile.getName()+"Gmail Id: "+profile.getId();
	  
	  
	  getGMLLogin(profile.getEmail(),profile.getId(),profile.getName());
	  
	  
	}
</script>
<script>
	window.fbAsyncInit = function() {
		FB.init({
			appId   : '1854318068145902',
			oauth   : true,
			status  : true, // check login status
			cookie  : true, // enable cookies to allow the server to access the session
			xfbml   : true // parse XFBML
		});

	  };
	  
function getGMLLogin(email,gmailid,memname) {
	//alert(email+" "+gmailid+" "+memname);
	//selVal=$('.select_role input:checked').val();
	var selected = $(".select_role:checked");
    if(!selected.val()){
        alert('No Role selected!')
		return false;
    }
	else {
		//alert(selected.val());
		ss=0;
	}

	var PostUrl="<?php echo SITE_FB_REG_URL; ?>";
	$.post(
		PostUrl, {
			gemail: email,
			gid:gmailid,
			g_memname:memname,
			regType:"GMAIL",
			req_roleVal:selected.val()
		},
		function(ResponseData)
		{	
			alert(ResponseData);
		}
	);
}		  
	  
	  
function getFBLogin(email,fbid,memname) {
	//alert(email+" "+fbid+" "+memname);
	//selVal=$('.select_role input:checked').val();
	var selected = $(".select_role:checked");
    if(!selected.val()){
        alert('No Role selected!')
		return false;
    }
	else {
		//alert(selected.val());
		ss=0;
	}

	var PostUrl="<?php echo SITE_FB_REG_URL; ?>";
	$.post(
		PostUrl, {
			fbemail: email,
			fbid:fbid,
			fb_memname:memname,
			regType:"FB",
			req_roleVal:selected.val()
		},
		function(ResponseData)
		{	
			alert(ResponseData);
		}
	);
}	
	function fb_login(){
		/*var selected = $(".select_role:checked");
		if(!selected.val()){
			alert('No Role selected!')
			return false;
		}*/
		
		
		FB.login(function(response) {

			if (response.authResponse) {
				console.log('Welcome!  Fetching your information.... ');
				//console.log(response); // dump complete info
				access_token = response.authResponse.accessToken; //get access token
				user_id = response.authResponse.userID; //get FB UID

				FB.api('/me',{fields: 'name,email'}, function(response) {
					user_email = response.email; //get user email
			  // you can store this data into your database      
			 /* alert(response.name);
			  alert(response.email);  
			  alert(response.id);     */
			  if(response.id!='' && response.email!='' && response.name!=''){
			  document.getElementById("fb_userdata").value="Email :"+response.email+" Name: "+response.name+"FB Id: "+response.id;
				getFBLogin(response.email,response.id,response.name);
			  }
				});

			} else {
				//user hit cancel button
				console.log('User cancelled login or did not fully authorize.');

			}
		}, {
			scope: 'email,public_profile'
		});
	}
	(function() {
		var e = document.createElement('script');
		e.src = document.location.protocol + '//connect.facebook.net/en_US/all.js';
		e.async = true;
		document.getElementById('fb-root').appendChild(e);
	}());
</script>
</div>
</div>
</body>
<?php 
if( !empty($gdlr_lms_option['show-sidebar']) && $gdlr_lms_option['show-sidebar'] == 'enable' ){ 
	get_sidebar( 'content' );
	get_sidebar();
}

get_footer(); ?>