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
                    <strong class="card-title"></strong>
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

                </div>
                     <?php
                      $syarat=$_GET['id_anak'];
                      $data=mysql_query("SELECT pemeriksaan.id_anak, pemeriksaan.tanggal_pemeriksaan, pemeriksaan.berat_badan, pemeriksaan.tinggi_badan pemeriksaan.lingkar_kepala, pemeriksaan.perilaku FROM pemeriksaan WHERE id_anak='$syarat'");
                     
                      $no=1;
                       {
                       ?>
                      
                      <div class="card-body card-block">
                        <form action="action/insert_data_pemeriksaan.php" method="post" enctype="multipart/form-data" class="form-horizontal">
                        <div class="row form-group">
                            <div class="col col-md-3">
                                <input type="hidden" class="form-control" name="id_anak" value="<?php echo $syarat ?>">
                            </div>
                          </div>
                         

                          <div class="row form-group">
                            <div class="col col-md-3"><label for="text-input" class=" form-control-label">berat badan (KG)</label></div>
                            <div class="col-12 col-md-9"><input type="text" id="text-input" name="berat_badan" placeholder="Masukan berat badan" class="form-control"></div>
                          </div>

                          <div class="row form-group">
                            <div class="col col-md-3"><label for="text-input" class=" form-control-label">tinggi badan(CM)</label></div>
                            <div class="col-12 col-md-9"><input type="text" id="text-input" name="tinggi_badan" placeholder="Masukan tinggi badan" class="form-control"></div>
                          </div>

                          <div class="row form-group">
                            <div class="col col-md-3"><label for="text-input" class=" form-control-label">Lingkar Kepala (CM)</label></div>
                            <div class="col-12 col-md-9"><input type="text" id="text-input" name="lingkar_kepala" placeholder="Masukan lingkar kepala" class="form-control"></div>
                          </div>

                          <div class="row form-group">
                            <div class="col col-md-3"><label for="text-input" class=" form-control-label">Perilaku Anak</label></div>
                            <div class="col-12 col-md-9">

                            <?php

                              $data=mysql_query("SELECT * FROM anak ");
                              $no=1;
                              $syarat=$_GET['id_anak'];
                              $data=mysql_query("SELECT * FROM anak WHERE id_anak='$syarat'");
                                                     
                             

                              while ($r=mysql_fetch_array($data))
                                                  
                              {
                            ?>


                            <?php
                             $tanggal_lahir = new DateTime($r['tanggal_lahir']);
                            // tanggal hari ini
                            $today = new DateTime('today');
                            // tahun
                            $y = $today->diff($tanggal_lahir)->y;
                            // bulan
                            $m = $today->diff($tanggal_lahir)->m;
                                  
                            if ($y==1) {
                               echo '<p>Pada Usia 1 Tahun : </p>
                               <input type="checkbox" name="perilaku[]" value="Berdiri dan berjalan berpegangan">Berdiri dan berjalan berpegangan<br>
                                     <input type="checkbox" name="perilaku[]" value="Memegang benda kecil">Memegang benda kecil<br>
                                     <input type="checkbox" name="perilaku[]" value="Meniru kata sederhana seperti ma..ma..pa..pa..">Meniru kata sederhana seperti ma..ma..pa..pa..<br>
                                     <input type="checkbox" name="perilaku[]" value="Mengenal anggota keluarga">Mengenal anggota keluarga<br>
                                      <input type="checkbox" name="perilaku[]" value="Takut pada orang yang belum dikenal">Takut pada orang yang belum dikenal<br>
                                       <input type="checkbox" name="perilaku[]" value="Menunjuk apa yang diinginkan">Menunjuk apa yang diinginkan<br>
                                     ';

                            } elseif ($y==2) {
                                 echo '<p>Pada Umur 2 tahun : </p>
                                     <input type="checkbox" name="perilaku[]" value="Naik tangga dan berlari">Naik tangga dan berlari<br>
                                     <input type="checkbox" name="perilaku[]" value="Mencoret coret pensil pada kertas">Mencoret coret pensil pada kertas<br>
                                     <input type="checkbox" name="perilaku[]" value="Dapat menunjuk 1 atau lebih bagian tubuhnya">Dapat menunjuk 1 atau lebih bagian tubuhnya<br>
                                      <input type="checkbox" name="perilaku[]" value="Menyebut 3 sampai 6 kata">Menyebut 3 sampai 6 kata<br>
                                      <input type="checkbox" name="perilaku[]" value="Memegang cangkir sendiri">Memegang cangkir sendiri<br>
                                      <input type="checkbox" name="perilaku[]" value="Belajar makan dan minum sendiri">Belajar makan dan minum sendiri<br>
                                     
                                     ';
                                     
                            } elseif ($y==3) {
                                 echo '<p>Pada Umur 3 tahun : </p>
                                     <input type="checkbox" name="perilaku[]" value="Mengayuh sepeda roda tiga">Mengayuh sepeda roda tiga<br>
                                     <input type="checkbox" name="perilaku[]" value="Berdiri diatas satu kaki tanpa berpegangan">Berdiri diatas satu kaki tanpa berpegangan<br>
                                     <input type="checkbox" name="perilaku[]" value="Bicara dengan baik menggunakan 2 kata">Bicara dengan baik menggunakan 2 kata<br>
                                      <input type="checkbox" name="perilaku[]" value="Mengenal 2-4 warna">Mengenal 2-4 warna<br>
                                      <input type="checkbox" name="perilaku[]" value="Menyebut nama">Menyebut nama<br>
                                      <input type="checkbox" name="perilaku[]" value="Menggambar garis lurus">Menggambar garis lurus<br>
                                      <input type="checkbox" name="perilaku[]" value="Bermain dengan teman">Bermain dengan teman<br>
                                      <input type="checkbox" name="perilaku[]" value="Melepas pakaiannya sendiri">Melepas pakaiannya sendiri<br>
                                       <input type="checkbox" name="perilaku[]" value="Mengenakan baju sendiri">Mengenakan baju sendiri<br>
                                     
                                     ';

                            } elseif ($y==4) {
                                 echo '
                                     <p>Pada Usia 4 sampai 5 Tahun : </p>
                                     <input type="checkbox" name="perilaku[]" value="Melompat-lompat 1 kaki, menari dan berjalan lurus">Melompat-lompat 1 kaki, menari dan berjalan lurus<br>
                                     <input type="checkbox" name="perilaku[]" value="Menggambar orang 3 bagian (Kepala, Badan, tangan/kaki)">Menggambar orang 3 bagian (Kepala, Badan, tangan/kaki)<br>
                                     <input type="checkbox" name="perilaku[]" value="mengammbar tanda silang dan lingkaran">mengammbar tanda silang dan lingkaran<br>
                                     <input type="checkbox" name="perilaku[]" value="Menangkap bola kecil dengan kedua tangan">Menangkap bola kecil dengan kedua tangan<br>
                                      <input type="checkbox" name="perilaku[]" value="Menjawab pertanyaan dengan kata kata yang benar">Menjawab pertanyaan dengan kata kata yang benar<br>
                                       <input type="checkbox" name="perilaku[]" value="Menyebut angka, menghitung jari">Menyebut angka, menghitung jari<br>
                                       <input type="checkbox" name="perilaku[]" value="Bicaranya mudah dimengerti">Bicaranya mudah dimengerti<br>
                                       <input type="checkbox" name="perilaku[]" value="Berpakaian sendiri tandpa dibantu">Berpakaian sendiri tandpa dibantu<br>
                                       <input type="checkbox" name="perilaku[]" value="Mengancing baju atau pakaian boneka">Mengancing baju atau pakaian boneka<br>
                                       <input type="checkbox" name="perilaku[]" value="Menggosok gigi tanpa bantuan">Menggosok gigi tanpa bantuan<br>
                                     ';
                            } elseif ($y==5) {
                                 echo '
                                     <p>Pada Usia 4 sampai 5 Tahun : </p>
                                     <input type="checkbox" name="perilaku[]" value="Melompat-lompat 1 kaki, menari dan berjalan lurus">Melompat-lompat 1 kaki, menari dan berjalan lurus<br>
                                     <input type="checkbox" name="perilaku[]" value="Menggambar orang 3 bagian (Kepala, Badan, tangan/kaki)">Menggambar orang 3 bagian (Kepala, Badan, tangan/kaki)<br>
                                     <input type="checkbox" name="perilaku[]" value="mengammbar tanda silang dan lingkaran">mengammbar tanda silang dan lingkaran<br>
                                     <input type="checkbox" name="perilaku[]" value="Menangkap bola kecil dengan kedua tangan">Menangkap bola kecil dengan kedua tangan<br>
                                      <input type="checkbox" name="perilaku[]" value="Menjawab pertanyaan dengan kata kata yang benar">Menjawab pertanyaan dengan kata kata yang benar<br>
                                       <input type="checkbox" name="perilaku[]" value="Menyebut angka, menghitung jari">Menyebut angka, menghitung jari<br>
                                       <input type="checkbox" name="perilaku[]" value="Bicaranya mudah dimengerti">Bicaranya mudah dimengerti<br>
                                       <input type="checkbox" name="perilaku[]" value="Berpakaian sendiri tandpa dibantu">Berpakaian sendiri tandpa dibantu<br>
                                       <input type="checkbox" name="perilaku[]" value="Mengancing baju atau pakaian boneka">Mengancing baju atau pakaian boneka<br>
                                       <input type="checkbox" name="perilaku[]" value="Menggosok gigi tanpa bantuan">Menggosok gigi tanpa bantuan<br>
                                     ';


                            } elseif ($y==6) {
                                 echo '<p>Pada usia 6 Tahun : </p>
                                     <input type="checkbox" name="perilaku[]" value="Berjalan lurus">Berjalan lurus<br>
                                     <input type="checkbox" name="perilaku[]" value="Berdiri dengan 1 kaki selama 11 detik">Berdiri dengan 1 kaki selama 11 detik<br>
                                     <input type="checkbox" name="perilaku[]" value="Menangkap bola kecil dengan kedua tangan">Menangkap bola kecil dengan kedua tangan<br>
                                     <input type="checkbox" name="perilaku[]" value="Menggambar segi empat">Menggambar segi empat<br>
                                      <input type="checkbox" name="perilaku[]" value="Mengerti arti lawan kata">Mengerti arti lawan kata<br>
                                       <input type="checkbox" name="perilaku[]" value="Menghitung angka 1-10">Menghitung angka 1-10<br>
                                       <input type="checkbox" name="perilaku[]" value="Mengenal warna">Mengenal warna<br>
                                       <input type="checkbox" name="perilaku[]" value="Mengikuti aturan permainan">Mengikuti aturan permainan<br>
                                       <input type="checkbox" name="perilaku[]" value="Berpakaian sendiri tanpa dibantu">Berpakaian sendiri tanpa dibantu<br>
                                      
                                     ';
                            } elseif ($m==1) {
                                 echo ' <p>Pada Umur 1 Bulan sampai 3 Bulan</p>
                                     <input type="checkbox" name="perilaku[]" value="Menatap ke ibu">Menatap ke ibu<br>
                                     <input type="checkbox" name="perilaku[]" value="mengeluarkan suara 0..0..">mengeluarkan suara 0..0..<br>
                                     <input type="checkbox" name="perilaku[]" value="tersenyum">tersenyum<br>
                                      <input type="checkbox" name="perilaku[]" value="Menggerakan tangan dan kaki">Menggerakan tangan dan kaki<br>
                                      <input type="checkbox" name="perilaku[]" value="Menggerakan tangan dan kaki">Menggerakan tangan dan kaki<br>
                                      <input type="checkbox" name="perilaku[]" value="Mengangkat kepala tegak ketika tengkurap">Mengangkat kepala tegak ketika tengkurap<br>
                                      <input type="checkbox" name="perilaku[]" value="tertawa">tertawa<br>
                                      <input type="checkbox" name="perilaku[]" value="Menggerakan kepala ke kiri dan kanan">Menggerakan kepala ke kiri dan kanan<br>
                                      <input type="checkbox" name="perilaku[]" value="Membalas tersenyum ketika diajak tersenyum">Membalas tersenyum ketika diajak tersenyum<br>
                                      <input type="checkbox" name="perilaku[]" value="Mengoceh">Mengoceh<br>
                                     ';
                            } elseif ($m==2) {
                                 echo ' <p>Pada Umur 1 Bulan sampai 3 Bulan</p>
                                     <input type="checkbox" name="perilaku[]" value="Menatap ke ibu">Menatap ke ibu<br>
                                     <input type="checkbox" name="perilaku[]" value="mengeluarkan suara 0..0..">mengeluarkan suara 0..0..<br>
                                     <input type="checkbox" name="perilaku[]" value="tersenyum">tersenyum<br>
                                      <input type="checkbox" name="perilaku[]" value="Menggerakan tangan dan kaki">Menggerakan tangan dan kaki<br>
                                      <input type="checkbox" name="perilaku[]" value="Menggerakan tangan dan kaki">Menggerakan tangan dan kaki<br>
                                      <input type="checkbox" name="perilaku[]" value="Mengangkat kepala tegak ketika tengkurap">Mengangkat kepala tegak ketika tengkurap<br>
                                      <input type="checkbox" name="perilaku[]" value="tertawa">tertawa<br>
                                      <input type="checkbox" name="perilaku[]" value="Menggerakan kepala ke kiri dan kanan">Menggerakan kepala ke kiri dan kanan<br>
                                      <input type="checkbox" name="perilaku[]" value="Membalas tersenyum ketika diajak tersenyum">Membalas tersenyum ketika diajak tersenyum<br>
                                      <input type="checkbox" name="perilaku[]" value="Mengoceh">Mengoceh<br>
                                     ';
                            } elseif ($m==3) {
                                 echo ' <p>Pada Umur 1 Bulan sampai 3 Bulan</p>
                                     <input type="checkbox" name="perilaku[]" value="Menatap ke ibu">Menatap ke ibu<br>
                                     <input type="checkbox" name="perilaku[]" value="mengeluarkan suara 0..0..">mengeluarkan suara 0..0..<br>
                                     <input type="checkbox" name="perilaku[]" value="tersenyum">tersenyum<br>
                                      <input type="checkbox" name="perilaku[]" value="Menggerakan tangan dan kaki">Menggerakan tangan dan kaki<br>
                                      <input type="checkbox" name="perilaku[]" value="Menggerakan tangan dan kaki">Menggerakan tangan dan kaki<br>
                                      <input type="checkbox" name="perilaku[]" value="Mengangkat kepala tegak ketika tengkurap">Mengangkat kepala tegak ketika tengkurap<br>
                                      <input type="checkbox" name="perilaku[]" value="tertawa">tertawa<br>
                                      <input type="checkbox" name="perilaku[]" value="Menggerakan kepala ke kiri dan kanan">Menggerakan kepala ke kiri dan kanan<br>
                                      <input type="checkbox" name="perilaku[]" value="Membalas tersenyum ketika diajak tersenyum">Membalas tersenyum ketika diajak tersenyum<br>
                                      <input type="checkbox" name="perilaku[]" value="Mengoceh">Mengoceh<br>
                                     ';

                              } elseif ($m==4) {
                                 echo ' <p>Pada Umur 4 Bulan sampai 6 Bulan</p>
                                     <input type="checkbox" name="perilaku[]" value="Berbalik dari telungkup ke telentang">Berbalik dari telungkup ke telentang<br>
                                     <input type="checkbox" name="perilaku[]" value="Mempertahankan posisi kepala tetap tegak">Mempertahankan posisi kepala tetap tegak<br>
                                     <input type="checkbox" name="perilaku[]" value="Meraih benda yang ada di sekitarnya">Meraih benda yang ada di sekitarnya<br>
                                      <input type="checkbox" name="perilaku[]" value="Menirukan Bunyi">Menirukan Bunyi<br>
                                      <input type="checkbox" name="perilaku[]" value="Mengenggam Mainan">Mengenggam Mainan<br>
                                      <input type="checkbox" name="perilaku[]" value="Tersenyum ketika melihat mainan/ gambar yang menarik">Tersenyum ketika melihat mainan/ gambar yang menarik<br>
                                      
                                     ';

                              } elseif ($m==5) {
                                 echo ' <p>Pada Umur 4 Bulan sampai 6 Bulan</p>
                                     <input type="checkbox" name="perilaku[]" value="Berbalik dari telungkup ke telentang">Berbalik dari telungkup ke telentang<br>
                                     <input type="checkbox" name="perilaku[]" value="Mempertahankan posisi kepala tetap tegak">Mempertahankan posisi kepala tetap tegak<br>
                                     <input type="checkbox" name="perilaku[]" value="Meraih benda yang ada di sekitarnya">Meraih benda yang ada di sekitarnya<br>
                                      <input type="checkbox" name="perilaku[]" value="Menirukan Bunyi">Menirukan Bunyi<br>
                                      <input type="checkbox" name="perilaku[]" value="Mengenggam Mainan">Mengenggam Mainan<br>
                                      <input type="checkbox" name="perilaku[]" value="Tersenyum ketika melihat mainan/ gambar yang menarik">Tersenyum ketika melihat mainan/ gambar yang menarik<br>
                                      
                                     ';

                              } elseif ($m==6) {
                                 echo ' <p>Pada Umur 4 Bulan sampai 6 Bulan</p>
                                     <input type="checkbox" name="perilaku[]" value="Berbalik dari telungkup ke telentang">Berbalik dari telungkup ke telentang<br>
                                     <input type="checkbox" name="perilaku[]" value="Mempertahankan posisi kepala tetap tegak">Mempertahankan posisi kepala tetap tegak<br>
                                     <input type="checkbox" name="perilaku[]" value="Meraih benda yang ada di sekitarnya">Meraih benda yang ada di sekitarnya<br>
                                      <input type="checkbox" name="perilaku[]" value="Menirukan Bunyi">Menirukan Bunyi<br>
                                      <input type="checkbox" name="perilaku[]" value="Mengenggam Mainan">Mengenggam Mainan<br>
                                      <input type="checkbox" name="perilaku[]" value="Tersenyum ketika melihat mainan/ gambar yang menarik">Tersenyum ketika melihat mainan/ gambar yang menarik<br>
                                      
                                     ';
                                  
                             } elseif ($m==7) {
                                 echo '
                                     <input type="checkbox" name="perilaku[]" value="Merambat">Merambat<br>
                                     <input type="checkbox" name="perilaku[]" value="ma..ma..da..da..">Mengucapkan ma..ma..da..da..<br>
                                     <input type="checkbox" name="perilaku[]" value="Meraih Benda sebesar kacang">Meraih Benda sebesar kacang<br>
                                     <input type="checkbox" name="perilaku[]" value="Mencari benda/mainan yang dijatuhkan">Mencari benda/mainan yang dijatuhkan<br>
                                      <input type="checkbox" name="perilaku[]" value="Bermain tepuk tangan atau ciluk-ba">Bermain tepuk tangan atau ciluk-ba<br>
                                       <input type="checkbox" name="perilaku[]" value="Makan kue/ biskuit sendiri">Makan kue/ biskuit sendiri<br>
                                       <input type="checkbox" name="perilaku[]" value="Berdiri dan berjalan berpegangan">Berdiri dan berjalan berpegangan<br>
                                       <input type="checkbox" name="perilaku[]" value="Memegang benda kecil">Memegang benda kecil<br>
                                       <input type="checkbox" name="perilaku[]" value="Meniru kata sederhana seperti ma..ma.. pa..pa..">Meniru kata sederhana seperti ma..ma.. pa..pa..<br>
                                       <input type="checkbox" name="perilaku[]" value="Mengenal anggota keluarga">Mengenal anggota keluarga<br>
                                        <input type="checkbox" name="perilaku[]" value="Takut pada orang yang belum dikenal">Takut pada orang yang belum dikenal<br>
                                        <input type="checkbox" name="perilaku[]" value="Menunjuk apa yang diinginkan">Menunjuk apa yang diinginkan<br>
                                     ';

                            }
                             else {
                               echo '
                                     <input type="checkbox" name="perilaku[]" value="Merambat">Merambat<br>
                                     <input type="checkbox" name="perilaku[]" value="ma..ma..da..da..">Mengucapkan ma..ma..da..da..<br>
                                     <input type="checkbox" name="perilaku[]" value="Meraih Benda sebesar kacang">Meraih Benda sebesar kacang<br>
                                     <input type="checkbox" name="perilaku[]" value="Mencari benda/mainan yang dijatuhkan">Mencari benda/mainan yang dijatuhkan<br>
                                      <input type="checkbox" name="perilaku[]" value="Bermain tepuk tangan atau ciluk-ba">Bermain tepuk tangan atau ciluk-ba<br>
                                       <input type="checkbox" name="perilaku[]" value="Makan kue/ biskuit sendiri">Makan kue/ biskuit sendiri<br>
                                       <input type="checkbox" name="perilaku[]" value="Berdiri dan berjalan berpegangan">Berdiri dan berjalan berpegangan<br>
                                       <input type="checkbox" name="perilaku[]" value="Memegang benda kecil">Memegang benda kecil<br>
                                       <input type="checkbox" name="perilaku[]" value="Meniru kata sederhana seperti ma..ma.. pa..pa..">Meniru kata sederhana seperti ma..ma.. pa..pa..<br>
                                       <input type="checkbox" name="perilaku[]" value="Mengenal anggota keluarga">Mengenal anggota keluarga<br>
                                        <input type="checkbox" name="perilaku[]" value="Takut pada orang yang belum dikenal">Takut pada orang yang belum dikenal<br>
                                        <input type="checkbox" name="perilaku[]" value="Menunjuk apa yang diinginkan">Menunjuk apa yang diinginkan<br>
                                     ';

                             }

                            ?>
                            <?php }?>
                           
                                     <br>
                                     <br>

                                   
  
                            </div>

                          </div>

                          <button type="submit" class="btn btn-primary btn-fw">Simpan Data</button>
   </div>
 <?php } ?>

      </div>
    </section>

  </main><!-- End #main -->
<br/><br/><br/>

<?php include('../layout/footer.php'); ?>