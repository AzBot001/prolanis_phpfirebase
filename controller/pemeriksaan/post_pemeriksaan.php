<?php

include 'controller/pemeriksaan/function_pemeriksaan.php';
include 'app/flash.php';

if (isset($_POST['simpan_pemeriksaan'])) {
    $nama = $_POST['nama'];
    $bb = $_POST['bb'];
    $hipertensi = $_POST['hipertensi'];
    $diabetes = $_POST['diabetes'];
    $obat = $_POST['obat'];
    $tanggal = date('d/m/Y', strtotime($_POST['tanggal']));
    $bulan = date('n', strtotime($_POST['tanggal']));
    $tahun = date('Y', strtotime($_POST['tanggal']));

    $bulan2 = date('m', strtotime($_POST['tanggal']));
   
    $milliseconds = floor(microtime(true) * 1000);

    $fetch_data = $database->getReference('user')->orderByChild('nama')->equalTo($nama)->getSnapshot()->getValue();
    foreach ($fetch_data as $key => $value) {
        $bpjs = $value['bpjs'];
    }

    $ref_table = "pemeriksaan";
    $newKey = $database->getReference($ref_table)->push()->getKey();

    $postData = [
        'bb' => $bb,
        'bulan' => $bulan,
        'tahun' => $tahun,
        'bpjs' => $bpjs,
        'diabetes' => $diabetes,
        'hipertensi' => $hipertensi,
        'id' => $newKey,
        'nama' => $nama,
        'obat' => $obat,
        'date'=>$bulan2.$tahun,
        'tanggal' => $tanggal,
        'tglinput' => $milliseconds,
    ];

    $refR = 'pemeriksaan/' . $newKey;
    $postRef = $database->getReference($refR)->update($postData);


    flash("msg_simpan_pemeriksaan", "Data Pemeriksaan Berhasil Disimpan");
}

if (isset($_POST['tampil'])) {
  
    if ($_POST['bulan'] == '-Pilih Bulan-' || empty($_POST['tahun'])) {
?>
        <script>
            alert('Isian Harus Lengkap')
        </script>
        <?php
    } else {
        function tampil_laporan($database,$base_url)
        {

            $tahun = $_POST['tahun'];
            $bulan = $_POST['bulan'];
        ?>
            <div class="card card-default color-palette-box">

                <div class="card-body">
                    <div class="table-responsive">
                    <a target="_blank" href="<?= $base_url ?>cetak.php?tahun=<?=$tahun?>&bulan=<?= $bulan ?>" class="btn btn-primer text-white mb-2"><i class="fas fa-print"></i> Print</a>
                    <table class="table table-bordered mt-2" id="tb_data">
                        <thead class="">
                            <tr>
                                <th rowspan="2" class="text-center">No</th>
                                <th rowspan="2" class="text-center" valign="center">Nama Peserta</th>
                                <th colspan="2" class="text-center">Bukti TTD Peserta</th>
                                <th rowspan="2" class="text-center">Daftar Obat</th>
                                <th rowspan="2" class="text-center">Dosis Obat</th>
                                <th colspan="7" class="text-center">Pemantauan Kesehatan</th>
                            </tr>
                            <tr>
                                <th>Kehadiran</th>
                                <th>Pengambilan Obat</th>
                                <th>CHO</th>
                                <th>IMT</th>
                                <th>Asam Urat</th>
                                <th>GDP</th>
                                <th>GDS</th>
                                <th>TD</th>
                                <th>BB</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            $no = 1;
                            $pasien = $database->getReference('user')->orderByChild('as')->equalTo('user')->getSnapshot()->getValue();
                            foreach ($pasien as $q => $r) {
                                $var[] = $r['nama'];
                            }
                            $fetch_data = $database->getReference('pemeriksaan')->orderByChild('date')->equalTo($_POST['bulan'].$_POST['tahun'])->getValue();
                            foreach ($fetch_data as $key => $value) {
                                $var2[]= $value['nama'];
                            ?>

                                <tr>
                                    <td><?= $no++ ?></td>
                                    <td><?= $value['nama'] ?></td>
                                    <td></td>
                                    <td></td>
                                    <td><?= $value['obat'] ?></td>
                                    <td>1 x 1</td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td><?= $value['diabetes'] ?></td>
                                    <td></td>
                                    <td><?= $value['hipertensi'] ?></td>
                                    <td><?= $value['bb'] ?></td>
                                </tr>


                            <?php
                            }
                            if(empty($var2)){
                                $arry = array();
                            }else{
                                $arry = $var2;
                            }
                            $arr = array_diff($var,$arry);
                            
                            foreach ($arr as $key => $q){
                                ?>

                                <tr>
                                    <td><?= $no++ ?></td>
                                    <td><?= $q ?></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                </tr>


                            <?php
                            }
                          
                            ?>
                        </tbody>
                    </table>
                    </div>
                </div>
            </div>
<?php
        }
    }
}

?>