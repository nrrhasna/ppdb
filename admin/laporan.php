<?php include('../config/auto_load.php'); ?>
<?php include('laporan_control.php') ?>
<?php include('../template/header.php'); ?>

        <!-- Begin Page Content -->
        <div class="container-fluid">
            <h3 class="text-gray-800 mb-3">Laporan Pendaftaran</h3>
            <a href="<?= $base_url ?>/cetak/data_pendaftar.php" class="btn btn-warning btn-sm mr-2 mb-2">Cetak Data Pendaftar</a>
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
                            <td>Actions</td>
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
                            <?php
                                if($p['status'] == 0){
                                    $status = '<span class="badge badge-info">BARU</span>';
                                } else if($p['status'] == 1) {
                                    $status = '<span class="badge badge-success">LOLOS</span>';
                                } else if($p['status'] == 2) {
                                    $status = '<span class="badge badge-danger">TIDAK LOLOS</span>';
                                }
                            ?>
                            <td><?= $status ?></td>
                            <td>
                                <a href="<?= $base_url ?>/cetak/detail_cetak.php?id=<?= $p['id']?>" class="btn btn-warning btn-sm mr-2 mb-2">Cetak</a>
                            </td>
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