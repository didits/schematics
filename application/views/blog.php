<!DOCTYPE html>
<html lang="en-US">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width" />
<title>Blog | Schematics 2015</title>
<link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/components.css">
<link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/responsee.css">
<script type="text/javascript" src="<?php echo base_url(); ?>assets/js/jquery-1.8.3.min.js"></script>
<script type="text/javascript" src="<?php echo base_url(); ?>assets/js/jquery-ui.min.js"></script>
<script type="text/javascript" src="<?php echo base_url(); ?>assets/js/modernizr.js"></script>
<script type="text/javascript" src="<?php echo base_url(); ?>assets/js/responsee.js"></script>
<style>
.news {
	height: 400px;
	background-size: cover;
	background-position: center;
}
.marg {
	margin: 10px;
}

</style>
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
<?php  
         foreach ($h->result() as $row)  
         {  
            ?>
			<?php if(($row->no%2)==1)
			{
				?>
<div class="marg line">
	<div class="s-12 l-6">
		<div class="box news" style="background-image:url(<?php echo base_url(); ?>uploads/blog/<?php echo $row->no;?>.jpg);">
		</div>
	</div>
	<div class="s-12 l-6">
		<div class="box news">
		<h2 style="font-style:italic; font-weight:900"><span class="awal-judul"></span><?php echo $row->judul;?></h2>
		<span class="span"><i class="icon-user"></i> <?php echo $row->user;?></span><span class="span"><i class="icon-calendar"></i>    <?php echo $row->tanggal;?></span>
		<div class="divider"></div>
			<p><div class="awal-paragraf"></div><?php echo $row->isi;?></p>
			<span class="span_link"><a href="<?php echo base_url();?>halaman/berita/<?php echo $row->no;?>">Read more ...</a></span>
		</div>
	</div>
</div>
<?php } else {?>
<div class="marg line">
	<div class="s-12 l-6">
	<div class="box news">
		<h2 style="font-style:italic; font-weight:900"><span class="awal-judul"></span><?php echo $row->judul;?></h2>
		<span class="span"><i class="icon-user"></i> <?php echo $row->user;?></span><span class="span"><i class="icon-calendar"></i>      <?php echo $row->tanggal;?></span>
		<div class="divider"></div>
			<p><div class="awal-paragraf"></div><?php echo $row->isi;?></p>
			<span class="span_link"><a href="<?php echo base_url();?>halaman/berita/<?php echo $row->no;?>">Read more ...</a></span>
		</div>
	</div>
	<div class="s-12 l-6">
		<div class="box news" style="background-image:url(<?php echo base_url(); ?>uploads/blog/<?php echo $row->no;?>.jpg);">
		</div>
	</div>
</div>
<?php }}
									?>
									<div class="s-12 l-2 center">
									<br />
									<a href="<?php echo base_url();?>welcome/home/<?php print_r($c); ?>">
									<button style=" width: 100%;
 background: none repeat scroll 0 0 #444444;
 border: 0 none;
 color: #FFFFFF;
 height: 2.7em;
 padding: 0.625em;
 cursor:pointer;
 width: 100px;
 transition: background 0.20s linear 0s;
 -o-transition: background 0.20s linear 0s;
 -ms-transition: background 0.20s linear 0s;
 -moz-transition: background 0.20s linear 0s;
 -webkit-transition: background 0.20s linear 0s;">Back</button>
 </a>
 
 <a href="<?php echo base_url();?>welcome/home/<?php print_r($b); ?>">
 <button style=" width: 100%;
 background: none repeat scroll 0 0 #444444;
 border: 0 none;
 color: #FFFFFF;
 height: 2.7em;
 padding: 0.625em;
 cursor:pointer;
 width: 100px;
 transition: background 0.20s linear 0s;
 -o-transition: background 0.20s linear 0s;
 -ms-transition: background 0.20s linear 0s;
 -moz-transition: background 0.20s linear 0s;
 -webkit-transition: background 0.20s linear 0s;">Next</button></a><br />

<br />
</div>