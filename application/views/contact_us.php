<!DOCTYPE html>
<html lang="en-US">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width" />
<title>HUBUNGI KAMI | Schematics 2015</title>
<link rel="stylesheet" href="<?php echo base_url();?>assets/css/components.css">
<link rel="stylesheet" href="<?php echo base_url();?>assets/css/responsee.css">
<link rel="stylesheet" href="http://cdnjs.cloudflare.com/ajax/libs/leaflet/0.7.3/leaflet.css" />
<script type="text/javascript" src="<?php echo base_url();?>assets/js/jquery-1.8.3.min.js"></script>
<script type="text/javascript" src="<?php echo base_url();?>assets/js/jquery-ui.min.js"></script>
<script type="text/javascript" src="<?php echo base_url();?>assets/js/modernizr.js"></script>
<script type="text/javascript" src="<?php echo base_url();?>assets/js/responsee.js"></script>
<script src="http://cdnjs.cloudflare.com/ajax/libs/leaflet/0.7.3/leaflet.js"></script>
<!--[if lt IE 9]>
	<script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
	<![endif]-->
</head>
<body style="background-color:#fff">
<!-- HEADER -->
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
<div class="s-12 l-8">
	<div style="display:block;">
		<div id="map" style="height:100vh; width:100%; background-color:#FFF"></div>
	</div>
</div>
<div class="s-12 l-4">
	<div style="display:block; min-height:100vh; background-color:#fff">
		<form class="customform" action="<?php echo base_url();?>contact/post" method="post">
			<div class="box">
				<div style="display:inline-block; width:100%; height:auto; background-color:#2095f2; margin-bottom:10px; border-radius:8px"> <?php echo $error; ?> </div>
				<div id="id">
					<h2>
						<center>
							HUBUNGI KAMI
						</center>
					</h2>
					<h3 align="center" style="font-weight:100">Jika Anda mempunyai pertanyaan, kami siap menjawabnya. Kritik dan saran Anda yang kami butuhkan.</h3>
					<h1>&nbsp;</h1>
					<h3>Nama</h3>
					<input name="nama" title="Nama" type="text" required//>
					<h3>Email</h3>
					<input name="email" title="Email" type="email" required/>
					<h3>Subjek</h3>
					<input name="subjek" title="Subject"  type="text" required//>
					<h3>Pesan</h3>
					<textarea name="pesan" title="Message" type="text" style="max-width:100%" required/>
					</textarea>
				</div>
			</div>
			<div class="s-12 l-7 center">
				<div class="box">
					<button type="submit" style="background-color:#06F">KIRIM</button>
				</div>
			</div>
		</form>
	</div>
</div>
<script>
	var map = L.map('map').setView([-7.279549, 112.79723], 8);
	
			L.tileLayer('https://{s}.tiles.mapbox.com/v3/{id}/{z}/{x}/{y}.png', {
				maxZoom: 18,
				attribution: 'Map data &copy; <a href="http://openstreetmap.org">OpenStreetMap</a> contributors, ' +
					'<a href="http://creativecommons.org/licenses/by-sa/2.0/">CC-BY-SA</a>, ' +
					'Imagery © <a href="http://mapbox.com">Mapbox</a>',
				id: 'examples.map-i875mjb7'
			}).addTo(map);
	
	
			L.marker([-7.279549, 112.79723]).addTo(map)
				.bindPopup("<b>Saya disini!</b><br />Teknik Informatika ITS").openPopup();
	
	
			var popup = L.popup();
	
			function onMapClick(e) {
				popup
					.setLatLng(e.latlng)
					.setContent("You clicked the map at " + e.latlng.toString())
					.openOn(map);
			}
	
			map.on('click', onMapClick);
	
	</script> 
