<?php
include '../action/koneksi.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Posyandu Tulip - Data Admin </title>
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
</head>
<body class="hold-transition sidebar-mini layout-fixed">
<div class="wrapper">

  <nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
      </li>
    </ul>

    <ul class="navbar-nav ml-auto">
      <li class="nav-item dropdown">
        <a class="nav-link" data-toggle="dropdown" href="#">
          <i class="far fa-user"></i>
        </a>
        <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
          <div class="dropdown-divider"></div>
          <a href="../logout.php" class="dropdown-item">
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
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                Beranda
              </p>
            </a>
          </li>
          <li class="nav-header">Data User</li>
          <li class="nav-item">
            <a href="../admin/data_admin.php" class="nav-link">
              <i class="nav-icon fas fa-users"></i>
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
            <a href="data_anak.php" class="nav-link">
              <i class="nav-icon fas fa-users"></i>
              <p>
                Data Anak
              </p>
            </a>
          </li>
        </ul>
      </nav>
    </div>
  </aside>

  <div class="content-wrapper">
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Grafik Tinggi Badan</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="../beranda/beranda.php">Home</a></li>
              <li class="breadcrumb-item"><a href="data_pemeriksaan.php">Data Pemeriksaan</a></li>
              <li class="breadcrumb-item active">Grafik Tinggi Badan</li>
            </ol>
          </div>
        </div>
      </div>
    </div>

    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-12">
            <div class="card">
              <div class="card-body">
                <?php
                    $syarat=$_GET['id_anak'];
                    $data=mysql_query("SELECT * FROM anak WHERE id_anak='$syarat'");
                    $no=1;
                    function format_indo($date)
                    {
                        $BulanIndo = array("Januari", "Februari", "Maret", "April", "Mei", "Juni", "Juli", "Agustus", "September", "Oktober", "November", "Desember");

                        $tahun = substr($date, 0, 4);               
                        $bulan = substr($date, 5, 2);
                        $tgl   = substr($date, 8, 2);
                        $result = $tgl . "-" . $BulanIndo[(int)$bulan-1]. "-". $tahun;
                        return($result);
                    }
                  while ($r=mysql_fetch_array($data))                                     
                  {
                ?>
                Nama Lengkap : <?php echo $r['nama_anak']; ?>
                <br>
                Tanggal Lahir : <?php echo format_indo($r['tanggal_lahir']); ?>
                <br>

                <?php
                // tanggal lahir
                $tanggal_lahir = new DateTime($r['tanggal_lahir']);
                // tanggal hari ini
                $today = new DateTime('today');
                // tahun
                $y = $today->diff($tanggal_lahir)->y;
                // bulan
                $m = $today->diff($tanggal_lahir)->m;
                // hari
                $d = $today->diff($tanggal_lahir)->d;
                echo "Umur : " . $y . " tahun " . $m . " bulan " . $d . " hari";
                ?>
                <br>
                <br>
                <?php }?>

                <?php
                $koneksi     = mysqli_connect("localhost", "root", "", "posyandu_ta");
                $syarat=$_GET['id_anak'];
                $tanggal_pemeriksaan       = mysqli_query($koneksi, "SELECT tanggal_pemeriksaan FROM pemeriksaan WHERE id_anak='$syarat'");
                $tinggi_badan = mysqli_query($koneksi, "SELECT tinggi_badan FROM pemeriksaan WHERE id_anak='$syarat'");
                ?>

                <script src="../Chart.js/Chart.bundle.js"></script>

                <style type="text/css">
                    .container {
                        width: 50%;
                        margin: 15px auto;
                    }
                </style>
    
                <div class="container">
                    <canvas id="myChart_tb" width="100" height="100"></canvas>
                </div>

              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
  </div>

<?php
include '../layout/footer.php';
?>