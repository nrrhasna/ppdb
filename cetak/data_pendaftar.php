<?php

include('../config/koneksi.php');
require '../vendor/autoload.php';

// reference the Dompdf namespace
use Dompdf\Dompdf;

// instantiate and use the dompdf class
$dompdf = new Dompdf();

$html = '<style>
table, th, td{
    font-size: 14px;
    border: 1px solid black;
    border-collapse: collapse;
    padding: 5px;
}
</style>

<div align="center">
    <div style="font-size: 18px;">DATA PENDAFTARAN PESERTA DIDIK BARU</div>
    <div style="font-size: 20px;"><b>SD NEGERI 1 BLATER</b></div>
    <div style="font-size: 12px;">Jl. Desa Blater, RT 05 RW 02, Kecamatan Kalimanah, Kabupaten Purbalingga, 53371</div>
</div>

<hr style="border: 0.5px solid black; margin: 10px 5px 10px 5px;">

<div style="font-size: 12px; margin-left: 5px; margin-bottom: 10px;">&nbsp; Tanggak Cetak: '. date("d-m-Y").'</div>

<table width="100%">
<tr align="center">
    <td width="3%"><b>No</b></td>
    <td width="15%"><b>Nama</b></td>
    <td width="18%"><b>Tempat, Tanggal Lahir</b></td>
    <td width="7%"><b>Jenis Kelamin</b></td>
    <td><b>Alamat</b></td>
    <td width="15%"><b>Email</b></td>
    <td width="10%"><b>Telepon</b></td>
    <td width="6%"><b>Status</b></td>
</tr>';

$all_peserta = mysqli_query($koneksi, "SELECT peserta.*, minatbakat.hobi, minatbakat.bidang_studi, minatbakat.olahraga, minatbakat.citacita, minatbakat.status 
FROM peserta, minatbakat where peserta.id = minatbakat.id_peserta order by name");

$no = 1;
while($p = mysqli_fetch_array($all_peserta)) {
    if($p['status'] == 0) {
        $status = "Baru";
    } else if($p['status'] == 1) {
        $status = "Lolos";
    } else {
        $status = "Tidak Lolos";
    }

$html .='
<tr>
    <td align="center">'. $no++ . '</td>
    <td>'. $p['name'] . '</td>
    <td>'. $p['tempat_lahir'] . ', '. $p['tanggal_lahir'] . '</td>
    <td align="center">'. $p['jenis_kelamin'] . '</td>
    <td>'. $p['alamat'] . '</td>
    <td>'. $p['email'] . '</td>
    <td>'. $p['telepon'] . '</td>
    <td align="center">'. $status . '</td>
</tr>';

}

$html .= '
</table>';

$dompdf->loadHtml($html);

// (Optional) Setup the paper size and orientation
$dompdf->setPaper('A4', 'landscape');

// Render the HTML as PDF
$dompdf->render();

// Output the generated PDF to Browser
$dompdf->stream("Data Pendaftar.pdf", array("Attachment"=>0));
?>