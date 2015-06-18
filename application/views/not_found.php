<!DOCTYPE html>
<html lang="en-US">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width" />
<title>NOT FOUND 404 | Schematics 2015</title>
<link rel="shortcut icon"  href="<?php echo base_url(); ?>assets/img/icon.ico">
<link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/components.css">
<link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/responsee.css">
<link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/animate.css">
<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/css/parallax.css"/>
<script type="text/javascript" src="<?php echo base_url(); ?>assets/js/jquery-1.8.3.min.js"></script>
<script type="text/javascript" src="<?php echo base_url(); ?>assets/js/modernizr.js"></script>
<script type="text/javascript" src="<?php echo base_url(); ?>assets/js/responsee.js"></script>
<!--[if lt IE 9]>
<script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
<![endif]-->
</head>
<body style=" background-color:#e91d62">
<!-- HEADER -->
<header> 
		<!-- TOP NAV -->
		<div class="line" style="background-color:#FFF" >
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
<section> <br>
	<div class="topline margin-bottom wow fadeInDown" style="margin:10px" >
		<div class="s-12 l-6 center" style="min-height:100vh">
		<ul id="nst" class="scene" >
		<li class="layer" data-depth="1.00"><img src="<?php echo base_url(); ?>assets/images/4041.png"></li>
		<li class="layer" data-depth="0.80"><img src="<?php echo base_url(); ?>assets/images/4042.png"></li>
		<li class="layer" data-depth="0.60"><img src="<?php echo base_url(); ?>assets/images/4043.png"></li>
		</ul>
		</div>
	</div>
	<br>
</section>
<script src="<?php echo base_url(); ?>assets/js/wow.min.js"></script> 
<script>
			wow = new WOW(
			  {
				animateClass: 'animated',
				offset:       100,
				callback:     function(box) {
				  console.log("WOW: animating <" + box.tagName.toLowerCase() + ">")
				}
			  }
			);
			wow.init();
		  </script>
<script src="<?php echo base_url(); ?>assets/js/jquery.parallax.js"></script> 
<script>

	// Yep, that's it!
	$('#nst').parallax();

	</script>