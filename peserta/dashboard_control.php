<?php

$id_user = $_SESSION['id_users'];
$sql_peserta = "SELECT * FROM peserta WHERE id = '".$id_user."'";
$result_peserta = mysqli_query($koneksi, $sql_peserta);

if(mysqli_num_rows($result_peserta)){
    $data_peserta = mysqli_fetch_array($result_peserta);
    $id_peserta = $data_peserta['id'];

    $sql_minatbakat = "SELECT * FROM minatbakat where id_peserta = '$id_peserta'";
    $result_minatbakat =  mysqli_query($koneksi, $sql_minatbakat);

    if(mysqli_num_rows($result_minatbakat)){
        $data_minatbakat = mysqli_fetch_array($result_minatbakat);
        $status = $data_minatbakat['status'];

        
    } else {
        // jika blm ada data
        
    }

    if(isset($_POST['btn_simpan']) && $_POST['btn_simpan'] == 'simpan_minatbakat') {
        $hobi = $_POST['hobi'];
        $bidang_studi = $_POST['bidang_studi'];
        $olahraga = $_POST['olahraga'];
        $citacita = $_POST['citacita'];
    
        $sql_insert_minatbakat = "INSERT INTO minatbakat (hobi, bidang_studi, olahraga, citacita, status, id_peserta) 
        values ('$hobi','$bidang_studi','$olahraga','$citacita', 0, '$id_peserta')";
        $query_insert_minatbakat = mysqli_query($koneksi, $sql_insert_minatbakat);

        if($query_insert_minatbakat){
            header('location:dashboard.php');

        } else {
            echo "Error ". mysqli_error($koneksi);
            die;
        }
    }
    

}


?>