<?php

include('../config/koneksi.php');
require '../vendor/autoload.php';

// reference the Dompdf namespace
use Dompdf\Dompdf;

// instantiate and use the dompdf class
$dompdf = new Dompdf();

$html = '<style>
table, th, td{
    padding: 5px;
}
</style>

<div align="center">
    <div style="font-size: 18px;">DATA PENDAFTARAN PESERTA DIDIK BARU</div>
    <div style="font-size: 20px;"><b>SD NEGERI 1 BLATER</b></div>
    <div style="font-size: 14px;">Jl. Desa Blater, RT 05 RW 02, Kecamatan Kalimanah, Kabupaten Purbalingga, 53371</div>
</div>

<hr style="border: 0.5px solid black; margin: 10px 10px 10px 10px;">';
?>
<?php
$id_peserta = $_GET['id'];

$sql_peserta = "SELECT * FROM peserta where id = '$id_peserta'";
$result_peserta = mysqli_query($koneksi, $sql_peserta);
$data_peserta = mysqli_fetch_array($result_peserta);

// Pengecekan
if(!$result_peserta){
    die('Query Error : '. mysqli_error($koneksi));
} 

$sql_minatbakat = "SELECT * FROM minatbakat where id_peserta = '$id_peserta'";
$result_minatbakat = mysqli_query($koneksi, $sql_minatbakat);
$data_minatbakat = mysqli_fetch_array($result_minatbakat);

// Pengecekan
if(!$result_minatbakat){
    die('Query Error : '. mysqli_error($koneksi));
} 

if($data_minatbakat['status'] == 0){
    $status = "Pendaftaran Belum Dinilai";
} else if($data_minatbakat['status'] == 1) {
    $status = "LOLOS PENDAFTARAN";
} else {
    $status = "TIDAK LOLOS PENDAFTARAN";
}

?>
        

<?php
$html .= '
<h3>A. DATA CALON PESERTA DIDIK</h3>
<table border="0.5 solid black;" width="100%">
    <tr>
        <td width="200px"><b>Nama Lengkap</b></td>
        <td width="1%">:</td>
        <td width="60%">'. $data_peserta['name'] .'</td>
    </tr>
    <tr>
        <td><b>Nama Panggilan</b></td>
        <td>:</td>
        <td>'. $data_peserta['nickname'] .'</td>
    </tr>
    <tr>
        <td><b>NIK</b></td>
        <td>:</td>
        <td>'. $data_peserta['nik'] .'</td>
    </tr>
    <tr>
        <td><b>Tempat, Tanggal Lahir</b></td>
        <td>:</td>
        <td>'. $data_peserta['tempat_lahir'] .', '. $data_peserta['tanggal_lahir'] .'</td>
    </tr>
    <tr>
        <td><b>Jenis Kelamin</b></td>
        <td>:</td>
        <td>'. $data_peserta['jenis_kelamin'] .'</td>
    </tr>
    <tr>
        <td><b>Agama</b></td>
        <td>:</td>
        <td>'. $data_peserta['agama'] .'</td>
    </tr>
    <tr>
        <td><b>Alamat</b></td>
        <td>:</td>
        <td>'. $data_peserta['alamat'] .'</td>
    </tr>
    <tr>
        <td><b>Anak ke</b></td>
        <td>:</td>
        <td>'. $data_peserta['anak'] .'</td>
    </tr>
    <tr>
        <td><b>Status dalam keluarga</b></td>
        <td>:</td>
        <td>'. $data_peserta['status'] .'</td>
    </tr>
    <tr>
        <td><b>Email</b></td>
        <td>:</td>
        <td>'. $data_peserta['email'] .'</td>
    </tr>
    <tr>
        <td><b>Telepon</b></td>
        <td>:</td>
        <td>'. $data_peserta['telepon'] .'</td>
    </tr> 
</table>

<h3>B. DATA MINAT DAN BAKAT CALON PESERTA DIDIK</h3>
<table>
    <tr>
        <td width="100px">Hobi</td>
        <td>:</td>
        <td>'. $data_minatbakat['hobi'] .'</td>
    </tr>
    <tr>
        <td>Bidang Studi</td>
        <td>:</td>
        <td>'. $data_minatbakat['bidang_studi'] .'</td>
    </tr>
    <tr>
        <td>Olahraga</td>
        <td>:</td>
        <td>'. $data_minatbakat['olahraga'] .'</td>
    </tr>
    <tr>
        <td>Cita-cita</td>
        <td>:</td>
        <td>'. $data_minatbakat['citacita'] .'</td>
    </tr>
    <tr>
        <td>HASIL</td>
        <td>:</td>
        <td><b>'. $status .'</b></td>
    </tr>
</table>
';


$dompdf->loadHtml($html);

// (Optional) Setup the paper size and orientation
$dompdf->setPaper('A4', 'potrait');

// Render the HTML as PDF
$dompdf->render();

// Output the generated PDF to Browser
$dompdf->stream("Data Pendaftar.pdf", array("Attachment"=>0));
?>

