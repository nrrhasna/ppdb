<?php include('../config/auto_load.php'); ?>
<?php include('dashboard_control.php'); ?>
<?php include('../template/header.php'); ?>

    <!-- Begin Page Content -->
    <div class="container-fluid">
        <h3 class="text-gray-800">Dashboard</h3>
            <div class="row">
                <div class="col-md-6">
                    <div class="card border-left-info shadow h-100 py-2">
                        <div class="card-body">
                            <div class="row no-gutters align-items-center">
                                <div class="col mr-2">
                                    <div class="h6 font-weight-bold text-info text-uppercase mb-2">Pendaftar Masuk</div>
                                    <div class="h6 mt-2">
                                        <?= mysqli_num_rows($jml_peserta) ?> Orang
                                    </div>
                                    <div class="row no-gutters align-items-center">
                                        <div class="col">
                                            <div class="progress progress-sm mr-2">
                                                <div class="progress-bar bg-info" role="progressbar" style="width: 50%" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            <div class="col-md-6">
                <div class="card border-left-success shadow h-100 py-2">
                    <div class="card-body">
                        <div class="row no-gutters align-items-center">
                            <div class="col mr-2">
                                <div class="h6 font-weight-bold text-success text-uppercase mb-2">Lolos Seleksi</div>
                                <div class="h6 mt-2">
                                    <?= mysqli_num_rows($jml_lolos) ?> Orang
                                </div>
                                <div class="row no-gutters align-items-center">
                                    <div class="col">
                                        <div class="progress progress-sm mr-2">
                                            <div class="progress-bar bg-success" role="progressbar" style="width: 50%" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        </div>
        <hr class="mt-3">
        <div class="container-fluid">
        <h3 class="text-gray-800">Data Pendaftar Baru</h3>
        <div class="row">
        <div class="col-md-12">
            <div class="table-responsive">
                <table class="table table-bordered table-hover">
                    <tr>
                        <td>No</td>
                        <td>Nama Lengkap</td>
                        <td>Nama Panggilan</td>
                        <td>NIK</td>
                        <td>Tempat Lahir</td>
                        <td>Tanggal Lahir</td>
                        <td>Jenis Kelamin</td>
                        <td>Agama</td>
                        <td>Alamat</td>
                        <td>Anak ke-</td>
                        <td>Status dalam keluarga</td>
                        <td>Nama Ayah</td>
                        <td>Pekerjaan Ayah</td>
                        <td>Penghasilan Ayah</td>
                        <td>Nama Ibu</td>
                        <td>Pekerjaan Ibu</td>
                        <td>Penghasilan Ibu</td>
                        <td>Nama Wali</td>
                        <td>Pekerjaan Wali</td>
                        <td>Email</td>
                        <td>Telepon</td>
                        <td>Hobi</td>
                        <td>Bidang Studi</td>
                        <td>Olahraga</td>
                        <td>Cita-cita</td>
                        <td>Status</td>
                    </tr>
                    
                    <?php
                    $no = 1;
                    while($p = mysqli_fetch_array($all_peserta)) { ?>
                    <tr>
                        <td><?= $no++ ?></td>
                        <td><?= $p['name']?></td>
                        <td><?= $p['nickname']?></td>
                        <td><?= $p['nik']?></td>
                        <td><?= $p['tempat_lahir']?></td>
                        <td><?= $p['tanggal_lahir']?></td>
                        <td><?= $p['jenis_kelamin']?></td>
                        <td><?= $p['agama']?></td>
                        <td><?= $p['alamat']?></td>
                        <td><?= $p['anak']?></td>
                        <td><?= $p['status']?></td>
                        <td><?= $p['nama_ayah']?></td>
                        <td><?= $p['pekerjaan_ayah']?></td>
                        <td><?= $p['penghasilan_ayah']?></td>
                        <td><?= $p['nama_ibu']?></td>
                        <td><?= $p['pekerjaan_ibu']?></td>
                        <td><?= $p['penghasilan_ibu']?></td>
                        <td><?= $p['nama_wali']?></td>
                        <td><?= $p['pekerjaan_wali']?></td>
                        <td><?= $p['email']?></td>
                        <td><?= $p['telepon']?></td>
                        <td><?= $p['hobi']?></td>
                        <td><?= $p['bidang_studi']?></td>
                        <td><?= $p['olahraga']?></td>
                        <td><?= $p['citacita']?></td>
                        <td><span class="badge badge-info">BARU</span></td>
                    </tr>
                    <?php }
                    if(mysqli_num_rows($all_peserta) == 0) {
                        echo "<tr><td colspan='26'><b>Belum ada pendaftar baru</b></td></tr>";
                    }
                    ?>

                </table>
                </div>
            </div>
            </div>
        </div>
    <!-- /.container-fluid -->

    </div>
    <!-- End of Main Content -->

<?php include('../template/footer.php'); ?> 