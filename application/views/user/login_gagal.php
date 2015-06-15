<!DOCTYPE html>
<html lang="en-US">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width" />
<title>Login | Schematics 2015</title>
<link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/components.css">
<link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/responsee.css">
<script type="text/javascript" src="<?php echo base_url(); ?>assets/js/jquery-1.8.3.min.js"></script>
<script type="text/javascript" src="<?php echo base_url(); ?>assets/js/jquery-ui.min.js"></script>
<script type="text/javascript" src="<?php echo base_url(); ?>assets/js/modernizr.js"></script>
<script type="text/javascript" src="<?php echo base_url(); ?>assets/js/responsee.js"></script>
<!--[if lt IE 9]>
<script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
<![endif]-->
</head>
<body style="background-image:url(<?php echo base_url();?>assets/img/pattern-2.svg); background-repeat:repeat-y; background-size:cover">
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
	<div class="topline margin-bottom" style="margin:10px">
		<div class="s-12 l-4 center" style="min-height:100vh">
			<div style="display:inline-block; width:100%; height:100px; background-color:#019587">
				<h2 align="center" style="line-height:100px; color:#FFF">LOGIN</h2>
			</div>
			<form class="customform" action="<?php echo base_url(); ?>user/login" method="post">
				<div class="box">
					<div id="id">
						<h3>&nbsp;</h3>
						<div style="display:inline-block; width:100%; height:auto; background-color:#f44236; margin-bottom:10px; border-radius:8px">
						<p class="error">Login gagal! chek email dan password Anda lagi!</p>
						</div>
						<h3>Email</h3>
						<input name="email" title="Email" placeholder="Email" type="email" required/>
						<h3>Password</h3>
						<input name="pass" title="Password" placeholder="Password" type="password"  required />
					</div>
				</div>
				<div class="box">
					<div class="s-12 l-5 center">
						<button type="submit" style="background-color:#06F">LOGIN</button>
					</div>
				</div>
			</form>
		</div>
	</div>
	<br>
</section>
