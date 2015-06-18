<!DOCTYPE html>
<html lang="en-US">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width" />
<title>Schematics 2015</title>
<link rel="shortcut icon"  href="<?php echo base_url(); ?>assets/img/icon.ico">
<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/css/parallax.css"/>
<link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/components.css">
<link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/responsee.css">
<link rel="stylesheet" href="<?php echo base_url(); ?>assets/owl-carousel/owl.carousel.css">
<link rel="stylesheet" href="<?php echo base_url(); ?>assets/owl-carousel/owl.theme.css"><script type="text/javascript" src="<?php echo base_url(); ?>assets/js/jquery-1.8.3.min.js"></script>
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
		<div class="line" style="background-color:#fff" >
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
	<div style="min-height:100vh; width:100%; display:block; background-color:#fff">
	<div id="owl-demo" class="owl-carousel owl-theme">
		<div class="item" style="height:100vh; background-position:center; background-size:cover; background-image:url(<?php echo base_url(); ?>assets/img/940x380.jpg)"> </div>
		<div class="item" style="height:100vh; background-position:center; background-size:cover; background-image:url(<?php echo base_url(); ?>assets/img/940x380-2.jpg)"></div>
	</div>
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
	<div style="width:100%; background-color:#2095f2;  min-height:100vh">
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
	<div class="line" >
	<h1 align="center">PRESTASI TEKNIK INFORMATIKA ITS</h1>
		<div >
			<div class="s-12 l-6">
				<div class="box"> 
				<ul style="list-style-type:round">
  					<li>Peringkat 1 ajang Microsoft Imagine Cup bidang World Citizenship tingkat Nasional 2014</li>
					<br>
					<li>Peringkat 2 ajang Gemastik 7 UGM bidang Perangkat Lunak tingkat Nasional 2014</li>
					<br>
					<li>Peringkat 2 ajang Gemastik 7 UGM bidang Programming tingkat Nasional 2014</li>
					<br>
					<li>Peringkat 1 ajang Gemastik 7 UGM bidang Data Mining tingkat Nasional 2014</li>
					<br>
					<li>Peringkat 1 ajang L-CEN bidang Mobile Aplication tingkat Nasional 2013</li>
					<br>
					<li>Peringkat 1 ajang ITS EXPO 2013 bidang Game Development tingkat Nasional 2013</li>
					<br>
					<li>Peringkat 1 ajang ITS EXPO 2013 bidang Aplikasi tingkat Nasional 2013</li>
					<br>
					<li>Peringkat 2 dan 3 ajang Gemastik 6 UGM bidang Keamanan Jaringan tingkat Nasional 2013</li>
					<br>
					<li>Peringkat 1 ajang Gemastik 6 UGM bidang Embedded system tingkat Nasional 2013</li>
					<br>
					<li>Peringkat 1 ajang Harvard National Model United Nations(HNMUN) bidang Social Venture Project tingkat Internasional 2015</li>
				</ul>
				</div>
			</div>
			<div class="s-12 l-6">
				<div class="box"> 
				<ul style="list-style-type:round">
  					<li>Peringkat 3 ajang Gemastik 6 UGM bidang Debugging tingkat Nasional 2013</li>
					<br>
					<li>Peringkat 3 ajang Gemastik 6 UGM bidang Data Mining tingkat Nasional 2013</li>
					<br>
					<li>Peringkat 3 ajang Gemastik 6 UGM bidang Inovasi Perangkat Lunak tingkat Nasional 2013</li>
					<br>
					<li>Peringkat 3 ajang Gemastik 6 UGM bidang Rancangan Perangkat Lunak tingkat Nasional 2013</li>
					<br>
					<li>Peringkat 1 ajang UIN Micro Developing Competition tingkat Nasional 2013</li>
					<br>
					<li>Peringkat 2 ajang Enumeration 2013 bidang Game Development tingkat Nasional 2013</li>
					<br>
					<li>Peringkat 2 ajang Industry Creative Festival(INCREFEST) bidang Game Development tingkat Nasional 2013</li>
					<br>
					<li>Peringkat 1 ajang MIT AITI Mobile Apps Indonesia bidang Mobile Apps tingkat Nasional 2013</li>
					<br>
					<li>Peringkat 2 ajang IWIC 7 bidang Info tingkat Nasional 2013</li>
					<br>
					<li>Peringkat 3 ajang Caraka Festival Kreatif 2013 bidang Iklan Pendek tingkat Nasional 2013</li>	
				</ul></div>
			</div>
			<form class="customform" action="<?php echo base_url();?>home/profile" method="post">
			<div class="box">
				<div class="s-12 l-3 center">
					<button type="submit">PROFIL TEKNIK INFORMATIKA ITS</button>
				</div>
				</div>
			</form>
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
