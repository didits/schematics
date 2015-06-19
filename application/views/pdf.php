<?php
//include"../config/koneksi.php";
require("qrcode.class.php");
require('html2fpdf.php');
//require('fpdf.php'); 
ob_start();
$qr='';
?>
<html>
<head>
<title>Bukti Pendaftaran</title>

</head>
<body>
<table  width="100%" height="300px" cellspacing="6" cellpadding="5" align="center" border="1">
    <?php 
    foreach ($h->result() as $row)  
         {  
            $qr = $row->id_tim;
            ?>
    <tr><td width="200px" height="30px">Meja Pendaftaran</td>
        <td> <?php echo $row->meja;?></td>
    </tr>
    <tr><td height="30px">Id Tim</td>
        <td> <?php echo $row->id_tim;?></td>
    </tr>
    <tr><td height="30px">Nama Tim</td>
        <td> <?php echo $row->nama_kelompok;?></td>
    </tr>
	<tr><td height="30px">Nama Ketua</td>
        <td> <?php echo $row->nama_ketua;?></td>
    </tr>
    <tr><td height="30px">Nama Anggota 1</td>
        <td> <?php if($row->nama_anggota_1=='')echo '-'; else echo $row->nama_anggota_1;?></td>
    </tr>
    <tr><td height="30px">Nama Anggota 2</td>
        <td> <?php if($row->nama_anggota_2=='')echo '-'; else echo $row->nama_anggota_2;?></td>
    </tr>
	<tr><td height="30px">Sekolah</td>
        <td> <?php echo $row->nama_sekolah;?></td>
    </tr>
	<tr><td height="30px">Email</td>
        <td> <?php echo $row->email;?></td>
    </tr>
	<tr><td height="30px">Tempat Tes</td>
        <td> <?php echo $row->tempat;?></td>
    </tr>
    <tr><td height="30px">Event</td>
        <td> NLC</td>
    </tr>
    <?php }?>
</table>


</body>
</html>
<?php

// Output-Buffer in variable:
$html=ob_get_contents();
ob_end_clean();
$pdf=new HTML2FPDF();
$pdf->AddPage();
$pdf->Image('http://localhost/schematics/assets/img/bukti_nlc_head.jpg',10,10,190,0,'JPG');
$pdf->WriteHTML($html);
$pdf->Image('http://localhost/schematics/assets/img/bukti_nlc_footer.jpg',10,250,190,0,'JPG');
$qrcode = new QRcode($qr); //The string you want to encode 
$qrcode->displayFPDF($pdf, 10, 180, 70); //PDF object, X pos, Y pos, Size of the QR code 
if (preg_match("/MSIE/i", $_SERVER["HTTP_USER_AGENT"])){
    header("Content-type: application/PDF");
} else {
    header("Content-type: application/PDF");
    header("Content-Type: application/pdf");
}
$pdf->Output("bukti_pendaftaran.pdf","I");

?>
