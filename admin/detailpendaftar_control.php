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

if(isset($_POST['simpan']) && $_POST['simpan'] == 'simpan_nilai'){
    $minatbakat = $_POST['minatbakat'];

    $sql_minatbakat = "UPDATE minatbakat set status='$minatbakat' where id_peserta='$id_peserta'";
    $query_minatbakat = mysqli_query($koneksi, $sql_minatbakat);

    if($query_minatbakat){
        $_SESSION['pesan_sukses'] = "Status peserta berhasil diubah!";
        header('location:datapendaftaran.php');
    } else {
        echo "Gagal update status peserta!";
        die;
    }
}
?>