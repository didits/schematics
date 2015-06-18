<!DOCTYPE html>
<html lang="en-US">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width" />
<title>Dashboard | NPC</title>
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
<body style="background-color:#f44236">
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
		<div style="display:inline-block; width:100%; height:100px; background-color:#ff9700">
		<h2 align="center" style="line-height:100px; color:#FFF">IDENTITAS PESERTA NPC</h2>
		</div>
			<form class="customform" action="<?php echo base_url()?>dashboard/tambahnpc" method="post" accept-charset="utf-8" enctype="multipart/form-data">
				<div class="box">
					<div id="id">
						<div style="display:inline-block; width:100%; height:auto; background-color:#f44236; margin-bottom:10px; border-radius:8px">
							<?php echo validation_errors('<p class="error">'); ?>
							<?php echo "<p class='error'>$error</p>";?>
							</div>
						<h1>&nbsp</h1>
						<h3>Nama Sekolah *<span id="asal_sekolah_verify" class="verify" style="display:inline-block; width:16px; height:16px;"></span></h3>
						<input id="asal_sekolah" value="<?php echo set_value('asal_sekolah'); ?>" name="asal_sekolah" title="Asal Sekolah" type="text"required />
						<h3>Alamat Sekolah *</h3>
						<h4>1. Nama Jalan <span id="nama_jalan_verify" class="verify" style="display:inline-block; width:16px; height:16px;"></span></h4>
						<input value="<?php echo set_value('nama_jalan'); ?>" name="nama_jalan" id="nama_jalan"  title="Alamat Sekolah" type="text" required/>
						<h4>2. Kabupaten/Kota *<span id="nama_kota_verify" class="verify" style="display:inline-block; width:16px; height:16px;"></span></h4>
						<input value="<?php echo set_value('nama_kota'); ?>"  name="nama_kota" id="nama_kota"  title="Alamat Sekolah" type="text" required/>
						<h4>3. Provinsi *<span id="nama_provinsi_verify" class="verify" style="display:inline-block; width:16px; height:16px;"></span></h4>
						<input value="<?php echo set_value('nama_provinsi'); ?>" name="nama_provinsi" id="nama_provinsi"  title="Alamat Sekolah" type="text" required/>
					</div>
					<div> <br>
						<div class="pemisah"></div>
						<br>
						<br>
						<h3>Nama Ketua *<span id="nama_ketua_verify" class="verify" style="display:inline-block; width:16px; height:16px;"></span></h3>
						<input value="<?php echo set_value('nama_ketua'); ?>" id ="nama_ketua" name="nama_ketua" title="Nama Ketua"  type="text" required//>
						<h3>Facebook Ketua </h3>
						<h4>contoh : https://www.facebook.com/schematics.its</h4>
						<input value="<?php echo set_value('fb_ketua'); ?>" name="fb_ketua" title="Face Ketua"  type="text" />
						<h3>Nomor Handphone *<span id="no_hp_ketua_verify" class="verify" style="display:inline-block; width:16px; height:16px;"></span></h3>
						<input value="<?php echo set_value('no_hp_ketua'); ?>" id="no_hp_ketua" name="no_hp_ketua" title="Nomor Handphone"  type="text" required//>
					</div>
				</div>
				<div class="box">
					<div class="pemisah"></div>
					<br>
					<h3 id="up">Upload Bukti Pembayaran *</h3>
					<h4>Format file harus (.jpg) dengan ukuran maksimal 2Mb</h4>
					<div class="s-12 l-4">
						<input type="file" name="userfile" size="20" title="Pilih...">
					</div>
				</div>
				<div class="box">
					<div style="display:inline-block; width:100%; height:auto; background-color:#fec107; margin-bottom:10px; border-radius:8px">
					<h3 style="color:#795549; margin:15px">Peringatan !</h3>
					<p style="color:#795549; margin:15px">Pastikan semua data yang Anda masukkan adalah benar karena kami tidak bertanggung jawab atas kesalahan penulisan nama Anda pada sertifikat Anda nanti.</p>
					</div>
					<p>*penting harus diisi</p>
					<div class="s-12 l-4 center">
						<div class="box">
							<button type="submit" name="submit" value="submit" style="background-color:#06F">Submit</button>
						</div>
					</div>
				</div>
			</form>
		</div>
	</div>
	</div>
	<br>
