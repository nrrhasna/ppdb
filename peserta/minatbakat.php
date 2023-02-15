<?php include('../config/auto_load.php'); ?>
<?php include('minatbakat_control.php'); ?>
<?php include('../template/header.php'); ?>

                <!-- Begin Page Content -->
    <div class="container-fluid">

        <h1 class="h3 mb-4 text-gray-800">EDIT MINAT BAKAT</h1>    
        <div class="row">
            <div class="col-md-6">
                <div class="col-md-12">
                    <?php if(isset($_SESSION['pesan_sukses'])) { ?>
                    <div class="alert alert-success">
                        <?= $_SESSION['pesan_sukses'] ?>
                    </div>
                    <?php } unset($_SESSION['pesan_sukses']); ?>
                </div>
            
            <div class="card shadow mb-4">
                    <div class="card-header py-3">
                        <h6 class="m-0 font-weight-bold text-primary">Minat Bakat</h6>
                    </div>
                    <div class="card-body">
                    <p class="text-danger">*Ubah jika ada kesalahan input</p>
                    <form class="user" method="POST" action="<?= $base_url ?>/peserta/minatbakat.php">
                        <?php if(isset($data_minatbakat)){
                            // echo "edit minat bakat";
                            $id_minatbakat = $data_minatbakat['id'];
                            echo "<input type='hidden' name='id_minatbakat' value='$id_minatbakat'>";
                        } else {
                            // echo "insert minat bakat";
                        } ?>
                            <div class="form-group">
                                <label for="hobi">Masukkan Hobi</label>
                                <input type="text" name="hobi" class="form-control"
                                    id="hobi" placeholder="Hobi" value="<?php if(isset($data_minatbakat['hobi'])) { echo $data_minatbakat['hobi'];} ?> ">
                            </div>
                            <div class="form-group">
                                <label for="bidang_studi">Bidang Studi yang paling digemari</label>
                                <input type="text" name="bidang_studi" class="form-control"
                                    id="bidang_studi" placeholder="Bidang Studi" value="<?php if(isset($data_minatbakat['bidang_studi'])) { echo $data_minatbakat['bidang_studi'];} ?> ">
                            </div>
                            <div class="form-group">
                                <label for="olahraga">Olahraga yang paling digemari</label>
                                <input type="text" name="olahraga" class="form-control"
                                    id="olahraga" placeholder="Olahraga" value="<?php if(isset($data_minatbakat['olahraga'])) { echo $data_minatbakat['olahraga'];} ?> ">
                            </div>
                            <div class="form-group">
                                <label for="citacita"> Masukkan Cita-cita</label>
                                <input type="text" name="citacita" class="form-control"
                                    id="citacita" placeholder="Cita-cita" value="<?php if(isset($data_minatbakat['citacita'])) { echo $data_minatbakat['citacita'];} ?> ">
                            </div>

                            <button type="submit" name="btn_simpan" value="simpan_minatbakat" class="btn btn-primary">
                                Simpan
                            </button>

                            <!-- ALERT BERHASIL DAFTAR -->

                        </form>
                    </div>
                </div>
            </div>                   
        </div>
    <!-- /.container-fluid -->

    </div>
            <!-- End of Main Content -->

<?php include('../template/footer.php'); ?> 