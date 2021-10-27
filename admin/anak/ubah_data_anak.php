<?php
include '../action/koneksi.php';
include '../layout/header.php';
?>

  <div class="content-wrapper">
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Tambah Data Anak</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="data_anak.php">Data Anak</a></li>
              <li class="breadcrumb-item active">Tambah Data Anak</li>
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
                    $id_anak=$_GET['id_anak'];
                    $data=mysql_query("SELECT * from anak WHERE id_anak='$id_anak'");
                    while ($r=mysql_fetch_array($data)) {
                ?>
                <form class="form-horizontal" action="action/update_data_anak.php" method="post">
                    <div class="card-body">
                         <input type="hidden" class="form-control" name="id_anak" value="<?php echo $r['id_anak']; ?>">
                        <div class="form-group row">
                            <label for="inputEmail3" class="col-sm-2 col-form-label">Nama</label>
                            <div class="col-sm-5">
                            <input type="text" class="form-control" id="nama_anak" name="nama_anak" value="<?php echo $r['nama_anak']; ?>">
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
                            <label for="inputEmail3" class="col-sm-2 col-form-label">Tampat Lahir</label>
                            <div class="col-sm-5">
                                <input type="text" class="form-control" id="tempat_lahir" name="tempat_lahir" value="<?php echo $r['tempat_lahir']; ?>">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="inputEmail3" class="col-sm-2 col-form-label">Tanggal Lahir</label>
                            <div class="col-sm-5">
                                <input type="date" class="form-control" id="tanggal_lahir" name="tanggal_lahir" value="<?php echo $r['tanggal_lahir']; ?>">
                            </div>
                        </div>                    
                        <div class="form-group row">
                            <label for="inputEmail3" class="col-sm-2 col-form-label">Berat Badan lahir</label>
                            <div class="col-sm-5">
                                <input type="text" class="form-control" id="berat_badan_lahir" name="berat_badan_lahir" value="<?php echo $r['berat_badan_lahir']; ?>">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="inputEmail3" class="col-sm-2 col-form-label">Tinggi Badan lahir</label>
                            <div class="col-sm-5">
                                <input type="text" class="form-control" id="tinggi_badan_lahir" name="tinggi_badan_lahir" value="<?php echo $r['tinggi_badan_lahir']; ?>">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="inputEmail3" class="col-sm-2 col-form-label">Lingkar Kepala lahir</label>
                            <div class="col-sm-5">
                                <input type="text" class="form-control" id="lingkar_kepala_lahir" name="lingkar_kepala_lahir" value="<?php echo $r['lingkar_kepala_lahir']; ?>">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="inputEmail3" class="col-sm-2 col-form-label">Nama Ayah</label>
                            <div class="col-sm-5">
                                <input type="text" class="form-control" id="nama_ayah" name="nama_ayah" value="<?php echo $r['nama_ayah']; ?>">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="inputEmail3" class="col-sm-2 col-form-label">Nama Ibu</label>
                            <div class="col-sm-5">
                                <input type="text" class="form-control" id="nama_ibu" name="nama_ibu" value="<?php echo $r['nama_ibu']; ?>">
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
                                <input type="text" class="form-control" id="nohp" name="nohp" value="<?php echo $r['nohp']; ?>">
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