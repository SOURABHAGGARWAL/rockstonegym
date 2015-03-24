<!DOCTYPE HTML>
<html>
<head>
<title>RockStone contact</title>
<link rel="shortcut icon" href="../favicon.ico" type="image/x-icon"/>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,600' rel='stylesheet' type='text/css'>
<link href="web/css/style.css" rel="stylesheet" type="text/css" media="all" />
<!-- start top_js_button -->
<script type="text/javascript" src="web/js/jquery.min.js"></script>
<script type="text/javascript" src="web/js/move-top.js"></script>
<script type="text/javascript" src="web/js/easing.js"></script>
   <script type="text/javascript">
		jQuery(document).ready(function($) {
			$(".scroll").click(function(event){		
				event.preventDefault();
				$('html,body').animate({scrollTop:$(this.hash).offset().top},1200);
			});
		});
	</script>
</head>
<body>
<!-- start header -->
<div class="header_bg">
<div class="wrap">
	<div class="header">
		<div class="logo">
			<a href="index.html"><img src="web/images/logo.png" alt=""/> </a>
		</div>
		<div class="social-icons">
		    <ul>
		      <li><a href="#" target="_blank"></a></li>
			<li><a href="http://www.facebook.com/rockStoneGym" target="_blank"></a></li>
		      	<li><a href="#" target="_blank"></a></li>
			<li><a href="http://www.linkedin.com/company/rockstone-gym" target="_blank"></a></li>
			</ul>
		</div>
		<div class="clear"></div>
	</div>
</div>
</div>
<!-- start header -->
<div class="header_btm">
<div class="wrap">
	<div class="header_sub">
		<div class="h_menu">
			<ul>
					<li class="active"><a href="index.php?page=index">Home</a></li>
					<li><a href="index.php?page=about">About us</a></li>
					<li><a href="index.php?page=locator">Locator</a></li>
					<li><a href="index.php?page=videos">Videos</a></li>
					<li><a href="index.php?page=articles">Articles</a></li>
					<li><a href="index.php?page=gym">Gym</a></li>
					<li><a href="index.php?page=contact">Contact us</a></li>
			</ul>
		</div>
		<div class="h_search">
    		<form>
    			<input type="text" value="" placeholder="search something...">
    			<input type="submit" value="">
    		</form>
		</div>
        <div class="menu">
        	<ul>
					<li class="active"><a href="index.php?page=index">Home</a></li>
					<li><a href="index.php?page=about">About us</a></li>
					<li><a href="index.php?page=locator">Locator</a></li>
					<li><a href="index.php?page=videos">Videos</a></li>
					<li><a href="index.php?page=articles">Articles</a></li>
					<li><a href="index.php?page=gym">Gym</a></li>
					<li><a href="index.php?page=contact">Contact us</a></li>
            </ul>
        </div>
        <div class="search">
            <form action="/iphone/search.html">
                <input type="text" value="Search" onFocus="this.value = '';" onBlur="if (this.value == '') {this.value = 'Search';}" class="text">
            </form>
        </div>
        <div class="sub-head">
        	<ul>
            	<li><a href="#" id="menu">Menu  <span></span></a></li>
            	<li><a href="#" id="search">Search <span></span></a></li>
            </ul>
            <div class="clear"></div>
        </div>
	   <script type="text/javascript">
		$(".menu,.search").hide();
		$("#menu").click(function(){
			$(".menu").toggle();
			$(".search").hide();
			$("#search").removeClass("active");
			$("#menu").toggleClass("active");
		});
		$("#search").click(function(){
			$(".search").toggle();
			$(".menu").hide();
			$("#menu").removeClass("active");
			$("#search").toggleClass("active");
			$(".text").focus();
		});
	</script>
	<script type="text/javascript" src="web/js/script.js"></script>
	<div class="clear"></div>

		<div class="clear"></div>
</div>
</div>
</div>
<!-- start top_bg -->
<div class="top_bg">
<div class="wrap">
	<div class="top">
		<h2>contact us</h2>
 	</div>
