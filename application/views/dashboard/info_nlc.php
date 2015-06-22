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
<body style="background-color:#ffe93b">
<!-- HEADER -->
<header>
	<div class="line">
		<nav>
			<p class="nav-text">MENU</p>
			<div class="top-nav s-12 l-12">
				<ul>
					<li><a href="<?php echo base_url(); ?>user/logout">LOGOUT</a></li>
				</ul>
			</div>
		</nav>
	</div>
</header>
<section> <br>
	<div class="topline margin-bottom" style="margin:10px">
		<div class="s-12 l-5 center" style=" padding:5px">
			<div  style="display:inline-block; width:100%; height:100px; background-color:#019587">
				<h2 align="center" style="line-height:100px; color:#FFF">VERIFIKASI BERHASIL</h2>
			</div>
				<div class="box">
		<p style="line-height:50px; font-size:24px" align="center">Harap mencetak bukti pendaftaran! <BR></p>
		<P align="center"><br><a href="<?php echo base_url();?>dashboard/bukti_pendaftaran" target="_blank"><span style="background-color:#8bc24a" class="button">BUKTI PENDAFTARAN</span></a></P>
					<br>
					<div class="pemisah"></div>
				</div>
				<div class="box">
					<div class="line">
					<h2>Informasi Penting!</h2>
						<table>
							<thead>
								<tr>
									<th width="15px">No.</th>
									<th>Informasi</th>
								</tr>
							</thead>
							<tbody>
							<?php foreach ($h->result() as $row){?>
								<tr>
									<td><?php echo $row->no;?></td>
									<td><?php echo $row->informasi;?></td>
								</tr>
							<?php }?>
							</tbody>
						</table>
					</div>
				</div>
		</div>
	</div>
	<br>
</section>
