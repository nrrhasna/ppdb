<?php
// TABEL
$all_peserta = mysqli_query($koneksi, "SELECT * FROM peserta, minatbakat where peserta.id = minatbakat.id_peserta AND minatbakat.status = 0");
// cek hasil 
if(!$all_peserta){
    die('Query Error : '. mysqli_error($koneksi));
}

// JUMLAH PENDAFTAR
$jml_peserta = mysqli_query($koneksi, "SELECT * FROM peserta, minatbakat where peserta.id = minatbakat.id_peserta");
// cek hasil 
if(!$jml_peserta){
    die('Query Error : '. mysqli_error($koneksi));
}

// JUMLAH YANG LOLOS
$jml_lolos = mysqli_query($koneksi, "SELECT * FROM peserta, minatbakat where peserta.id = minatbakat.id_peserta
AND minatbakat.status = 1");
// cek hasil 
if(!$jml_lolos){
    die('Query Error : '. mysqli_error($koneksi));
}
?>