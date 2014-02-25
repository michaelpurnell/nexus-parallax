<!DOCTYPE html>
<html lang="en-US">
<head>
<meta http-equiv="Content-Type" content="text/html;charset=utf-8">
<title>Nexus Parallax</title>
<meta name="author" content="Michael Purnell">
<meta name="description" content="Web Design Development Tutorial">
<link rel="shortcut icon" href="http://www.google.com/nexus/images/favicon.ico">
<link rel="icon" href="http://www.google.com/nexus/images/favicon.ico">
<link rel="stylesheet" type="text/css" media="all" href="css/styles.css">
<link rel="stylesheet" type="text/css" href="http://fonts.googleapis.com/css?family=Droid+Sans:400,700|Droid+Serif:400,700">
<link href='http://fonts.googleapis.com/css?family=Lato|Tenor+Sans|Oswald|Nobile|Titillium+Web|Didact+Gothic' rel='stylesheet' type='text/css'>
<link rel="stylesheet" type="text/css" href="css/normalize.css" />
<link rel="stylesheet" type="text/css" href="css/demo.css" />
<link rel="stylesheet" type="text/css" href="css/component.css" />
<script src="http://code.jquery.com/jquery-latest.js"></script>
<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
<script type="text/javascript" charset="utf-8" src="js/jquery.scrollTo.js"></script>
<script type="text/javascript" charset="utf-8" src="js/jquery.nav.js"></script>
<script type="text/javascript" src="js/jquery.iPhoneSlideshow.js"></script>
<script src="js/modernizr.custom.js"></script>
<!--[if lt IE 9]>
  <script type="text/javascript" src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
<![endif]-->

<style>
/* */
span#email_error {
	left:400px;
	position:absolute;
	top:16px;
}
span#name_error {
	display: inline;
	position: relative;
	float: right;
	margin: -35px 320px 2px 0px;
}
span#cemail_error {
	display: inline;
	position: relative;
	float: right;
	margin: -35px 320px 2px 0px;
}
span#messagebox_error {
	display: inline;
	position: relative;
	float: right;
	margin: -73px 170px 2px 0px;
}
span.error {
	background-attachment:scroll;
	background-color:transparent;
	/*background-image:url(http://demos.net.tutsplus.com/contactform/images/cancel.png);*/
  background-position:0 50%;
	background-repeat:no-repeat no-repeat;
	color:red;
	font-weight:bold;
	font-size:15px;
	padding-left:25px;
	text-align:left;
	width:280px;
}
#msg {
	display:block;
	margin: -73px 6px 11px 421px;
}
#msg h2 { display: inline-block; font-size: 2.9em; padding: 12px 17px; background: #008AE3;
			border-radius: 5px 5px 5px 5px; font-weight: bold;	
			font-family: Arial, Tahoma, sans-serif; width: 440px; text-align: center; }

#message {
	background:#008AE3;
	border-radius: 5px 5px 5px 5px;
}
#contactmsg {
	display:inline;
	margin: 135px 0px 11px 58px;
	height:200px;
	position:absolute;
}
#contactmsg h2 { display: inline; font-size: 2.9em; padding: 12px 17px;
			border-radius: 5px 5px 5px 5px; font-weight: bold;	
			font-family: Arial, Tahoma, sans-serif; width: 440px; text-align: center; 
			background:#0099FF;
			height:200px;
			color:#FFF; }

#contactmessage {
	background:#008AE3;
	border-radius: 5px 5px 5px 5px;
}

#iphone
</style>
</head>

<body>
<div class="container">
<ul id="gn-menu" class="gn-menu-main">
				<li class="gn-trigger">
					<a class="gn-icon gn-icon-menu"><span>Menu</span></a>
					<nav class="gn-menu-wrapper">
						<div class="gn-scroller">
							<ul class="gn-menu">
								<li class="gn-search-item">
									<input placeholder="Search" type="search" class="gn-search">
									<a class="gn-icon gn-icon-search"><span>Search</span></a>
								</li>
								<li>
									<a class="gn-icon gn-icon-download">Downloads</a>
									<ul class="gn-submenu">
										<li><a class="gn-icon gn-icon-illustrator">Vector Illustrations</a></li>
										<li><a class="gn-icon gn-icon-photoshop">Photoshop files</a></li>
									</ul>
								</li>
								<li><a class="gn-icon gn-icon-cog">Settings</a></li>
								<li><a class="gn-icon gn-icon-help">Help</a></li>
								<li>
									<a class="gn-icon gn-icon-archive">Archives</a>
									<ul class="gn-submenu">
										<li><a class="gn-icon gn-icon-article">Articles</a></li>
										<li><a class="gn-icon gn-icon-pictures">Images</a></li>
										<li><a class="gn-icon gn-icon-videos">Videos</a></li>
									</ul>
								</li>
							</ul>
						</div><!-- /gn-scroller -->
					</nav>
				</li>
				<li><a href="#">Michael</a></li>
				<li><a class="codrops-icon codrops-icon-prev" href="#"><span>Drop Down</span></a></li>
				<li><a class="codrops-icon codrops-icon-drop" href="#"><span>Call to Action</span></a></li>
			</ul>
