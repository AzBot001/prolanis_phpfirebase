<?php
include 'controller/pemeriksaan/post_pemeriksaan.php';
?>

<div class="content-wrapper">
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="text-primer"><i class="<?= $icon ?>"></i> <?= $title; ?></h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="<?= $base_url ?>beranda_admin">Prolanis App</a></li>
                        <li class="breadcrumb-item active">Pemeriksaan</li>
                    </ol>
                </div>
            </div>
        </div>
    </section>
    <section class="content-header">
        <div class="container-fluid">
            <!-- COLOR PALETTE -->
            <div class="card card-default color-palette-box">
                <div class="card-header">
                    <h3 class="card-title">
                        Daftar Pemeriksaan
                    </h3>
                </div>
                <div class="card-body">
                    <form action="" method="post">
                        <div class="row">
                            <div class="col-3">
                                <label for="">Bulan :</label>
                                <select name="bulan" class="form-control">
                                    <option hidden>-Pilih Bulan-</option>
                                    <option value="01">Januari</option>
                                    <option value="02">Februari</option>
                                    <option value="03">Maret</option>
                                    <option value="04">April</option>
                                    <option value="05">Mei</option>
                                    <option value="06">Juni</option>
                                    <option value="07">Juli</option>
                                    <option value="08">Agustus</option>
                                    <option value="09">September</option>
                                    <option value="10">Oktober</option>
                                    <option value="11">November</option>
                                    <option value="12">Desember</option>
                                </select>
                            </div>
                            <div class="col-3">
                                <label for="">Tahun :</label>
                                <input type="text" name="tahun" class="form-control">
                            </div>
                            <div class="col-2 mt-2"><br>
                                <button type="submit" name="tampil" class="btn btn-primer"><i class="fas fa-search"></i> Tampilkan</button>
                            </div>
                        </div>
                    </form>
                </div>
                <!-- /.card-body -->
            </div>

  
                    <?php tampil_laporan($database,$base_url); ?>
               

        </div>
    </section>
    <!-- /.content -->
</div>