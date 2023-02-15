<?php include('../config/auto_load.php'); ?>
<?php include('editprofile_control.php'); ?>
<?php include('../template/header.php'); ?>
    <!-- Begin Page Content -->
    <div class="container-fluid">
        <h1 class="h3 mb-4 text-gray-800">EDIT PROFILE</h1>
        <form class="user" method="POST" action="<?= $base_url ?>/peserta/editprofile.php" enctype="multipart/form-data">    
            <div class="row"> 
            <div class="col-md-12">
                    <?php if(isset($_SESSION['pesan_sukses'])) { ?>
                    <div class="alert alert-success">
                        <?= $_SESSION['pesan_sukses'] ?>
                    </div>
                    <?php } unset($_SESSION['pesan_sukses']); ?>
                </div> 
                <div class="col-md-8">
                        <div class="form-group">
                            <label for="name">Nama Lengkap</label>
                            <input type="text" name="name" class="form-control"
                             id="name" placeholder="Nama Lengkap" value="<?= $data_peserta['name'] ?>" require>
                        </div>
                        <div class="form-group">
                            <label for="nickname">Nama Panggilan</label>
                            <input type="text" name="nickname" class="form-control"
                            id="nickname" placeholder="Nama Panggilan" value="<?= $data_peserta['nickname'] ?>" require>
                        </div>
                        <div class="form-group">
                            <label for="nik">NIK</label>
                            <input type="text" name="nik" class="form-control"
                            id="nik" placeholder="NIK" value="<?= $data_peserta['nik'] ?>" require>
                        </div>
                        <div class="form-group row">
                            <div class="col-md-6">
                                <label for="tempat_lahir">Tempat Lahir</label>
                                <input type="text" name="tempat_lahir" class="form-control"
                                id="tempat_lahir" placeholder="Tempat Lahir" value="<?= $data_peserta['tempat_lahir'] ?>" require>
                            </div>
                            <div class="col-md-6">
                                <label for="tanggal_lahir">Tanggal Lahir</label>
                                <input type="date" name="tanggal_lahir" class="form-control"
                                id="tanggal_lahir" placeholder="Tanggal Lahir" value="<?= $data_peserta['tanggal_lahir'] ?>" require>
                            </div>
                            </div>
                        <div class="form-group row">
                            <div class="col-md-6">
                                <label for="jenis_kelamin">Jenis Kelamin</label>
                                <div class="form-check">
                                <?php 
                                    $laki = '';
                                    $perempuan = '';

                                    if($data_peserta['jenis_kelamin'] == 'laki-laki'){
                                    $laki = 'checked';
                                } else {
                                    $perempuan = 'checked';
                                }
                                ?>
                                <input type="radio" name="jenis_kelamin" value="Laki-laki" <?= $laki ?> class="form-check-input" id="laki-laki">
                                    <label for="laki-laki" class="form-check-label">Laki-laki</label>
                                </div>
                                <div class="form-check">
                                    <input type="radio" name="jenis_kelamin" value="Perempuan" <?= $perempuan ?> class="form-check-input" id="perempuan">
                                        <label for="perempuan" class="form-check-label">Perempuan</label>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <label for="agama">Agama</label>
                                <?php 
                                    $islam = '';
                                    $kristen = '';
                                    $katolik = '';
                                    $hindu = '';
                                    $budha = '';
                                    $konghucu = '';

                                if($data_peserta['agama'] == 'Islam'){
                                    $islam = 'checked';
                                } else if($data_peserta['agama'] == 'Kristen'){
                                    $kristen = 'checked';
                                } else if($data_peserta['agama'] == 'Katolik'){
                                    $katolik = 'checked';
                                } else if($data_peserta['agama'] == 'Hindu'){
                                    $hindu = 'checked';
                                } else if($data_peserta['agama'] == 'Budha'){
                                    $budha = 'checked';
                                } else {
                                    $konghucu = 'checked';
                                }
                                ?>
                                    <div class="form-check">
                                        <input type="radio" name="agama" value="Islam" <?= $islam ?> class="form-check-input" id="Islam">
                                        <label for="Islam" class="form-check-label">Islam</label>
                                    </div>
                                    <div class="form-check">
                                        <input type="radio" name="agama" value="Kristen" <?= $kristen ?> class="form-check-input" id="Kristen">
                                        <label for="Kristen" class="form-check-label">Kristen</label>
                                    </div>
                                    <div class="form-check">
                                        <input type="radio" name="agama" value="Katolik" <?= $katolik ?> class="form-check-input" id="Katolik">
                                        <label for="Katolik" class="form-check-label">Katolik</label>
                                    </div>
                                    <div class="form-check">
                                        <input type="radio" name="agama" value="Hindu" <?= $hindu ?> class="form-check-input" id="Hindu">
                                        <label for="Hindu" class="form-check-label">Hindu</label>
                                    </div>
                                    <div class="form-check">
                                        <input type="radio" name="agama" value="Budha" <?= $budha ?> class="form-check-input" id="Budha">
                                        <label for="Budha" class="form-check-label">Budha</label>
                                    </div>
                                    <div class="form-check">
                                        <input type="radio" name="agama" value="Konghucu" <?= $konghucu ?> class="form-check-input" id="Konghucu">
                                        <label for="Konghucu" class="form-check-label">Konghucu</label>
                                    </div>
                                </div>
                            </div>
                                <div class="form-group">
                                    <label for="alamat">Alamat</label>
                                    <input type="textarea" name="alamat" id="alamat" class="form-control" value="<?= $data_peserta['alamat'] ?>"></input>
                                </div>
                                <div class="form-group row">
                                    <div class="col-md-6">
                                            <label for="anak">Anak ke- </label>
                                            <input type="text" name="anak" class="form-control" value="<?= $data_peserta['anak'] ?>"
                                            id="anak" placeholder=" " require>
                                    </div>
                                    <div class="col-md-6">
                                        <label for="status">Status dalam keluarga</label>
                                    <?php 
                                    $kandung = '';
                                    $tiri = '';
                                    $angkat = '';

                                    if($data_peserta['status'] == 'Anak Kandung'){
                                        $kandung = 'checked';
                                    } else if($data_peserta['status'] == 'Anak Tiri'){
                                        $tiri = 'checked';
                                    } else {
                                        $angkat = 'checked';
                                    }
                                    ?>
                                        <div class="form-check">
                                            <input type="radio" name="status" value="Anak Kandung" <?= $kandung ?> class="form-check-input" id="anak_kandung">
                                                <label for="anak_kandung" class="form-check-label">Anak Kandung</label>
                                        </div>
                                        <div class="form-check">
                                            <input type="radio" name="status" value="Anak Tiri" <?= $tiri ?> class="form-check-input" id="anak_tiri">
                                                <label for="anak_tiri" class="form-check-label">Anak Tiri</label>
                                        </div>
                                        <div class="form-check">
                                            <input type="radio" name="status" value="Anak Angkat" <?= $angkat ?> class="form-check-input" id="anak_angkat">
                                                <label for="anak_angkat" class="form-check-label">Anak Angkat</label>
                                        </div>
                                    </div>
                                    </div>
                                    <div class="form-group">
                                            <label for="data_ayah">Nama Ayah</label>
                                            <input type="text" name="nama_ayah" class="form-control"
                                                id="nama_ayah" placeholder="Nama Ayah" value="<?= $data_peserta['nama_ayah'] ?>" require>
                                        </div>
                                        <div class="form-group row">
                                            <div class="col-md-6">
                                                <label for="data_ayah">Pekerjaan Ayah</label>
                                                <input type="text" name="pekerjaan_ayah" class="form-control"
                                                    id="pekerjaan_ayah" placeholder="Pekerjaan Ayah" value="<?= $data_peserta['pekerjaan_ayah'] ?>" require>
                                            </div>
                                            <div class="col-md-6">
                                            Penghasilan Ayah
                                            <?php 
                                                $kurang = '';
                                                $antara = '';
                                                $lebih = '';

                                                if($data_peserta['penghasilan_ayah'] == 'Kurang dari 1 juta'){
                                                    $kurang = 'checked';
                                                } else if($data_peserta['penghasilan_ayah'] == 'Antara 1 juta - 2 juta'){
                                                    $antara = 'checked';
                                                } else {
                                                    $lebih = 'checked';
                                                }
                                            ?>
                                                <div class="form-check">
                                                    <input type="radio" name="penghasilan_ayah" value="Kurang dari 1 juta" <?= $kurang ?> class="form-check-input" id="penghasilan_ayah">
                                                        <label for="penghasilan_ayah" class="form-check-label">Kurang dari 1 juta</label>
                                                </div>
                                                <div class="form-check">
                                                    <input type="radio" name="penghasilan_ayah" value="Antara 1 juta - 2 juta" <?= $antara ?> class="form-check-input" id="penghasilan_ayah">
                                                        <label for="penghasilan_ayah" class="form-check-label">Antara 1 juta - 2 juta</label>
                                                </div>
                                                <div class="form-check">
                                                    <input type="radio" name="penghasilan_ayah" value="Diatas 2 juta" <?= $lebih ?> class="form-check-input" id="penghasilan_ayah">
                                                        <label for="penghasilan_ayah" class="form-check-label">Diatas 2 juta</label>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="data_ibu">Nama Ibu</label>
                                            <input type="text" name="nama_ibu" class="form-control"
                                                id="nama_ibu" placeholder="Nama Ibu" value="<?= $data_peserta['nama_ibu'] ?>" require>
                                        </div>
                                        <div class="form-group row">
                                            <div class="col-md-6">
                                                <label for="data_ibu">Pekerjaan Ibu</label>
                                                <input type="text" name="pekerjaan_ibu" class="form-control"
                                                    id="pekerjaan_ibu" placeholder="Pekerjaan Ibu" value="<?= $data_peserta['pekerjaan_ibu'] ?>" require>
                                            </div>
                                            <div class="col-md-6">
                                            Penghasilan Ibu
                                            <?php 
                                                $kurang = '';
                                                $antara = '';
                                                $lebih = '';

                                                if($data_peserta['penghasilan_ibu'] == 'Kurang dari 1 juta'){
                                                    $kurang = 'checked';
                                                } else if($data_peserta['penghasilan_ibu'] == 'Antara 1 juta - 2 juta'){
                                                    $antara = 'checked';
                                                } else {
                                                    $lebih = 'checked';
                                                }
                                            ?>
                                                <div class="form-check">
                                                    <input type="radio" name="penghasilan_ibu" value="Kurang dari 1 juta" <?= $kurang ?> class="form-check-input" id="penghasilan_ibu">
                                                        <label for="penghasilan_ibu" class="form-check-label">Kurang dari 1 juta</label>
                                                </div>
                                                <div class="form-check">
                                                    <input type="radio" name="penghasilan_ibu" value="Antara 1 juta - 2 juta" <?= $antara ?> class="form-check-input" id="penghasilan_ibu">
                                                        <label for="penghasilan_ibu" class="form-check-label">Antara 1 juta - 2 juta</label>
                                                </div>
                                                <div class="form-check">
                                                    <input type="radio" name="penghasilan_ibu" value="Diatas 2 juta" <?= $lebih ?> class="form-check-input" id="penghasilan_ibu">
                                                        <label for="penghasilan_ibu" class="form-check-label">Diatas 2 juta</label>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <label for="data_wali">Nama Wali</label>
                                            <input type="text" name="nama_wali" class="form-control"
                                                id="nama_wali" placeholder="Nama Wali" value="<?= $data_peserta['nama_wali'] ?>" require>
                                        </div>
                                        <div class="form-group">
                                            <label for="data_wali">Pekerjaan Wali</label>
                                            <input type="text" name="pekerjaan_wali" class="form-control"
                                                id="pekerjaan_wali" placeholder="Pekerjaan Wali" value="<?= $data_peserta['pekerjaan_wali'] ?>" require>
                                        </div>
                                    
                                <div class="form-group row">
                                    <div class="col-md-6">
                                        <label for="email">Email</label>
                                        <input type="email" name="email" class="form-control"
                                        id="email" placeholder="Email" value="<?= $data_peserta['email'] ?>" require>
                                    </div>
                                    <div class="col-md-6">
                                        <label for="telepon">Nomor Telepon</label>
                                        <input type="text" name="telepon" class="form-control"
                                        id="telepon" placeholder="Nomor Telepon" value="<?= $data_peserta['telepon'] ?>" require>
                                    </div>
                                    </div>
                                <!-- <div class="form-group row">
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
                                </div> -->
                        <!-- ALERT BERHASIL DAFTAR -->
                        </div>
                        <div class="col-md-3">
                        <?php
                            if(!$data_peserta['foto']) {
                                $foto = '../assets/img/pp.jpg';
                                                                          
                            } else if(isset($data_peserta['foto'])){
                                $foto = '../upload/' . $data_peserta['foto']; 
                            }
                            ?>
                        <img src="<?= $foto ?>" alt="pp" class="img-fluid" width="300px">

                        <input type="file" name="gambar" class="form-control mt-2">
                        </div>
                    <div class="col-md-12">
                        <button type="submit" name="btn_simpan" value="simpan_profile" class="btn btn-primary mb-2">Ubah</button>
                        <a href="dashboard.php" class="btn btn-danger mb-2">Kembali</a>
                    </div>                
                </div>
            </form>
        <!-- /.container-fluid -->
    </div>
            <!-- End of Main Content -->

 <?php include('../template/footer.php'); ?> 