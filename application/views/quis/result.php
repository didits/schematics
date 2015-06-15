<!DOCTYPE html>
<html lang="en-US">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width" />
<title>Contoh Soal NLC | Schematics 2015</title>
<meta name='description' content='Saya mendapatkan nilai: <?php echo $skor; ?> dari Quiz NLC Schematics 2015, Coba tes kemampuan logikamu sekarang!'>
<meta name='og:image' content='http://carrot.is/img/fb-share.jpg'>
<link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/components.css">
<link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/responsee.css">
<link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/animate.css">
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
	<div class="line" style="border-bottom:#333 1px solid">
		<nav>
			<p class="nav-text">MENU</p>
			<div class="top-nav s-12 l-12">
				<ul>
					<li><a href="<?php echo base_url(); ?>nlc/quiz"><i class="icon-arrow_left"></i> KEMBALI</a></li>
				</ul>
			</div>
		</nav>
	</div>
</header>
<section> <br>
	<div class="topline margin-bottom wow fadeInDown" style="margin:10px" >
		<div class="s-12 l-4 center" style="min-height:100vh">
			<div  style="display:inline-block; width:100%; height:100px; background-color:#019587">
				<h2 align="center" style="line-height:100px; color:#FFF">SKOR</h2>
			</div>
			<div class="box">
			<br>
			<br>
			<h2 style="border-bottom:dotted 1px #999999; font-style:italic" align="center">Skor Anda: <?php echo $skor; ?> / 10</h2>
			<br>
			<div class="s-12 l-5 center">
			<a href="<?php echo base_url();?>nlc/quiz"><button class="button" style="background-color:#ff5521">Coba Lagi</button></a>
			</div>
			<br>
			<br>
			<div class='share-button center'></div>
			<br>
			<br>
			<br>
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
<script src='<?php echo base_url();?>assets/js/share.min.js'></script>
<script>
    var share = new Share(".share-button", {
      ui: {
        flyout: "bottom center"
      },
	  networks: {
        facebook: {
          app_id: "678409845637810",
        }
      }
    });
  </script>