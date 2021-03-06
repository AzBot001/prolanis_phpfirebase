<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>PROLANIS APP</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- Font Awesome -->
  <link rel="stylesheet" href="<?= $base_url ?>public/assets/plugins/fontawesome-free/css/all.min.css">
  <link rel="stylesheet" href="<?= $base_url ?>public/assets/plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <link rel="stylesheet" href="<?= $base_url ?>public/assets/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css">
  <link rel="stylesheet" href="<?= $base_url ?>public/assets/plugins/datatables-responsive/css/responsive.bootstrap4.min.css">
  <link rel="stylesheet" href="<?= $base_url ?>public/assets/plugins/datatables-buttons/css/buttons.bootstrap4.min.css">
  <!-- overlayScrollbars -->
  <link rel="stylesheet" href="<?= $base_url ?>public/assets/dist/css/adminlte.min.css">
  <!-- Google Font: Source Sans Pro -->
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
  <!-- SummerNote CSS -->
  <link href="<?= $base_url ?>public/assets/plugins/summernote/summernote.min.css" rel="stylesheet">
  <style>
    .sidebar-head {
      background-color: #FBB62B;
    }
 

    .overlay-dark {
      background-color: rgba(black, 0.4);
    }



    .navbar-blue {
      background-color: #1584A2;
    }
    
    .btn-primer{   
    color: #fff;
    background-color: #0b8f75;
    border-color: #0b8f75;
    box-shadow: none;
    }

    .bg-primer{   
    color: #fff;
    background-color: #0b8f75;
    border-color: #0b8f75;
    box-shadow: none;
    }

    .text-primer{
      color: #0b8f75;
    }
    
    .btn-primer:hover{   
    color: #fff;
    background-color: #185c4f;
    border-color: #185c4f;
    box-shadow: none;
    transition: 0.1;
    }


    .bg-login {
      background-image: url('public/dist/img/bg1.png');
      background-attachment: fixed;
      background-position: center;
      background-repeat: no-repeat;
      background-size: cover;
      padding-bottom: 0px;
    }

    .profile-user-img {
    border: 3px solid #adb5bd;
    margin: 0 auto;
    padding: 3px;
    width: 205px;
}

    .pagination>li.active>a,
    .pagination>li.active>span {
      background-color: #0b8f75 !important;
      border-color: #0b8f75 !important;
    }
    .sidebar-light-primary .nav-sidebar>.nav-item>.nav-link.active {
    background-color: #0b8f75;
    color: #fff;
}
  </style>
</head>
<?php
function tgl_indo($tanggal){
	$bulan = array (
		1 =>   'Januari',
		'Februari',
		'Maret',
		'April',
		'Mei',
		'Juni',
		'Juli',
		'Agustus',
		'September',
		'Oktober',
		'November',
		'Desember'
	);
	$pecahkan = explode('-', $tanggal);
	
	// variabel pecahkan 0 = tanggal
	// variabel pecahkan 1 = bulan
	// variabel pecahkan 2 = tahun
 
	return $pecahkan[2] . ' ' . $bulan[ (int)$pecahkan[1] ] . ' ' . $pecahkan[0];
}
?>
