<?php
include('dbcon.php');
$tahun = $_GET['tahun'];
$bulan = $_GET['bulan'];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cetrak Laporan</title>
</head>
<style>
    table{
        border-collapse: collapse;
    }
</style>
<body>
<div class="card-body">
                    <div class="table-responsive">
                    <table width="100%" border="1">
                        <thead class="">
                            <tr>
                                <th rowspan="2" class="text-center">No</th>
                                <th rowspan="2" class="text-center">Nama Peserta</th>
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
                                <th>TB</th>
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
</body>
</html>