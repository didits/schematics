<!DOCTYPE html>
<html lang="en-US">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width" />
<title>Buat Akun | Schematics 2015</title>
<link rel="shortcut icon"  href="<?php echo base_url(); ?>assets/img/icon.ico">
<link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/components.css">
<link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/responsee.css">
<link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/animate.css">
<script type="text/javascript" src="<?php echo base_url(); ?>assets/js/jquery-1.8.3.min.js"></script>
<script type="text/javascript" src="<?php echo base_url(); ?>assets/js/modernizr.js"></script>
<script type="text/javascript" src="<?php echo base_url(); ?>assets/js/responsee.js"></script>
<!--[if lt IE 9]>
<script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
<![endif]-->
</head>
<body style="background-image:url(<?php echo base_url();?>assets/img/pattern-1.svg); background-repeat:repeat-y; background-size:cover">
<!-- HEADER -->
<header> 
		<!-- TOP NAV -->
		<div class="line" style="background-color:#FFF" >
			<div class="l-1 s-12 hide-s" > <a href="<?php echo base_url(); ?>buat_akun"><img src="<?php echo base_url(); ?>assets/img/logo.svg" style="height:50px; margin-top:3px" class="center"/></a> </div>
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
<section> <br>
	<div class="topline margin-bottom wow fadeInDown" style="margin:10px">
		<div class="s-12 l-4 center" style="min-height:100vh">
		<div style="display:inline-block; width:100%; height:100px; background-color:#9c26b0">
		<h2 align="center" style="line-height:100px; color:#FFF">BUAT AKUN</h2>
		</div>
			<div class="box">
				<form class="customform" action="<?php echo base_url();?>user/registration" method="post">
					<div style="display:inline-block; width:100%; height:auto; background-color:#f44236; margin-bottom:10px; border-radius:8px">
					<?php echo validation_errors('<p class="error">'); ?>
					</div>
					<h3>Email <span id="email_verify" class="verify" style="display:inline-block; width:16px; height:16px;"></span></h3>
					<h4>Satu akun email hanya untuk satu event</h4>
					<input type="text" id="email_address" name="email_address" value="<?php echo set_value('email_address'); ?>" required />
					<h3>Password <span id="password_verify" class="verify" style="display:inline-block; width:16px; height:16px;"></span></h3>
					<h4>Password minimal 6 karakter, tidak mengandung spasi dan tanda petik</h4>
					<input type="password" id="password" name="password" value="<?php echo set_value('password'); ?>" required />
					<h3>Verifikasi Password <span id="confrimpwd_verify" class="verify" style="display:inline-block; width:16px; height:16px;"></span></h3>
					<input type="password" id="con_password" name="con_password" value="<?php echo set_value('con_password'); ?>" required />
					<h3 id="ts">Event</h3>
					<div class="s-12 l-4 margin-bottom">
						<select name="event" id="event">
							<option value="" >pilih salah satu . . .</option>
							<option value="NLC">NLC</option>
							<option value="NPC">NPC</option>
						</select>
					</div>
					
						<div class="s-12 l-5 center">
								<button type="submit" style="background-color:#06F" class="button">BUAT</button>
						</div>
				</form>
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
<script type="text/javascript">
$(document).ready(function(){
		
	$("#email_address").blur(function(){
        var email = $("#email_address").val();
        
        if(email != 0)
        {
         
            if(isValidEmailAddress(email))
            {
               $("#email_verify").css({ "background-image": "url('<?php echo base_url();?>assets/images/yes.png')" });
               email_con=true;
               //register_show();
            } else {
               
                $("#email_verify").css({ "background-image": "url('<?php echo base_url();?>assets/images/no.png')" });
            }
 
        }
        else {
            $("#email_verify").css({ "background-image": "url('<?php echo base_url();?>assets/images/no.png')" });
        }

    });
	
	$("#password").blur(function(){
        var password = $("#password").val();
        
        if($("#password").val().length >=6)
        {
         
            if(isValidPassword(password))
            {
               $("#password_verify").css({ "background-image": "url('<?php echo base_url();?>assets/images/yes.png')" });
               email_con=true;
               //register_show();
            } else {
               
                $("#password_verify").css({ "background-image": "url('<?php echo base_url();?>assets/images/no.png')" });
            }
 
        }
        else {
            $("#password_verify").css({ "background-image": "url('<?php echo base_url();?>assets/images/no.png')" });
        }

    });
    
});

function isValidPassword(password) {
 		var pattern = new RegExp(/^[a-z0-9_-]{6,32}$/i);
 		return pattern.test(password);
	}
function isValidEmailAddress(emailAddress) {
 		var pattern = new RegExp(/^(("[\w-\s]+")|([\w-]+(?:\.[\w-]+)*)|("[\w-\s]+")([\w-]+(?:\.[\w-]+)*))(@((?:[\w-]+\.)*\w[\w-]{0,66})\.([a-z]{2,6}(?:\.[a-z]{2})?)$)|(@\[?((25[0-5]\.|2[0-4][0-9]\.|1[0-9]{2}\.|[0-9]{1,2}\.))((25[0-5]|2[0-4][0-9]|1[0-9]{2}|[0-9]{1,2})\.){2}(25[0-5]|2[0-4][0-9]|1[0-9]{2}|[0-9]{1,2})\]?$)/i);
 		return pattern.test(emailAddress);
	}
</script>