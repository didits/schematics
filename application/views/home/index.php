<!DOCTYPE html>
<html lang="en-US">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width" />
<title>Schematics 2015</title>
<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/css/parallax.css"/>
<link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/components.css">
<link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/responsee.css">
<link rel="stylesheet" href="<?php echo base_url(); ?>assets/owl-carousel/owl.carousel.css">
<link rel="stylesheet" href="<?php echo base_url(); ?>assets/owl-carousel/owl.theme.css">
<!--<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700,800&subset=latin,latin-ext' rel='stylesheet' type='text/css'>-->
<script type="text/javascript" src="<?php echo base_url(); ?>assets/js/jquery-1.8.3.min.js"></script>
<script type="text/javascript" src="<?php echo base_url(); ?>assets/js/jquery-ui.min.js"></script>
<script type="text/javascript" src="<?php echo base_url(); ?>assets/js/modernizr.js"></script>
<script type="text/javascript" src="<?php echo base_url(); ?>assets/js/responsee.js"></script>
<!--[if lt IE 9]>
			  <script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
			  <![endif]-->
<style>
a {
	color: #CCC
}
.top-nav li a:hover, .top-nav li.active-item a, .top-nav .logo.active-item a:hover {
}
.carousel-text {
	display: block;
	position: absolute;
	top: 50%;
	width: 100%;
	z-index: 999;
}
.carousel-text h2 {
	background: none repeat scroll 0 0 #fff;
	color: rgb(0, 30, 34);
	display: inline-block;
	padding: 0.3125em 0.625em;
	font-size: 2em;
}
.carousel-text p {
	background: none repeat scroll 0 0 rgba(0, 30, 34, 0.85);
	color: #fff;
	display: inline-block;
	font-size: 1.2em;
	padding: 0.625em 0.8em;
}
.carousel-text h2 {
	font-size: 2em;
}
.carousel-text p {
	font-size: 1em;
}

