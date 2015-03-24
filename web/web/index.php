<!DOCTYPE html>
<html> 
<head> 
<title>RockStone home</title>
<link rel="shortcut icon" href="favicon.ico" type="image/x-icon"/>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" > 
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,600' rel='stylesheet' type='text/css'>
<link href="web/css/style.css" rel="stylesheet" type="text/css" media="all" />
<link rel='stylesheet' id='camera-css'  href='web/css/camera.css' type='text/css' media='all'>

<link rel="stylesheet" type="text/css" href="web/css/slider.css" /> 
<style>
body {
	margin: 0;
	padding: 0;
}
a {
	color: #09f;
}
a:hover {
	text-decoration: none;
}
.fadeFromBottom{
	font-style: oblique;
	font-family: cursive;
}
</style>
<script type='text/javascript' src='web/js/jquery.min.js'></script>
<script type='text/javascript' src='web/js/jquery.mobile.customized.min.js'></script>
<script type='text/javascript' src='web/js/jquery.easing.1.3.js'></script> 
<script type='text/javascript' src='web/js/camera.min.js'></script> 

<script type="text/javascript" src="web/js/modernizr.custom.28468.js"></script>
<script type="text/javascript" src="web/js/jquery.cslider.js"></script>
<script type="text/javascript" src="web/js/move-top.js"></script>
<script type="text/javascript" src="web/js/easing.js"></script>
<script>
jQuery(function(){
	jQuery('#main_page_wrap').camera({
		height: '40%',
		pagination: false,
		thumbnails: true,
		imagePath: 'images/',
		time: 1200,
		transPeriod:700
	});
});
jQuery(document).ready(function(jQuery) {
	jQuery(".scroll").click(function(event){		
		event.preventDefault();
		$('html,body').animate({scrollTop:$(this.hash).offset().top},1200);
	});
});
</script>
</head>
<body>
 <a href="https://plus.google.com/115078952264710636605" rel="publisher"></a>
	<div class="fluid_container">
		<!-- Start of logo header-->
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
		<!-- Start of logo header-->

		<!-- Start of Navigation bar-->
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
		<!-- Start of Navigation bar-->

		<!-- Start of slider -->
		<div class="camera_wrap camera_emboss" id="main_page_wrap">
		  	<div data-thumb="web/images/slides/thumbs/main-slider-image-1.jpg" data-src="web/images/slides/main-slider-image-1.jpg">
				<div class="camera_caption fadeFromBottom">
					<h2>Take a step forward toward your health and look smart.</h2>
					<p>With regular light and intensive workouts with @RockStone you can have a strong body and appreciable physic.</p>
				</div>	    
			</div>
			<div data-thumb="web/images/slides/thumbs/main-slider-image-2.jpg" data-src="web/images/slides/main-slider-image-2.jpg">
				<div class="camera_caption fadeFromBottom">
					<h2>Health drinks and supplements.</h2>
					<p>We give you best advice on supplements and health drinks and provide wide varities of same in @RockStone Shop.</p>
				</div>    
			</div>
			<div data-thumb="web/images/slides/thumbs/main-slider-image-3.jpg" data-src="web/images/slides/main-slider-image-3.jpg">
				<div class="camera_caption fadeFromBottom">
					<h2>Secret of strong and attractive Abs.</h2>
					<p>Secret of building and @RockStone abs and look attractive, impressive with your shapped and toned Abs.</p>
				</div>   
			</div>
			<div data-thumb="web/images/slides/thumbs/main-slider-image-4.jpg" data-src="web/images/slides/main-slider-image-4.jpg">
				<div class="camera_caption fadeFromBottom">
					<h2>@RockStone gym Coaches.</h2>
					<p>We have skills coaches to teach you how to workout and inprove your eating habbits with @RockStone.</p>
				</div>   
			</div>
			<div data-thumb="web/images/slides/thumbs/main-slider-image-5.jpg" data-src="web/images/slides/main-slider-image-5.jpg">
				<div class="camera_caption fadeFromBottom">
					<h2>Health and nutrition tips.</h2>
					<p>We provide you best health and nutrition tips to stay healthy and keep your body in shape with @RockStone.</p>
				</div>   
			</div>
			<div data-thumb="web/images/slides/thumbs/main-slider-image-6.jpg" data-src="web/images/slides/main-slider-image-6.jpg">
				<div class="camera_caption fadeFromBottom">
					<h2>Certification programs.</h2>
					<p>We have certification and fitness programs arranged all areas and join us to know secret of @RockStone.</p>
				</div>   
			</div>  
		</div>
		<!-- Start of slider -->


	<!-- start main -->
	<div class="wrap">
		<div class="main">
			<div class="main_text">
				<h2>Staying fit <span>is really easy with </span> @RockStone Gym.</h2>
				<p class="para">"In @RockStone Gym we teach you hoe to make a good toned body with regular exercises and health advices. We have qualified and certified trainers to teach you and guide you. We have a nutrition tips for regular health. We have supplements and health drinks for your faster muscles growth @RockStone Gym Store."</p>
			</div>
			<!-- start grids_of_3 -->
			<div class="grids_of_3">
				<div class="grid1_of_3">
					<img src="web/images/icon1.png" alt=""/>
					<h3><a href="#">Watch online videos with <span> @RockStone Gym </span> </a></h3>
					<p>We have a best quality videos who can guide you with proper excercise and health tips.</p>
				</div>
				<div class="grid1_of_3">
					<img src="web/images/icon2.png" alt=""/>
					<h3><a href="#">Simply write to <span> @RockStone Gym </span> </a></h3>
					<p>To get advice threw mail write your queries to @RockStone advisers who can guide you better in proper direction toward your health.</p>
				</div>
				<div class="grid1_of_3">
					<img src="web/images/icon3.png" alt=""/>
					<h3><a href="#">Read online articles with <span> @RockStone Gym </span> </a></h3>
					<p>We have best quality articles and blogs with us written directly by @RockStone Gym experts which can guide you with health and Nutrition tips.</p>
				</div>
				<div class="clear"></div>
			</div>
			<!-- end grids_of_3 -->
		</div>
	</div>
	<!-- start main -->

	<!-- Start Blocks-->
	<div class="main_bg">
		<div class="wrap">
			<div class="main content_top">
				<!-- start span_of_3 -->
				<div class="span_of_3">
					<div class="span1_of_3">
						<a href="details.html"><img src="web/images/health_drinks.jpg" alt=""/></a>
						<div class="span1_of_3_text">
							<h3><a href="details.html">Health Drinks with @RockStone GYM</a></h3>
							<p>We provides you with best health drinks tips and advices in health drink section.</p>
						</div>
					</div>
					<div class="span1_of_3">
						<a href="details.html"><img src="web/images/nutrition.jpg" alt=""/></a>
						<div class="span1_of_3_text">
							<h3><a href="details.html">Nutrition Tips with @RockStone GYM</a></h3>
							<p>We provides you the best Nutrition tips and easy muscle gainign tips at Nutrition tips section.</p>
						</div>
					</div>
					<div class="span1_of_3">
						<a href="details.html"><img src="web/images/exercise.jpg" alt=""/></a>
						<div class="span1_of_3_text">
							<h3><a href="details.html">Muscles Excercise with @RockStone GYM</a></h3>
							<p>We provide you with best videos, Images and articles for regular excercises with which you can gain attractive muscles easily.</p>
						</div>
					</div>
					<div class="clear"></div>
				</div>
				<!--  -->
				<div class="span_of_3">
					<div class="span1_of_3">
						<a href="details.html"><img src="web/images/opening_rockstone_gym.jpg" alt=""/></a>
						<div class="span1_of_3_text">
							<h3><a href="details.html">Opening new @RockStone GYM</a></h3>
							<p>We provide you online as well as direct assistance to guide you how to be the part of global standard with @RockStone Gym.</p>
						</div>
					</div>
					<div class="span1_of_3">
						<a href="details.html"><img src="web/images/certified.jpg" alt=""/></a>
						<div class="span1_of_3_text">
							<h3><a href="details.html">@RockStone certification</a></h3>
							<p>We provide a standard certification to Gym based on there level, consumer base and trainers.</p>
						</div>
					</div>
					<div class="span1_of_3">
						<a href="details.html"><img src="web/images/global_level.jpg" alt=""/></a>
						<div class="span1_of_3_text">
							<h3><a href="details.html">Be the part of @RockStone Gym</a></h3>
							<p>We are providing the chance to small and middle size Gym to be the part of @RockStone Gym with our free convertion policy and take your GYm to global level.</p>
						</div>
					</div>
					<div class="clear"></div>
				</div>
				<!-- end grids_of_3 -->
			</div>
		</div>
	</div>
	<!-- Start Blocks-->

	<!-- Start Partners-->
	<div class="wrap">
			<ul id="flexiselDemo3">
				<!--<li><img src="images/client1.jpg" /></li>
				<li><img src="web/images/client6.jpg" /></li>
				<li><img src="web/images/client2.jpg" /></li>
				<li><img src="web/images/client5.jpg" /></li>
				<li><img src="web/images/client4.jpg" /></li>
				<li><img src="web/images/client3.jpg" /></li>
				<li><img src="web/images/client4.jpg" /></li>-->
			</ul>
		<script type="text/javascript">
	$(window).load(function() {
		$("#flexiselDemo1").flexisel();
		$("#flexiselDemo2").flexisel({
			enableResponsiveBreakpoints: true,
	    	responsiveBreakpoints: { 
	    		portrait: { 
	    			changePoint:480,
	    			visibleItems: 1
	    		}, 
	    		landscape: { 
	    			changePoint:640,
	    			visibleItems: 2
	    		},
	    		tablet: { 
	    			changePoint:768,
	    			visibleItems: 3
	    		}
	    	}
	    });

		$("#flexiselDemo3").flexisel({
			visibleItems: 5,
			animationSpeed: 1000,
			autoPlay: true,
			autoPlaySpeed: 3000,    		
			pauseOnHover: true,
			enableResponsiveBreakpoints: true,
	    	responsiveBreakpoints: { 
	    		portrait: { 
	    			changePoint:480,
	    			visibleItems: 1
	    		}, 
	    		landscape: { 
	    			changePoint:640,
	    			visibleItems: 2
	    		},
	    		tablet: { 
	    			changePoint:768,
	    			visibleItems: 3
	    		}
	    	}
	    });
	    
	});
	</script>
	<script type="text/javascript" src="web/js/jquery.flexisel.js"></script>
	</div>
	<!-- Start Partners-->

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
	<!-- start footer -->

	</div>
</body> 
</html>
