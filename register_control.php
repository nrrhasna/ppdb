<?php
include('config/koneksi.php');
session_start();

if(isset($_POST['btn_registrasi'])){
    // print_r($_POST);

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
    $foto = $_POST['foto'];
    $email = $_POST['email'];
    $telepon = $_POST['telepon'];
    $password = md5($_POST['password']);
    $ulangi_password = md5($_POST['ulangi_password']);

    if($password != $ulangi_password){
        echo "Password tidak sama";
        echo "<br><br> <button type='button' onclick='history.back();'> Kembali </button>";
        die;
    }

    // INSERT KE TABLE USER
    $sql_user = "INSERT INTO users (name, username, password, level) values ('$name','$email','$password','peserta')";
    $result_user = mysqli_query($koneksi, $sql_user);

    if($result_user){
        $data_user = mysqli_query($koneksi, "SELECT LAST_INSERT_ID()");
        while($u = mysqli_fetch_array($data_user)){
            $id_user = $u[0];
        }

        // INSERT TABLE PESERTA
        $sql_peserta = "INSERT INTO peserta (name, nickname, nik, tempat_lahir, tanggal_lahir, jenis_kelamin, agama, alamat, anak, status, nama_ayah, 
        pekerjaan_ayah, penghasilan_ayah, nama_ibu, pekerjaan_ibu, penghasilan_ibu, nama_wali, pekerjaan_wali, foto, email, telepon, password, ulangi_password) values ('$name', '$nickname', '$nik', '$tempat_lahir', '$tanggal_lahir', '$jenis_kelamin', '$agama', '$alamat', '$anak', '$status', '$nama_ayah', 
        '$pekerjaan_ayah', '$penghasilan_ayah', '$nama_ibu', '$pekerjaan_ibu', '$penghasilan_ibu', '$nama_wali', '$pekerjaan_wali', '$foto', '$email', '$telepon', '$password', '$ulangi_password')";

        $result_peserta = mysqli_query($koneksi, $sql_peserta);

        if($result_peserta){
            $_SESSION['pesan_registrasi'] = "Registrasi berhasil, Login untuk melanjutkan!";
            header('location:login.php');
        } else {
            echo "Error insert peserta: ". mysqli_error($koneksi);
            echo "<br><br> <button type='button' onclick='history.back();'> Kembali </button>";
            die;
        }

    } else {
        echo "Error insert user: ". mysqli_error($koneksi);
        echo "<br><br> <button type='button' onclick='history.back();'> Kembali </button>";
        die;
    }

  
} else {
    header('location:register.php');
}
?>