</style>
</head>
<body style="background-color:white;">
	<header> 
		<!-- TOP NAV -->
		<div class="line" >
			<div class="l-1 s-12 hide-s" > <a href="<?php echo base_url(); ?>home"><img src="<?php echo base_url(); ?>assets/img/logo.svg" style="height:50px; margin-top:3px" class="center"/></a> </div>
			<div class="l-11 s-12" style="background:none;">
				<nav class="menu" style="background:none;">
					<p class="nav-text">MENU</p>
					<div class="top-nav"  >
						<ul class="chevron" id="menu-main">
							<li><a href="<?php echo base_url(); ?>home">BERANDA</a></li>
							<li><a href="<?php echo base_url(); ?>blog">BLOG</a></li>
							<li><a href="<?php echo base_url(); ?>nlc">NLC</a></li>
							<li><a href="<?php echo base_url(); ?>npc">NPC</a></li>
							<li><a href="<?php echo base_url(); ?>nst">NST</a></li>
							<li><a href="<?php echo base_url(); ?>reeva">REEVA</a></li>
							<li><a href="<?php echo base_url(); ?>faq">FAQ</a></li>
							<li><a href="<?php echo base_url(); ?>contact">CONTACT</a></li>
							<li><a href="<?php echo base_url() ?>login">LOGIN</a></li>
							<li><a href="<?php echo base_url(); ?>buat_akun">DAFTAR</a></li>
						</ul>
					</div>
				</nav>
			</div>
		</div>
	</header>
	
	<!-- CAROUSEL -->
	<div id="owl-demo" class="owl-carousel owl-theme">
		<div class="item" style="height:100vh; background-position:center; background-size:cover; background-image:url(<?php echo base_url(); ?>assets/img/940x380.jpg)"> </div>
		<div class="item" style="height:100vh; background-position:center; background-size:cover; background-image:url(<?php echo base_url(); ?>assets/img/940x380-2.jpg)"></div>
	</div>
	<!-- HOME PAGE BLOCK -->
	<div style="width:100%; background-color:#ffe93b; min-height:100vh">
	<div id="container" class="container" style="overflow:hidden;">
	<ul id="nlc" class="scene">
		<li class="layer" data-depth="1.00">
			<div style=""></div>
			<img src="<?php echo base_url(); ?>assets/images/layer1.png"></li>
		<li class="layer" data-depth="0.80"><img src="<?php echo base_url(); ?>assets/images/layer2.png"></li>
		<li class="layer" data-depth="0.60"><img src="<?php echo base_url(); ?>assets/images/layer3.png"></li>
		<li class="layer" data-depth="0.40"><img src="<?php echo base_url(); ?>assets/images/layer4.png"></li>
		<li class="layer" data-depth="0.20"><img src="<?php echo base_url(); ?>assets/images/layer5.png"></li>
		<li class="layer" data-depth="0.00"><img src="<?php echo base_url(); ?>assets/images/layer6.png"></li>
	</ul>
	</div>
	</div>
	
	<div style="width:100%; background-color:#f44236;  min-height:100vh">
	<div id="container" class="container" style="overflow:hidden;">
	<ul id="npc" class="scene">
		<li class="layer" data-depth="1.00">
			<div style=""></div>
			<img src="<?php echo base_url(); ?>assets/images/layer1.png"></li>
		<li class="layer" data-depth="0.80"><img src="<?php echo base_url(); ?>assets/images/layer2.png"></li>
		<li class="layer" data-depth="0.60"><img src="<?php echo base_url(); ?>assets/images/layer3.png"></li>
		<li class="layer" data-depth="0.40"><img src="<?php echo base_url(); ?>assets/images/layer4.png"></li>
		<li class="layer" data-depth="0.20"><img src="<?php echo base_url(); ?>assets/images/layer5.png"></li>
		<li class="layer" data-depth="0.00"><img src="<?php echo base_url(); ?>assets/images/layer6.png"></li>
	</ul>
	</div>
	</div>
	<div style="width:100%; background-color:#4baf4f;  min-height:100vh">
	<div id="container" class="container" style="overflow:hidden;">
	<ul id="nst" class="scene" >
		<li class="layer" data-depth="1.00"><img src="<?php echo base_url(); ?>assets/images/layer1.png"></li>
		<li class="layer" data-depth="0.80"><img src="<?php echo base_url(); ?>assets/images/layer2.png"></li>
		<li class="layer" data-depth="0.60"><img src="<?php echo base_url(); ?>assets/images/layer3.png"></li>
		<li class="layer" data-depth="0.40"><img src="<?php echo base_url(); ?>assets/images/layer4.png"></li>
		<li class="layer" data-depth="0.20"><img src="<?php echo base_url(); ?>assets/images/layer5.png"></li>
		<li class="layer" data-depth="0.00"><img src="<?php echo base_url(); ?>assets/images/layer6.png"></li>
	</ul>
	</div>
	</div>
	<div style="width:100%; background-color:#2095f2; margin-bottom:-10px;  min-height:100vh">
	<div id="container" class="container" style="overflow:hidden;">
	<ul id="reeva" class="scene">
		<li class="layer" data-depth="1.00">
			<div style=""></div>
			<img src="<?php echo base_url(); ?>assets/images/layer1.png"></li>
		<li class="layer" data-depth="0.80"><img src="<?php echo base_url(); ?>assets/images/layer2.png"></li>
		<li class="layer" data-depth="0.60"><img src="<?php echo base_url(); ?>assets/images/layer3.png"></li>
		<li class="layer" data-depth="0.40"><img src="<?php echo base_url(); ?>assets/images/layer4.png"></li>
		<li class="layer" data-depth="0.20"><img src="<?php echo base_url(); ?>assets/images/layer5.png"></li>
		<li class="layer" data-depth="0.00"><img src="<?php echo base_url(); ?>assets/images/layer6.png"></li>
	</ul>
</div>
</div>
<script type="text/javascript" src="<?php echo base_url(); ?>assets/owl-carousel/owl.carousel.js"></script> 
<script type="text/javascript">
				 jQuery(document).ready(function($) {
				   $("#owl-demo").owlCarousel({
					navigation : true,
					lazyLoad : true,
					slideSpeed : 300,
					paginationSpeed : 400,
					navigation : false,
					autoPlay : true,
					pagination : false,
					singleItem:true
				   });
				   $("#owl-demo2").owlCarousel({
					items : 1,
					lazyLoad : true,
					autoPlay : true,
					navigation : false,
					pagination : false
				   });
				 });
			  </script> 
<script src="<?php echo base_url(); ?>assets/js/jquery.js"></script> 
<script src="<?php echo base_url(); ?>assets/js/jquery.parallax.js"></script> 
<script>

	// Yep, that's it!
	$('#nlc').parallax();
	$('#npc').parallax();
	$('#nst').parallax();
	$('#reeva').parallax();

	</script>
</body>
</html>
