<!DOCTYPE html>
<html lang="en-US">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width" />
<title>User</title>
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
<body style="background-color:#354044">
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
		<div class="s-12 l-6 center" style="padding:5px">
			<form class="customform" action="<?php echo base_url();?>user/logout" method="post">
				<div class="box">
					<div style=" color:#FFF; display:block; width:100%; height:auto; background-color:#8bc24a; border-radius:5px">
						<p style="line-height:50px;" align="center">Verifikasi Berhasil, harap mencetak <a href="s"><span style="border-bottom:#FFF dotted 1px">bukti pendaftaran</span></a></p>
					</div>
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
					<div class="s-12 l-6"> </div>
					<div class="s-12 l-4 center">
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
<section>
	<footer style="background-color:#242424;padding-bottom:20px;"> <img src="<?php echo base_url(); ?>assets/img/logo.svg" style=" width:150px;margin-top:10px;margin-left:auto; margin-right:auto; display:block">
		<p align="center" style="color:#CCC"> <a style="color:#CCC" href="https://www.facebook.com/schematicshmtc">Facebook</a> | <a style="color:#CCC" href="https://twitter.com/schematics_its">Twitter</a> | <a style="color:#CCC" href="https://www.instagram.com/schematics.its">Instagram</a> | <a style="color:#CCC" href="https://www.ask.fm/schematics_its">Ask.fm</a></p>
		<p align="center" style="color:#CCC">Schematics 2015</p>
	</footer>
</section>
</body>
</html>