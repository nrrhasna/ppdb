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

    <!-- Main -->
        <div class="container-fluid justify-content-center">
            <h3 class="fs-2 text-center mt-3 mb-3 text-light">DAFTAR PPDB</h3>

            <!-- Outer Row -->
            <div class="row justify-content-center">
                <div class="col-md-6">
                    <div class="card o-hidden border-0 shadow my-0">
                    <div class="card-header py-3">
                            <h6 class="m-0 font-weight-bold text-primary text-center">FORMULIR PPDB SD NEGERI 1 BLATER</h6>
                        </div>
                        <p class="text-danger ml-3 mt-4 mb-0"><small>*Isi data diri dengan benar dan valid</small></p>
                        <div class="card-body p-6">
                    
                            <!-- Nested Row within Card Body -->
                            <div class="row">
                                    <div class="col-md-12">
                                        
                                        <form class="user" action="register_control.php" method="POST">
                                            <div class="form-group">
                                                <label for="name">Nama Lengkap</label>
                                                <input type="text" name="name" class="form-control"
                                                    id="name" placeholder="Nama Lengkap" require>
                                            </div>
                                            <div class="form-group">
                                                <label for="nickname">Nama Panggilan</label>
                                                <input type="text" name="nickname" class="form-control"
                                                    id="nickname" placeholder="Nama Panggilan" require>
                                            </div>
                                            <div class="form-group">
                                                <label for="nik">NIK</label>
                                                <input type="text" name="nik" class="form-control"
                                                    id="nik" placeholder="NIK" require>
                                            </div>
                                            <div class="form-group row">
                                                <div class="col-md-6">
                                                <label for="tempat_lahir">Tempat Lahir</label>
                                                <input type="text" name="tempat_lahir" class="form-control"
                                                    id="tempat_lahir" placeholder="Tempat Lahir" require>
                                                </div>
                                                <div class="col-md-6">
                                                <label for="tanggal_lahir">Tanggal Lahir</label>
                                                <input type="date" name="tanggal_lahir" class="form-control"
                                                    id="tanggal_lahir" placeholder="Tanggal Lahir" require>
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <div class="col-md-6">
                                                <label for="jenis_kelamin">Jenis Kelamin</label>
                                                    <div class="form-check">
                                                    <input type="radio" name="jenis_kelamin" value="Laki-laki" class="form-check-input" id="laki-laki">
                                                        <label for="laki-laki" class="form-check-label">Laki-laki</label>
                                                    </div>
                                                    <div class="form-check">
                                                    <input type="radio" name="jenis_kelamin" value="Perempuan" class="form-check-input" id="perempuan">
                                                        <label for="perempuan" class="form-check-label">Perempuan</label>
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <label for="agama">Agama</label>
                                                    <div class="form-check">
                                                    <input type="radio" name="agama" value="Islam" class="form-check-input" id="Islam">
                                                        <label for="Islam" class="form-check-label">Islam</label>
                                                    </div>
                                                    <div class="form-check">
                                                    <input type="radio" name="agama" value="Kristen" class="form-check-input" id="Kristen">
                                                        <label for="Kristen" class="form-check-label">Kristen</label>
                                                    </div>
                                                    <div class="form-check">
                                                    <input type="radio" name="agama" value="Katolik" class="form-check-input" id="Katolik">
                                                        <label for="Katolik" class="form-check-label">Katolik</label>
                                                    </div>
                                                    <div class="form-check">
                                                    <input type="radio" name="agama" value="Hindu" class="form-check-input" id="Hindu">
                                                        <label for="Hindu" class="form-check-label">Hindu</label>
                                                    </div>
                                                    <div class="form-check">
                                                    <input type="radio" name="agama" value="Budha" class="form-check-input" id="Budha">
                                                        <label for="Budha" class="form-check-label">Budha</label>
                                                    </div>
                                                    <div class="form-check">
                                                    <input type="radio" name="agama" value="Konghucu" class="form-check-input" id="Konghucu">
                                                        <label for="Konghucu" class="form-check-label">Konghucu</label>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label for="alamat">Alamat</label>
                                                <input type="text" name="alamat" id="alamat" class="form-control">
                                            </div>
                                            <div class="form-group row">
                                            <div class="col-md-6">
                                                <label for="anak">Anak ke- </label>
                                                <input type="text" name="anak" class="form-control"
                                                    id="anak" placeholder=" " require>
                                                </div>
                                                <div class="col-md-6">
                                                    <label for="status">Status dalam keluarga</label>
                                                    <div class="form-check">
                                                    <input type="radio" name="status" value="Anak Kandung" class="form-check-input" id="anak_kandung">
                                                        <label for="anak_kandung" class="form-check-label">Anak Kandung</label>
                                                    </div>
                                                    <div class="form-check">
                                                    <input type="radio" name="status" value="Anak Tiri" class="form-check-input" id="anak_tiri">
                                                        <label for="anak_tiri" class="form-check-label">Anak Tiri</label>
                                                    </div>
                                                    <div class="form-check">
                                                    <input type="radio" name="status" value="Anak Angkat" class="form-check-input" id="anak_angkat">
                                                        <label for="anak_angkat" class="form-check-label">Anak Angkat</label>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label for="data_ayah">Nama Ayah</label>
                                                <input type="text" name="nama_ayah" class="form-control"
                                                    id="nama_ayah" placeholder="Nama Ayah" require>
                                            </div>
                                            <div class="form-group row">
                                                <div class="col-md-6">
                                                    <label for="data_ayah">Pekerjaan Ayah</label>
                                                    <input type="text" name="pekerjaan_ayah" class="form-control"
                                                        id="pekerjaan_ayah" placeholder="Pekerjaan Ayah" require>
                                                </div>
                                                <div class="col-md-6">
                                                Penghasilan Ayah
                                                    <div class="form-check">
                                                        <input type="radio" name="penghasilan_ayah" value="Kurang dari 1 juta" class="form-check-input" id="penghasilan_ayah">
                                                            <label for="penghasilan_ayah" class="form-check-label">Kurang dari 1 juta</label>
                                                    </div>
                                                    <div class="form-check">
                                                        <input type="radio" name="penghasilan_ayah" value="Antara 1 juta - 2 juta" class="form-check-input" id="penghasilan_ayah">
                                                            <label for="penghasilan_ayah" class="form-check-label">Antara 1 juta - 2 juta</label>
                                                    </div>
                                                    <div class="form-check">
                                                        <input type="radio" name="penghasilan_ayah" value="Diatas 2 juta" class="form-check-input" id="penghasilan_ayah">
                                                            <label for="penghasilan_ayah" class="form-check-label">Diatas 2 juta</label>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label for="data_ibu">Nama Ibu</label>
                                                <input type="text" name="nama_ibu" class="form-control"
                                                    id="nama_ibu" placeholder="Nama Ibu" require>
                                            </div>
                                            <div class="form-group row">
                                                <div class="col-md-6">
                                                    <label for="data_ibu">Pekerjaan Ibu</label>
                                                    <input type="text" name="pekerjaan_ibu" class="form-control"
                                                        id="pekerjaan_ibu" placeholder="Pekerjaan Ibu" require>
                                                </div>
                                                <div class="col-md-6">
                                                Penghasilan Ibu
                                                    <div class="form-check">
                                                        <input type="radio" name="penghasilan_ibu" value="Kurang dari 1 juta" class="form-check-input" id="penghasilan_ibu">
                                                            <label for="penghasilan_ibu" class="form-check-label">Kurang dari 1 juta</label>
                                                    </div>
                                                    <div class="form-check">
                                                        <input type="radio" name="penghasilan_ibu" value="Antara 1 juta - 2 juta" class="form-check-input" id="penghasilan_ibu">
                                                            <label for="penghasilan_ibu" class="form-check-label">Antara 1 juta - 2 juta</label>
                                                    </div>
                                                    <div class="form-check">
                                                        <input type="radio" name="penghasilan_ibu" value="Diatas 2 juta" class="form-check-input" id="penghasilan_ibu">
                                                            <label for="penghasilan_ibu" class="form-check-label">Diatas 2 juta</label>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="form-group">
                                                <label for="data_wali">Nama Wali</label>
                                                <input type="text" name="nama_wali" class="form-control"
                                                    id="nama_wali" placeholder="Nama Wali" require>
                                            </div>
                                            <div class="form-group">
                                                <label for="data_wali">Pekerjaan Wali</label>
                                                <input type="text" name="pekerjaan_wali" class="form-control"
                                                    id="pekerjaan_wali" placeholder="Pekerjaan Wali" require>
                                            </div>

                                            <div class="form-group row">
                                                <div class="col-md-6">
                                                <label for="email">Email</label>
                                                <input type="email" name="email" class="form-control"
                                                    id="email" placeholder="Email" require>
                                                </div>
                                                <div class="col-md-6">
                                                <label for="telepon">Nomor Telepon</label>
                                                <input type="text" name="telepon" class="form-control"
                                                    id="telepon" placeholder="Nomor Telepon" require>
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <div class="col-md-6">
                                                <label for="password">Password</label>
                                                <input type="password" name="password" class="form-control"
                                                    id="password" placeholder="Password" require>
                                                </div>
                                                <div class="col-md-6">
                                                <label for="ulangi_password">Ulangi Password</label>
                                                <input type="password" name="ulangi_password" class="form-control"
                                                    id="ulangi_password" placeholder="Ulangi Password" require>
                                                </div>
                                            </div>

                                            <button name="btn_registrasi" value="simpan" class="btn btn-primary"> Simpan </button>
                                            <a href="login.php" class="btn btn-danger">Kembali</a>

                                            <!-- ALERT BERHASIL DAFTAR -->

                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
        </div>
    <!-- End of Main Content -->

    <!-- Bootstrap core JavaScript-->
    <script src="../vendor/jquery/jquery.min.js"></script>
    <script src="../vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="../vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="../js/sb-admin-2.min.js"></script>

</body>

</html>