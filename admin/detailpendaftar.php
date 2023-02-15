<?php include('../config/auto_load.php'); ?>
<?php include('detailpendaftar_control.php'); ?>
<?php include('../template/header.php'); ?>
    <!-- Begin Page Content -->
    <div class="container-fluid">
            <h3 class="text-gray-800">Detail Peserta</h3>
            <div class="row">
                <div class="col-md-6">
                    <div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <h6 class="m-0 font-weight-bold text-primary">Profile</h6>
                        </div>
                        <div class="card-body">
                            <div class="text-center">
                                <?php
                                if(isset($data_peserta['foto'])) {
                                    $foto = '../upload/' . $data_peserta['foto'];                                            
                                } else {
                                    $foto = '../assets/img/pp.jpg';
                                }
                                ?>
                            <img src="<?= $foto ?>" alt="pp" class="img-fluid" width="150px">
                            </div>
                            <h5 class="text-center card-title mt-3">
                                <?= $data_peserta['name'] ?>
                            </h5>
                            <ul class="list-group">
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
                                    <h6 class="mb-0" style="color:black;">Agama</h6>
                                    <small><?= $data_peserta['agama'] ?></small>
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

            <div class="col-md-6">
                <div class="card shadow mb-4">
                    <div class="card-header py-3">
                        <h6 class="m-0 font-weight-bold text-primary">Data Minat Bakat Peserta</h6>
                    </div>
                    <div class="card-body">

                        <?php if($data_minatbakat['status'] == 0) {
                            echo '<div class="alert alert-warning">
                            Data Peserta Belum Divalidasi
                            </div>';
                        } else if($data_minatbakat['status'] == 1) {
                            echo '<div class="alert alert-info">
                            Peserta <b>LOLOS</b>
                            </div>';
                        } else if($data_minatbakat['status'] == 2) {
                            echo '<div class="alert alert-danger">
                            Peserta <b>TIDAK LOLOS</b>
                            </div>';
                        }
                        ?>
                        
                        <ul class="list-group">
                            <li class="list-group-item">
                                <h6 class="mb-0" style="color:black;">Hobi</h6>
                                <small><?= $data_minatbakat['hobi'] ?></small>
                            </li>
                            <li class="list-group-item">
                                <h6 class="mb-0" style="color:black;">Bidang studi yang paling digemari</h6>
                                <small><?= $data_minatbakat['bidang_studi'] ?></small>
                            </li>
                            <li class="list-group-item">
                                <h6 class="mb-0" style="color:black;">Olahraga yang paling digemari</h6>
                                <small><?= $data_minatbakat['olahraga'] ?></small>
                            </li>
                            <li class="list-group-item">
                                <h6 class="mb-0" style="color:black;">Cita-cita</h6>
                                <small><?= $data_minatbakat['citacita'] ?></small>
                            </li>
                        </ul>

                        <button type="button" class="btn btn-primary mt-3" data-toggle="modal" data-target="#modalvalidasi">Validasi Data Peserta</button>
                        
                        <!-- Modal -->
                        <div class="modal fade" id="modalvalidasi" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog" role="document">
                            <div class="modal-content">
                            <form action="<?= $base_url ?>/admin/detailpendaftar.php?id=<?= $id_peserta ?>" method="POST">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="modalvalidasi">Penilaian Peserta PPDB</h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <div class="modal-body">
                                    <label for="minatbakat">Verifikasi Peserta</label>
                                    <select name="minatbakat" id="nilai" class="form-control" required>
                                        <option value="">Pilih Status</option>
                                        <option value="1">Lolos</option>
                                        <option value="2">Tidak Lolos</option>
                                    </select>
                                </div>
                                <div class="modal-footer">
                                    <button name="simpan" value="simpan_nilai" class="btn btn-primary">Simpan</button>
                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                                </div>
                            </form>
                            </div>
                        </div>
                        </div>
                    </div>
                </div>
                <a href="datapendaftaran.php" class="btn btn-primary">Kembali</a>
            </div>
        </div>
    </div>
    <!-- /.container-fluid -->

    </div>
    <!-- End of Main Content -->

<?php include('../template/footer.php'); ?>