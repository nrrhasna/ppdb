<?php
session_start();

include('koneksi.php');

$base_url = "http://localhost/ppdb";

$uri_segment = explode("/", parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH));
// var_dump($uri_segment);

if(isset($_SESSION['status']) && $_SESSION['status'] == 'login'){
    if($uri_segment[2] == $_SESSION['level']) {

    } else {
        echo "Error: Forbidden";
        echo "<br><br> <button type='button' onclick='history.back()'> Kembali </button>";
        die;
    }

} else {
    $_SESSION['login_error'] = "Silakan Login terlebih dahulu";
    header('location:'. $base_url . '/login.php');
}

?>