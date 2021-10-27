<?php
include '../action/koneksi.php';
include '../layout/header.php';
?>

  <div class="content-wrapper">
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Laporan Per Bulan</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="../beranda/beranda.php">Home</a></li>
              <li class="breadcrumb-item active">Laporan Per Bulan</li>
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
                <h4 align="Center">Laporan Per Bulan</h4>
                    <form action="data_perbulan.php" method="post" enctype="multipart/form-data" class="form-horizontal">
                        <div class="row form-group">
                            <div class="col col-md-3"></div>                           
                        </div>
                          
                        <div class="row form-group">
                            <div class="col col-md-3">
                              <label for="text-input" class=" form-control-label">Periode</label>
                            </div>
                            <div class="col-12 col-md-9">
                              <select  name="tanggal_pemeriksaan" class="form-control ">
                                <option value="">Tanggal-Bulan-Tahun</option>
                                  <?php
                                    include "koneksi.php";
                                    $sqllomba = "SELECT * FROM pemeriksaan GROUP BY tanggal_pemeriksaan";
                                    $querylomba = mysql_query($sqllomba);
                                    function format_indo($date)
                                    {
                                        $BulanIndo = array("Januari", "Februari", "Maret", "April", "Mei", "Juni", "Juli", "Agustus", "September", "Oktober", "November", "Desember");

                                        $tahun = substr($date, 0, 4);               
                                        $bulan = substr($date, 5, 2);
                                        $tgl   = substr($date, 8, 2);
                                        $result = $tgl . "-" . $BulanIndo[(int)$bulan-1]. "-". $tahun;
                                        return($result);
                                    }

                                    while ($data = mysql_fetch_array($querylomba)) {
                                                echo '<option value="' . $data['tanggal_pemeriksaan'] . '">' . format_indo($data['tanggal_pemeriksaan']) . '</option>';
                                    }
                                    ?>
                              </select>
                            </div>
                        </div>
                        <div class="row form-group">
                            <div class="col-sm-offset-4 col-sm-10">
                            <input type="submit" class="btn btn-primary" value="Cetak">
                            </div>
                        </div>
                    </form>
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