<?php
//include"../config/koneksi.php";
require('html2fpdf.php');
ob_start();

?>
<html>
<head>
<title>Bukti Pendaftaran</title>

</head>
<body>
<table  width="100%" cellspacing="6" cellpadding="5" align="center" border="0">
	<tr><td colspan="2">xssa</td></tr>
    <tr><td width="150px">Id Tim</td>
        <td>: Muhamad Rizal</td>
    </tr>
    <tr><td>Nama Tim</td>
        <td>: 99</td>
    </tr>
	<tr><td>Nama Ketua</td>
        <td>: 99</td>
    </tr>
	<tr><td>Sekolah</td>
        <td>: 99</td>
    </tr>
	<tr><td>Email</td>
        <td>: 99</td>
    </tr>
	<tr><td>Tempat Tes</td>
        <td>: 99</td>
    </tr>
    <tr><td colspan="2">Menyatakan bersedia mengikuti kegiatan sekolah</td></tr>
    <tr><td colspan="2" align="right"> Bandung <br>&nbsp;<br> Muhamad Rizal
    </td></tr>
</table>


</body>
</html>
<?php
// Output-Buffer in variable:
$html=ob_get_contents();
ob_end_clean();
$pdf=new HTML2FPDF();
$pdf->AddPage();
$pdf->WriteHTML($html);
if (preg_match("/MSIE/i", $_SERVER["HTTP_USER_AGENT"])){
    header("Content-type: application/PDF");
} else {
    header("Content-type: application/PDF");
    header("Content-Type: application/pdf");
}
$pdf->Output("sample2.pdf","I");

?>