<!DOCTYPE html>
<html lang="en-US">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width" />
<title>FAQ | Schematics 2015</title>
<link rel="shortcut icon"  href="<?php echo base_url(); ?>assets/img/icon.ico">
<link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/components.css">
<link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/responsee.css">
<script type="text/javascript" src="<?php echo base_url(); ?>assets/js/jquery-1.8.3.min.js"></script>
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
font-weight:600;
font-size:20px;
}
.pemisah{
border-bottom:#666 1px dashed;
}
ol{
	margin-left:-20px;
}
p{
	line-height:30px;
}
.faq_question {
    margin: 0px;
    padding: 0px 0px 5px 0px;
    display: inline-block;
    cursor: pointer;
    font-weight: bold;
}
 
.faq_answer_container {
    height: 0px;
    overflow: hidden;
    padding: 0px;
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
<header>
<div class="line">
<div style="background:url('<?php echo base_url(); ?>assets/images/Compass.png'), #fec107; height:50vh; background-position:center; 
		background-size:contain; background-repeat:no-repeat;"></div>
</header>
<section>
<script>
 $(document).ready(function() {
 
    $('.faq_question').click(function() {
 
        if ($(this).parent().is('.open')){
            $(this).closest('.faq').find('.faq_answer_container').animate({'height':'0'},500);
            $(this).closest('.faq').removeClass('open');
 
            }else{
                var newHeight =$(this).closest('.faq').find('.faq_answer').height() +'px';
                $(this).closest('.faq').find('.faq_answer_container').animate({'height':newHeight},500);
                $(this).closest('.faq').addClass('open');
            }
 
    });
 
});
</script>
<div class="box">
<div class="s-12 l-8 center">
<h1 align="left" style="color:#666;">FREQUENTLY ASKED QUESTION</h1>
<p align="left" style="color:#666;">FAQ (FREQUENTLY ASKED QUESTION) adalah kumpulan pertanyaan yang biasanya ditanyakan oleh peserta, orang tua peserta, maupun kerabat dekat yang lain. Apabila pertanyaan yang kamu tanyakan tidak terdapat pada daftar pertanyaan di bawah ini, maka kamu bisa langsung menghubungi CP (Contact Person) yang tersedia di bagian bawah halaman ini. Ayo, cari tau semua hal yang kamu ingin ketahui!</p>
<br>
<div class="pemisah"></div>
<br>
<ol type="A">
	<li>
		<h3>Pre Pendaftaran</h3>
		<ol type="1">
			<li>
				<div class="faq_container">
   				<div class="faq">
      			<div class="faq_question">Kak, saya mau daftar nih. Gimana ya caranya?</div>
           		<div class="faq_answer_container">
              	<div class="faq_answer">Ada 2 jalur yang bisa dilalui. Langsung aja isi di webnya atau cari panitia terdekat. rinciannya bisa cek di video berikut.</div>
           	</div>        
    		</div>
 			</div>
			</li>
			<li>
				<div class="faq_container">
   				<div class="faq">
      			<div class="faq_question">Pertanyaan 2</div>
           		<div class="faq_answer_container">
              	<div class="faq_answer">Jawaban 2</div>
           </div>        
    		</div>
 			</div>
		</ol>
		<br>
		<div class="pemisah"></div>
		<br>
	<li>
		<h3>Saat Pendaftaran</h3>
		<ol type="1">
			<li>
			    <div class="faq_container">
			    <div class="faq">
      		    <div class="faq_question">Kak, kan saya dari daerah di luar 10 daerah yang tercantum untuk penyisihan offline. itu saya isi apa ya untuk penyisihannya?</div>
           		<div class="faq_answer_container">
              	<div class="faq_answer">Adek bisa pilih daerah yang paling dekat dari daerah tempat tinggal adek. Adek bisa ikut penyisihan online kok. Akan tetapi, penyisihan online diprioritaskan untuk daerah luar Jawa.</div>
            </div>        
    		</div>
 			</div>
			<li>
				<div class="faq_container">
   				<div class="faq">
      			<div class="faq_question">Kak bukti pendaftaran saya kok belum muncul di dashboard?</div>
           		<div class="faq_answer_container">
              	<div class="faq_answer">Tunggu dengan sabar ya dek. Ini masih di proses. Jika H-1 penutupan pendaftaran masih belum muncul, silahkan hubungi contact person yang tertera di bawah ini.</div>
            </div>        
    		</div>
 			</div>
		</ol>
	</li>
	<br>
		<div class="pemisah"></div>
		<br>
	<li>
		<h3>Post Pendaftaran</h3>
		<ol type="1">
			<li>
				<div class="faq_container">
   				<div class="faq">
      			<div class="faq_question">Kak, sertifikanya nanti pasti dapat pada saat Hari-H pelaksanaan kan?</div>
           		<div class="faq_answer_container">
              	<div class="faq_answer">Iya adek. jika memang ada permasalahan, maka akan kami usahakan paling lambat H+7 acara sudah terkirimkan. Silahkan di lihat di TU masing-masing ya.</div>
           </div>        
    </div>
 </div>
			<li>
				<div class="faq_container">
   				<div class="faq">
      			<div class="faq_question">Pertanyaan 2</div>
           		<div class="faq_answer_container">
              	<div class="faq_answer">Jawaban 2</div>
            </div>        
    		</div>
 			</div>
		</ol>
		</li>
	<br>
		<div class="pemisah"></div>
		<br>
	<li>
		<h3>Lainnya</h3>
		<ol type="1">
			<li>
				<div class="faq_container">
   				<div class="faq">
      			<div class="faq_question">Pertanyaan 1</div>
           		<div class="faq_answer_container">
              	<div class="faq_answer">Jawaban 1</div>
            </div>        
    		</div>
 			</div>
			<li>
				<div class="faq_container">
   				<div class="faq">
      			<div class="faq_question">Pertanyaan 2</div>
           		<div class="faq_answer_container">
              	<div class="faq_answer">Jawaban 2</div>
            </div>        
    		</div>
 			</div>
		</ol>
        <h3>Contact Person</h3>
        <div class="line">
            <div class="margin">
               <div class="s-12 l-4 margin-bottom">
                  <div class="menu-img">
                     <a href="#popup1"><img src="img/7.jpg"></a>
                  </div>
               </div>
               <div class="s-12 l-4 margin-bottom">
                  <div class="menu-img">
                     <a href="#popup2"><img src="img/1.jpg"></a>
                  </div>
               </div>
            </div>
        </div>
        <div id="popup1" class="overlay">
            <div class="popup">
               <h2>Contact Person Per Daerah</h2>
               <a class="close" href="#">&times;</a>
               <div class="content">Surabaya    : Nuning 085851088432, Kurnia 082338937095, Jeffry 082143666656 <br>
                Malang      : Umy 083862761541, Rina 081239679679 <br>
                Kediri      : Novita 087852277313, Winda 085737486339 <br>
                Jember      : Sari 0899384764, Raras 082330504745 <br>
                Madiun      : Usaid 085641579000, Diyanah 085659273351 <br>
                Solo        : Ine 085643181415, Bella 085641889903 <br>
                Jabodetabek : Fathi 08776964471, Afiif 083830183448 <br>
                Denpasar    : Dwi 085737294027, Nobby 085792097124 <br>
                Tulungagung : Arya 085739030201, Nurul 083849982616 <br>
                Sumbawa     : Arga 081357467336, Sita 08995671472 <br>
                </div>
               <br>
               <br>
            </div>
         </div>
         <div id="popup2" class="overlay">
            <div class="popup">
               <h2>Permasalahan lainnya</h2>
               <a class="close" href="#">&times;</a>
               <div class="content">Azkaa 085755639606</div>
               <br>
               <br>
            </div>
         </div>
		<ol type="1">
			<li>
				<div class="faq_container">
   				<div class="faq">
      			<div class="faq_question">Pertanyaan 1</div>
           		<div class="faq_answer_container">
              	<div class="faq_answer">Jawaban 1</div>
            </div>        
    		</div>
 			</div>
			<li>
				<div class="faq_container">
   				<div class="faq">
      			<div class="faq_question">Pertanyaan 2</div>
           		<div class="faq_answer_container">
              	<div class="faq_answer">Jawaban 2</div>
            </div>        
    		</div>
 			</div>
		</ol>
</ol>
</div>
</div>
</section>