<div id="content">
	<section id="home">
		<div class="wrapper">
			<div id="billboard_ctr">
				<div id="billboard_left" style="border:#F00; height:596px; width:345px; float:left">
					<div id="iphone" style="border:thin;"><img src="images/iphone5.png" /></div>
				</div>
				<div id="billboard_right" style="border:#0F0; border-style:; height:472px; width:630px; margin-top:25px;  float:right; background:url(images/billboard_right_bg.png1);">
					<div id="billaord_logo" style=" text-align:center; margin-top:-6px;"><img src="http://www.google.com/nexus/images/favicon.ico"/></div>
					<div id="billboard_hdr_txt" style="text-align:center;">
						<h1>Photo Sharing Made Easy</h1>
						<br/>
					</div>
					<div id="billboard_content_txt">
						<h3>This PhotoSharing iPhone app is completly free. <br/> Thats right $Free.99!!!<br/>Download now in the Aple app store or on Google Play!!!<br/>Share your life with every photo and video to all your friends</h3>
					</div>
				</div>
				<div class="clear"></div>
				<div id="signup_bg" style="background:url(images/signup_bg.png1); border:#F00; border-style:; width:1040px; height:100px; position:relative;">
					<div id="signuptext" style="margin: 25px 8px 5px 25px; float:left;">
						<h3>Sign up for Launch:</h3>
					</div>
					<div id="signuptextbox" style="float:right;">
						<form name="contact" id="form" action="">
							<span class="error" for="email" id="email_error">Please Enter a valid email.</span>
							<div>
								<input type="text" class="textfield" placeholder="" id="email" name="email" />
							</div>
							<div class="signup_btn">
								<h3>Sign up</h3>
							</div>
						</form>
					</div>
					<div class="clear"></div>
					<div id="msg"></div>
					<div class="clear"></div>
				</div>
			</div>
		</div>
	</section>
	<section id="company">
		<div class="wrapper">
			<div id="features_content" style="width:1000px;">
				<div id="features_box1" style="width:281px; float:left;">
					<div id="features_box1_hdr" style="text-align:center">
						<h3>Phone</h3>
					</div>
					<div class="features_box1_bg" style="background:url(images/landing-phone.png); width:257px; height:255px;"></div>
					<div id="features_box1_txt">
						<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
					</div>
				</div>
				<div id="features_box2" style="width:281px; float:left; margin-left:80px;">
					<div id="features_box2_hdr" style="text-align:center">
						<h3>Search</h3>
					</div>
					<div class="features_box2_bg" style="background:url(images/landing-map.png); width:257px; height:255px;"></div>
					<div id="features_box2_txt">
						<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
					</div>
				</div>
				<div id="features_box3" style="width:281px; float:right;">
					<div id="features_box3_hdr" style="text-align:center">
						<h3>Share</h3>
					</div>
					<div class="features_box3_bg" style="background:url(images/landing-share.png); width:257px; height:255px;"></div>
					<div id="features_box3_txt">
						<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
					</div>
				</div>
				<div class="clear"></div>
			</div>
		</div>
	</section>
	<section id="portfolio">
		<div class="wrapper">
			<div class="row">
				<div class="span4">
					<div class="features_box1_bg" style="background:url(images/party-people.png); width:281px; height:224px; border-radius: 5px 5px 5px 5px;"></div>
					<div class="portfolio_content_left" style="float:left; text-align:left">
						<h2>Party</h2>
						<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
					</div>
				</div>
				<div class="span4">
					<div class="features_box1_bg" style="background:url(images/Brazil3.jpg); width:281px; height:224px; float:right; border-radius: 5px 5px 5px 5px;"></div>
					<div class="portfolio_content_right" style="float:right; text-align:right">
						<h2>Places</h2>
						<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
					</div>
				</div>
				<div class="clear"></div>
				<div class="span4">
					<div class="features_box1_bg" style="background:url(images/garage-sale.png); width:281px; height:224px; border-radius: 5px 5px 5px 5px;"></div>
					<div class="portfolio_content_left" style="float:left; text-align:left">
						<h2>Money</h2>
						<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
					</div>
				</div>
				<div class="span4">
					<div class="features_box1_bg" style="background:url(images/meeting.png); width:281px; height:224px; float:right; border-radius: 5px 5px 5px 5px;"></div>
					<div class="portfolio_content_right" style="float:right; text-align:right;">
						<h2>Collab</h2>
						<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
					</div>
				</div>
				<div class="clear"></div>
			</div>
		</div>
	</section>
	<section id="contact">
		<div class="wrapper">
			<h1>Contact Us</h1>
			<p>We love to hear from you!</p>
			<form id="contactform" name="contactform" method="post" action="index.html">
				<div>
				<input type="text" name="name" id="name" class="cform" placeholder="Name...">
				<span class="error" for="name" id="name_error">Please Enter a name!</span>
				</div>
				<div>
				<input type="cemail" name="cemail" id="cemail" class="cform" placeholder="Email...">
				<span class="error" for="cemail" id="cemail_error">Please Enter a valid email!</span>
				</div>
				<div>
				<textarea name="messagebox" id="messagebox" class="txtarea" placeholder="Write Something..."></textarea>
			<span class="error" for="messagebox" id="messagebox_error">You forgot to write something!</span>
			</div>
				<div class="contactus_btn">
				<h3>Contact</h3>
			</div>
			</form>
		</div>
		<div id="contactmsg"></div>
	</section>
