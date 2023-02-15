<?php
// TABEL
$all_peserta = mysqli_query($koneksi, "SELECT peserta.*, minatbakat.hobi, minatbakat.bidang_studi, minatbakat.olahraga, minatbakat.citacita, minatbakat.status 
FROM peserta, minatbakat where peserta.id = minatbakat.id_peserta");
// cek hasil 
if(!$all_peserta){
    die('Query Error : '. mysqli_error($koneksi));
}

if(isset($_GET['action']) && ($_GET['action']) == "hapus") {
    $id_peserta = $_GET['id'];
    $query_peserta = mysqli_query($koneksi, "SELECT * FROM peserta where id = $id_peserta");

    if(mysqli_num_rows($query_peserta)) {
        $data_peserta = mysqli_fetch_array($query_peserta);
        $id_user = $data_peserta['id'];

        // HAPUS MINAT BAKAT
        $sql_hapus_minatbakat = mysqli_query($koneksi, "DELETE FROM minatbakat where id_peserta = $id_peserta");

        // HAPUS FOTO PESERTA
        unlink('../upload/'.$data_peserta['foto']);
        $sql_hapus_peserta = mysqli_query($koneksi, "DELETE FROM peserta where id = $id_peserta");

        $sql_hapus_user = mysqli_query($koneksi, "DELETE FROM users where id = $id");

        if(!$sql_hapus_minatbakat || $sql_hapus_peserta || $sql_hapus_user) {
            die('Query Error: '. mysqli_error($koneksi));
        }

        // SIMPAN SESSION

        $_SESSION['pesan_sukses'] = "Data peserta berhasil dihapus!";
        header('location:datapendaftaran.php');

    } else {
        die('Data tidak ditemukan');
    }
}
?>