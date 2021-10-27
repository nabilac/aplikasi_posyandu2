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
                <form class="form-horizontal" action="action/insert_data_anak.php" method="post">
                  <div class="card-body">
                    <div class="form-group row">
                      <label for="inputEmail3" class="col-sm-2 col-form-label">Nama</label>
                      <div class="col-sm-5">
                        <input type="text" class="form-control" id="nama_anak" name="nama_anak" placeholder="Nama">
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
                        <input type="text" class="form-control" id="tempat_lahir" name="tempat_lahir" placeholder="Tampat Lahir">
                      </div>
                    </div>
                    <div class="form-group row">
                      <label for="inputEmail3" class="col-sm-2 col-form-label">Tanggal Lahir</label>
                      <div class="col-sm-5">
                        <input type="date" class="form-control" id="tanggal_lahir" name="tanggal_lahir" placeholder="Tanggal Lahir">
                      </div>
                    </div>                    
                    <div class="form-group row">
                      <label for="inputEmail3" class="col-sm-2 col-form-label">Berat Badan lahir</label>
                      <div class="col-sm-5">
                        <input type="text" class="form-control" id="berat_badan_lahir" name="berat_badan_lahir" placeholder="Berat Badan lahir (KG)">
                      </div>
                    </div>
                    <div class="form-group row">
                      <label for="inputEmail3" class="col-sm-2 col-form-label">Tinggi Badan lahir</label>
                      <div class="col-sm-5">
                        <input type="text" class="form-control" id="tinggi_badan_lahir" name="tinggi_badan_lahir" placeholder="Tinggi Badan lahir (CM)">
                      </div>
                    </div>
                    <div class="form-group row">
                      <label for="inputEmail3" class="col-sm-2 col-form-label">Lingkar Kepala lahir</label>
                      <div class="col-sm-5">
                        <input type="text" class="form-control" id="lingkar_kepala_lahir" name="lingkar_kepala_lahir" placeholder="Lingkar Kepala lahir (CM)">
                      </div>
                    </div>
                    <div class="form-group row">
                      <label for="inputEmail3" class="col-sm-2 col-form-label">Nama Ayah</label>
                      <div class="col-sm-5">
                        <input type="text" class="form-control" id="nama_ayah" name="nama_ayah" placeholder="Nama Ayah">
                      </div>
                    </div>
                    <div class="form-group row">
                      <label for="inputEmail3" class="col-sm-2 col-form-label">Nama Ibu</label>
                      <div class="col-sm-5">
                        <input type="text" class="form-control" id="nama_ibu" name="nama_ibu" placeholder="Nama Ibu">
                      </div>
                    </div>
                    <div class="form-group row">
                      <label for="inputEmail3" class="col-sm-2 col-form-label">Alamat</label>
                      <div class="col-sm-5">
                        <textarea type="text" class="form-control" id="alamat" name="alamat" placeholder="Alamat"></textarea>
                      </div>
                    </div>
                    <div class="form-group row">
                      <label for="inputEmail3" class="col-sm-2 col-form-label">Nomor Telephone</label>
                      <div class="col-sm-5">
                        <input type="text" class="form-control" id="nohp" name="nohp" placeholder="Nomor Telephone">
                      </div>
                    </div>
                  </div>
                  <div class="card-footer">
                    <button type="submit" name="simpan" class="btn btn-info">Simpan Data</button>
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