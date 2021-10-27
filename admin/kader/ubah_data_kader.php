<?php
include '../action/koneksi.php';
include '../layout/header.php';
?>

  <div class="content-wrapper">
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Tambah Data Kader</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="data_kader.php">Data Kader</a></li>
              <li class="breadcrumb-item active">Tambah Data Kader</li>
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
                    $id_kader=$_GET['id_kader'];
                    $data=mysql_query("SELECT * from kader WHERE id_kader='$id_kader'");
                    while ($r=mysql_fetch_array($data)) {
                ?>
                <form class="form-horizontal" action="action/update_data_kader.php" method="post">
                    <div class="card-body">
                         <input type="hidden" class="form-control" name="id_kader" value="<?php echo $r['id_kader']; ?>">
                        <div class="form-group row">
                            <label for="inputEmail3" class="col-sm-2 col-form-label">Nama</label>
                            <div class="col-sm-5">
                            <input type="text" class="form-control" id="nama" name="nama_kader" value="<?php echo $r['nama_kader']; ?>">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="inputEmail3" class="col-sm-2 col-form-label">Username</label>
                            <div class="col-sm-5">
                            <input type="text" class="form-control" id="username" name="username" value="<?php echo $r['username']; ?>">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="inputEmail3" class="col-sm-2 col-form-label">Password</label>
                            <div class="col-sm-5">
                            <input type="text" class="form-control" id="password" name="password" value="<?php echo $r['password']; ?>">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="inputEmail3" class="col-sm-2 col-form-label">Jenis Kelamin</label>
                            <div class="col-sm-5">
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="jenis_kelamin" value="Laki-Laki" checked>
                                <label class="form-check-label">Laki-Laki</label>
                                </div>
                                <div class="form-check">
                                <input class="form-check-input" type="radio" name="jenis_kelamin" value="Perempuan">
                                <label class="form-check-label">Perempuan</label>
                                </div>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="inputEmail3" class="col-sm-2 col-form-label">Alamat</label>
                            <div class="col-sm-5">
                            <textarea type="text" class="form-control" id="alamat" name="alamat"><?php echo $r['alamat']; ?></textarea>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="inputEmail3" class="col-sm-2 col-form-label">Nomor Telephone</label>
                            <div class="col-sm-5">
                            <input type="text" class="form-control" id="no_telp" name="no_telp" value="<?php echo $r['no_telp']; ?>">
                            </div>
                        </div>
                    </div>
                    <div class="card-footer">
                    <button type="submit" name="simpan" class="btn btn-info">Simpan Data</button>
                    </div>
                </form>
                <?php
                    }
                ?>
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