</div>
</div>
<!-- start main -->
<div class="wrap">
	<div class="main">
	 	 <div class="contact">				
					<div class="contact_info">
						<h2 class="style">get in touch</h2>
			    	 		<div class="map">
					   			<iframe width="100%" height="250" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://maps.google.co.in/maps?f=q&amp;source=s_q&amp;hl=en&amp;geocode=&amp;q=Ballabhgarh,+Faridabad,+Haryana&amp;aq=4&amp;oq=light&amp;sll=28.3393125,77.326022&amp;sspn=0.04941,0.104628&amp;ie=UTF8&amp;hq=&amp;t=m&amp;z=14&amp;ll=28.3393125,77.326022&amp;output=embed"></iframe><br><small><a href="https://maps.google.co.in/maps?f=q&amp;source=embed&amp;hl=en&amp;geocode=&amp;q=Ballabhgarh,+Faridabad,+Haryana&amp;aq=4&amp;oq=light&amp;sll=28.3393125,77.326022&amp;sspn=0.04941,0.104628&amp;ie=UTF8&amp;hq=&amp;t=m&amp;z=14&amp;ll=28.3393125,77.326022" style="color:#777777;text-align:left;font-size:13px;">View Larger Map</a></small>
					   		</div>
      				</div>
				  <div class="contact-form">
			 	 <div class="content">
		 	 	<h2>Contact Us</h2>
		 	 </div>
					    <form method="post" action="contact-post.html">
					    	<div>
						    	<span><label>Name</label></span>
						    	<span><input name="userName" type="text" class="textbox"></span>
						    </div>
						    <div>
						    	<span><label>E-mail</label></span>
						    	<span><input name="userEmail" type="text" class="textbox"></span>
						    </div>
						    <div>
						     	<span><label>Mobile</label></span>
						    	<span><input name="userPhone" type="text" class="textbox"></span>
						    </div>
						    <div>
						    	<span><label>Subject</label></span>
						    	<span><textarea name="userMsg"> </textarea></span>
						    </div>
						   <div>
						   	<span><input type="submit" class="" value="Submit us"></span>
						  </div>
					    </form>
				    </div>
  				<div class="clear"> </div>		
			  </div>
		</div>
</div>
<!-- start footer -->
<div class="footer_bg">
<div class="wrap">
	<div class="footer">
		<!-- start span_of_4 -->
		<div class="span_of_4">
				<div class="span1_of_4">
					<h4>popular post</h4>
					<p>Reduce your weight upto 10Kg in 10 days.</p>
					<ul class="f_nav1">
						<li class="timer"><a href="#">26 March 2015 </a></li>
					</ul>
					<p class="top">Gain 10Kg muscles weight in just 2 month.</p>
					<ul class="f_nav1">
						<li class="timer"><a href="#">25 March 2015 </a></li>
					</ul>
					<p class="top">Attractive ABS in just 2 month.</p>
					<ul class="f_nav1">
						<li class="timer"><a href="#">27 March 2015 </a></li>
					</ul>
				</div>
				<div class="span1_of_4">
					<h4>tags</h4>
					<p>We are providers of <big>Gym</big> in india <big>standardize</big> the process of opening new gym. Providing <big>health advices</big>. Provide <big>Nutrition</big> tips. Provide online <big>Videos</big> and <big>Articles</big> for excercises and fitness tips. Providing <big>frenchies</big> of @RockStone Gym to existing and new Gyms. Maninting the <big>global standard</big> in fitness for all @RockStone Gyms.</p>
				</div>
				<div class="span1_of_4">
					<h4>a little about us</h4>
					<p class="btm">We are the new industory in fitness and wanted to standardize the process of opening the new GYM and maintaing there standards to global level.</p>
					<p>New provide assistance in opening new GYM to starters selling frenchies of @RockStone GYM.</p>
					<p>We provide health and nutrition tips with videos and articles.</p>
				</div>
				<div class="span1_of_4">
					<h4>get in touch</h4>
					<p class="btm">We have started new chain of Gyms in india and looking for the curious people who want to open a new GYM in india according to world standard or want to  convert his/her existing GYM to global level GYM with @RockStone GYM.</p>
					<p class="btm1 pin">Faridabad, Haryana, India</p>
					<p class="btm1 mail"><a href="mailto:rockstonegym@rockstonegym.com">info@rockstone.com </a></p>
					<p class="call">91-9810700893</p>
				</div>
			<div class="clear"></div>
		</div>
	</div>
</div>
</div>
<!-- start footer -->
<div class="footer_bg1">
<div class="wrap">
	<div class="footer1">
		<!-- scroll_top_btn -->
	    <script type="text/javascript">
			$(document).ready(function() {
				var defaults = {
		  			containerID: 'toTop', // fading element id
					containerHoverID: 'toTopHover', // fading element hover id
					scrollSpeed: 1200,
					easingType: 'linear' 
		 		};
				$().UItoTop({ easingType: 'easeOutQuart' });
			});
		</script>
		 <a href="#" id="toTop" style="display: block;"><span id="toTopHover" style="opacity: 1;"></span></a>
		<!--end scroll_top_btn -->
		<div class="social-icons">
		    <ul>
		      <li><a href="#" target="_blank"></a></li>
			<li><a href="http://www.facebook.com/rockStoneGym" target="_blank"></a></li>
		      	<li><a href="#" target="_blank"></a></li>
			<li><a href="http://www.linkedin.com/company/rockstone-gym" target="_blank"></a></li>
		     </ul>
		</div>
		<div class="copy">
			<p class="link"><span>&copy; 2015 @RockStone Gym. All rights reserved | Template by&nbsp;<a href="http://www.rockstonegym.com/">@RockStone Gym</a></span></p>
		</div>
		<div class="clear"></div>
	</div>
</div>
</div>
</body>
</html>
