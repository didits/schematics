<!DOCTYPE html>
<html lang="en-US">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width" />
<title>NLC | Schematics 2015</title>
<link rel="stylesheet" href="<?php echo base_url();?>assets/css/components.css">
<link rel="stylesheet" href="<?php echo base_url();?>assets/css/responsee.css">
<!--<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700,800&subset=latin,latin-ext' rel='stylesheet' type='text/css'>-->
<script type="text/javascript" src="<?php echo base_url();?>assets/js/jquery-1.8.3.min.js"></script>
<script type="text/javascript" src="<?php echo base_url();?>assets/js/jquery-ui.min.js"></script>
<script type="text/javascript" src="<?php echo base_url();?>assets/js/modernizr.js"></script>
<script type="text/javascript" src="<?php echo base_url();?>assets/js/responsee.js"></script>
<!--[if lt IE 9]>
<script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
<![endif]-->
</head>
<body style="background-color:#fff">
<!-- HEADER -->
<header>
	<div class="line">
		<div style="height:60vh; background-position:center; background-size:cover; background-image:url(<?php echo base_url();?>assets/img/quiz_nlc.jpg)"></div>
	</div>
</header>
<header>
	<div class="line" style="border-bottom:#333 1px solid">
		<nav>
			<p class="nav-text">Quiz NLC</p>
			<div class="top-nav s-12 l-12">
				<ul>
					<li><a href="<?php echo base_url();?>nlc"><i class="icon-arrow_left"></i> KEMBALI</a></li>
				</ul>
			</div>
		</nav>
	</div>
