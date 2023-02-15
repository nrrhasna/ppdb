<?php include('../config/auto_load.php'); ?>
<?php include('dashboard_control.php'); ?>
<?php include('../template/header.php'); ?>

<!-- Begin Page Content -->
<div class="container-fluid">
    <div class="row">
        <?php if(!isset($status)) { ?>
        <div class="col-md-6">
            <div class="card shadow mb-4">
                <div class="card-header py-3">
                    <h6 class="m-0 font-weight-bold text-primary">Minat Bakat</h6>
                </div>
                <div class="card-body">
                <p class="text-danger">*Lengkapi data minat bakat</p>
                    <form class="user" method="POST" action="<?= $base_url ?>/peserta/minatbakat.php">
                            <div class="form-group">
                                <label for="hobi">Masukkan Hobi</label>
                                <input type="text" name="hobi" class="form-control"
                                    id="hobi" placeholder="Hobi">
                            </div>
                            <div class="form-group">
                                <label for="bidang_studi">Bidang studi yang paling digemari</label>
                                <input type="text" name="bidang_studi" class="form-control"
                                    id="bidang_studi" placeholder="Bidang Studi">
                            </div>
                            <div class="form-group">
                                <label for="olahraga">Olahraga yang paling digemari</label>
                                <input type="text" name="olahraga" class="form-control"
                                    id="olahraga" placeholder="Olahraga">
                            </div>
                            <div class="form-group">
                                <label for="citacita"> Masukkan Cita-cita</label>
                                <input type="text" name="citacita" class="form-control"
                                    id="citacita" placeholder="Cita-cita">
                            </div>

                            <button type="submit" name="btn_simpan" value="simpan_minatbakat" class="btn btn-primary">Simpan</button>

                            <!-- ALERT BERHASIL DAFTAR -->

                        </form>
                </div>
            </div>
        </div>
        <?php } else if(isset($status) && $status == 0) { ?>
        <div class="col-md-6">
            <div class="card shadow mb-4">
                <div class="card-header py-3">
                    <h6 class="m-0 font-weight-bold text-primary">PENGUMUMAN HASIL SELEKSI</h6>
                </div>
                <div class="card-body">
                    <div class="card text-center">
                        <div class="card-body">
                            <h5 class="card-title mb-3 mt-2">
                                Proses Penilaian
                            </h5>
                            <div class="col-auto">
                                <img src="../assets/img/load.png" width="150px">
                            </div>
                            <p class="card-text">Terima kasih telah mendaftar di SD Negeri 1 Blater. Pengumuman hasil akan diumumkan pada tanggal:</p>
                            <span class="badge badge-warning" style="font-size: 15px;">27 Juli 2023</span>
                        </div>
                        <div class="card-footer">
                            <marquee style="margin-bottom: -5px;">SD NEGERI 1 BLATER - PURBALINGGA</marquee>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <?php } else if(isset($status) && $status == 1) { ?>
        <div class="col-md-6">
            <div class="card shadow mb-4">
                <div class="card-header py-3">
                    <h6 class="m-0 font-weight-bold text-primary">PENGUMUMAN HASIL SELEKSI</h6>
                </div>
                <div class="card-body">
                    <div class="card text-center">
                        <div class="card-body">
                            <h5 class="card-title mb-3 mt-2">Peserta Diterima</h5>
                                <div class="col-auto mb-3">
                                    <img src="../assets/img/accept.png" width="120px">
                                </div>
                                <p class="card-text">Selamat! Anda lolos seleksi dan berhasil diterima di SD Negeri 1 Blater.</p>
                                <p class="card-text">Lengkapi berkas dan daftar ulang sebelum tanggal:</p>
                                <span class="badge badge-warning" style="font-size: 15px;">30 Juli 2023</span>
                            </div>
                            <div class="card-footer">
                                <marquee style="margin-bottom: -5px;">SD NEGERI 1 BLATER - PURBALINGGA</marquee>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <?php } else if(isset($status) && $status == 2) { ?>
        <div class="col-md-6">
            <div class="card shadow mb-4">
                    <div class="card-header py-3">
                        <h6 class="m-0 font-weight-bold text-primary">PENGUMUMAN HASIL SELEKSI</h6>
                    </div>
                    <div class="card-body">
                        <div class="card text-center">
                            <div class="card-body">
                            <h5 class="card-title mb-3 mt-2">
                                Peserta Tidak Diterima
                            </h5>
                            <div class="col-auto mb-3">
                                <img src="../assets/img/close.png" width="120px">
                            </div>
                            <p class="card-text">Terima kasih sudah mengikuti PPDB dengan baik. Tetap semangat dan jangan putus asa!</p>
                            </div>
                            <div class="card-footer">
                                <marquee style="margin-bottom: -5px;">SD NEGERI 1 BLATER - PURBALINGGA</marquee>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <?php } ?>
    
        <div class="col-md-6">
            <div class="card shadow mb-4">
                <div class="card-header py-3">
                    <h6 class="m-0 font-weight-bold text-primary">Profile</h6>
                </div>
                <div class="card-body">
                    <div class="text-center">
                        <?php
                        if(!$data_peserta['foto']) {
                            $foto = '../assets/img/pp.jpg';
                                                                        
                        } else if(isset($data_peserta['foto'])){
                            $foto = '../upload/' . $data_peserta['foto']; 
                        }
                        ?>
                    <img src="<?= $foto ?>" alt="pp" class="img-fluid" width="150px">
                    </div>
                    <h5 class="text-center card-title mt-3">
                        <?= $data_peserta['name'] ?>
                    </h5>
                    <div class="text-right">
                        <a href="editprofile.php" class="btn btn-secondary btn-sm mb-3">Edit Profile</a>
                    </div>
                    <ul class="list-group">
                        <li class="list-group-item">
                            <h6 class="mb-0" style="color:black;">Nama Panggilan</h6>
                            <small><?= $data_peserta['nickname'] ?></small>
                        </li>
                        <li class="list-group-item">
                            <h6 class="mb-0" style="color:black;">NIK</h6>
                            <small><?= $data_peserta['nik'] ?></small>
                        </li>
                        <li class="list-group-item">
                            <h6 class="mb-0" style="color:black;">Tempat, Tanggal Lahir</h6>
                            <small><?= $data_peserta['tempat_lahir'] ?>, <?= $data_peserta['tanggal_lahir'] ?></small>
                        </li>
                        <li class="list-group-item">
                            <h6 class="mb-0" style="color:black;">Jenis Kelamin</h6>
                            <?php if($data_peserta['jenis_kelamin'] == 'laki-laki'){
                                $kelamin = 'Laki-laki';
                            } else {
                                $kelamin = 'Perempuan';
                            }
                            ?>

                            <small class="text-muted"> <?= $kelamin ?> </small>
                        </li>
                        <li class="list-group-item">
                            <h6 class="mb-0" style="color:black;">Agama</h6>
                            <small><?= $data_peserta['agama'] ?></small>
                        </li>
                        <li class="list-group-item">
                            <h6 class="mb-0" style="color:black;">Alamat</h6>
                            <small><?= $data_peserta['alamat'] ?></small>
                        </li>
                        <li class="list-group-item">
                            <h6 class="mb-0" style="color:black;">Anak ke-</h6>
                            <small><?= $data_peserta['anak'] ?></small>
                        </li>
                        <li class="list-group-item">
                            <h6 class="mb-0" style="color:black;">Status dalam keluarga</h6>
                            <small><?= $data_peserta['status'] ?></small>
                        </li>
                        <li class="list-group-item">
                            <h6 class="mb-0" style="color:black;">Email</h6>
                            <small><?= $data_peserta['email'] ?></small>
                        </li>
                        <li class="list-group-item">
                            <h6 class="mb-0" style="color:black;">Nomor Telepon</h6>
                            <small><?= $data_peserta['telepon'] ?></small>
                        </li>
                    </ul>
                </div>
            </div>
        </div>

        <div class="col-md-12">
            <div class="card shadow mb-4">
                    <div class="card-header py-3">
                        <h6 class="m-0 font-weight-bold text-primary">PERSYARATAN DAFTAR ULANG</h6>
                    </div>
                    <div class="card-body">
                        <p class="card-title mb-3 mt-2">
                            Berkas yang dibawa pada saat daftar ulang :
                        </p>
                        <ul class="list-group list-group-horizontal-xxl">
                            <li class="list-group-item"><img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABkAAAAZCAYAAADE6YVjAAAACXBIWXMAAAsTAAALEwEAmpwYAAACkElEQVR4nOXUyVOSYRwH8PcohivwoixCzXSvRr02g0KZG4gkog5b0zSVTrealrFcMhxNQURfwkhcEccZtWON1aHp0Ka3jin5H9iBgm/zYC7Niy9Lt/r9Ac9nnt/ypaj/pk4sXC5RBq0diqBltWTOvCGfNW9JZ9o2pIHW1eLJlnbJ0yZ5xo8fX7aLFYu2cUXQ+kMRtKJk3gL5rBmymTZIp1ohCbRA8syEYr8xIvYZPWKPjk4LUIRspxUh+6ZywQZuoBlFE0aIfRdBM43fCscM5an9YMlerly0f08L8BogYhohHNPvCMb1pUlbpAzZtjMBRON6CD0NELi1Yb7TIOJqE/NXwKgOhSNaFDjrRo/couRDbmYB9GgDauZuQejS7gKuOuQP1UQKnedl7F8sWG9kAvg+rIJU3+spFDhrkT9ci7yhGuQOXGhnI/OW5yxgsgUSf3NSIBqL4dKyA/lDu0DeYDVBVljI70M7APwm3FxjcP+NH0XeJk7gysoAadFhADn9VZ9ZiHzGHD7cotLpq4ghFn+o/+0s6LHGdADwH2nCLEQ23br+xwx8Rtx9NYG9cr4LgXbp8OT9SnLAcQ7H+jSfWAjJItaQGQPurR1AH7e/pAogu1e9zEKKA6aOhFvk0ePOS+8+FN0DHnMAD9Xg9aqvsRCSpiTsEh7aiA63XzD4GYumBvRURng9KmmCc6SoeJoedcnD9TjpNnG3KP6DSmR1qVwJgTji0dG01xBOGBWuuv1D4wJ4XapNfudZIcVVAkZXRtI0I6BbtZPdqTpDpVIid/0pgVv7NR0gq6sizHtQUUalUySuSZqSsEs25KzuipGkLeIqkqa5g9XXSRblOKrW+Q7NVnafep3cAVnTI7fon6xfsg0DChnZav4AAAAASUVORK5CYII="><b> Bukti cetak pendaftaran</b></li>
                            <li class="list-group-item"><img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABkAAAAZCAYAAADE6YVjAAAACXBIWXMAAAsTAAALEwEAmpwYAAACkElEQVR4nOXUyVOSYRwH8PcohivwoixCzXSvRr02g0KZG4gkog5b0zSVTrealrFcMhxNQURfwkhcEccZtWON1aHp0Ka3jin5H9iBgm/zYC7Niy9Lt/r9Ac9nnt/ypaj/pk4sXC5RBq0diqBltWTOvCGfNW9JZ9o2pIHW1eLJlnbJ0yZ5xo8fX7aLFYu2cUXQ+kMRtKJk3gL5rBmymTZIp1ohCbRA8syEYr8xIvYZPWKPjk4LUIRspxUh+6ZywQZuoBlFE0aIfRdBM43fCscM5an9YMlerly0f08L8BogYhohHNPvCMb1pUlbpAzZtjMBRON6CD0NELi1Yb7TIOJqE/NXwKgOhSNaFDjrRo/couRDbmYB9GgDauZuQejS7gKuOuQP1UQKnedl7F8sWG9kAvg+rIJU3+spFDhrkT9ci7yhGuQOXGhnI/OW5yxgsgUSf3NSIBqL4dKyA/lDu0DeYDVBVljI70M7APwm3FxjcP+NH0XeJk7gysoAadFhADn9VZ9ZiHzGHD7cotLpq4ghFn+o/+0s6LHGdADwH2nCLEQ23br+xwx8Rtx9NYG9cr4LgXbp8OT9SnLAcQ7H+jSfWAjJItaQGQPurR1AH7e/pAogu1e9zEKKA6aOhFvk0ePOS+8+FN0DHnMAD9Xg9aqvsRCSpiTsEh7aiA63XzD4GYumBvRURng9KmmCc6SoeJoedcnD9TjpNnG3KP6DSmR1qVwJgTji0dG01xBOGBWuuv1D4wJ4XapNfudZIcVVAkZXRtI0I6BbtZPdqTpDpVIid/0pgVv7NR0gq6sizHtQUUalUySuSZqSsEs25KzuipGkLeIqkqa5g9XXSRblOKrW+Q7NVnafep3cAVnTI7fon6xfsg0DChnZav4AAAAASUVORK5CYII="><b> Foto diri (3x4)</b></li>
                            <li class="list-group-item"><img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABkAAAAZCAYAAADE6YVjAAAACXBIWXMAAAsTAAALEwEAmpwYAAACkElEQVR4nOXUyVOSYRwH8PcohivwoixCzXSvRr02g0KZG4gkog5b0zSVTrealrFcMhxNQURfwkhcEccZtWON1aHp0Ka3jin5H9iBgm/zYC7Niy9Lt/r9Ac9nnt/ypaj/pk4sXC5RBq0diqBltWTOvCGfNW9JZ9o2pIHW1eLJlnbJ0yZ5xo8fX7aLFYu2cUXQ+kMRtKJk3gL5rBmymTZIp1ohCbRA8syEYr8xIvYZPWKPjk4LUIRspxUh+6ZywQZuoBlFE0aIfRdBM43fCscM5an9YMlerly0f08L8BogYhohHNPvCMb1pUlbpAzZtjMBRON6CD0NELi1Yb7TIOJqE/NXwKgOhSNaFDjrRo/couRDbmYB9GgDauZuQejS7gKuOuQP1UQKnedl7F8sWG9kAvg+rIJU3+spFDhrkT9ci7yhGuQOXGhnI/OW5yxgsgUSf3NSIBqL4dKyA/lDu0DeYDVBVljI70M7APwm3FxjcP+NH0XeJk7gysoAadFhADn9VZ9ZiHzGHD7cotLpq4ghFn+o/+0s6LHGdADwH2nCLEQ23br+xwx8Rtx9NYG9cr4LgXbp8OT9SnLAcQ7H+jSfWAjJItaQGQPurR1AH7e/pAogu1e9zEKKA6aOhFvk0ePOS+8+FN0DHnMAD9Xg9aqvsRCSpiTsEh7aiA63XzD4GYumBvRURng9KmmCc6SoeJoedcnD9TjpNnG3KP6DSmR1qVwJgTji0dG01xBOGBWuuv1D4wJ4XapNfudZIcVVAkZXRtI0I6BbtZPdqTpDpVIid/0pgVv7NR0gq6sizHtQUUalUySuSZqSsEs25KzuipGkLeIqkqa5g9XXSRblOKrW+Q7NVnafep3cAVnTI7fon6xfsg0DChnZav4AAAAASUVORK5CYII="><b> Fotocopy Akte Kelahiran</b></li>
                            <li class="list-group-item"><img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABkAAAAZCAYAAADE6YVjAAAACXBIWXMAAAsTAAALEwEAmpwYAAACkElEQVR4nOXUyVOSYRwH8PcohivwoixCzXSvRr02g0KZG4gkog5b0zSVTrealrFcMhxNQURfwkhcEccZtWON1aHp0Ka3jin5H9iBgm/zYC7Niy9Lt/r9Ac9nnt/ypaj/pk4sXC5RBq0diqBltWTOvCGfNW9JZ9o2pIHW1eLJlnbJ0yZ5xo8fX7aLFYu2cUXQ+kMRtKJk3gL5rBmymTZIp1ohCbRA8syEYr8xIvYZPWKPjk4LUIRspxUh+6ZywQZuoBlFE0aIfRdBM43fCscM5an9YMlerly0f08L8BogYhohHNPvCMb1pUlbpAzZtjMBRON6CD0NELi1Yb7TIOJqE/NXwKgOhSNaFDjrRo/couRDbmYB9GgDauZuQejS7gKuOuQP1UQKnedl7F8sWG9kAvg+rIJU3+spFDhrkT9ci7yhGuQOXGhnI/OW5yxgsgUSf3NSIBqL4dKyA/lDu0DeYDVBVljI70M7APwm3FxjcP+NH0XeJk7gysoAadFhADn9VZ9ZiHzGHD7cotLpq4ghFn+o/+0s6LHGdADwH2nCLEQ23br+xwx8Rtx9NYG9cr4LgXbp8OT9SnLAcQ7H+jSfWAjJItaQGQPurR1AH7e/pAogu1e9zEKKA6aOhFvk0ePOS+8+FN0DHnMAD9Xg9aqvsRCSpiTsEh7aiA63XzD4GYumBvRURng9KmmCc6SoeJoedcnD9TjpNnG3KP6DSmR1qVwJgTji0dG01xBOGBWuuv1D4wJ4XapNfudZIcVVAkZXRtI0I6BbtZPdqTpDpVIid/0pgVv7NR0gq6sizHtQUUalUySuSZqSsEs25KzuipGkLeIqkqa5g9XXSRblOKrW+Q7NVnafep3cAVnTI7fon6xfsg0DChnZav4AAAAASUVORK5CYII="><b> Fotocopy Kartu Keluarga</b></li>
                        </ul>
                        <br>
                        <p class="text-danger">*Daftar ulang ke sekolah sebelum tanggal 30 Juli 2023</p>
                            <div class="card-footer">
                                <marquee style="margin-bottom: -5px;">SD NEGERI 1 BLATER - PURBALINGGA</marquee>
                            </div>
                        </div>
                    </div>
                    </div>
                </div>
            </div>
        </div>
        </div>

<!-- /.container-fluid -->

</div>
<!-- End of Main Content -->

<?php include('../template/footer.php'); ?>           