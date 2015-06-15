<!DOCTYPE html>
<html lang="en-US">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width" />
<title>Dashboard | Verifikasi Peserta NLC</title>
<link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/components.css">
<link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/responsee.css">
<!--<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700,800&subset=latin,latin-ext' rel='stylesheet' type='text/css'>-->
<script type="text/javascript" src="<?php echo base_url(); ?>assets/js/jquery-1.8.3.min.js"></script>
<script type="text/javascript" src="<?php echo base_url(); ?>assets/js/jquery-ui.min.js"></script>
<script type="text/javascript" src="<?php echo base_url(); ?>assets/js/modernizr.js"></script>
<script type="text/javascript" src="<?php echo base_url(); ?>assets/js/responsee.js"></script>

<style> 
.top-nav li a:hover, .top-nav li.active-item a, .top-nav .logo.active-item a:hover {
	background-color:transparent;
	opacity:.6;
}
h2 {
line-height: normal;
font-size:24px;
}
h3{
color:#363;
font-size:16px;
}
.pemisah{
border-bottom:#666 1px dashed;
}
</style>
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

<section>
<br>
	<div class="topline margin-bottom" style="margin:10px">
		<div class="s-12 l-5 center" style="border:#666 1px solid; padding:5px">
			<form class="customform" action="<?php echo base_url();?>dashboard/edit_nlc" method="post">
					<div class="box">
						<div id="id">
							<h2>
								<center>
									Halaman Verifikasi Peserta
								</center>
							</h2>
							<h1>&nbsp </h1>
							<h3>Nama Kelompok</h3>
							<br>
							<h3>Email Ketua</h3>
							<br>
							<h3>Asal Sekolah</h3>
							<br>
							<h3>Alamat Sekolah </h3>
							<br>
							</div>
						<div>
						<br>
						<div class="pemisah"></div>
						<br>
							<br>
							<h3>Nama Ketua</h3>
							<br>
							<h3>Nomor Handphone</h3>
							<br>
						</div>
						<div>
						<br>
						<div class="pemisah"></div>
						<br>
							<br>
							<h3>Nama Anggota 1</h3>
							<br>
							<h3>Nomor Handphone</h3>
							<br>
						</div>
						<div>
						<br>
						<div class="pemisah"></div>
						<br>
							<br>
							<h3>Nama Anggota 2</h3>
							<br>
							<h3>Nomor Handphone</h3>
							<br>
						</div>
					</div>
					<div class="box">
						<div class="pemisah"></div>
						<br>
						<h3 id="ts">Tempat Seleksi</h3>
						<div class="s-12 l-4">
							
						</div>
					</div>
					<div class="box">
					<div class="pemisah"></div>
						<br>
						<h3 id="up">Bukti Pendaftaran</h3>
						<div class="s-12 l-4">
						<br>
						</div>
					</div>
					<div class="box">
					<div class="s-12 l-6"> </div>
					<div class="s-12 l-3 center">
						<div class="box">
                        	<table>
							<button type="submit" style="background-color:#06F">Verifikasi</button>
                            <button type="submit" style="background-color:#06F">Edit</button>
							</table>
                            </div>
					</div>
					</div>
			</form>
		</div>
	</div>
	</div>
	<br>
</section>
<section>
	<footer style="background-color:#242424;padding-bottom:20px;"> <img src="<?php echo base_url(); ?>assets/img/logo.svg" style=" width:150px;margin-top:10px;margin-left:auto; margin-right:auto; display:block">
		<p align="center" style="color:#CCC">
		<a style="color:#CCC" href="https://www.facebook.com/schematicshmtc">Facebook</a> | 
		<a style="color:#CCC" href="https://twitter.com/schematics_its">Twitter</a> | 
		<a style="color:#CCC" href="https://www.instagram.com/schematics.its">Instagram</a> | 
		<a style="color:#CCC" href="https://www.ask.fm/schematics_its">Ask.fm</a></p>
		<p align="center" style="color:#CCC">Schematics 2015</p>
	</footer>
