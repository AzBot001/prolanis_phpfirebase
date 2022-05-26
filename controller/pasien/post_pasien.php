<?php

include 'controller/pasien/function_pasien.php';
include 'app/flash.php';

if (isset($_POST['hapus_pasien'])) {

    $key = $_POST['key'];
    $ref_table = 'user/' . $key;
    $delete_ref = $database->getReference($ref_table)->remove();
    flash("msg_hapus_pasien", "Data Pasien Berhasil Dihapus");
}
if (isset($_POST['simpan_pasien'])) {
    $nik          = $_POST['nik'];
    $bpjs         = $_POST['bpjs'];
    $nama_lengkap = $_POST['nama_lengkap'];
    $jk           = $_POST['jk'];
    $tgl          = $_POST['tgl_lahir'];
    $nohp         = $_POST['nohp'];
    $goldar       = $_POST['goldar'];
    $kec          = $_POST['kec'];
    $alamat       = $_POST['alamat'];
    $pass         = $_POST['pass'];
    $konfirpass   = $_POST['konfirmpass'];
    $tahun        = date('Y', strtotime($tgl));
    $bulan        = date('n', strtotime($tgl));
    $hari         = date('j', strtotime($tgl));
    $as           = 'user';
    $penderita    = $_POST['penderita'];
    $milliseconds = floor(microtime(true) * 1000);

    if ($pass != $konfirpass) {
?>
        <script>
            alert('Konfirmasi Password Salah')
        </script>
<?php
    } else {
        $postData =  [
            'alamat' => $alamat,
            'as' => $as,
            'bpjs' => $bpjs,
            'bulanlahir' => $bulan,
            'gender' => $jk,
            'goldar' => $goldar,
            'penyakit' => $penderita,
            'kecamatan' => $kec,
            'nama' => $nama_lengkap,
            'nik' => $nik,
            'password' => $pass,
            'phone' => $nohp,
            'tahunlahir' => $tahun,
            'tgllahir' => $hari,
            'tglpendaftaran' => $milliseconds
        ];
        $ref_table = "user";
        $postRef = $database->getReference($ref_table)->getChild($nik)->set($postData);
        flash("msg_simpan_pasien", "Data Pasien Berhasil Disimpan");
    }
}

if (isset($_POST['edit_pasien'])) {
    $nik          = $_POST['nik'];
    $bpjs         = $_POST['bpjs'];
    $nama_lengkap = $_POST['nama_lengkap'];
    $jk           = $_POST['jk'];
    $tgl          = $_POST['tgl_lahir'];
    $nohp         = $_POST['nohp'];
    $goldar       = $_POST['goldar'];
    $kec          = $_POST['kec'];
    $alamat       = $_POST['alamat'];
    $pass         = $_POST['pass'];

    $tahun        = date('Y', strtotime($tgl));
    $bulan        = date('n', strtotime($tgl));
    $hari         = date('j', strtotime($tgl));
    $as           = 'user';
    $penderita    = $_POST['penderita'];
    $milliseconds = floor(microtime(true) * 1000);

    $updateData =  [
        'alamat' => $alamat,
        'as' => $as,
        'bpjs' => $bpjs,
        'bulanlahir' => $bulan,
        'gender' => $jk,
        'goldar' => $goldar,
        'penyakit' => $penderita,
        'kecamatan' => $kec,
        'nama' => $nama_lengkap,
        'nik' => $nik,
        'password' => $pass,
        'phone' => $nohp,
        'tahunlahir' => $tahun,
        'tgllahir' => $hari,
        'tglpendaftaran' => $milliseconds
    ];

    $ref_table = 'user/' . $nik;
    $postRef = $database->getReference($ref_table)->update($updateData);
    flash("msg_edit_pasien", "Data Pasien Berhasil Disimpan");
}

?>