</header>
<section>
	<div class="box">
		<div class="s-12 l-8 center">
			<div id="page-wrap">
				<h1>Quiz NLC</h1>
				<p><strong>Berikut ini adalah beberapa contoh soal NLC yang dapat digunakan untuk menguji kemampuan logika Anda:</strong></p>
				<br>
				<div class="pemisah"></div>
				<br>
				<?php echo form_open("nlc/result"); ?>
					<ol>
						<li>
							<h3>Diketahui sebuah persamaan alfa numerik sebagai berikut (AA)<sup>B</sup> = ABBA </h3>
							<div>
								<input type="radio" name="question-1-answers" id="question-1-answers-A" value="A" />
								<label for="question-1-answers-A">A) 1 </label>
							</div>
							<div>
								<input type="radio" name="question-1-answers" id="question-1-answers-B" value="B" />
								<label for="question-1-answers-B">B) 2</label>
							</div>
							<div>
								<input type="radio" name="question-1-answers" id="question-1-answers-C" value="C" />
								<label for="question-1-answers-C">C) 3</label>
							</div>
							<div>
								<input type="radio" name="question-1-answers" id="question-1-answers-D" value="D" />
								<label for="question-1-answers-D">D) 4</label>
							</div>
							<div>
								<input type="radio" name="question-1-answers" id="question-1-answers-E" value="E" />
								<label for="question-1-answers-E">E) 5</label>
							</div>
						</li>
						<br>
						<li>
							<h3>Sederet kartu remi dengan angka terbilang dari 8 hingga As (7 kartu) tersusun dari kiri kekanan dengan aturan seperti berikut:
								<ul>
									<li>Kartu As berada 2 kartu di sebelah kartu 9 (di antaranyaada 1 kartu) </li>
									<li>Kartu 8 berada di antara kartu King dan kartu 10 </li>
									<li>Kartu King berada 4 kartu di sebelah kartu As (di antaranya ada 3 kartu)</li>
									<li>Kartu Jack ada tepat di sebelah kanan kartu As </li>
									<li>Kartu Queen tepat berada di tengah </li>
									<li>Kartu Jack ada di kanan kartu 10 </li>
								</ul>
								Dari informasi diatas, maka dapat disimpulkan bahwa susunan kartu yang tepat adalah: </h3>
							<div>
								<input type="radio" name="question-2-answers" id="question-2-answers-A" value="A" />
								<label for="question-2-answers-A">A) A-J-9-Q-10-8-K </label>
							</div>
							<div>
								<input type="radio" name="question-2-answers" id="question-2-answers-B" value="B" />
								<label for="question-2-answers-B">B) A-J-9-Q-K-8-10 </label>
							</div>
							<div>
								<input type="radio" name="question-2-answers" id="question-2-answers-C" value="C" />
								<label for="question-2-answers-C">C) 10-8-K-Q-A-J-9 </label>
							</div>
							<div>
								<input type="radio" name="question-2-answers" id="question-2-answers-D" value="D" />
								<label for="question-2-answers-D">D) K-8-10-Q-A-J-9</label>
							</div>
							<div>
								<input type="radio" name="question-2-answers" id="question-1-answers-E" value="E" />
								<label for="question-2-answers-E">E) 10-8-K-Q-9-A-J</label>
							</div>
						</li>
						<br>
						<li>
							<h3>Berapakah A + B + C + D?</h3>
							<img src="<?php echo base_url();?>assets/quiz_nlc/img/soal3.svg" style="width:250px;">
							<div>
								<input type="radio" name="question-3-answers" id="question-3-answers-A" value="A" />
								<label for="question-3-answers-A">A) 15</label>
							</div>
							<div>
								<input type="radio" name="question-3-answers" id="question-3-answers-B" value="B" />
								<label for="question-3-answers-B">B) 16</label>
							</div>
							<div>
								<input type="radio" name="question-3-answers" id="question-3-answers-C" value="C" />
								<label for="question-3-answers-C">C) 19</label>
							</div>
							<div>
								<input type="radio" name="question-3-answers" id="question-3-answers-D" value="D" />
								<label for="question-3-answers-D">D) 20</label>
							</div>
							<div>
								<input type="radio" name="question-3-answers" id="question-3-answers-E" value="E" />
								<label for="question-3-answers-E">E) 23</label>
							</div>
						</li>
						<br>
						<li>
							<h3>Dua dadu sisi-sisinya dicat biru dan hitam. Dadu pertama terdiri dari 2 sisi warna biru dan 4 sisi warna hitam. 
								Ketika kedua dadu tersebut dilempar, peluang munculnya sisi dadu yang berwarna sama adalah  4/9 , 
								ada berapa banyakkah sisi dadu berwarna biru dan hitam pada kedua dadu tersebut?</h3>
							<div>
								<input type="radio" name="question-4-answers" id="question-4-answers-A" value="A" />
								<label for="question-4-answers-A">A) Biru : 6, Hitam : 6</label>
							</div>
							<div>
								<input type="radio" name="question-4-answers" id="question-4-answers-B" value="B" />
								<label for="question-4-answers-B">B) Biru : 4, Hitam : 8</label>
							</div>
							<div>
								<input type="radio" name="question-4-answers" id="question-4-answers-C" value="C" />
								<label for="question-4-answers-C">C) Biru : 8, Hitam : 4</label>
							</div>
							<div>
								<input type="radio" name="question-4-answers" id="question-4-answers-D" value="D" />
								<label for="question-4-answers-D">D) Biru : 5, Hitam : 7</label>
							</div>
							<div>
								<input type="radio" name="question-4-answers" id="question-4-answers-E" value="E" />
								<label for="question-4-answers-E">E) Biru : 5, Hitam : 7</label>
							</div>
						</li>
						<br>
						<li>
							<h3>Satu hari Coreng sedang bermain listrik dengan teman sekamarnya yang bernama Fajar dari Jurusan Teknik Elektro. 
								Dia dan temannya membuat mainan tombol listrik yang berbentuk:</h3>
							<img src="<?php echo base_url();?>assets/quiz_nlc/img/soal4.1.svg" style="width:250px;">
							<h3>Peraturan permainan lampu ini yaitu jika suatu tombol ditekan maka tombol dengan nama yang sama akan berubah dari mati ke hidup atau hidup ke mati, 
								namun tombol yang ditekan tidak akan berubah.
								Jika Fajar memberi pertanyaan ke Coreng, mana dari ke lima kemungkinan di bawah yang tidak bisa dibentuk dari 2 kali menekan tombol? </h3>
							<table style="width:250px; border:none; background-color:#FFF;">
								<tr>
									<td><input type="radio" name="question-5-answers" id="question-5-answers-A" value="A" />
										<label for="question-5-answers-A"> A) </label></td>
									<td><span style=" color:#FFF"> s</span><img src="<?php echo base_url();?>assets/quiz_nlc/img/soal4.a.svg" style="width:132px;"></td>
								</tr>
								<tr>
									<td><input type="radio" name="question-5-answers" id="question-5-answers-B" value="B" />
										<label for="question-5-answers-B"> B)</label></td>
									<td><img src="<?php echo base_url();?>assets/quiz_nlc/img/soal4.b.svg" style="width:150px;"></td>
								</tr>
								<tr>
									<td><input type="radio" name="question-5-answers" id="question-5-answers-C" value="C" />
										<label for="question-5-answers-C">C)</label></td>
									<td><img src="<?php echo base_url();?>assets/quiz_nlc/img/soal4.c.svg" style="width:150px;"></td>
								</tr>
								<tr>
									<td><input type="radio" name="question-5-answers" id="question-5-answers-D" value="D" />
										<label for="question-5-answers-D">D)</label></td>
									<td><img src="<?php echo base_url();?>assets/quiz_nlc/img/soal4.d.svg" style="width:150px;"></td>
								</tr>
								<tr>
									<td><input type="radio" name="question-5-answers" id="question-5-answers-E" value="E" />
										<label for="question-5-answers-E">E)</label></td>
									<td><img src="<?php echo base_url();?>assets/quiz_nlc/img/soal4.e.svg" style="width:150px;"></td>
								</tr>
							</table>
						</li>
						<br>
						<li>
							<h3>3, 6, 11, 18, y, z, 59, 78. <br>
								Berapakah nilai z?</h3>
							<div>
								<input type="radio" name="question-6-answers" id="question-6-answers-A" value="A" />
								<label for="question-6-answers-A">A) 30</label>
							</div>
							<div>
								<input type="radio" name="question-6-answers" id="question-6-answers-B" value="B" />
								<label for="question-6-answers-B">B) 38</label>
							</div>
							<div>
								<input type="radio" name="question-6-answers" id="question-6-answers-C" value="C" />
								<label for="question-6-answers-C">C) 42</label>
							</div>
							<div>
								<input type="radio" name="question-6-answers" id="question-6-answers-D" value="D" />
								<label for="question-6-answers-D">D) 51</label>
							</div>
							<div>
								<input type="radio" name="question-6-answers" id="question-6-answers-E" value="E" />
								<label for="question-6-answers-E">E) 58</label>
							</div>
						</li>
						<br>
						<li>
							<h3>M, V, B, M, J, S, U, ? <br>
								Jawaban yang tepat untuk mengisi tanda tanya adalah… </h3>
							<div>
								<input type="radio" name="question-7-answers" id="question-7-answers-A" value="A" />
								<label for="question-7-answers-A">A) M</label>
							</div>
							<div>
								<input type="radio" name="question-7-answers" id="question-7-answers-B" value="B" />
								<label for="question-7-answers-B">B) K</label>
							</div>
							<div>
								<input type="radio" name="question-7-answers" id="question-7-answers-C" value="C" />
								<label for="question-7-answers-C">C) N</label>
							</div>
							<div>
								<input type="radio" name="question-7-answers" id="question-7-answers-D" value="D" />
								<label for="question-7-answers-D">D) T</label>
							</div>
							<div>
								<input type="radio" name="question-7-answers" id="question-7-answers-E" value="E" />
								<label for="question-7-answers-E">E) a, b, c, d salah</label>
							</div>
						</li>
						<br>
						<li>
							<h3>Nalcy has twelve black socks and twelve white socks in her drawer.
								In complete darkness, and without looking, how many socks must she take from the drawer in order to be sure to get a pair that match? </h3>
							<div>
								<input type="radio" name="question-8-answers" id="question-8-answers-A" value="A" />
								<label for="question-8-answers-A">A) 2</label>
							</div>
							<div>
								<input type="radio" name="question-8-answers" id="question-8-answers-B" value="B" />
								<label for="question-8-answers-B">B) 3</label>
							</div>
							<div>
								<input type="radio" name="question-8-answers" id="question-8-answers-C" value="C" />
								<label for="question-8-answers-C">C) 12</label>
							</div>
							<div>
								<input type="radio" name="question-8-answers" id="question-8-answers-D" value="D" />
								<label for="question-8-answers-D">D) 13</label>
							</div>
							<div>
								<input type="radio" name="question-8-answers" id="question-8-answers-E" value="E" />
								<label for="question-8-answers-E">E) None of the above</label>
							</div>
						</li>
						<br>
						<li>
							<h3>Setelah perampokan Kantor Pos setempat, lima tersangka sedang diwawancarai.Di bawah ini adalah ringkasan laporan mereka.<br>
								<br>
								Brian mengatakan: Bukan Charles, Itu Alan<br>
								Derek berkata: Itu Charles, Bukan Alan <br>
								Charles mengatakan: Itu Brian, Bukan Eric <br>
								Alan mengatakan: Itu Eric, Bukan Brian <br>
								Eric mengatakan: Itu Derek, Itu Alan <br>
								<br>
								Polisi tahu bahwa setiap dari mereka mengatakan kebenaran dalam salah satu pernyataan dan berbohong di lain. Dari informasi ini tentukan siapa yang melakukan kejahatan? </h3>
							<div>
								<input type="radio" name="question-9-answers" id="question-9-answers-A" value="A" />
								<label for="question-9-answers-A">A) Alan</label>
							</div>
							<div>
								<input type="radio" name="question-9-answers" id="question-9-answers-B" value="B" />
								<label for="question-9-answers-B">B) Brian</label>
							</div>
							<div>
								<input type="radio" name="question-9-answers" id="question-9-answers-C" value="C" />
								<label for="question-9-answers-C">C) Charles</label>
							</div>
							<div>
								<input type="radio" name="question-9-answers" id="question-9-answers-D" value="D" />
								<label for="question-9-answers-D">D) Derek</label>
							</div>
							<div>
								<input type="radio" name="question-9-answers" id="question-9-answers-E" value="E" />
								<label for="question-9-answers-E">E) Erik</label>
							</div>
						</li>
						<br>
						<li>
							<h3>How many lines are there in this picture below</h3>
							<img src="<?php echo base_url();?>assets/quiz_nlc/img/soal10.svg" style="width:350px;">
							<div>
								<input type="radio" name="question-10-answers" id="question-10-answers-A" value="A" />
								<label for="question-10-answers-A">A) 10</label>
							</div>
							<div>
								<input type="radio" name="question-10-answers" id="question-10-answers-B" value="B" />
								<label for="question-10-answers-B">B) 13</label>
							</div>
							<div>
								<input type="radio" name="question-10-answers" id="question-10-answers-C" value="C" />
								<label for="question-10-answers-C">C) 16</label>
							</div>
							<div>
								<input type="radio" name="question-10-answers" id="question-10-answers-D" value="D" />
								<label for="question-10-answers-D">D) 17</label>
							</div>
							<div>
								<input type="radio" name="question-10-answers" id="question-10-answers-E" value="E" />
								<label for="question-10-answers-E">E) a, b, c, and d are false</label>
							</div>
						</li>
					</ol>
					<br>
					<div class="s-12 l-2 center">
						<input type="text" name="check" value="cek" hidden="hidden">
						<button type="submit" class="button" style="background-color:#03F">SUBMIT</button>
					</div>
				<?php echo form_close(); ?>
			</div>
		</div>
	</div>
</section>