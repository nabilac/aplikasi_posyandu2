<?php
include '../action/koneksi.php';
include '../layout/header.php';
?>

  <div class="content-wrapper">
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Kirim SMS</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="../beranda/beranda.php">Home</a></li>
              <li class="breadcrumb-item active">Kirim SMS</li>
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
                <form action="kirim.php" method="post" enctype="multipart/form-data" class="form-horizontal">
                    <div class="row form-group">
                        <div class="col col-md-3"></div>
                        </div>
                        <div class="row form-group">
                            <div class="col col-md-2">
                              <label for="text-input" class=" form-control-label">Kontak</label>
                            </div>
                            <div class="col-12 col-md-10">
                              <select  name="nohp" class="form-control ">
                                <option value="">Nama Anak</option>
                                  <?php
                                    $sqllomba = "SELECT * FROM anak";
                                    $querylomba = mysql_query($sqllomba);
                                    while ($data = mysql_fetch_array($querylomba)) {
                                                echo '<option value="' . $data['nohp'] . '">' . $data['nama_anak'] . '</option>';
                                    }
                                    ?>
                              </select>
                            </div>
                        </div>

                        <div class="row form-group">
                            <div class="col col-md-2">
                                <label for="text-input" class=" form-control-label">Isi Pesan</label>
                            </div>
                            <div class="col-12 col-md-10">
                                <!--<input type="text" name="pesan" length="30">-->
								 <textarea class="form-control" type="text" name="pesan" ></textarea>
                            </div>
                        </div>
                        <button type="submit" value="Kirim" class="btn btn-primary btn-fw">Kirim</button>
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