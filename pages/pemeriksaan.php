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
                <?php
                    if (isset($_SESSION['msg_simpan_pemeriksaan'])) {
                    ?>
                        <div class="alert alert-success alert-dismissible fade show" role="alert">
                            <span class="fas fa-check fe-16 mr-2"></span> <?= flash('msg_simpan_pemeriksaan'); ?>
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                    <?php
                    }
                    ?>
                    <table class="table" id="dataTable">
                        <thead class="thead-light">
                            <tr>
                                <th>#</th>
                                <th>Nik</th>
                                <th>Nama</th>
                                <th>Kecamatan</th>
                                <th>Jenis Kelamin</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                          <?php  tampil_pemeriksaan($database,$base_url) ?>
                        </tbody>
                    </table>

                </div>
                <!-- /.card-body -->
            </div>
        </div>
    </section>
    <!-- /.content -->
</div>
<div class="modal fade" id="modal-xl">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title text-primer"><i class="fas fa-plus-circle"></i> Pasien | PROLANIS APP</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form action="" method="post" enctype="multipart/form-data">
                <div class="modal-body">
                    <div class="row">
                        <div class="col-6">
                            <div class="form-group">
                                <label>NIK</label>
                                <input type="text" name="nik" id="nik" class="form-control" placeholder="Masukan NIK">
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="form-group">
                                <label>NO BPJS</label>
                                <input type="text" name="bpjs" id="bpjs" class="form-control" placeholder="Masukan No BPJS">
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="form-group">
                                <label>Nama Lengkap</label>
                                <input type="text" name="nama_lengkap" id="nama_lengkap" class="form-control" placeholder="Masukan Nama Lengkap">
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="form-group">
                                <label>Jenis Kelamin</label><br>
                                <input type="radio" value="Pria" name="jk" id="jk">Pria
                                <input type="radio" value="Wanita" name="jk" id="jk">Wanita
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="form-group">
                                <label>Tanggal Lahir</label>
                                <input type="date" name="tgl_lahir" id="tgl_lahir" class="form-control">
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="form-group">
                                <label>No Hp</label>
                                <input type="text" name="nohp" placeholder="Masukan No Hp" id="nohp" class="form-control">
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="form-group">
                                <label>Golongan Darah</label>
                                <input type="text" name="goldar" id="goldar" class="form-control" placeholder="Masukan Golongan Darah">
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="form-group">
                                <label>Kecamatan</label>
                                <input type="text" name="kec" class="form-control" placeholder="Masukan Kecamatan" id="kec">
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="form-group">
                                <label>Alamat</label>
                                <textarea name="alamat" class="form-control" id="alamat" cols="20" rows="10"></textarea>
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="form-group">
                                <label>Password</label>
                                <input type="password" name="pass" class="form-control" id="pass" placeholder="Masukan Password">
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="form-group">
                                <label>Konfirmasi Password</label>
                                <input type="password" name="konfirmpass" id="konfirmpass" class="form-control" placeholder="Masukan Konfirmasi Password">
                            </div>
                        </div>

                    </div>
                </div>
                <div class="modal-footer">
                    <button type="submit" name="simpan_pasien" class="btn btn-block btn-primer"><i class="fas fa-save"></i> Simpan</button>
                    <!-- <button type="button" class="btn btn-block btn-danger" data-dismiss="modal"><i class="fas fa-times"></i> Batal</button> -->
                </div>
            </form>
        </div>
        <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
</div>