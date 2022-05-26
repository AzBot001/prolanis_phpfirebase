  <!-- Main Sidebar Container -->
  <?php
    $get = $_GET['hal'];
  ?>
  <aside class="main-sidebar sidebar-light-primary elevation-4">
    <!-- Brand Logo -->
    <div class="sideba-head" style="background-color: #0b8f75;">
      <a href="<?= $base_url ?>index.php?hal=beranda_admin" class="brand-link text-center">
        
        <span class="brand-text text-white">PROLANIS APP</span>
      </a>
    </div>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="<?= $base_url ?>public/assets/dist/img/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="#" class="d-block">Administrator</a>
        </div>
      </div>

      <!-- SidebarSearch Form -->

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <li class="nav-item">
            <a href="<?= $base_url ?>index.php?hal=beranda_admin" class="nav-link <?php if($get == 'beranda_admin' || $get == 'beranda_staff'){ echo 'active';} ?>">
              <i class="nav-icon fas fa-tv"></i>
              <p>
                Beranda
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="<?= $base_url ?>index.php?hal=pasien" class="nav-link <?php if($get == 'pasien' || $get == 'informasi_staff'){ echo 'active';} ?>">
              <i class="nav-icon fas fa-hospital-user"></i>
              <p>
                Pasien
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="<?= $base_url ?>index.php?hal=pemeriksaan" class="nav-link <?php if($get == 'pemeriksaan' || $get == 'map_staff'){ echo 'active';} ?>">
            <i class="fa fa-stethoscope"></i>
              <p>
                Pemeriksaan
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="<?= $base_url ?>index.php?hal=laporan" class="nav-link <?php if($get == 'laporan' || $get == 'map_staff'){ echo 'active';} ?>">
            <i class="fa fa-file"></i>
              <p>
                Laporan
              </p>
            </a>
          </li>
        </ul>

      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>