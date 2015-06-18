<!DOCTYPE html>
<html lang="en-US">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width" />
<title>User</title>
<link rel="shortcut icon"  href="<?php echo base_url(); ?>assets/img/icon.ico">
<link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/components.css">
<link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/responsee.css">
<script type="text/javascript" src="<?php echo base_url(); ?>assets/js/jquery-1.8.3.min.js"></script>
<script type="text/javascript" src="<?php echo base_url(); ?>assets/js/modernizr.js"></script>
<script type="text/javascript" src="<?php echo base_url(); ?>assets/js/responsee.js"></script>
<!--[if lt IE 9]>
<script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
<![endif]-->
</head>
<body style="background-color:#9c26b0">
<!-- HEADER -->
<header>
	<div class="line">
		<nav>
			<p class="nav-text">Dashboard NLC</p>
			<div class="top-nav s-12 l-11">
				<ul>
					<li><a></a></li>
				</ul>
			</div>
			<div class="top-nav s-12 l-1 ">
				<ul class="chevron" >
					<li><a href="<?php echo base_url(); ?>user/logout"> LOGOUT</a> </li>
				</ul>
			</div>
		</nav>
	</div>
</header>
<section> <br>
	<div class="topline margin-bottom" style="margin:10px">
		<div class="s-12 l-4 center" style="padding:5px">
			<div style="display:inline-block; width:100%; height:100px; background-color:#e91d62">
				<h2 align="center" style="line-height:100px; color:#FFF">TUNGGU VALIDASI</h2>
			</div>
			<form class="customform" action="<?php echo base_url();?>user/logout" method="post">
				<div class="box">
					<div id="id">
						<h1>&nbsp;</h1>
						<h1>&nbsp;</h1>
						<center>
							<h1><i class=" icon3x icon-check" style="color: #4baf4f"></i></h1>
						</center>
					</div>
				</div>
				<div class="box">
					<p align="center">Anda berhasil mensubmit data, Kami akan melakukan verifikasi data-data Anda maksimal 7 hari kedepan.</p>
					<div class="s-12 l-5 center">
						<div class="box">
							<button type="submit" style="background-color:#06F">Logout</button>
						</div>
					</div>
				</div>
			</form>
		</div>
	</div>
	<br>
</section>