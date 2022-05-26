<?php


function tampil_pemeriksaan($database, $base_url)
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
                    <button type="button" class="btn btn-xs btn-primer" data-toggle="modal" data-target="#tambah<?= $key ?>">
                        <i class="fas fa-plus"></i> <i class="fas fa-stethoscope"></i>
                    </button>
                    <button type="button" class="btn btn-xs btn-warning text-white" data-toggle="modal" data-target="#history<?= $key ?>">
                        <i class="fas fa-history"></i>
                    </button>
                </form>
            </td>
        </tr>

        <div class="modal fade" id="history<?= $key ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog  " role="document">
                <div class="modal-content">
                    <div class="modal-header bg-primer">
                        <h5 class="modal-title" id="exampleModalLabel">Riwayat Pemeriksaan Pasien</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <div class="row">
                            <div class="col-12">
                                <h5>
                                    <?= $row['nama'] ?>
                                </h5>
                            </div>
                        </div>
                        <?php
                        $query = $database->getReference('pemeriksaan')->orderByChild('nama')->equalTo($row['nama'])->getSnapshot()->getValue();
                        foreach ($query as $keys => $rows) {

                        ?>
                            <div class="row mt-2 p-2 bg-light">
                                <div class="col-12">
                                    <div><b>Tanggal :</b></div>
                                    <div>
                                        <?php $data = DateTime::createFromFormat('d/m/Y', $rows['tanggal'])->format('Y-m-d');
                                        echo tgl_indo($data) ?>
                                    </div>
                                </div>
                                <div class="col-4 mt-2">
                                    Berat Badan
                                </div>
                                <div class="col-1">
                                    :
                                </div>
                                <div class="col-7">
                                    <?= $rows['bb'] ?>
                                </div>
                                <div class="col-4">
                                    Tekanan Darah
                                </div>
                                <div class="col-1">
                                    :
                                </div>
                                <div class="col-7">
                                    <?= $rows['hipertensi'] ?>
                                </div>
                                <div class="col-4">
                                    Gula Darah
                                </div>
                                <div class="col-1">
                                    :
                                </div>
                                <div class="col-7">
                                    <?= $rows['diabetes'] ?>
                                </div>
                                <div class="col-4">
                                    Obat
                                </div>
                                <div class="col-1">
                                    :
                                </div>
                                <div class="col-7">
                                    <?= $rows['obat'] ?>
                                </div>
                            </div>
                        <?php

                        }
                        ?>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-danger" data-dismiss="modal">Keluar</button>
                    </div>
                </div>
            </div>
        </div>

        <div class="modal fade" id="tambah<?= $key ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog  " role="document">
                <div class="modal-content">
                    <form action="" method="post">
                    <div class="modal-header bg-primer">
                        <h5 class="modal-title" id="exampleModalLabel">Tambah Pemeriksaan</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                  
                           <div class="form-group">
                               <label>Berat Badan</label>
                               <input type="text" name="bb" class="form-control" id="">
                               <input type="hidden" name="nama" value="<?= $row['nama'] ?>" id="">
                           </div>
                           <div class="form-group">
                               <label>Tekanan Darah</label>
                               <input type="text" name="hipertensi" class="form-control" id="">
                           </div>
                           <div class="form-group">
                               <label>Gula Darah</label>
                               <input type="text" name="diabetes" class="form-control" id="">
                           </div>
                           <div class="form-group">
                               <label>Obat</label>
                               <input type="text" name="obat" class="form-control" id="">
                           </div>
                           <div class="form-group">
                               <label>Tanggal Periksa</label>
                               <input type="date" name="tanggal" class="form-control" id="">
                           </div>
                    
                    </div>
                    <div class="modal-footer">
                        <button type="submit" name="simpan_pemeriksaan" class="btn btn-primer"><i class="fas fa-save"></i> Simpan</button>
                        <button type="button" class="btn btn-danger" data-dismiss="modal"><i class="fas fa-times"></i> Keluar</button>
                    </div>
                    </form>
                </div>
            </div>
        </div>
<?php

    }
}


?>