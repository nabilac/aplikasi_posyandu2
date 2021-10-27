<?php
include '../action/koneksi.php';
include '../layout/header.php';
?>

  <div class="content-wrapper">
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Grafik Berat Badan</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="../beranda/beranda.php">Home</a></li>
              <li class="breadcrumb-item"><a href="data_pemeriksaan.php">Data Pemeriksaan</a></li>
              <li class="breadcrumb-item active">Grafik Berat Badan</li>
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

                <div class="content mt-6">
                    <div class="animated fadeIn">
                        <div class="row">
                          <div class="col-md-12">
                       
                            <script src="../Chart.js/Chart.bundle.js"></script>
                            <style type="text/css">
                                .container {
                                    width: 50%;
                                    margin: 15px auto;
                                }
                            </style>

                            <div class="container">
                              <div class="row">        
                                <div class="col-md-5">
                                  <h3 class="panel-title">Pilih Tanggal</h3>
                                </div>
                                <div class="col-md-5">
                                  <select name="tanggal_pemeriksaan" class="form-control" id="tanggal_pemeriksaan">
                                    <option value="">Select Tanggal</option>
                                    <?php                            
                                      $connect = new PDO("mysql:host=localhost;dbname=posyandu_ta", "root", "");
                                      $query = "SELECT tanggal_pemeriksaan FROM pemeriksaan GROUP BY tanggal_pemeriksaan DESC";
                                      $statement = $connect->prepare($query);
                                      $statement->execute();
                                      $result = $statement->fetchAll();
                                      function format_indo($date)
                                      {
                                          $BulanIndo = array("Januari", "Februari", "Maret", "April", "Mei", "Juni", "Juli", "Agustus", "September", "Oktober", "November", "Desember");

                                          $tahun = substr($date, 0, 4);               
                                          $bulan = substr($date, 5, 2);
                                          $tgl   = substr($date, 8, 2);
                                          $result = $tgl . "-" . $BulanIndo[(int)$bulan-1]. "-". $tahun;
                                          return($result);
                                      }
                                      foreach($result as $row)
                                      {
                                          echo '<option value="'.$row["tanggal_pemeriksaan"].'">'.format_indo($row["tanggal_pemeriksaan"]).'</option>';
                                      }
                                    ?>
                                  </select>
                                </div>
                              </div>
                            </div>

                            <div id="chart_area" style="width: 1000px; height: 620px;"></div>      
                          </div>
                        </div> 
                    </div>
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