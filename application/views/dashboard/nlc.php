<!DOCTYPE html>
<html lang="en-US">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width" />
<title>Dashboard | NLC</title>
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
			<div style="display:inline-block; width:100%; height:100px; background-color:#ff5521">
				<h2 align="center" style="line-height:100px; color:#FFF">IDENTITAS PESERTA NLC</h2>
			</div>
			<form class="customform" action="<?php echo base_url();?>dashboard/tambahnlc" method="post" enctype="multipart/form-data">
				<div class="box">
					<div id="id">
						<div style="display:inline-block; width:100%; height:auto; background-color:#f44236; margin-bottom:10px; border-radius:8px"> <?php echo validation_errors('<p class="error">'); ?> 
						<?php echo "<p class='error'>$error</p>";?></div>
						<h1>&nbsp</h1>
						<h3>Nama Kelompok * <span id="nama_kelompok_verify" class="verify" style="display:inline-block; width:16px; height:16px;"></span> </h3>
						<h4>Nama kelompok minimal 4 - 10 karakter tanpa spasi</h4>
						<input name="nama_kelompok" id="nama_kelompok" value="<?php echo set_value('nama_kelompok'); ?>" title="Nama Kelompok" type="text" required/>
						<h3>Email Ketua * <span id="email_ketua_verify" class="verify" style="display:inline-block; width:16px; height:16px;"></span></h3>
						<input name="email_ketua" id="email_ketua" title="Email Ketua" type="email" value="<?php echo set_value('email_ketua'); ?>" required/>
						<h3>Nama Sekolah * <span id="asal_sekolah_verify" class="verify" style="display:inline-block; width:16px; height:16px;"></span></h3>
						<input name="asal_sekolah" id="asal_sekolah" title="Asal Sekolah"  value="<?php echo set_value('asal_sekolah'); ?>" type="text"required />
						<h3>Alamat Sekolah * </h3>
						<h4>1. Nama Jalan <span id="nama_jalan_verify" class="verify" style="display:inline-block; width:16px; height:16px;"></span></h4>
						<input name="nama_jalan" id="nama_jalan"  title="Alamat Sekolah" type="text" value="<?php echo set_value('nama_jalan'); ?>" required/>
						<h4>2. Kabupaten/Kota * <span id="nama_kota_verify" class="verify" style="display:inline-block; width:16px; height:16px;"></span></h4>
						<input value="<?php echo set_value('nama_kota'); ?>" name="nama_kota" id="nama_kota"  title="Alamat Sekolah" type="text" required/>
						<h4>3. Provinsi * <span id="nama_provinsi_verify" class="verify" style="display:inline-block; width:16px; height:16px;"></span></h4>
						<input name="nama_provinsi" value="<?php echo set_value('nama_provinsi'); ?>" id="nama_provinsi"  title="Alamat Sekolah" type="text" required/>
					</div>
					<div> <br>
						<div class="pemisah"></div>
						<br>
						<br>
						<h3>Nama Ketua * <span id="nama_ketua_verify" class="verify" style="display:inline-block; width:16px; height:16px;"></span></h3>
						<input value="<?php echo set_value('nama_ketua'); ?>" id ="nama_ketua" name="nama_ketua" title="Nama Ketua"  type="text"  required/>
						<h3>Nomor Handphone * <span id="no_hp_ketua_verify" class="verify" style="display:inline-block; width:16px; height:16px;"></span></h3>
						<input id="no_hp_ketua" value="<?php echo set_value('no_hp_ketua'); ?>" name="no_hp_ketua" title="Nomor Handphone"  type="text" required/>
					</div>
					<div> <br>
						<div class="pemisah"></div>
						<br>
						<br>
						<h3>Nama Anggota 1 <span id="nama_anggota_1_verify" class="verify" style="display:inline-block; width:16px; height:16px;"></span></h3>
						<input id="nama_anggota_1" value="<?php echo set_value('nama_anggota_1'); ?>" name="nama_anggota_1" title="Nama Anggota 1" type="text" />
						<h3>Nomor Handphone <span id="no_hp_1_verify" class="verify" style="display:inline-block; width:16px; height:16px;"></span></h3>
						<input id="no_hp_1" name="no_hp_1" title="Nomor Handphone" value="<?php echo set_value('no_hp_1'); ?>"  type="text" />
					</div>
					<div> <br>
						<div class="pemisah"></div>
						<br>
						<br>
						<h3>Nama Anggota 2 <span id="nama_anggota_2_verify" class="verify" style="display:inline-block; width:16px; height:16px;"></span></h3>
						<input id="nama_anggota_2" value="<?php echo set_value('nama_anggota_2'); ?>" name="nama_anggota_2" title="Nama Anggota 2"  type="text" />
						<h3>Nomor Handphone <span id="no_hp_2_verify" class="verify" style="display:inline-block; width:16px; height:16px;"></span></h3>
						<input id="no_hp_2" value="<?php echo set_value('no_hp_2'); ?>" name="no_hp_2" title="Nomor Handphone"  type="text" />
					</div>
				</div>
				<div class="box">
					<div class="pemisah"></div>
					<br>
					<h3 id="ts">Tempat Seleksi * </h3>
					<div class="s-12 l-4">
						<select name="tempat_seleksi" id="tempat_seleksi"  required/>
							<option value="">pilih salah satu . . .</option>
							<option value="0">Online</option>
							<option value="1">Jakarta</option>
							<option value="2">Solo</option>
							<option value="3">Madiun</option>
							<option value="4">Surabaya</option>
							<option value="5">Malang</option>
							<option value="6">Kediri</option>
							<option value="7">Tulungaung(opsional)</option>
							<option value="8">Jember</option>
							<option value="9">Denpasar</option>
							<option value="10">Sumbawa(opsional)</option>
						</select>
					</div>
				</div>
				<div class="box">
					<div class="pemisah"></div>
					<br>
					<h3 id="up">Upload Bukti Pembayaran * </h3>
					<h4>Format file harus (.jpg) dengan ukuran maksimal 2Mb</h4>
					<div class="s-12 l-4">
						<input type="file" name="userfile" size="20" title="Pilih..." required/>
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
							<button type="submit" name='submit' value="submit" style="background-color:#06F">Submit</button>
						</div>
					</div>
				</div>
			</form>
		</div>
	</div>
	</div>
	<br>
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
            $("#nama_kelompok_verify").css({ "background-image": "url('<?php echo base_url();?>assets/images/no.png')" });
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
            $("#email_ketua_verify").css({ "background-image": "url('<?php echo base_url();?>assets/images/no.png')" });
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
	
	$("#nama_anggota_1").blur(function(){
        var nama_anggota_1 = $("#nama_anggota_1").val();
        
        if(nama_anggota_1 != 0)
        {
         
            if(isValidNamaKetua(nama_anggota_1))
            {
               $("#nama_anggota_1_verify").css({ "background-image": "url('<?php echo base_url();?>assets/images/yes.png')" });
               email_con=true;
               //register_show();
            } else {
               
                $("#nama_anggota_1_verify").css({ "background-image": "url('<?php echo base_url();?>assets/images/no.png')" });
            }
 
        }
        else {
            $("#nama_anggota_1_verify").css({ "background-image": "none" });
        }
    });
	
	$("#no_hp_1").blur(function(){
        var no_hp_1 = $("#no_hp_1").val();
        
        if(no_hp_1 != 0)
        {
         
            if(isValidNomorHPKetua(no_hp_1))
            {
               $("#no_hp_1_verify").css({ "background-image": "url('<?php echo base_url();?>assets/images/yes.png')" });
               email_con=true;
               //register_show();
            } else {
               
                $("#no_hp_1_verify").css({ "background-image": "url('<?php echo base_url();?>assets/images/no.png')" });
            }
 
        }
        else {
            $("#no_hp_1_verify").css({ "background-image": "none" });
        }
    });
	
	$("#nama_anggota_2").blur(function(){
        var nama_anggota_2 = $("#nama_anggota_2").val();
        
        if(nama_anggota_2 != 0)
        {
         
            if(isValidNamaKetua(nama_anggota_2))
            {
               $("#nama_anggota_2_verify").css({ "background-image": "url('<?php echo base_url();?>assets/images/yes.png')" });
               email_con=true;
               //register_show();
            } else {
               
                $("#nama_anggota_2_verify").css({ "background-image": "url('<?php echo base_url();?>assets/images/no.png')" });
            }
 
        }
        else {
            $("#nama_anggota_2_verify").css({ "background-image": "none" });
        }
    });
	
	$("#no_hp_2").blur(function(){
        var no_hp_2 = $("#no_hp_2").val();
        
        if(no_hp_2 != 0)
        {
         
            if(isValidNomorHPKetua(no_hp_2))
            {
               $("#no_hp_2_verify").css({ "background-image": "url('<?php echo base_url();?>assets/images/yes.png')" });
               email_con=true;
               //register_show();
            } else {
               
                $("#no_hp_2_verify").css({ "background-image": "url('<?php echo base_url();?>assets/images/no.png')" });
            }
 
        }
        else {
            $("#no_hp_2_verify").css({ "background-image": "none" });
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