</section>
<script type="text/javascript">
$(document).ready(function(){
	$("#nama_kelompok").blur(function(){
        var nama_kelompok = $("#nama_kelompok").val();
        
        if(nama_kelompok != 0)
        {
         
            if(isValidNamaKelompok(nama_kelompok))
            {
               $("#nama_kelompok_verify").css({ "background-image": "url('<?php echo base_url();?>assets/images/yes.png')" });
               nama_kelompok=true;
               //register_show();
            } else {
               
                $("#nama_kelompok_verify").css({ "background-image": "url('<?php echo base_url();?>assets/images/no.png')" });
            }
 
        }
        else {
            $("#nama_kelompok_verify").css({ "background-image": "none" });
        }

    });
		
	$("#email_ketua").blur(function(){
        var email = $("#email_ketua").val();
        
        if(email != 0)
        {
         
            if(isValidEmailAddress(email))
            {
               $("#email_ketua_verify").css({ "background-image": "url('<?php echo base_url();?>assets/images/yes.png')" });
               email_con=true;
               //register_show();
            } else {
               
                $("#email_ketua_verify").css({ "background-image": "url('<?php echo base_url();?>assets/images/no.png')" });
            }
 
        }
        else {
            $("#email_ketua_verify").css({ "background-image": "none" });
        }

    });
	
		$("#asal_sekolah").blur(function(){
        var asal_sekolah = $("#asal_sekolah").val();
        
        if(asal_sekolah != 0)
        {
         
            if(isValidAsalSekolah(asal_sekolah))
            {
               $("#asal_sekolah_verify").css({ "background-image": "url('<?php echo base_url();?>assets/images/yes.png')" });
               email_con=true;
               //register_show();
            } else {
               
                $("#asal_sekolah_verify").css({ "background-image": "url('<?php echo base_url();?>assets/images/no.png')" });
            }
 
        }
        else {
            $("#asal_sekolah_verify").css({ "background-image": "none" });
        }

    });
	
	$("#alamat_sekolah").blur(function(){
        var alamat_sekolah = $("#alamat_sekolah").val();
        
        if(alamat_sekolah != 0)
        {
         
            if(isValidAlamatSekolah(alamat_sekolah))
            {
               $("#alamat_sekolah_verify").css({ "background-image": "url('<?php echo base_url();?>assets/images/yes.png')" });
               email_con=true;
               //register_show();
            } else {
               
                $("#alamat_sekolah_verify").css({ "background-image": "url('<?php echo base_url();?>assets/images/no.png')" });
            }
 
        }
        else {
            $("#alamat_sekolah_verify").css({ "background-image": "none" });
        }

    });
});
function isValidAlamatSekolah(alamat_sekolah) {
 		var pattern = new RegExp(/^[a-z0-9 .]{4,100}$/i);
 		return pattern.test(alamat_sekolah);
	}
function isValidAsalSekolah(asal_sekolah) {
 		var pattern = new RegExp(/^[a-z0-9 .]{4,100}$/i);
 		return pattern.test(asal_sekolah);
	}
function isValidNamaKelompok(nama_kelompok) {
 		var pattern = new RegExp(/^[a-z0-9_-]{4,16}$/i);
 		return pattern.test(nama_kelompok);
	}
function isValidEmailAddress(emailAddress) {
 		var pattern = new RegExp(/^(("[\w-\s]+")|([\w-]+(?:\.[\w-]+)*)|("[\w-\s]+")([\w-]+(?:\.[\w-]+)*))(@((?:[\w-]+\.)*\w[\w-]{0,66})\.([a-z]{2,6}(?:\.[a-z]{2})?)$)|(@\[?((25[0-5]\.|2[0-4][0-9]\.|1[0-9]{2}\.|[0-9]{1,2}\.))((25[0-5]|2[0-4][0-9]|1[0-9]{2}|[0-9]{1,2})\.){2}(25[0-5]|2[0-4][0-9]|1[0-9]{2}|[0-9]{1,2})\]?$)/i);
 		return pattern.test(emailAddress);
	}
</script>
</body>
</html>