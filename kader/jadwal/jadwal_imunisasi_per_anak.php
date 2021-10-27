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
        
        <?php

      $data=mysql_query("SELECT * FROM anak ");
      $no=1;
      $syarat=$_GET['id_anak'];
      $data=mysql_query("SELECT * FROM anak WHERE id_anak='$syarat'");
                             
      // Konversi tanggal ke bahasa indonesia
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

    <div class="card">
                <div class="card-header">
                    <strong class="card-title">Data Jadwal Imunisasi peranak</strong>
                </div>
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
                
                  <table id="bootstrap-data-table" class="table table-striped table-bordered">
                    <thead>
                      <tr>
                        <th>Tanggal Imunisasi</th>
                        <th>Nama Vaksin</th>
                        <th>Detail</th>
                        
                        
                      </tr>
                    </thead>
                    <tbody>
                     <?php 
                          $date1 = new DateTime($r['tanggal_lahir']);
                           $HB = $date1->modify("+0 days");
                              
                              
                          $date2 = new DateTime($r['tanggal_lahir']);
                          $BCG = $date2->modify("+30 days");
                              
                              
                          $date3 = new DateTime($r['tanggal_lahir']);
                          $Polio = $date3->modify("+30 days");
                              
                              
                          $date4 = new DateTime($r['tanggal_lahir']);
                          $DPT = $date4->modify("+60 days");

                          $date5 = new DateTime($r['tanggal_lahir']);
                          $Polio2 = $date5->modify("+60 days");

                          $date6 = new DateTime($r['tanggal_lahir']);
                          $DPT2 = $date6->modify("+90 days");

                          $date7 = new DateTime($r['tanggal_lahir']);
                          $Polio3 = $date7->modify("+90 days");

                          $date8 = new DateTime($r['tanggal_lahir']);
                          $DPT3 = $date8->modify("+120 days");

                          $date9 = new DateTime($r['tanggal_lahir']);
                          $Polio4 = $date9->modify("+120 days");

                          $date10 = new DateTime($r['tanggal_lahir']);
                          $IPV = $date10->modify("+120 days");

                          $date11 = new DateTime($r['tanggal_lahir']);
                          $Campak = $date11->modify("+270 days");

                         
                          $tanggal_datang= new DateTime();
                              
                          $vaksin = array ("HB-0","BCG","*Polio","*DPT","Polio 2","*DPT 2","Polio 3","*DPT 3","*Polio 4","*IPV","Campak","*Polio 5","*DPT 5","Campak 2","*DPT 6");
                         
                           
                              
                        ?>
                      <tr>
                        <td><?php echo $HB->format("d-F-Y");?></td>
                        <td><?php echo $vaksin[0];  ?></td>
                        <td><?php 
                        
                        $tanggal_datang= new DateTime();
                        
                        if($HB <= $tanggal_datang){
                          echo "<font color='blue'>Sudah Imunisasi</font>";
                        }else{
                          echo "<font color='red'>Belum Imunisasi</font>";
                        }
                        ?></td>

                       
                     
                      </tr>

                      <tr>
                        <td><?php echo $BCG->format("d-F-Y");?></td>
                        <td><?php echo $vaksin[1];  ?></td>
                        <td><?php 
                        
                        $tanggal_datang= new DateTime();
                        
                        if($BCG <= $tanggal_datang){
                          echo "<font color='blue'>Sudah Imunisasi</font>";
                        }else{
                          echo "<font color='red'>Belum Imunisasi</font>";
                        }
                        ?></td>

                      </tr>
                      <tr>
                        <td><?php echo $Polio->format("d-F-Y"); ?></td>
                        <td><?php echo $vaksin[2];  ?></td>
                        <td><?php 
                        
                        $tanggal_datang= new DateTime();
                        
                        if($Polio <= $tanggal_datang){
                          echo "<font color='blue'>Sudah Imunisasi</font>";
                        }else{
                          echo "<font color='red'>Belum Imunisasi</font>";
                        }
                        ?></td>
                      </tr>
                      <tr>
                        <td><?php echo $DPT->format("d-F-Y"); ?></td>
                        <td><?php echo $vaksin[3];  ?></td>
                        <td><?php 
                        
                        $tanggal_datang= new DateTime();
                        
                        if($DPT <= $tanggal_datang){
                          echo "<font color='blue'>Sudah Imunisasi</font>";
                        }else{
                          echo "<font color='red'>Belum Imunisasi</font>";
                        }
                        ?></td>
                      </tr>
                      <tr>
                        <td><?php echo $Polio2->format("d-F-Y"); ?></td>
                        <td><?php echo $vaksin[4];  ?></td>
                        <td><?php 
                        
                        $tanggal_datang= new DateTime();
                        
                        if($Polio2 <= $tanggal_datang){
                          echo "<font color='blue'>Sudah Imunisasi</font>";
                        }else{
                          echo "<font color='red'>Belum Imunisasi</font>";
                        }
                        ?></td>
                      </tr>
                      <tr>
                        <td><?php echo $DPT2->format("d-F-Y"); ?></td>
                        <td><?php echo $vaksin[5];  ?></td>
                        <td><?php 
                        
                        $tanggal_datang= new DateTime();
                        
                        if($DPT2 <= $tanggal_datang){
                          echo "<font color='blue'>Sudah Imunisasi</font>";
                        }else{
                          echo "<font color='red'>Belum Imunisasi</font>";
                        }
                        ?></td>
                      </tr>
                      <tr>
                        <td><?php echo $Polio3->format("d-F-Y"); ?></td>
                        <td><?php echo $vaksin[6];  ?></td>
                        <td><?php 
                        
                        $tanggal_datang= new DateTime();
                        
                        if($Polio3 <= $tanggal_datang){
                          echo "<font color='blue'>Sudah Imunisasi</font>";
                        }else{
                          echo "<font color='red'>Belum Imunisasi</font>";
                        }
                        ?></td>
                      </tr>
                      <tr>
                        <td><?php echo $DPT3->format("d-F-Y"); ?></td>
                        <td><?php echo $vaksin[7];  ?></td>
                        <td><?php 
                        
                        $tanggal_datang= new DateTime();
                        
                        if($DPT3 <= $tanggal_datang){
                          echo "<font color='blue'>Sudah Imunisasi</font>";
                        }else{
                          echo "<font color='red'>Belum Imunisasi</font>";
                        }
                        ?></td>
                      </tr>
                      <tr>
                        <td><?php echo $Polio4->format("d-F-Y"); ?></td>
                        <td><?php echo $vaksin[8];  ?></td>
                        <td><?php 
                        
                        $tanggal_datang= new DateTime();
                        
                        if($Polio4 <= $tanggal_datang){
                          echo "<font color='blue'>Sudah Imunisasi</font>";
                        }else{
                          echo "<font color='red'>Belum Imunisasi</font>";
                        }
                        ?></td>
                      </tr>
                      <tr>
                        <td><?php echo $IPV->format("d-F-Y"); ?></td>
                        <td><?php echo $vaksin[9];  ?></td>
                        <td><?php 
                        
                        $tanggal_datang= new DateTime();
                        
                        if($IPV <= $tanggal_datang){
                          echo "<font color='blue'>Sudah Imunisasi</font>";
                        }else{
                          echo "<font color='red'>Belum Imunisasi</font>";
                        }
                        ?></td>
                      </tr>
                      <tr>
                        <td><?php echo $Campak->format("d-F-Y"); ?></td>
                        <td><?php echo $vaksin[10];  ?></td>
                        <td><?php 
                        
                        $tanggal_datang= new DateTime();
                        
                        if($Campak <= $tanggal_datang){
                          echo "<font color='blue'>Sudah Imunisasi</font>";
                        }else{
                          echo "<font color='red'>Belum Imunisasi</font>";
                        }
                        ?></td>
                      </tr>
                     
                      </tr>
                    </tbody>

                  </table>

      </div>
    </section>
<?php
                      }
                      ?>
  </main><!-- End #main -->
<br/><br/><br/>
 
<?php include('../layout/footer.php'); ?>