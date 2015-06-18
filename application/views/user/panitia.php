<!DOCTYPE html>
<html lang="en-US">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width" />
<title>Buat Akun | Schematics 2015</title>
<link rel="shortcut icon"  href="<?php echo base_url(); ?>assets/img/icon.ico">
<link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/components.css">
<link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/responsee.css">
<link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/animate.css">
<script type="text/javascript" src="<?php echo base_url(); ?>assets/js/jquery-1.8.3.min.js"></script>
<script type="text/javascript" src="<?php echo base_url(); ?>assets/js/modernizr.js"></script>
<script type="text/javascript" src="<?php echo base_url(); ?>assets/js/responsee.js"></script>
<!--[if lt IE 9]>
<script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
<![endif]-->
</head>
<body style="background-image:url(<?php echo base_url();?>assets/img/pattern-1.svg); background-repeat:repeat-y; background-size:cover">
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
	<div class="topline margin-bottom wow fadeInDown" style="margin:10px">
		<div class="s-12 l-4 center" style="min-height:100vh">
		<div style="display:inline-block; width:100%; height:100px; background-color:#9c26b0">
		<h2 align="center" style="line-height:100px; color:#FFF">PANITIA</h2>
		</div>
			<div class="box">
				<form class="customform" action="<?php echo base_url();?>user/panitia" method="post">
					<div style="display:inline-block; width:100%; height:auto; background-color:#f44236; margin-bottom:10px; border-radius:8px">
					<?php echo validation_errors('<p class="error">'); ?>
					</div>
					<h3>NRP</h3>
					<h4>Masukkan NRP Lengkap</h4>
					<input type="text" id="nrp" name="nrp" value="" required />
					<h3>Nama</span></h3>
					<h4>Nama harus lengkap</h4>
					<input type="text" id="nama" name="nama" required />
					<h3>Email Peserta yang didaftarkan</h3>
					<h4>Email ini merupakan email yang digunakan saat didaftarkan pada: schematics.its.ac.id/buat_akun</h4>
					<input type="email" id="email" name="email"  required />
					<h3 id="ts">Event</h3>
					<div class="s-12 l-4 margin-bottom">
						<select name="event" id="event">
							<option value="" >pilih salah satu . . .</option>
							<option value="NLC">NLC</option>
							<option value="NPC">NPC</option>
						</select>
					</div>
					
						<div class="s-12 l-5 center">
								<button type="submit" style="background-color:#06F" class="button">BUAT</button>
						</div>
				</form>
			</div>
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