</section>
<script>
$(document).ready(function(){	
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
            $("#asal_sekolah_verify").css({ "background-image": "url('<?php echo base_url();?>assets/images/no.png')" });
        }

    });
	
	$("#nama_jalan").blur(function(){
        var nama_jalan = $("#nama_jalan").val();
        
        if(nama_jalan != 0)
        {
         
            if(isValidNamaJalan(nama_jalan))
            {
               $("#nama_jalan_verify").css({ "background-image": "url('<?php echo base_url();?>assets/images/yes.png')" });
               email_con=true;
               //register_show();
            } else {
               
                $("#nama_jalan_verify").css({ "background-image": "url('<?php echo base_url();?>assets/images/no.png')" });
            }
 
        }
        else {
            $("#nama_jalan_verify").css({ "background-image": "url('<?php echo base_url();?>assets/images/no.png')" });
        }
    });
	
		$("#nama_kota").blur(function(){
        var nama_kota = $("#nama_kota").val();
        
        if(nama_kota != 0)
        {
         
            if(isValidNamaKota(nama_kota))
            {
               $("#nama_kota_verify").css({ "background-image": "url('<?php echo base_url();?>assets/images/yes.png')" });
               email_con=true;
               //register_show();
            } else {
               
                $("#nama_kota_verify").css({ "background-image": "url('<?php echo base_url();?>assets/images/no.png')" });
            }
 
        }
        else {
            $("#nama_kota_verify").css({ "background-image": "url('<?php echo base_url();?>assets/images/no.png')" });
        }
    });
	
		$("#nama_provinsi").blur(function(){
        var nama_provinsi = $("#nama_provinsi").val();
        
        if(nama_provinsi != 0)
        {
         
            if(isValidNamaProvinsi(nama_provinsi))
            {
               $("#nama_provinsi_verify").css({ "background-image": "url('<?php echo base_url();?>assets/images/yes.png')" });
               email_con=true;
               //register_show();
            } else {
               
                $("#nama_provinsi_verify").css({ "background-image": "url('<?php echo base_url();?>assets/images/no.png')" });
            }
 
        }
        else {
            $("#nama_provinsi_verify").css({ "background-image": "url('<?php echo base_url();?>assets/images/no.png')" });
        }
    });
	
	$("#nama_ketua").blur(function(){
        var nama_ketua = $("#nama_ketua").val();
        
        if(nama_ketua != 0)
        {
         
            if(isValidNamaKetua(nama_ketua))
            {
               $("#nama_ketua_verify").css({ "background-image": "url('<?php echo base_url();?>assets/images/yes.png')" });
               email_con=true;
               //register_show();
            } else {
               
                $("#nama_ketua_verify").css({ "background-image": "url('<?php echo base_url();?>assets/images/no.png')" });
            }
 
        }
        else {
            $("#nama_ketua_verify").css({ "background-image": "url('<?php echo base_url();?>assets/images/no.png')" });
        }
    });
	
	$("#no_hp_ketua").blur(function(){
        var no_hp_ketua = $("#no_hp_ketua").val();
        
        if(no_hp_ketua != 0)
        {
         
            if(isValidNomorHPKetua(no_hp_ketua))
            {
               $("#no_hp_ketua_verify").css({ "background-image": "url('<?php echo base_url();?>assets/images/yes.png')" });
               email_con=true;
               //register_show();
            } else {
               
                $("#no_hp_ketua_verify").css({ "background-image": "url('<?php echo base_url();?>assets/images/no.png')" });
            }
 
        }
        else {
            $("#no_hp_ketua_verify").css({ "background-image": "url('<?php echo base_url();?>assets/images/no.png')" });
        }
    });
	
});

function isValidNomorHPKetua(nomor_hp_ketua) {
 		var pattern = new RegExp(/^[0-9]{4,20}$/i);
 		return pattern.test(nomor_hp_ketua);
	}
function isValidNamaKetua(nama_ketua) {
 		var pattern = new RegExp(/^[a-z .]{4,50}$/i);
 		return pattern.test(nama_ketua);
	}
function isValidNamaProvinsi(nama_provinsi) {
 		var pattern = new RegExp(/^[a-z0-9 .]{4,50}$/i);
 		return pattern.test(nama_provinsi);
	}
function isValidNamaKota(nama_kota) {
 		var pattern = new RegExp(/^[a-z0-9 .]{4,50}$/i);
 		return pattern.test(nama_kota);
	}
function isValidNamaJalan(nama_jalan) {
 		var pattern = new RegExp(/^[a-z0-9 .]{4,100}$/i);
 		return pattern.test(nama_jalan);
	}
function isValidAsalSekolah(asal_sekolah) {
 		var pattern = new RegExp(/^[a-z0-9 .]{4,100}$/i);
 		return pattern.test(asal_sekolah);
	}
</script>
</body>
</html>