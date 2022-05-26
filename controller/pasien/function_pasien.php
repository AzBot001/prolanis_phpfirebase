<?php

function tampil_pasien($database, $base_url)
{
    $nomor = 1;
    $fetch_data = $database->getReference('user')->orderByChild('as')->equalTo('user')->getSnapshot()->getValue();


    foreach ($fetch_data as $key => $row) {

?>
        <tr>
            <td><?= $nomor++ ?></td>
            <td><?= $row['nik'] ?></td>
            <td><?= $row['nama'] ?></td>
            <td><?= $row['kecamatan'] ?></td>
            <td><?= $row['gender'] ?></td>
            <td>
                <form action="" method="post">
                    <input type="hidden" name="key" value="<?= $key ?>">
                    <button type="button" class="btn btn-xs btn-primer" data-toggle="modal" data-target="#detail<?= $key ?>">
                        <i class="fas fa-search"></i>
                    </button>
                    <button type="button" class="btn btn-xs btn-warning text-white" data-toggle="modal" data-target="#edit<?= $key ?>">
                        <i class="fas fa-edit"></i></button>
                    <button type="submit" name="hapus_pasien" onclick="return confirm('Apakah anda ingin menghapus data ini?')" class="btn btn-danger btn-xs"><i class="fas fa-trash"></i></button>
                </form>
            </td>
        </tr>

        <!-- Modal -->
        <div class="modal fade" id="detail<?= $key ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog " role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Detail Pasien</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <div class="row m-2">
                            <div class="col-4">
                                <p>NIK</p>
                            </div>
                            <div class="col-1">
                                :
                            </div>
                            <div class="col-7">
                                <?= $row['nik'] ?>
                            </div>
                        </div>
                        <div class="row m-2 ">
                            <div class="col-4">
                                <p>Nama</p>
                            </div>
                            <div class="col-1">
                                :
                            </div>
                            <div class="col-7">
                                <?= $row['nama'] ?>
                            </div>
                        </div>
                        <div class="row m-2">
                            <div class="col-4">
                                <p>No. BPJS</p>
                            </div>
                            <div class="col-1">
                                :
                            </div>
                            <div class="col-7">
                                <?= $row['bpjs'] ?>
                            </div>
                        </div>
                        <div class="row m-2 ">
                            <div class="col-4">
                                <p>Tanggal Lahir</p>
                            </div>
                            <div class="col-1">
                                :
                            </div>
                            <div class="col-7">
                                <?php $tg = $row['tahunlahir'] . "-" . $row['bulanlahir'] . "-" . $row['tgllahir'];
                                echo tgl_indo($tg) ?>
                            </div>
                        </div>
                        <div class="row m-2">
                            <div class="col-4">
                                <p>Jenis Kelamin</p>
                            </div>
                            <div class="col-1">
                                :
                            </div>
                            <div class="col-7">
                                <?= $row['gender'] ?>
                            </div>
                        </div>
                        <div class="row m-2 ">
                            <div class="col-4">
                                <p>Golongan Darah</p>
                            </div>
                            <div class="col-1">
                                :
                            </div>
                            <div class="col-7">
                                <?= $row['goldar'] ?>
                            </div>
                        </div>
                        <div class="row m-2">
                            <div class="col-4">
                                <p>No Hp</p>
                            </div>
                            <div class="col-1">
                                :
                            </div>
                            <div class="col-7">
                                <?= $row['phone'] ?>
                            </div>
                        </div>
                        <div class="row m-2 ">
                            <div class="col-4">
                                <p>Kecamatan</p>
                            </div>
                            <div class="col-1">
                                :
                            </div>
                            <div class="col-7">
                                <?= $row['kecamatan'] ?>
                            </div>
                        </div>
                        <div class="row m-2">
                            <div class="col-4">
                                <p>Alamat</p>
                            </div>
                            <div class="col-1">
                                :
                            </div>
                            <div class="col-7">
                                <?= $row['alamat'] ?>
                            </div>
                        </div>
                        <div class="row m-2 ">
                            <div class="col-4">
                                <p>Penderita</p>
                            </div>
                            <div class="col-1">
                                :
                            </div>
                            <div class="col-7">
                                <?= $row['penyakit'] ?>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-primer" data-dismiss="modal">Close</button>
                    </div>
                </div>
            </div>
        </div>

        <div class="modal fade" id="edit<?= $key ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-lg" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Edit Pasien Pasien</h5>
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
                                        <input type="text" name="nik" value="<?= $key ?>" id="nik" class="form-control" placeholder="Masukan NIK" readonly>
                                    </div>
                                </div>
                                <div class="col-6">
                                    <div class="form-group">
                                        <label>NO BPJS</label>
                                        <input type="text" name="bpjs" id="bpjs" class="form-control" value="<?= $row['bpjs'] ?>" placeholder="Masukan No BPJS">
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="form-group">
                                        <label>Nama Lengkap</label>
                                        <input value="<?= $row['nama'] ?>" type="text" name="nama_lengkap" id="nama_lengkap" class="form-control" placeholder="Masukan Nama Lengkap">
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="form-group">
                                        <label>Jenis Kelamin</label><br>
                                        <input type="radio" value="Pria" name="jk" id="jk" <?php if ($row['gender'] == 'Pria') {
                                                                                                echo "checked";
                                                                                            } ?>>Pria
                                        <input type="radio" value="Wanita" name="jk" id="jk" <?php if ($row['gender'] == 'Wanita') {
                                                                                                    echo "checked";
                                                                                                } ?>>Wanita
                                    </div>
                                </div>
                                <div class="col-6">
                                    <div class="form-group">
                                        <label>Tanggal Lahir</label>
                                        <?php $date = $row['tgllahir'] . '-' . $row['bulanlahir'] . '-' . $row['tahunlahir'];
                                        $dateAsli = date('Y-m-d', strtotime($date)); ?>
                                        <input type="date" name="tgl_lahir" id="tgl_lahir" value="<?= $dateAsli ?>" class="form-control">
                                    </div>
                                </div>
                                <div class="col-6">
                                    <div class="form-group">
                                        <label>No Hp</label>
                                        <input type="text" name="nohp" placeholder="Masukan No Hp" value="<?= $row['phone'] ?>" id="nohp" class="form-control">
                                    </div>
                                </div>
                                <div class="col-6">
                                    <div class="form-group">
                                        <label>Golongan Darah</label>
                                        <input type="text" name="goldar" id="goldar" value="<?= $row['goldar'] ?>" class="form-control" placeholder="Masukan Golongan Darah">
                                    </div>
                                </div>
                                <div class="col-6">
                                    <div class="form-group">
                                        <label>Kecamatan</label>
                                        <input type="text" name="kec" class="form-control" value="<?= $row['kecamatan'] ?>" placeholder="Masukan Kecamatan" id="kec">
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="form-group">
                                        <label>Alamat</label>
                                        <textarea name="alamat" class="form-control" id="alamat" cols="20" rows="10"><?= $row['alamat'] ?></textarea>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="form-group">
                                        <label>Penderita</label><br>
                                        <input type="radio" name="penderita" value="Hipertensi" id="" <?php if($row['penyakit'] == 'Hipertensi'){ echo "checked"; } ?> > Hipertensi <br>
                                        <input type="radio" name="penderita" value="Diabetes Melitus" id=""<?php if($row['penyakit'] == 'Diabeten Melitus'){ echo "checked"; } ?> > Diabetes Melitus <br>
                                        <input type="radio" name="penderita" value="Jantung" id=""<?php if($row['penyakit'] == 'Jantung'){ echo "checked"; } ?> > Jantung
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="form-group">
                                        <label>Password</label>
                                        <input type="password" value="<?= $row['password'] ?>" name="pass" class="form-control" id="pass" placeholder="Masukan Password">
                                    </div>
                                </div>
                                


                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="submit" name="edit_pasien" class="btn btn-block btn-primer"><i class="fas fa-save"></i> Simpan</button>
                            <!-- <button type="button" class="btn btn-block btn-danger" data-dismiss="modal"><i class="fas fa-times"></i> Batal</button> -->
                        </div>
                    </form>
                </div>
            </div>
        </div>
<?php

    }
}

?>