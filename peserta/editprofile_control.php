<?php

$id_user = $_SESSION['id_users'];
$sql_peserta = "SELECT * FROM peserta where id = '$id_user'";
$result_peserta = mysqli_query($koneksi, $sql_peserta);

if(mysqli_num_rows($result_peserta)){
    $data_peserta = mysqli_fetch_array($result_peserta);

    if(isset($_POST['btn_simpan']) && $_POST['btn_simpan'] == "simpan_profile") {
        $id_peserta = $data_peserta['id'];
        $name = $_POST['name'];
        $nickname = $_POST['nickname'];
        $nik = $_POST['nik'];
        $tempat_lahir = $_POST['tempat_lahir'];
        $tanggal_lahir = $_POST['tanggal_lahir'];
        $jenis_kelamin = $_POST['jenis_kelamin'];
        $agama = $_POST['agama'];
        $alamat = $_POST['alamat'];
        $anak = $_POST['anak'];
        $status = $_POST['status'];
        $nama_ayah = $_POST['nama_ayah'];
        $pekerjaan_ayah = $_POST['pekerjaan_ayah'];
        $penghasilan_ayah = $_POST['penghasilan_ayah'];
        $nama_ibu = $_POST['nama_ibu'];
        $pekerjaan_ibu = $_POST['pekerjaan_ibu'];
        $penghasilan_ibu = $_POST['penghasilan_ibu'];
        $nama_wali = $_POST['nama_wali'];
        $pekerjaan_wali = $_POST['pekerjaan_wali'];
        $email = $_POST['email'];
        $telepon = $_POST['telepon'];

        // GAMBAR
        if($_FILES['gambar']['name'] != '') {
            $ekstensi_diperbolehkan = array('png', 'jpg');
            $nama_gambar = $_FILES['gambar']['name'];
            $x = explode('.', $nama_gambar);
            $ekstensi = strtolower(end($x));
            $ukuran = $_FILES['gambar']['size'];
            $file_tmp = $_FILES['gambar']['tmp_name'];
        
            $ubah_nama = $name . '.' . $ekstensi;

            if(in_array($ekstensi, $ekstensi_diperbolehkan) === true) {
                if($ukuran < 1044070){
                    move_uploaded_file($file_tmp, '../upload/' . $ubah_nama);

                    $sql_update_profile = "UPDATE peserta set foto = '$ubah_nama' where id = '$id_peserta'";
                    $query_update = mysqli_query($koneksi, $sql_update_profile);
                    
                    if($query_update) {

                    } else {
                        echo "Gagal upload!";
                    }
                } else {
                    echo "Gambar terlalu besar!";
                    die;
                }
            } else {
                echo "ekstensi tidak diperbolehkan";
                die;
            }
        }
        $sql_update_profile = "UPDATE peserta set name='$name', nickname='$nickname', nik='$nik', tempat_lahir='$tempat_lahir', tanggal_lahir='$tanggal_lahir',
        jenis_kelamin='$jenis_kelamin', agama='$agama', alamat='$alamat', anak='$anak', status='$status', nama_ayah='$nama_ayah', pekerjaan_ayah='$pekerjaan_ayah', 
        penghasilan_ayah='$penghasilan_ayah', nama_ibu='$nama_ibu', pekerjaan_ibu='$pekerjaan_ibu', penghasilan_ibu='$penghasilan_ibu', nama_wali='$nama_wali', pekerjaan_wali='$pekerjaan_wali', 
        email='$email', telepon='$telepon' where id='$id_peserta'";

        $query_update_profile = mysqli_query($koneksi, $sql_update_profile);

        if($query_update_profile) {
            $_SESSION['pesan_sukses'] = 'Edit Profile Sukses!';
            header('location:editprofile.php');
        } else {
            echo "Gagal update profile!";
        }
        
    }
}

?>