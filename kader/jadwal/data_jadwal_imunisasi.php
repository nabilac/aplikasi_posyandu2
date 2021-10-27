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
                    <strong class="card-title">Data Jadwal Imunisasi</strong>
                </div>
                <br>
                <form action="anak.php" method="get">
                  <label>&nbsp;&nbsp;&nbsp;&nbsp;Cari :</label>
                  <input type="text" name="cari">
                  <input type="submit" value="Cari">
                </form>
                 
                    <?php 
                    if(isset($_GET['cari'])){
                      $cari = $_GET['cari'];
                      echo "<b>Hasil pencarian : ".$cari."</b>";
                    }
                    ?>

                <div class="card-body">
                  <table id="bootstrap-data-table" class="table table-striped table-bordered">
                    <thead>
                      <tr>
                        <th>No</th>
                        <th>Nama</th>
                        <th>Detail</th>
                      </tr>
                    </thead>
                    <tbody>
                     <?php 
                      if(isset($_GET['cari'])){
                        $cari = $_GET['cari'];
                        $data = mysql_query("select * from anak where nama like '%".$cari."%'");       
                      }else{
                        $data = mysql_query("select * from anak");   
                      }
                      $no = 1;
                      while($r = mysql_fetch_array($data)){
                      ?>

                      <tr>
                       <td><?php echo $no++ ?></td>
                       <td><?php echo $r['nama_anak']; ?></td>
                       <td><a href='jadwal_imunisasi_per_anak.php?id_anak=<?php echo $r['id_anak'];?>'><input type="button" class="btn btn-outline-primary" value="Jadwal Imunisasi"></a></td>
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