</div>
<footer id="foot">
	<p>Copyright 2014 Michael Purnell
</footer>
</div> <!-- container -->
<script src="js/classie.js"></script>
		<script src="js/gnmenu.js"></script>
<script>
			new gnMenu( document.getElementById( 'gn-menu' ) );
		</script>
<script type="text/javascript">
$(document).ready(function(){
  $('#topnav').onePageNav({
    currentClass: 'current',
	  scrollOffset: 0
  });
});
</script> 
<script type="text/javascript">
    //<![CDATA[

      $('#iphone').iPhoneSlideshow({
        screens : [
		  'images/insta1.png',
		  'images/insta2.png',
		  'images/insta3.png',
		  'images/insta4.png'
        ]
      });
	  </script>
<script>
$(function() {
	$('.error').hide();
	$(".signup_btn").click(function() {
		//validate and process form
		$('.error').hide();
		
		var email = $("input#email").val();
		
		if(email == "") {
			$("span#email_error").show();
			$("span#email_error").fadeOut(7000, function(){
			});
			//$("input#email").focus();	
			return false; 
		}
       
	    if (validateEmail(email)) {
			
            var dataString = 'email=' + email;  
			//alert (dataString);return false;  
			$.ajax({  
			  type: "POST",  
			  url: "submit_email.php",  
			  data: dataString,  
			  success: function() {  
				$('#form').html("<div id='message'></div>");  
				$('#msg').html("<h2>Thanks for Signing up!</h2>")  
				.hide()  
				.fadeIn(1500, function() {  
				});  
			  }  
			});  
			return false;  
        }
        else {
           $("span#email_error").show();
			$("span#email_error").fadeOut(7000, function(){});
			return false;
        }
		
function validateEmail(email) {
    var filter = /^([\w-\.]+)@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.)|(([\w-]+\.)+))([a-zA-Z]{2,4}|[0-9]{1,3})(\]?)$/;
    if (filter.test(email)) {
        return true;
    }
    else {
        return false;
    }
}
		});	
		
	$(".contactus_btn").click(function() {
		//validate and process form
		$('span#name_error').hide();
		$('span#cemail_error').hide();
		$('span#messaebox_error').hide(); 
		
		var name = $("input#name").val(); 
		var cemail = $("input#cemail").val();
		var messagebox = $("textarea#messagebox").val();
		 
		if(name == ""){
			$("span#name_error").show();
			$("span#name_error").fadeOut(7000, function(){});
		}
		if(cemail == ""){
			$("span#cemail_error").show();
			$("span#cemail_error").fadeOut(7000, function(){});
		}
		if(messagebox == ""){
			$("span#messagebox_error").show();
			$("span#messagebox_error").fadeOut(7000, function(){});
		}
	
	function validateEmail(cemail) {
    var filter = /^([\w-\.]+)@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.)|(([\w-]+\.)+))([a-zA-Z]{2,4}|[0-9]{1,3})(\]?)$/;
    if (filter.test(cemail)) {
        return true;
    }
    else {
        return false;
    }
}
		
		if (validateEmail(cemail)) {
			
            //var dataString = 'name=' + name + 'cemail=' + cemail + 'messagebox=' + messagebox;  
			//alert (dataString);return false;  
			$.ajax({  
			  type: "POST",  
			  url: "submit_message.php",  
			  data: $('#contactform').serialize(),  
			  success: function() {  
			  	$('#contact .wrapper p').hide();
				$('#contact .wrapper h1').hide();
				$('#contactform').html("<div id='contactmessage'></div>");  
				$('#contactmsg').html("<h2>Thanks for contacting us! </h2><br/><br/><br/><h2> We'll get back to you soon! </h2><br/><br/><br/><br/><h2>~ Michael </h2>")  
				.hide()  
				.fadeIn(1500, function() {  
				});  
			  }  
			});  
			return false;  
        }
        else {
           $("span#message_error").show();
			$("span#message_error").fadeOut(7000, function(){});
			return false;
        }
	
	
	});
});
</script>
</body>
</html>