<?php

$id_user = $_SESSION['id_users'];
$sql_peserta = "SELECT * FROM peserta where id = '$id_user'";
$result_peserta = mysqli_query($koneksi, $sql_peserta);

if(mysqli_num_rows($result_peserta)){
    $data_peserta = mysqli_fetch_array($result_peserta);
    $id_peserta = $data_peserta['id'];

    $sql_minatbakat = "SELECT * FROM minatbakat where id_peserta = '$id_peserta'";
    $result_minatbakat = mysqli_query($koneksi, $sql_minatbakat);

    if(mysqli_num_rows($result_minatbakat)){
        $data_minatbakat = mysqli_fetch_array($result_minatbakat);
        $status = $data_minatbakat['status'];

    } else {
        // jika belum ada data minatbakat maka kosong
        // echo "error ". mysqli_error($koneksi);
        // die;
    }


    // simpan data minatbakat
    if(isset($_POST['btn_simpan']) && $_POST['btn_simpan'] == 'simpan_minatbakat') {
        $hobi = $_POST['hobi'];
        $bidang_studi = $_POST['bidang_studi'];
        $olahraga = $_POST['olahraga'];
        $citacita = $_POST['citacita'];

        if(isset($_POST['id_minatbakat'])) {
            // update
            $id_minatbakat = $_POST['id_minatbakat'];
            $sql_update_minatbakat = "UPDATE minatbakat set hobi='$hobi', bidang_studi='$bidang_studi', olahraga='$olahraga', citacita='$citacita' where id='$id_minatbakat'";
            $query_update_minatbakat = mysqli_query($koneksi, $sql_update_minatbakat);

            if($query_update_minatbakat){
                // berhasil
                $_SESSION['pesan_sukses'] = 'Edit Data Minat Bakat Sukses!';
                header('location:minatbakat.php');
            } else {
                echo "error ". mysqli_error($koneksi);
                die;
            }
        } else {
            // insert
            $sql_insert_minatbakat = "INSERT INTO minatbakat (hobi, bidang_studi, olahraga, citacita, status, id_peserta) values ('$hobi','$bidang_studi','$olahraga','$citacita', 0, $id_peserta)";
            $query_insert_minatbakat = mysqli_query($koneksi, $sql_insert_minatbakat);

            if($query_insert_minatbakat){
                // berhasil
                header('location:minatbakat.php');
            } else {
                echo "error ". mysqli_error($koneksi);
                die;
            }
        }
    }
}        

?>