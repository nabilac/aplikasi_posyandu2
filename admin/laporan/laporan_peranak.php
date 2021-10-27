<?php
include '../action/koneksi.php';
include '../layout/header.php';
?>

  <div class="content-wrapper">
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Laporan Perkembangan Anak</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="../beranda/beranda.php">Home</a></li>
              <li class="breadcrumb-item active">Laporan Perkembangan Anak</li>
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
                <h4 align="Center">Laporan Per Anak</h4>
                    <form action="data_peranak.php" method="post" enctype="multipart/form-data" class="form-horizontal">
                        <div class="row form-group">
                            <div class="col col-md-3"></div>                           
                        </div>
                          
                        <div class="row form-group">
                            <div class="col-12 col-md-2">
                              <label for="text-input" class=" form-control-label">nama anak</label>
                            </div>
                            <div class="col-12 col-md-10">
                              <select  name="id_anak" class="form-control ">
                                <option value="">Nama Anak</option>
                                  <?php
                                    $sqllomba = "SELECT * FROM anak";
                                    $querylomba = mysql_query($sqllomba);
                                    while ($data = mysql_fetch_array($querylomba)) {
                                                echo '<option value="' . $data['id_anak'] . '">' . $data['nama_anak'] . '</option>';
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