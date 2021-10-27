<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Posyandu Tulip</title>
  <link rel="icon" type="image/png" href="../asset/images/logo_title.png">
  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="../plugins/fontawesome-free/css/all.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Tempusdominus Bootstrap 4 -->
  <link rel="stylesheet" href="../plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css">
  <!-- iCheck -->
  <link rel="stylesheet" href="../plugins/icheck-bootstrap/icheck-bootstrap.min.css">
  <!-- JQVMap -->
  <link rel="stylesheet" href="../plugins/jqvmap/jqvmap.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="../dist/css/adminlte.min.css">
  <!-- overlayScrollbars -->
  <link rel="stylesheet" href="../plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
  <!-- Daterange picker -->
  <link rel="stylesheet" href="../plugins/daterangepicker/daterangepicker.css">
  <!-- summernote -->
  <link rel="stylesheet" href="../plugins/summernote/summernote-bs4.min.css">
  <!-- DataTables -->
  <link rel="stylesheet" href="../plugins/datatables-bs4/css/dataTables.bootstrap4.min.css">
  <link rel="stylesheet" href="../plugins/datatables-responsive/css/responsive.bootstrap4.min.css">
  <link rel="stylesheet" href="../plugins/datatables-buttons/css/buttons.bootstrap4.min.css">
  
  <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,600,700,800' rel='stylesheet' type='text/css'>
  <script src="https://code.jquery.com/jquery-1.12.4.js"></script> 
</head>
<body class="hold-transition sidebar-mini layout-fixed">
<div class="wrapper">

  <!-- <div class="preloader flex-column justify-content-center align-items-center">
    <img class="animation__shake" src="../asset/images/logo_title.png" alt="Logo" height="100" width="100">
  </div> -->

  <nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
      </li>
      <!-- <li class="nav-item d-none d-sm-inline-block">
        <a href="#" class="nav-link">Selamat Datang <?php echo $_SESSION['username']?></a>
      </li> -->
    </ul>

    <ul class="navbar-nav ml-auto">
      <li class="nav-item dropdown">
         <p></p>
        <a class="nav-link" data-toggle="dropdown" href="#">
          <i class="far fa-user"></i>
        </a>
        <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
          <div class="dropdown-divider"></div>
          <a href="../../logout.php" class="dropdown-item">
            Logout
          </a>
        </div>
      </li>
    </ul>
  </nav>

  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <a href="index3.html" class="brand-link">
      <img src="../asset/images/logo_title.png" alt="Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
      <span class="brand-text font-weight-light">Posyandu Tulip</span>
    </a>

    <div class="sidebar">
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <li class="nav-item">
            <a href="../beranda/beranda.php" class="nav-link">
              <i class="nav-icon fas fa-home"></i>
              <p>
                Beranda
              </p>
            </a>
          </li>
          <li class="nav-header">Data User</li>
          <li class="nav-item">
            <a href="../admin/data_admin.php" class="nav-link">
              <i class="nav-icon fas fa-user"></i>
              <p>
                Data Admin
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="../kader/data_kader.php" class="nav-link">
              <i class="nav-icon fas fa-users"></i>
              <p>
                Data Kader
              </p>
            </a>
          </li>
          <li class="nav-header">Data Posyandu</li>
          <li class="nav-item">
            <a href="../anak/data_anak.php" class="nav-link">
              <i class="nav-icon fas fa-child"></i>
              <p>
                Data Anak
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="../pemeriksaan/data_pemeriksaan.php" class="nav-link">
              <i class="nav-icon fas fa-balance-scale"></i>
              <p>
                Data Pemeriksaan
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="../jadwal/data_jadwal_imunisasi.php" class="nav-link">
              <i class="nav-icon fas fa-calendar-alt"></i>
              <p>
                Jadwal Imunisasi
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-file-alt"></i>
              <p>
                Laporan
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="../laporan/data_anak.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Data Anak</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="../laporan/laporan_peranak.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Data Perkembangan Anak</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="../laporan/laporan_perbulan.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Data per Bulan</p>
                </a>
              </li>
            </ul>
          </li>
          <li class="nav-item">
            <a href="../sms/sms_gateway.php" class="nav-link">
              <i class="nav-icon fas fa-sms"></i>
              <p>
                SMS Gateway
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-chart-bar"></i>
              <p>
                Grafik Keseluruhan
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="../grafik/grafik_bb.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Grafik Berat Badan</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="../grafik/grafik_tb.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Grafik Tinggi Badan</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="../grafik/grafik_lk.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Grafik Lingkar Kepala</p>
                </a>
              </li>
            </ul>
          </li>
        </ul>
      </nav>
    </div>
  </aside>