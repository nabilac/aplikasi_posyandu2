<?php
include '../action/koneksi.php';
include '../layout/header.php';
?>

  <div class="content-wrapper">
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Data Kader</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="../beranda/beranda.php">Home</a></li>
              <li class="breadcrumb-item active">Data Kader</li>
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
              <a href="tambah_data_kader.php" ><input type="submit" class="btn btn-primary btn-fw" value="Tambah Data Kader" style="margin-left: 20px; margin-top: 10px"></a>
              <div class="card-body">
                <table id="example1" class="table table-bordered table-striped">
                  <thead>
                  <tr>
                    <th>No</th>
                    <th>Nama</th>
                    <th>Username</th>
                    <th>Password</th>
                    <th>Jenis Kelamin</th>
                    <th>Alamat</th>
                    <th>Nomer Telephone</th>
                    <th>Aksi</th>
                  </tr>
                  </thead>
                  <tbody>
                  <?php
                      $data=mysql_query("SELECT * FROM kader ORDER BY id_kader");
                      $no=1;
                      while ($r=mysql_fetch_array($data)) {
                       ?>
                        <tr>
                       <td><?php echo $no++ ?></td>
                       <td><?php echo $r['nama_kader']; ?></td>
                       <td><?php echo $r['username']; ?></td>
                       <td><?php echo $r['password']; ?></td>
                       <td><?php echo $r['jenis_kelamin']; ?></td>
                       <td><?php echo $r['alamat']; ?></td>
                       <td><?php echo $r['no_telp']; ?></td>
                       <td><a href='ubah_data_kader.php?id_kader=<?php echo $r['id_kader'];?>'><input type="button" class="btn btn-outline-primary" value="ubah"></a>&nbsp<a href='action/delete_data_kader.php?id_kader=<?php echo $r['id_kader'];?>'><input type="button" class="btn btn-outline-primary" value="hapus"></a></td>
                      </tr>
                       <?php
                      }
                      ?>
                  </tbody>
                </table>
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