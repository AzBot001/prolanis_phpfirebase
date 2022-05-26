<?php
session_start();
error_reporting(0);
include('dbcon.php');
include 'base_url.php';

if(empty($_GET['hal'])){
    include 'pages/login.php';
}else{

    if (!isset($_SESSION['nama'])) {
        ?>
            <script>
                alert('Anda harus login untuk mengakses halaman ini!');
                window.location.href = '<?= $base_url; ?>';
            </script>
        <?php
            return false;
    }else{

    include 'layout/header.php';
    include 'layout/sidebar.php';
    include 'layout/navbar.php';
    
    if (isset($_GET['hal']) && $_GET['hal'] == 'beranda_admin') {
        $title = 'Beranda';
        $icon = 'fas fa-tv';
        include 'pages/beranda.php';
    }else if (isset($_GET['hal']) && $_GET['hal'] == 'pasien') {
        $title = 'Pasien';
        $icon = 'fas fa-hospital-user';
        include 'pages/pasien.php';
    }else if (isset($_GET['hal']) && $_GET['hal'] == 'pemeriksaan') {
        $title = 'Pemeriksaan';
        $icon = 'fas fa-stethoscope';
        include 'pages/pemeriksaan.php';
    }else if (isset($_GET['hal']) && $_GET['hal'] == 'laporan') {
        $title = 'Laporan';
        $icon = 'fas fa-file';
        include 'pages/laporan.php';
    } else {
        include 'pages/beranda.php';
    }
    
    include 'layout/footer.php';
}}
?>