<?php
  include '../action/koneksi.php';
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Posyandu Tulip</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="../assets/img/logo_title.png" rel="icon">
  <link href="../assets/img/logo_title.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="../assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="../assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="../assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="../assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="../assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="../assets/vendor/remixicon/remixicon.css" rel="stylesheet">
  <link href="../assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="../assets/css/style.css" rel="stylesheet">
  <link href="../assets/css/style2.css" rel="stylesheet">

  <!-- =======================================================
  * Template Name: Gp - v4.6.0
  * Template URL: https://bootstrapmade.com/gp-free-multipurpose-html-bootstrap-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>

  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top header-inner-pages">
    <div class="container d-flex align-items-center justify-content-lg-between">

      <h1 class="logo me-auto me-lg-0"><a href="../beranda/beranda.php">Posyandu Tulip</a></h1>
      <!-- Uncomment below if you prefer to use an image logo -->
      <!-- <a href="index.html" class="logo me-auto me-lg-0"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->

      <?php include('../layout/header.php'); ?>

    </div>
  </header><!-- End Header -->

  <main id="main">

    <!-- ======= Breadcrumbs ======= -->
    <section class="">
    </section><!-- End Breadcrumbs -->

    <section class="inner-page">
      <div class="container">
        
        <div class="card">
                <div class="card-header">
                    <strong class="card-title">Data Pemeriksaan peranak</strong>
                </div>
                
                <?php
                    $syarat=$_GET['id_anak'];
                    $data=mysql_query("SELECT * FROM anak WHERE id_anak='$syarat'");
                    while ($r=mysql_fetch_array($data)) {
                ?>
                <br>
                <div>
                  &nbsp;&nbsp;&nbsp;&nbsp;<a href="tambah_data_pemeriksaan.php?id_anak=<?php echo $r['id_anak'];?>""><input type="submit" class="btn btn-primary btn-fw" value="Tambah Data"></a>
                  <a href="grafik_bb.php?id_anak=<?php echo $r['id_anak'];?>""><input type="submit" class="btn btn-primary btn-fw" value="Grafik Berat Badan"></a>
                  <a href="grafik_tb.php?id_anak=<?php echo $r['id_anak'];?>""><input type="submit" class="btn btn-primary btn-fw" value="Grafik Tinggi Badan"></a>
                  <a href="grafik_lk.php?id_anak=<?php echo $r['id_anak'];?>""><input type="submit" class="btn btn-primary btn-fw" value="Grafik Lingkar Kepala"></a>
                </div>
                <br>
                <?php }?>

                <?php
                  $data=mysql_query("SELECT * FROM anak ");
                  $no=1;
                  $syarat=$_GET['id_anak'];
                  $data=mysql_query("SELECT * FROM anak WHERE id_anak='$syarat'");
                                         
                  // Konversi tanggal ke bahasa indonesia

                  while ($r=mysql_fetch_array($data))
                                      
                  {
                ?>
                <div class="card-body">
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
                  <table id="bootstrap-data-table" class="table table-striped table-bordered">
                    <thead>
                      <tr>
                        <th>No</th>
                        <th>Tanggal Penimbangan</th>
                        <th>Berat Badan (KG)</th>
                        <th>Tinggi Badan (CM)</th>
                        <th>Lingkar Kepala</th>
                        <th>Perilaku</th>
                        <th>aksi</th>
                      </tr>
                    </thead>
                    <tbody>

                     <?php

                      $data=mysql_query("SELECT pemeriksaan.id_anak, pemeriksaan.tanggal_pemeriksaan, pemeriksaan.berat_badan, pemeriksaan.tinggi_badan, pemeriksaan.lingkar_kepala, pemeriksaan.perilaku FROM pemeriksaan INNER join anak on anak.id_anak = pemeriksaan.id_anak ");
                     
                      $no=1;
                      
                      $syarat=$_GET['id_anak'];
                      $data=mysql_query("SELECT * FROM pemeriksaan WHERE id_anak='$syarat'");

                      function format_indo($date)
                        {
                            $BulanIndo = array("Januari", "Februari", "Maret", "April", "Mei", "Juni", "Juli", "Agustus", "September", "Oktober", "November", "Desember");

                            $tahun = substr($date, 0, 4);               
                            $bulan = substr($date, 5, 2);
                            $tgl   = substr($date, 8, 2);
                            $result = $tgl . "-" . $BulanIndo[(int)$bulan-1]. "-". $tahun;
                            return($result);
                        }

                      while ($r=mysql_fetch_array($data)) {
                       ?>
                       
                       
                        <tr>
                       <td><?php echo $no++ ?></td>
                       <td><?php echo format_indo ($r['tanggal_pemeriksaan']); ?></td>
                       <td><?php echo $r['berat_badan']; ?></td>
                       <td><?php echo $r['tinggi_badan']; ?></td>
                       <td><?php echo $r['lingkar_kepala']; ?></td>
                       <td><?php echo $r['perilaku']; ?></td>
                        <td><a href='ubahpenimbanganperanak.php?id_anak=<?php echo $r['id_anak'];?>?id_pemeriksaan=<?php echo $r['id_pemeriksaan'];?>'><input type="button" class="btn btn-outline-primary" value="ubah"></a></td>
                      </tr>
                       <?php
                      }
                      ?>
                    </tbody>
                   </table>
                </div> 

      </div>
    </section>

  </main><!-- End #main -->
<br/><br/><br/>

<?php include('../layout/footer.php'); ?>