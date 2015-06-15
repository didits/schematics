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
.top-nav li a:hover, .top-nav li.active-item a, .top-nav .logo.active-item a:hover {
	background-color: transparent;
	opacity: .6;
}
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
	<div class="line" style="background-color:#FFEB3B;">
		<nav style=" background-color:#FBC02D;">
			<p class="nav-text">BLOG</p>
			<div class="top-nav s-12 l-12" style=" background-color:#FBC02D;">
				<ul>
					<li><a href="<?php echo base_url(); ?>blog"><i class="icon-arrow_left" style="color:white"></i> KEMBALI</a></li>
				</ul>
			</div>
		</nav>
	</div>
</header>
<!-- section 1 -->
<div class="marg line">
<?php  
         foreach ($h->result() as $row)  
         {  
            ?>
	<div class="s-12 l-12">
		<div class="box news" style="background-image:url(<?php echo base_url(); ?>uploads/<?php echo $row->no;?>.jpg);">
		</div>
	</div>
	<div class="s-12 l-9">
		<div class="box">
		<h2 style="font-style:italic; font-weight:900"><span class="awal-judul"></span><?php echo $row->judul;?></h2>
		<span class="span"><i class="icon-user"></i> Didit</span><span class="span"><i class="icon-calendar"></i> 13-12-2014</span>
		<div class="divider"></div>
			<p><div class="awal-paragraf"></div><?php echo $row->isi;?> </p>
			
		</div>
	</div>
	<div class="s-12 l-3">
		<div class="box" style="border-left:2px #CCCCCC dashed; margin-top:10px">
		<h3 style="font-style:italic; font-weight:900">Berita Terkait</h3>
		<div class="box news" style="background-image:url(<?php echo base_url(); ?>assets/gambar_home/1.jpg); height:200px">
		</div>
		</div>
	</div>
	<?php }?>
</div>

