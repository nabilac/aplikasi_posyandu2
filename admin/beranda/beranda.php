<?php
session_start();
if(empty($_SESSION)){
    header("Location: ../index.php");
}
include '../action/koneksi.php';
include '../layout/header.php';
$result_anak = mysql_query("select count(*) as total from anak");
$data_anak = mysql_fetch_assoc($result_anak);
$result_admin = mysql_query("select count(*) as total from admin");
$data_admin = mysql_fetch_assoc($result_admin);
$result_kader = mysql_query("select count(*) as total from kader");
$data_kader = mysql_fetch_assoc($result_kader);
?>

  <div class="content-wrapper">
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Beranda</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="beranda.php">Home</a></li>
              <li class="breadcrumb-item active">Beranda</li>
            </ol>
          </div>
        </div>
      </div>
    </div>

    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-lg-4 col-6">
            <div class="small-box bg-success">
              <div class="inner">
                <h3><?php echo $data_anak['total'];?></h3>

                <p>Data Anak</p>
              </div>
              <div class="icon">
                <i class="ion ion-stats-bars"></i>
              </div>
            </div>
          </div>
          <div class="col-lg-4 col-6">
            <div class="small-box bg-warning">
              <div class="inner">
                <h3><?php echo $data_kader['total'];?></h3>

                <p>Data Kader</p>
              </div>
              <div class="icon">
                <i class="ion ion-person-add"></i>
              </div>
            </div>
          </div>
          <div class="col-lg-4 col-6">
            <div class="small-box bg-danger">
              <div class="inner">
                <h3><?php echo $data_admin['total'];?></h3>

                <p>Data Admin</p>
              </div>
              <div class="icon">
                <i class="ion ion-pie-graph"></i>
              </div>
            </div>
          </div>
        </div>

        <div class="row" style="margin-top:20px">
          <section class="col-lg-4 connectedSortable">   
          </section>
          <section class="col-lg-4 connectedSortable">
             <img src="../asset/images/banner2.jpg" alt="Logo" class="brand-image" style="height: 176px; weight: 176px;" align="Center">
          </section>
          <section class="col-lg-4 connectedSortable">
          </section>
        </div>
        <div class="row" style="margin-top:20px">
          <section class="col-lg-12 connectedSortable">
            <p align="Center">Posyandu adalah wadah pemeliharaan kesehatan yang dilakukan dari, oleh dan untuk masyarakat yang dibimbing petugas terkait. (Departemen Kesehatan RI)</p>
            <p align="Center">Manfaat yang didapatkan dengan berkunjung ke Posyandu :</p>
            <p align="Center">1. Penimbangan berat badan rutin</p>
            <p align="Center">2. Mendapat kapsul vitamin dan Imunisasi Lengkap</p>
            <p align="Center">3. Tumbuh kembang anak terpantau dengan baik</p>            
          </section>
        </div>
      </div>
    </section>
  </div>

<?php
include '../layout/footer.php';
?>