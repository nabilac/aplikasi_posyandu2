<?php
include '../action/koneksi.php';
include '../layout/header.php';
?>

  <div class="content-wrapper">
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Grafik Lingkar Kepala</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="../beranda/beranda.php">Home</a></li>
              <li class="breadcrumb-item"><a href="data_pemeriksaan.php">Data Pemeriksaan</a></li>
              <li class="breadcrumb-item active">Grafik Lingkar Kepala</li>
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
                $lingkar_kepala = mysqli_query($koneksi, "SELECT lingkar_kepala FROM pemeriksaan WHERE id_anak='$syarat'");
                ?>

                <script src="../Chart.js/Chart.bundle.js"></script>

                <style type="text/css">
                    .container {
                        width: 50%;
                        margin: 15px auto;
                    }
                </style>
    
                <div class="container">
                    <canvas id="myChart_lk" width="100" height="100"></canvas>
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