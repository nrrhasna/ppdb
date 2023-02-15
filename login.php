<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>PPDB SDN 1 BLATER</title>

    <!-- Gambar Title -->
    <link rel="icon" type="image/png" href="assets/img/logo-pbg.png">


    <!-- Custom fonts for this template-->
    <link href="assets/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="assets/css/sb-admin-2.min.css" rel="stylesheet">


</head>

<body class="bg-gradient-primary">

    <div class="container">

        <!-- Outer Row -->
        <div class="row justify-content-center">

            <div class="col-md-7">

                <div class="card o-hidden border-0 shadow-lg my-5">
                    <div class="card-body p-0">
                        <!-- Nested Row within Card Body -->
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="p-5">
                                    <div class="text-center">
                                        <img src="assets/img/logo-pbg.png" alt="" width="160px" height="160px">
                                        <br> <br>
                                        <h3>LOGIN</h3>
                                        <h3><b>PPDB SD NEGERI 1 BLATER</b></h3>

                                        <?php session_start();
                                        if(isset($_SESSION['pesan_registrasi'])) { ?>

                                            <div class="alert alert-success">
                                                <?= $_SESSION['pesan_registrasi'] ?>
                                            </div>

                                        <?php } 
                                        session_destroy();
                                        ?>

                                        <?php 
                                        if(isset($_SESSION['login_error'])) { ?>

                                            <div class="alert alert-danger">
                                                <?= $_SESSION['login_error'] ?>
                                            </div>

                                        <?php } ?>
                                    
                                    <form class="user" action="login_control.php" method="POST">
                                        <div class="form-group">
                                            <input type="email" name="email" class="form-control form-control-user"
                                                id="email" placeholder="Masukkan Email">
                                        </div>
                                        <div class="form-group">
                                            <input type="password" name="password" class="form-control form-control-user"
                                                id="password" placeholder="Masukkan Password">
                                        </div>
                                        <button type="submit" name="btn_login" value="login" href="" class="btn btn-primary btn-user btn-block">
                                            Login
                                        </button>
                                        <!-- <button name="btn_login" class="btn btn-primary" onClick="false()"> Simpan </button>
                                        <script>  
                                            function salah(){
                                                if('username' != $email and 'password' != $password){
                                                    window.alert("Email atau Password Salah!");
                                                } else {
                                                    redirect('Selamat, anda telah berhasil','/peserta/daftarppdb.php');
                                                }
                                            window.alert("TULISKAN PESAN ANDA DI SINI");
                                            };
                                        </script> -->
                                    </form>
                                    
                                    </div>
                                    <hr>
                                    <div class="text-center">
                                        <a class="small" href="register.php">Registrasi Akun</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>

        </div>

    </div>

    <!-- Bootstrap core JavaScript-->
    <script src="assets/vendor/jquery/jquery.min.js"></script>
    <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="assets/vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="js/sb-admin-2.min.js"></script>

</body>

</html>